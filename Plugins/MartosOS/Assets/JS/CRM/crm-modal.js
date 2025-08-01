// /Plugins/MartosOS/Assets/JS/CRM/crm-modal.js
import { API } from './crm-api.js';
import { UI } from './crm-ui.js';
import { Activities } from './crm-activities.js';

/**
 * Módulo para gestionar el modal de Oportunidad.
 */
export const Modal = {
    init() {
        UI.setupAllAutocomplete();
        Activities.init();
        document.getElementById('saveOpportunityBtn').addEventListener('click', this.handleSave.bind(this));
        
        document.querySelector('button[data-bs-target="#opportunityModal"]').addEventListener('click', () => this.openForNew());
    },

    openForNew(stageId = null) {
        this._resetForm();
        document.getElementById('details-tab').style.display = 'none';
        document.getElementById('edit-tab').style.display = 'block';
        bootstrap.Tab.getOrCreateInstance(document.getElementById('edit-tab')).show();
        document.querySelector('#opportunityModal .modal-title').textContent = 'Nueva Oportunidad';

        // Si recibimos una etapa, la guardamos en el campo oculto
        if (stageId) {
            document.getElementById('opportunityStage').value = stageId;
        }

        bootstrap.Modal.getOrCreateInstance(document.getElementById('opportunityModal')).show();
    },

    openForEdit(itemData) {
        this._resetForm();
        document.getElementById('details-tab').style.display = 'block';
        document.getElementById('edit-tab').style.display = 'block';
        bootstrap.Tab.getOrCreateInstance(document.getElementById('details-tab')).show();
        
        const form = document.getElementById('opportunityForm');
        form.querySelector('#opportunityId').value = itemData.id;
        form.querySelector('#opportunityName').value = itemData.title || '';
        form.querySelector('#opportunityValue').value = itemData.valor || '';
        form.querySelector('#opportunityCloseDate').value = UI.normalizeDateForInput(itemData.fecha_cierre);
        form.querySelector('#opportunityClient').value = itemData.cliente || '';
        form.querySelector('#opportunityCodCliente').value = itemData.codcliente || '';
        form.querySelector('#opportunityAgent').value = itemData.nombre_agente || '';
        form.querySelector('#opportunityCodAgente').value = itemData.codagente || '';
        form.querySelector('#opportunityProbability').value = itemData.probabilidad || '';
        form.querySelector('#opportunityObjectives').value = itemData.objetivos_negocio || '';
        form.querySelector('#opportunityPainPoints').value = itemData.puntos_dolor || '';

        document.getElementById('detail-nombre').textContent = itemData.title || '(Sin nombre)';
        document.getElementById('detail-cliente').textContent = itemData.cliente || 'No asignado';
        document.getElementById('detail-valor').textContent = UI.formatCurrency(itemData.valor);
        document.getElementById('detail-probabilidad').textContent = `${itemData.probabilidad || 0} %`;
        document.getElementById('detail-fecha-cierre').textContent = UI.formatDate(itemData.fecha_cierre);
        document.getElementById('detail-agente').textContent = itemData.nombre_agente || 'No asignado';
        document.getElementById('detail-objetivos').textContent = itemData.objetivos_negocio || 'No definidos.';
        document.getElementById('detail-puntos-dolor').textContent = itemData.puntos_dolor || 'No definidos.';
        
        document.querySelector('#newActivityForm input[name="idoportunidad"]').value = itemData.id;
        Activities.render(itemData.id);

        document.querySelector('#opportunityModal .modal-title').textContent = `Oportunidad: ${itemData.title || ''}`;
        bootstrap.Modal.getOrCreateInstance(document.getElementById('opportunityModal')).show();
    },

    async handleSave() {
        const form = document.getElementById('opportunityForm');
        if (!form.reportValidity()) return;
        
        const saveBtn = document.getElementById('saveOpportunityBtn');
        saveBtn.disabled = true;
        saveBtn.innerHTML = '<i class="fas fa-spinner fa-spin"></i> Guardando...';

        const formDataToSend = new FormData();
        formDataToSend.append('id', form.querySelector('#opportunityId').value);
        formDataToSend.append('title', form.querySelector('#opportunityName').value);
        formDataToSend.append('valor', form.querySelector('#opportunityValue').value);
        formDataToSend.append('fecha_cierre', form.querySelector('#opportunityCloseDate').value);
        formDataToSend.append('codcliente', form.querySelector('#opportunityCodCliente').value);
        formDataToSend.append('codagente', form.querySelector('#opportunityCodAgente').value);
        formDataToSend.append('probabilidad', form.querySelector('#opportunityProbability').value);
        formDataToSend.append('objetivos_negocio', form.querySelector('#opportunityObjectives').value);
        formDataToSend.append('puntos_dolor', form.querySelector('#opportunityPainPoints').value);
        // ▼▼▼ LÍNEA AÑADIDA ▼▼▼
        // Añadimos la etapa al formulario si existe
        const stage = form.querySelector('#opportunityStage').value;
        if (stage) {
            formDataToSend.append('etapa', stage);
        }
        try {
            const result = await API.saveOpportunity(formDataToSend);

            if (result.status === 'ok') {
                bootstrap.Modal.getInstance(document.getElementById('opportunityModal')).hide();
                document.dispatchEvent(new CustomEvent('opportunitySaved'));
            } else {
                // Mostramos el error de token (o cualquier otro) que devuelve el servidor
                alert(`Error al guardar: ${result.message}`);
            }
        } catch (error) {
            console.error('Error en la llamada para guardar oportunidad:', error);
            alert('Ocurrió un error de red. Por favor, inténtelo de nuevo.');
        } finally {
            // Este bloque se ejecuta SIEMPRE, tanto si hay éxito como si hay error.
            // Asegura que el botón vuelva a la normalidad.
            saveBtn.disabled = false;
            saveBtn.innerHTML = 'Guardar Cambios';
        }
    },

    _resetForm() {
        document.getElementById('opportunityForm').reset();
        document.getElementById('opportunityId').value = '';
            document.getElementById('opportunityStage').value = ''; // Limpiamos también la etapa oculta

        document.getElementById('opportunityCodCliente').value = '';
        document.getElementById('opportunityCodAgente').value = '';
    }
};