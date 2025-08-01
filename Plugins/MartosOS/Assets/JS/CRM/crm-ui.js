// /Plugins/MartosOS/Assets/JS/CRM/crm-ui.js
import { API } from './crm-api.js';

/**
 * Módulo para utilidades y componentes de la interfaz de usuario.
 */
export const UI = {
    formatCurrency(value) {
        return new Intl.NumberFormat('es-ES', { style: 'currency', currency: 'EUR' }).format(value || 0);
    },

    formatDate(dateStr) {
        if (!dateStr) return 'N/A';
        const date = new Date(dateStr);
        return isNaN(date.getTime()) ? 'N/A' : date.toLocaleDateString('es-ES', { day: '2-digit', month: '2-digit', year: 'numeric' });
    },
    
    normalizeDateForInput(dateStr) {
        if (!dateStr) return '';
        const d = new Date(dateStr);
        if (!isNaN(d.getTime())) {
            d.setMinutes(d.getMinutes() - d.getTimezoneOffset());
            return d.toISOString().slice(0, 10);
        }
        return '';
    },

    setupAllAutocomplete() {
        $('#opportunityClient').autocomplete({
            source: (request, response) => {
                API.searchClients(request.term).then(data => response(data));
            },
            minLength: 1,
            select: (event, ui) => {
                $('#opportunityCodCliente').val(ui.item.value);
                $('#opportunityClient').val(ui.item.label);
                return false;
            }
        });

        $('#opportunityAgent').autocomplete({
            source: (request, response) => {
                API.searchAgents(request.term).then(data => response(data));
            },
            minLength: 1,
            select: (event, ui) => {
                $('#opportunityCodAgente').val(ui.item.value);
                $('#opportunityAgent').val(ui.item.label);
                return false;
            }
        });
    }
};