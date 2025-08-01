// /Plugins/MartosOS/Assets/JS/CRM/crm-app.js
import { API } from './crm-api.js';
import { Kanban } from './crm-kanban.js';
import { Modal } from './crm-modal.js';
import { Activities } from './crm-activities.js'; // Importamos Activities
import { UI } from './crm-ui.js'; // Asegúrate de importar UI para formatear la moneda

document.addEventListener('DOMContentLoaded', () => {
    App.init();
});

/**
 * Orquestador principal de la aplicación CRM.
 */
const App = {
    state: {
        boards: [],
        itemsToDelete: new Set(),
        currentOpportunityId: null
    },

    init() {
        Kanban.init(this.state);
        Modal.init();
        this.bindEvents();
        this.loadData();
    },

    bindEvents() {
        // Eventos de los módulos
        document.addEventListener('opportunitySaved', () => this.loadData());
        document.addEventListener('activityChanged', () => this.refreshActivities());
        document.addEventListener('editOpportunity', (e) => this.openModalForEdit(e.detail));

        // ▼▼▼ NUEVO EVENT LISTENER ▼▼▼
        document.addEventListener('opportunityMoved', (e) => this.handleOpportunityMove(e.detail));
        // ▼▼▼ EVENTO AÑADIDO PARA EL BOTÓN '+' ▼▼▼
        document.addEventListener('newOpportunityInStage', (e) => Modal.openForNew(e.detail.stageId));

        // Eventos de los filtros
        document.getElementById('filterQuery').addEventListener('keyup', (e) => { if (e.key === 'Enter') this.loadData(); });
        document.getElementById('filterAgent').addEventListener('change', () => this.loadData());
        document.getElementById('filterFechaDesde').addEventListener('change', () => this.loadData());
        document.getElementById('filterFechaHasta').addEventListener('change', () => this.loadData());
        document.getElementById('clearFiltersBtn').addEventListener('click', () => {
            document.getElementById('filterQuery').value = '';
            document.getElementById('filterAgent').value = 'all';
            document.getElementById('filterFechaDesde').value = '';
            document.getElementById('filterFechaHasta').value = '';
            this.loadData();
        });
    },

    async loadData() {
        this.state.itemsToDelete.clear();
        const kanbanContainer = document.getElementById('opp_kanban-container');
        kanbanContainer.innerHTML = '<div class="text-center py-5"><i class="fas fa-spinner fa-spin fa-3x"></i></div>';

        const filters = {
            query: document.getElementById('filterQuery').value.trim(),
            codagente: document.getElementById('filterAgent').value,
            fecha_desde: document.getElementById('filterFechaDesde').value,
            fecha_hasta: document.getElementById('filterFechaHasta').value
        };

        try {
            this.state.boards = await API.getKanbanData(filters);
            
            // ▼▼▼ LLAMADA A LA NUEVA FUNCIÓN ▼▼▼
            this.updateStats(this.state.boards);
            
            Kanban.render(this.state.boards);
        } catch (error) {
            console.error("Error al cargar datos del Kanban:", error);
            kanbanContainer.innerHTML = '<div class="alert alert-danger">Error al cargar el panel. Inténtelo de nuevo.</div>';
        }
    },

    // ▼▼▼ NUEVA FUNCIÓN PARA CALCULAR Y MOSTRAR ESTADÍSTICAS ▼▼▼
    updateStats(boards) {
        let totalPipeline = 0;
        let activeOpportunities = 0;
        let maxOpportunity = 0;
        let weightedProbabilitySum = 0;

        // Solo calculamos sobre oportunidades que no estén en las etapas finales
        const activeBoards = boards.filter(board => board.id !== 'Cerrado-Ganado' && board.id !== 'Cerrado-Perdido');

        for (const board of activeBoards) {
            for (const item of board.item) {
                const valor = parseFloat(item.valor) || 0;
                
                totalPipeline += valor;
                activeOpportunities++;
                
                if (valor > maxOpportunity) {
                    maxOpportunity = valor;
                }
                
                // Para la probabilidad promedio ponderada por valor
                weightedProbabilitySum += valor * (parseInt(item.probabilidad, 10) || 0);
            }
        }

        const avgProbability = totalPipeline > 0 ? (weightedProbabilitySum / totalPipeline) / 100 : 0;

        // Actualizamos el DOM
        document.getElementById('stats-total-pipeline').textContent = UI.formatCurrency(totalPipeline);
        document.getElementById('stats-active-opportunities').textContent = activeOpportunities;
        document.getElementById('stats-max-opportunity').textContent = UI.formatCurrency(maxOpportunity);
        document.getElementById('stats-avg-probability').textContent = `${(avgProbability * 100).toFixed(0)}%`;
    },
     // ▼▼▼ NUEVA FUNCIÓN PARA GESTIONAR EL MOVIMIENTO ▼▼▼
     async handleOpportunityMove({ itemId, newStageId }) {
        const itemData = Kanban._findItemById(itemId);
        if (!itemData) return;

        // Preparamos los datos para enviar
        const formData = new FormData();
        Object.keys(itemData).forEach(key => {
            let value = itemData[key];
            // Mapeamos los nombres de propiedad del frontend al backend
            let backendKey = key;
            if (key === 'title') backendKey = 'title'; // 'nombre' se usa en el form, pero la API espera 'title'
            if (key === 'valor') backendKey = 'valor';
            
            formData.append(backendKey, value || '');
        });
        formData.set('etapa', newStageId); // Actualizamos la etapa
        formData.set('id', itemData.id); // Aseguramos el ID

        try {
            const result = await API.saveOpportunity(formData);
            if (result.status !== 'ok') {
                alert('Error al guardar el cambio de etapa. El tablero se recargará para asegurar la consistencia.');
                this.loadData(); // Si falla, recargamos para evitar inconsistencias visuales
            }
            // Si tiene éxito, no hacemos nada. El cambio visual ya está hecho y el token se ha actualizado en segundo plano.
        } catch (error) {
            console.error('Error de red al mover oportunidad:', error);
            alert('Error de red. El tablero se recargará.');
            this.loadData();
        }
    },
    
    openModalForEdit(itemData) {
        this.state.currentOpportunityId = itemData.id;
        Modal.openForEdit(itemData);
    },
    
    refreshActivities() {
        if(this.state.currentOpportunityId) {
            // Ahora usamos el módulo Activities directamente
            Activities.render(this.state.currentOpportunityId);
            // También refrescamos el kanban por si una actividad afecta a su estado (ej. alerta inactividad)
            this.loadData();
        }
    }
};