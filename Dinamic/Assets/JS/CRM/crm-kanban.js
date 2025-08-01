// /Plugins/MartosOS/Assets/JS/CRM/crm-kanban.js
import { UI } from './crm-ui.js';

export const Kanban = {
    instance: null,
    appState: null,

    init(appState) {
        this.appState = appState;
        document.getElementById('opp_kanban-container').addEventListener('click', this.handleClick.bind(this));
    },

    render(boards) {
        const kanbanContainer = document.getElementById('opp_kanban-container');
        kanbanContainer.innerHTML = '';
        this.instance = new jKanban({
            element: '#opp_kanban-container',
            gutter: '20px',
            widthBoard: '320px',
            boards: boards.map(board => ({ ...board, title: board.title.split(' (')[0], class:'kanban-board-header' })),
            dropEl: (el, target) => {
                this.updateHeaders();
                const itemId = el.dataset.eid;
                const newStageId = target.parentNode.dataset.id;
                
                const event = new CustomEvent('opportunityMoved', { 
                    detail: { itemId, newStageId }
                });
                document.dispatchEvent(event);
            }
        });
        
        // Retrasamos la ejecución para dar tiempo a jKanban a renderizar el DOM.
        setTimeout(() => {
            // 1. Aplicamos los colores a las cabeceras
            this.applyHeaderColors();

            // 2. Renderizamos el contenido de cada tarjeta
            document.querySelectorAll('.kanban-item').forEach(itemEl => {
                const itemData = this._findItemById(itemEl.dataset.eid);
                if (itemData) {
                    itemEl.innerHTML = this._getCardHtml(itemData);
                    if (this.appState.itemsToDelete.has(itemData.id.toString())) {
                        itemEl.classList.add('to-be-deleted');
                    }
                }
            });
            
            // 3. Actualizamos los contadores de las cabeceras
            this.updateHeaders();
        }, 0);
    },

    applyHeaderColors() {
        // Seleccionamos las columnas completas en lugar de solo las cabeceras
        const boards = document.querySelectorAll('.kanban-board');
        boards.forEach((board, index) => {
            // Añadimos la clase 'orden-X' a toda la columna
            board.classList.add('orden-' + (index + 1));
        });
    },
    // ▼▼▼ FUNCIÓN MODIFICADA PARA LA NUEVA LÓGICA DE CLICS ▼▼▼
    handleClick(event) {
        // Prioridad 1: Click en el botón de añadir en la cabecera
        if (event.target.closest('.kanban-add-item-btn')) {
            const boardEl = event.target.closest('.kanban-board');
            const stageId = boardEl.dataset.id;
            document.dispatchEvent(new CustomEvent('newOpportunityInStage', { detail: { stageId } }));
            return;
        }

        // Prioridad 2: Click en el botón de borrar de una tarjeta
        if (event.target.closest('.delete-item-btn')) {
            const cardEl = event.target.closest('.kanban-item');
            const itemId = cardEl.dataset.eid;
            if (confirm('¿Marcar esta oportunidad para eliminar?')) {
                this.appState.itemsToDelete.add(itemId);
                cardEl.classList.add('to-be-deleted');
                this.updateHeaders();
            }
            return;
        }

        // Si no se ha pulsado ningún botón específico, consideramos click en la tarjeta para editar
        const cardEl = event.target.closest('.kanban-item');
        if (cardEl) {
            const itemId = cardEl.dataset.eid;
            const itemData = this._findItemById(itemId);
            if(itemData) {
                document.dispatchEvent(new CustomEvent('editOpportunity', { detail: itemData }));
            }
        }
    },
    
    _findItemById(itemId) {
        if (!this.appState.boards) return null;
        for (const board of this.appState.boards) {
            const found = board.item.find(item => item.id.toString() === itemId);
            if (found) return found;
        }
        return null;
    },
    
    updateHeaders() {
        document.querySelectorAll('.kanban-board').forEach(boardEl => {
            const boardId = boardEl.dataset.id;
            const originalBoardData = this.appState.boards.find(b => b.id === boardId);
            const headerTitleContainer = boardEl.querySelector('.kanban-title-board');

            if (originalBoardData && headerTitleContainer) {
                // Añade el botón '+' si no existe
                if (!headerTitleContainer.querySelector('.kanban-add-item-btn')) {
                    const addButton = document.createElement('span');
                    addButton.className = 'kanban-add-item-btn';
                    addButton.title = 'Nueva Oportunidad en esta etapa';
                    addButton.innerHTML = '+';
                    headerTitleContainer.appendChild(addButton);
                }

                // Actualiza contadores y valor
                const headerEl = boardEl.querySelector('.kanban-board-header > div');
                let totalValue = 0;
                let itemCount = 0;
                boardEl.querySelectorAll('.kanban-item').forEach(itemEl => {
                    const itemId = itemEl.dataset.eid;
                    if (!this.appState.itemsToDelete.has(itemId)) {
                        const itemData = this._findItemById(itemId);
                        if (itemData) {
                            totalValue += parseFloat(itemData.valor) || 0;
                            itemCount++;
                        }
                    }
                });
                const totalValueFmt = new Intl.NumberFormat('es-ES', { maximumFractionDigits: 0 }).format(totalValue);
                headerEl.innerHTML = `
                    <div class="d-flex justify-content-between align-items-center kanban-title-board">
                        <span class="fw-bold">${originalBoardData.title.split(' (')[0]}</span>
                        <span class="kanban-add-item-btn" title="Nueva Oportunidad en esta etapa">+</span>
                    </div>
                    <div class="fw-normal mt-1 text-muted" style="font-size: 0.9em;">${itemCount} Oportunidades &nbsp; | &nbsp; ${totalValueFmt} €</div>
                `;
            }
        });
    },
    
    // ▼▼▼ FUNCIÓN MODIFICADA PARA EL NUEVO HTML DE LA TARJETA ▼▼▼
    _getCardHtml(data) {
    // --- Lógica para colores y clases condicionales ---

    // 1. Lógica para el color de la probabilidad
    let probClass = 'prob-low';
    if (data.probabilidad >= 75) {
        probClass = 'prob-high';
    } else if (data.probabilidad >= 40) {
        probClass = 'prob-medium';
    }

    // 2. Lógica para la fecha de cierre vencida
    let dateClass = 'card-date';
    let fechaFmt = UI.formatDate(data.fecha_cierre);
    const closeDate = new Date(data.fecha_cierre);
    const today = new Date();
    today.setHours(0, 0, 0, 0);

    if (data.fecha_cierre && closeDate < today) {
        dateClass = 'card-date card-date-overdue';
    }
    
    // 3. Formateamos el valor económico (que ahora se usará)
    const valorFmt = UI.formatCurrency(data.valor);
    
    // --- Generación del HTML de la tarjeta ---

    return `
        <div class="d-flex justify-content-between align-items-start">
            <div>
                <div class="card-title">${data.title || '(Sin título)'}</div>
                <div class="card-client">${data.cliente || 'Cliente no asignado'}</div>
            </div>
            <div class="card-metric-circle ${probClass}" title="Probabilidad">
                ${data.probabilidad || 0}%
            </div>
        </div>

        <div class="card-meta-info">
            <div title="Agente"><i class="fa-solid fa-user fa-fw"></i> ${data.nombre_agente || 'N/A'}</div>
            <div title="Próxima actividad" class="text-truncate"><i class="fa-solid fa-person-running fa-fw"></i> ${data.proxima_actividad || 'Ninguna'}</div>
        </div>

        <div class="card-footer-details">
            <div class="d-flex align-items-center" style="gap: 0.75rem;">
                <strong class="card-value">${valorFmt}</strong>
                <div class="${dateClass}" title="Fecha de cierre">
                    <i class="fa-solid fa-calendar-check fa-fw"></i> ${fechaFmt}
                </div>
            </div>
            <span class="delete-item-btn" title="Eliminar"><i class="fa-solid fa-trash-alt fa-fw"></i></span>
        </div>
    `;
}
};