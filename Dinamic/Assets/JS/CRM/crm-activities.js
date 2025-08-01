// /Plugins/MartosOS/Assets/JS/CRM/crm-activities.js
import { API } from './crm-api.js';

/**
 * Módulo para gestionar el panel de actividades.
 */
export const Activities = {
    init() {
        document.getElementById('newActivityForm').addEventListener('submit', this.handleCreate.bind(this));
        document.getElementById('details-tab-pane').addEventListener('click', this.handleToggle.bind(this));
    },

    async render(idOportunidad) {
        const pendingList = document.getElementById('pendingActivitiesList');
        const completedList = document.getElementById('completedActivitiesList');
        pendingList.innerHTML = '<p class="text-center text-muted"><i class="fas fa-spinner fa-spin"></i> Cargando...</p>';
        completedList.innerHTML = '';

        try {
            const data = await API.getActivities(idOportunidad);
            pendingList.innerHTML = data.pendientes.length > 0 ? data.pendientes.map(this._toHtml).join('') : '<p class="text-muted">No hay actividades pendientes.</p>';
            completedList.innerHTML = data.completadas.length > 0 ? data.completadas.map(this._toHtml).join('') : '<p class="text-muted">No hay actividades completadas.</p>';
        } catch (error) {
            console.error('Error al renderizar actividades:', error);
            pendingList.innerHTML = '<p class="text-danger">Error al cargar actividades.</p>';
        }
    },

    async handleCreate(e) {
        e.preventDefault();
        const form = e.target;
        if (!form.reportValidity()) return;

        const formData = new FormData(form);
        const result = await API.createActivity(formData);

        if (result.status === 'ok') {
            form.reset();
            document.dispatchEvent(new CustomEvent('activityChanged'));
        } else {
            alert(result.message);
        }
    },

    async handleToggle(e) {
        if (e.target.classList.contains('toggle-activity-status')) {
            const idActividad = e.target.dataset.id;
            const result = await API.toggleActivityStatus(idActividad);
            if (result.status === 'ok') {
                document.dispatchEvent(new CustomEvent('activityChanged'));
            } else {
                alert(result.message);
            }
        }
    },

    _toHtml(activity) {
        const isCompleted = activity.completada; //
        const formattedDate = new Date(activity.fecha).toLocaleDateString('es-ES', {
            day: '2-digit', month: '2-digit', year: 'numeric'
        }); //
        const formattedTime = activity.hora ? activity.hora.substring(0, 5) : ''; //

        // Lógica para el color de la prioridad
        let priorityClass = 'text-info';
        if (activity.prioridad === 'Alta') priorityClass = 'text-danger';
        if (activity.prioridad === 'Baja') priorityClass = 'text-secondary';
        
        // Lógica para el icono del tipo de actividad
        const typeIcons = {
            'Llamada': 'fa-phone',
            'Reunión': 'fa-users',
            'Email': 'fa-envelope',
            'Tarea': 'fa-list-check'
        };
        const typeIcon = typeIcons[activity.tipo] || 'fa-question-circle';

        return `
            <div class="d-flex align-items-center p-2 border-bottom">
                <input class="form-check-input mt-0 me-3 toggle-activity-status" type="checkbox"
                       ${isCompleted ? 'checked' : ''}
                       data-id="${activity.idactividad}"
                       title="Marcar como ${isCompleted ? 'pendiente' : 'completada'}">
                <div class="flex-grow-1 ${isCompleted ? 'text-decoration-line-through text-muted' : ''}">
                    <div class="d-flex justify-content-between">
                        <span class="fw-bold">
                            <i class="fa-solid ${typeIcon} fa-fw me-2" title="${activity.tipo}"></i>
                            ${activity.descripcion}
                        </span>
                        <span class="badge rounded-pill bg-light ${priorityClass} border">${activity.prioridad}</span>
                    </div>
                    <small class="d-block text-muted">Vence: ${formattedDate} a las ${formattedTime}h</small>
                </div>
            </div>
        `; //
    }
};