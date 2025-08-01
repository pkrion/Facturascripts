// /Plugins/MartosOS/Assets/JS/CRM/crm-api.js

/**
 * Módulo para centralizar todas las llamadas a la API del CRM.
 */
export const API = {
    /**
     * Realiza una petición fetch y gestiona la respuesta JSON y el token.
     * @param {string} url - La URL del endpoint.
     * @param {object} options - Opciones para la petición fetch (method, body, etc.).
     * @returns {Promise<any>}
     */
    async _fetch(url, options = {}) {
        // Añade el token CSRF a todas las peticiones POST
        if (options.body instanceof FormData) {
            const tokenInput = document.querySelector('#opp_form-token-provider input[name="multireqtoken"]');
            if (tokenInput && !options.body.has('multireqtoken')) {
                options.body.append('multireqtoken', tokenInput.value);
            }
        }

        const response = await fetch(url, options);
        if (!response.ok) {
            throw new Error(`Error de red: ${response.statusText}`);
        }
        
        const result = await response.json();

        // Actualiza el token si la respuesta lo incluye
        if (result.newToken) {
            const tokenInput = document.querySelector('#opp_form-token-provider input[name="multireqtoken"]');
            if (tokenInput) tokenInput.value = result.newToken;
        }

        return result;
    },

    getKanbanData(filters) {
        const params = new URLSearchParams(filters).toString();
        return this._fetch(`CRMoportunidades?action=getKanbanDataAjax&${params}`);
    },

    saveKanbanState(state) {
        const formData = new FormData();
        formData.append('kanbanState', JSON.stringify(state));
        return this._fetch(`CRMoportunidades?action=saveKanbanStateAjax`, { method: 'POST', body: formData });
    },

    saveOpportunity(formData) {
        return this._fetch(`CRMoportunidades?action=saveSingleOpportunityAjax`, { method: 'POST', body: formData });
    },

    getActivities(idOportunidad) {
        return this._fetch(`CRMoportunidades?action=getActividadesListAjax&idoportunidad=${idOportunidad}`);
    },

    createActivity(formData) {
        return this._fetch(`CRMoportunidades?action=createActividadAjax`, { method: 'POST', body: formData });
    },

    toggleActivityStatus(idActividad) {
        const formData = new FormData();
        formData.append('idactividad', idActividad);
        return this._fetch(`CRMoportunidades?action=toggleActividadStatusAjax`, { method: 'POST', body: formData });
    },

    searchClients(term) {
        return this._fetch(`CRMoportunidades?action=searchClientesAjax&term=${term}`);
    },

    searchAgents(term) {
        return this._fetch(`CRMoportunidades?action=searchAgentesAjax&term=${term}`);
    }
};