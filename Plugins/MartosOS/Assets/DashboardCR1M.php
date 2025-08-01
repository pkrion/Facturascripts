<?php

namespace FacturaScripts\Plugins\MartosOS\Controller;

use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Dinamic\Lib\ExtendedController\PanelController;
use FacturaScripts\Plugins\MartosOS\Model\Oportunidad;
use FacturaScripts\Plugins\MartosOS\Model\Actividad;
use FacturaScripts\Dinamic\Model\Cliente;
use FacturaScripts\Dinamic\Model\User;
use FacturaScripts\Core\DataSrc\Agentes;
use FacturaScripts\Core\Base\Tools;

class DashboardCRM extends PanelController
{
    public function getPageData(): array
    {
                $data = parent::getPageData();
        $data['menu'] = 'sales';
        $data['title'] = 'CRM 360';
        $data['icon'] = 'fa-solid fa-bolt';
        // Para el filtro de comerciales
        $data['agentes'] = (new \FacturaScripts\Dinamic\Model\Agente())->all();
        return $data;
    }
 

    protected function createViews()
    {
        new Oportunidad();
        new Actividad();
        $this->addHtmlView('TableroOportunidades', 'TableroOportunidades', 'Oportunidad', 'Oportunidades', 'fa-solid fa-grip-vertical');
        $this->addHtmlView('TableroActividades', 'TableroActividades', 'Actividad', 'Actividades', 'fa-solid fa-calendar-check');
        $this->addHtmlView('DirectorioMaestro', 'DirectorioMaestro', 'Cliente', 'Directorio', 'fa-solid fa-address-book');
        $this->setSettings('TableroOportunidades', 'active', true);
    }

    protected function loadData($viewName, $view)
    {
        // Esencial para que las pestañas se puedan clickar
        $this->hasData = true;
       //arent::loadData($viewName, $view); // Siempre llamamos al padre para asegurar compatibilidad

    // Para la vista específica que te interesa
    if ($viewName === 'TableroOportunidades') {
        // Obtenemos los agentes de la base de datos
        $this->agentes = (new \FacturaScripts\Dinamic\Model\Agente())->all();
        // Aquí puedes filtrar, ordenar, etc si lo necesitas
    }
    if ($viewName === 'DirectorioMaestro') {
        $this->clientes = [];
        foreach ((new \FacturaScripts\Dinamic\Model\Cliente())->all([], ['nombre' => 'ASC'], 0, 100) as $cli) {
            // Contar oportunidades y sumar valor
            $sql = "SELECT COUNT(*) AS num_opp, SUM(valor_estimado) AS total_valor 
                    FROM oportunidades WHERE codcliente = " . $this->dataBase->var2str($cli->codcliente);
            $stats = $this->dataBase->select($sql);
            $cli->num_oportunidades = $stats[0]['num_opp'] ?? 0;
            $cli->valor_oportunidades = $stats[0]['total_valor'] ?? 0;
            $this->clientes[] = $cli;
        }
    }
    
         // SOLO para la pestaña de Oportunidades (o en todas si lo prefieres)
   
        // Aquí no cargamos datos porque cada vista lo hará con su propio AJAX
    }
    protected function execPreviousAction($action)
    {
        switch ($action) {
            case 'getKanbanDataAjax':
                $this->getKanbanDataAjax();
                return true;
            case 'saveKanbanStateAjax':
                $this->saveKanbanStateAjax();
                return true;
            case 'getActividadesListAjax':
                $this->getActividadesListAjax();
                return true;
            case 'toggleActividadStatusAjax':
                $this->toggleActividadStatusAjax();
                return true;
            case 'createActividadAjax':
                $this->createActividadAjax();
                return true;
            case 'searchClientesAjax':
                $this->searchClientesAjax();
                return true;
            case 'searchAgentesAjax':
                $this->searchAgentesAjax();
                return true;

            // --- AÑADE ESTAS DOS NUEVAS ACCIONES ---
            case 'getDirectorioAjax':
                $this->getDirectorioAjax();
                return true;
            
            case 'searchOportunidadesAjax':
                $this->searchOportunidadesAjax();
                return true;
            // ------------------------------------
            case 'deleteActividadAjax':
                $this->deleteActividadAjax();
                return true;
            case 'deleteActividadAjax':
                $this->saveSingleOpportunityAjax();
                return true;

        }
        return parent::execPreviousAction($action);
    }
    
    // ==========================================================================
    // MÉTODOS AJAX KANBAN OPORTUNIDADES (VERSIÓN MEJORADA)
    // ==========================================================================
    
    public function getKanbanDataAjax()
    {
        $this->template = false;
    
        // Recuperamos filtros de la petición
        $codagente = $this->request->query->get('codagente', 'all');
        $fechaDesde = $this->request->query->get('fecha_desde', '');
        $fechaHasta = $this->request->query->get('fecha_hasta', '');
        $query = $this->request->query->get('query', '');
    
        $etapas = ['Nuevo Lead', 'Primer Contacto', 'Cualificación', 'Propuesta Enviada', 'Negociación', 'Cerrado-Ganado', 'Cerrado-Perdido'];
        $kanbanBoards = [];
    
        foreach ($etapas as $etapa) {
            $kanbanBoards[$etapa] = [
                'id' => $etapa, 
                'title' => $etapa,
                'item' => [],
                'stats' => ['count' => 0, 'total' => 0, 'weighted' => 0]
            ];
        }
    
        $oportunidadModel = new Oportunidad();
        $where = [];
    
        // Aplicamos filtros
        if ($codagente !== 'all') {
            $where[] = new DataBaseWhere('codagente', $codagente);
        }
        if (!empty($fechaDesde)) {
            $where[] = new DataBaseWhere('fecha_cierre_prevista', $fechaDesde, '>=');
        }
        if (!empty($fechaHasta)) {
            $where[] = new DataBaseWhere('fecha_cierre_prevista', $fechaHasta, '<=');
        }
        if (!empty($query)) {
            $subWhere = [
                new DataBaseWhere('nombre', $query, 'LIKE'),
                new DataBaseWhere('codcliente', "SELECT codcliente FROM clientes WHERE nombre LIKE " . $this->dataBase->var2str('%' . $query . '%'), 'IN')
            ];
            $where[] = new DataBaseWhere('', $subWhere, 'OR', 'AND', true);
        }
    
        $oportunidades = $oportunidadModel->all($where, ['idoportunidad' => 'ASC']);

        foreach ($oportunidades as $oportunidad) {
            if (isset($kanbanBoards[$oportunidad->etapa])) {
                $cliente = new Cliente();
                $clienteNombre = 'Sin cliente';
                if ($oportunidad->codcliente && $cliente->loadFromCode($oportunidad->codcliente)) {
                    $clienteNombre = $cliente->nombre;
                }

                // Lógica para próxima actividad y alerta de inactividad
                $proximaActividad = 'Ninguna'; // Placeholder
                $alertaInactividad = false;
                if ($oportunidad->ultima_actividad) {
                    $diasInactiva = (new \DateTime())->diff(new \DateTime($oportunidad->ultima_actividad))->days;
                    if ($diasInactiva > 15) { // Alerta si lleva más de 15 días inactiva
                        $alertaInactividad = true;
                    }
                }

                $agenteNombre = '';
                if ($oportunidad->codagente) {
                    $agenteModel = new \FacturaScripts\Core\DataSrc\Agentes();
                    $agenteObj = $agenteModel->get($oportunidad->codagente);
                    $agenteNombre = $agenteObj ? $agenteObj->nombre : '';
                }

                $kanbanBoards[$oportunidad->etapa]['item'][] = [
                    'id' => $oportunidad->idoportunidad,
                    'title' => $oportunidad->nombre,
                    'valor' => $oportunidad->valor_estimado,
                    'cliente' => $clienteNombre,
                    'codcliente' => $oportunidad->codcliente,
                    'fecha_cierre' => $oportunidad->fecha_cierre_prevista,
                    'probabilidad' => $oportunidad->probabilidad,
                    'proxima_actividad' => $proximaActividad,
                    'alerta_inactividad' => $alertaInactividad,
                    'codagente' => $oportunidad->codagente,
                    'nombre_agente' => $agenteNombre, // <--- ¡NUEVO!
                ];

                // Actualizamos las estadísticas de la columna
                $kanbanBoards[$oportunidad->etapa]['stats']['count']++;
                $kanbanBoards[$oportunidad->etapa]['stats']['total'] += $oportunidad->valor_estimado;
                $kanbanBoards[$oportunidad->etapa]['stats']['weighted'] += $oportunidad->valor_estimado * ($oportunidad->probabilidad / 100);
            }
        }

        $finalBoards = [];
        foreach ($kanbanBoards as $boardData) {
            $stats = $boardData['stats'];
            $title = sprintf('%s (%d | %s € | Pond: %s €)',
                $boardData['title'],
                $stats['count'],
                number_format($stats['total'], 0, ',', '.'),
                number_format($stats['weighted'], 0, ',', '.')
            );
            $boardData['title'] = $title;
            $finalBoards[] = $boardData;
        }
        
        $this->response->setContent(json_encode($finalBoards));
        $this->response->send();
        exit();
    }
    
    public function saveKanbanStateAjax()
    {
        ob_start();
        $this->template = false;
        header('Content-Type: application/json');

        if (false === $this->validateFormToken()) {
            $this->response->setContent(json_encode(['status' => 'error', 'message' => 'Token de formulario no válido.']));
            $this->response->send();
            exit();
        }

        $state = json_decode($this->request->request->get('kanbanState'), true);
        if (is_null($state)) {
            $this->response->setContent(json_encode(['status' => 'error', 'message' => 'Datos no válidos.']));
            $this->response->send();
            exit();
        }
        
        $this->dataBase->beginTransaction();

        // DELETES
        if (!empty($state['deletes'])) {
            $oportunidad = new Oportunidad();
            $this->dataBase->exec("DELETE FROM " . $oportunidad->tableName() . " WHERE idoportunidad IN (" . implode(',', $state['deletes']) . ")");
        }

        // UPDATES
        // UPDATES
        if (!empty($state['updates'])) {
            foreach ($state['updates'] as $data) {
                $oportunidad = new Oportunidad();
                if ($oportunidad->loadFromCode($data['id'])) {
                    $oportunidad->etapa = $data['idEtapa'];
                    $oportunidad->nombre = $data['title'];
                    $oportunidad->valor_estimado = $data['valor'];
                    $oportunidad->codcliente = empty($data['codcliente']) ? null : $data['codcliente'];
                    $oportunidad->fecha_cierre_prevista = empty($data['fecha_cierre']) ? null : $data['fecha_cierre'];
                    $oportunidad->probabilidad = $data['probabilidad'];
                    // 🟢 Añade esto:
                    $oportunidad->codagente = empty($data['codagente']) ? $this->user->codagente : $data['codagente'];
                    $oportunidad->save();
                }
            }
        }

        // INSERTS
        if (!empty($state['inserts'])) {
            foreach ($state['inserts'] as $data) {
                $oportunidad = new Oportunidad();
                $oportunidad->etapa = $data['idEtapa'];
                $oportunidad->nombre = $data['title'];
                $oportunidad->codcliente = empty($data['codcliente']) ? null : $data['codcliente'];
                $oportunidad->valor_estimado = $data['valor'];
                $oportunidad->fecha_cierre_prevista = empty($data['fecha_cierre']) ? null : $data['fecha_cierre'];
                $oportunidad->probabilidad = $data['probabilidad'];
                // 🟢 Aquí también, igual:
                $oportunidad->codagente = empty($data['codagente']) ? $this->user->codagente : $data['codagente'];
                $oportunidad->ultima_actividad = date('Y-m-d H:i:s');
                $oportunidad->save();
            }
        }

        
        $this->dataBase->commit();
        ob_end_clean();
        $this->response->setContent(json_encode(['status' => 'ok', 'message' => 'Pipeline guardado.']));
        $this->response->send();
        exit();
    }

    // ==========================================================================
    // MÉTODOS AJAX LISTA DE ACTIVIDADES
    // ==========================================================================

    public function getActividadesListAjax()
    {
        $this->template = false;

        $actividadModel = new Actividad();
        $where = []; // Aquí iría la lógica de filtros para actividades
        $actividades = $actividadModel->all($where, ['fecha' => 'DESC', 'hora' => 'DESC']);
        $results = [];

        foreach ($actividades as $actividad) {
            $asociado_a = '';
            $asociado_url = '#';

            if ($actividad->idoportunidad) {
                $oportunidad = new Oportunidad();
                if($oportunidad->loadFromCode($actividad->idoportunidad)) {
                    $asociado_a = 'Oportunidad: ' . $oportunidad->nombre;
                    // Aquí iría la URL al edit de oportunidad
                }
            } elseif ($actividad->codcliente) {
                $cliente = new Cliente();
                if ($cliente->loadFromCode($actividad->codcliente)) {
                    $asociado_a = 'Cliente: ' . $cliente->nombre;
                    $asociado_url = $cliente->url();
                }
            }

            $results[] = [
                'id' => $actividad->idactividad,
                'tipo' => $actividad->tipo,
                'asunto' => $actividad->descripcion,
                'fecha_vencimiento' => $actividad->fecha . ' ' . $actividad->hora,
                'prioridad' => $actividad->prioridad,
                'estado' => $actividad->estado,
                'asociado_a' => $asociado_a,
                'asociado_url' => $asociado_url,
            ];
        }

        $this->response->setContent(json_encode($results));
        $this->response->send();
        exit();
    }
    
    public function toggleActividadStatusAjax() {
        $this->template = false;
        if (false === $this->validateFormToken()) {
            $this->response->setContent(json_encode(['status' => 'error', 'message' => 'Token no válido.']));
            $this->response->send(); exit();
        }

        $idActividad = $this->request->request->get('id');
        $actividad = new Actividad();
        if ($actividad->loadFromCode($idActividad)) {
            $actividad->estado = ($actividad->estado === 'Completada') ? 'Pendiente' : 'Completada';
            if ($actividad->save()) {
                $this->response->setContent(json_encode(['status' => 'ok', 'newState' => $actividad->estado]));
            } else {
                $this->response->setContent(json_encode(['status' => 'error', 'message' => 'No se pudo guardar.']));
            }
        } else {
            $this->response->setContent(json_encode(['status' => 'error', 'message' => 'Actividad no encontrada.']));
        }
        $this->response->send();
        exit();
    }

    // En DashboardCRM.php

   public function createActividadAjax()
{
    $this->template = false;
    header('Content-Type: application/json');

    // Seguridad: POST y token CSRF
    if (false === $this->request->isMethod('POST') || false === $this->validateFormToken()) {
        $this->response->setContent(json_encode([
            'status' => 'error',
            'message' => 'Token no válido o petición incorrecta.'
        ]));
        $this->response->send();
        exit();
    }

    // Recogemos solo los datos válidos
    $actividad = new Actividad();
    $actividad->tipo         = $this->request->request->get('tipo');
    $actividad->descripcion  = $this->request->request->get('descripcion');
    $actividad->fecha        = $this->request->request->get('fecha');
    $actividad->hora         = $this->request->request->get('hora');
    $actividad->prioridad    = $this->request->request->get('prioridad');
    $actividad->idoportunidad= $this->request->request->get('idoportunidad');
    $actividad->codagente    = $this->user->codagente;
    $actividad->estado       = 'Pendiente'; // siempre pendiente al crear
    
    // Validación mínima: oportunidad obligatoria
    // Validación mínima: oportunidad obligatoria
    if (empty($actividad->idoportunidad)) {
        $this->response->setContent(json_encode([
            'status' => 'error',
            'message' => 'Debes seleccionar una oportunidad para asociar la actividad.'
        ]));
        $this->response->send();
        exit();
    }

    // Obtener agente y cliente de la oportunidad seleccionada
    $oportunidad = new Oportunidad();
    if ($oportunidad->loadFromCode($actividad->idoportunidad)) {
        $actividad->codagente = $oportunidad->codagente;
        $actividad->codcliente = $oportunidad->codcliente;
    } else {
        $this->response->setContent(json_encode([
            'status' => 'error',
            'message' => 'Oportunidad no encontrada. No se puede guardar la actividad.'
        ]));
        $this->response->send();
        exit();
    }

    

    // Guardar y responder
    if ($actividad->save()) {
        $this->response->setContent(json_encode([
            'status' => 'ok',
            'message' => 'Actividad creada correctamente.'
        ]));
    } else {
        $this->response->setContent(json_encode([
            'status' => 'error',
            'message' => 'Error al guardar en la base de datos.'
        ]));
    }
    $this->response->send();
    exit();

}


    // En DashboardCRM.php

    public function searchClientesAjax()
    {
        $this->template = false;
        header('Content-Type: application/json');
        $term = $this->request->query->get('term', '');
        if (empty($term)) {
            $this->response->setContent('[]');
            $this->response->send();
            exit();
        }

        $cliente = new Cliente();
        $where = [new DataBaseWhere('nombre', '%' . $term . '%', 'LIKE')];
        $results = [];
        foreach ($cliente->all($where, [], 0, 10) as $cli) {
            $results[] = ['label' => $cli->nombre, 'value' => $cli->codcliente];
        }
        $this->response->setContent(json_encode($results));
        $this->response->send();
        exit();
    }

    public function searchAgentesAjax()
{
    $this->template = false;
    header('Content-Type: application/json');
    $term = $this->request->query->get('term', '');
    if (empty($term)) {
        $this->response->setContent('[]');
        $this->response->send();
        exit();
    }

    // Usa el modelo Agentes (FacturaScripts\Core\DataSrc\Agentes)
    $agenteModel = new Agentes();
    // El campo suele ser 'nombre' o 'nombreagente', según instalación
    $where = [new DataBaseWhere('nombre', '%' . $term . '%', 'LIKE')];
    $results = [];
    foreach ($agenteModel->all($where, [], 0, 10) as $ag) {
        $results[] = ['label' => $ag->nombre, 'value' => $ag->codagente];
    }
    $this->response->setContent(json_encode($results));
    $this->response->send();
    exit();
}

    // En DashboardCRM.php

    public function getDirectorioAjax()
    {
        $this->template = false;
        header('Content-Type: application/json');
        $term = $this->request->query->get('term', '');
    
        $cliente = new Cliente();
        $where = [];
        if (!empty($term)) {
            $where[] = new DataBaseWhere('nombre', '%' . $term . '%', 'LIKE');
        }
    
        $results = [];
        foreach ($cliente->all($where, ['nombre' => 'ASC'], 0, 50) as $cli) {
            // --- INICIO DE LA CORRECCIÓN ---
            
            // 1. Usamos el método correcto: select()
            $sql = "SELECT COUNT(idoportunidad) as num_opp, SUM(valor_estimado) as total_valor 
                    FROM oportunidades 
                    WHERE codcliente = " . $this->dataBase->var2str($cli->codcliente);
            
            $queryResult = $this->dataBase->select($sql);
    
            // 2. Tomamos la primera fila del resultado y preparamos un valor por defecto
            $stats = $queryResult ? $queryResult[0] : ['num_opp' => 0, 'total_valor' => 0];
    
            // --- FIN DE LA CORRECCIÓN ---
            
            $results[] = [
                'codcliente' => $cli->codcliente,
                'nombre' => $cli->nombre,
                'cifnif' => $cli->cifnif,
                'telefono' => $cli->telefono1,
                'email' => $cli->email,
                'url' => $cli->url(),
                'num_oportunidades' => $stats['num_opp'] ?? 0,
                'valor_oportunidades' => $stats['total_valor'] ?? 0
            ];
        }
        $this->response->setContent(json_encode($results));
        $this->response->send();
        exit();
    }
    public function deleteActividadAjax()
{
    $this->template = false;
    header('Content-Type: application/json');

    if (false === $this->request->isMethod('POST') || false === $this->validateFormToken()) {
        $this->response->setContent(json_encode(['status' => 'error', 'message' => 'Token no válido o petición incorrecta.']));
        $this->response->send();
        exit();
    }

    $id = $this->request->request->get('idactividad');
    if (!$id) {
        $this->response->setContent(json_encode(['status' => 'error', 'message' => 'ID no recibido.']));
        $this->response->send();
        exit();
    }
    $actividad = new Actividad();
    if ($actividad->loadFromCode($id) && $actividad->delete()) {
        $this->response->setContent(json_encode(['status' => 'ok']));
    } else {
        $this->response->setContent(json_encode(['status' => 'error', 'message' => 'No se pudo eliminar la actividad.']));
    }
    $this->response->send();
    exit();
}

/**
 * Busca oportunidades por término (estilo manual con Modelo).
 */
public function searchOportunidadesAjax()
{
    $this->template = false;
    header('Content-Type: application/json');
    $term = $this->request->query->get('term', '');
    if (empty($term)) {
        $this->response->setContent('[]');
        $this->response->send();
        exit();
    }

    $oportunidadModel = new Oportunidad();
    // El campo suele ser 'nombre' o 'nombreagente', según instalación
    $where = [new DataBaseWhere('nombre', '%' . $term . '%', 'LIKE')];
    $results = [];
    foreach ($oportunidadModel->all($where, [], 0, 10) as $ag) {
        $results[] = ['label' => $ag->nombre, 'value' => $ag->idoportunidad];
    }
    $this->response->setContent(json_encode($results));
    $this->response->send();
    exit();
}
public function saveSingleOpportunityAjax()
{
    $this->template = false;
    header('Content-Type: application/json');

    // Validamos el token de seguridad
    if (false === $this->validateFormToken()) {
        $this->response->setContent(json_encode(['status' => 'error', 'message' => 'Token de formulario no válido.']));
        $this->response->send();
        exit();
    }

    // Obtenemos los datos que envía el JavaScript
    $data = json_decode($this->request->getContent(), true);
    if (is_null($data)) {
        $this->response->setContent(json_encode(['status' => 'error', 'message' => 'Datos no válidos.']));
        $this->response->send();
        exit();
    }
    
    $oportunidad = new Oportunidad();
    $isInsert = empty($data['id']) || strpos($data['id'], 'new-') === 0;

    // Si estamos editando, cargamos la oportunidad existente
    if (!$isInsert) {
        if (!$oportunidad->loadFromCode($data['id'])) {
            $this->response->setContent(json_encode(['status' => 'error', 'message' => 'Oportunidad no encontrada.']));
            $this->response->send();
            exit();
        }
    }

    // Asignamos todos los valores al modelo
    $oportunidad->nombre = $data['title'];
    $oportunidad->valor_estimado = $data['valor'];
    $oportunidad->fecha_cierre_prevista = empty($data['fecha_cierre']) ? null : $data['fecha_cierre'];
    $oportunidad->codcliente = empty($data['codcliente']) ? null : $data['codcliente'];
    $oportunidad->codagente = empty($data['codagente']) ? $this->user->codagente : $data['codagente'];
    $oportunidad->probabilidad = empty($data['probabilidad']) ? 0 : (int)$data['probabilidad'];
    $oportunidad->objetivos_negocio = $data['objetivos_negocio'] ?? null;
    $oportunidad->puntos_dolor = $data['puntos_dolor'] ?? null;
    $oportunidad->ultima_actividad = date('Y-m-d H:i:s');
    
    if ($oportunidad->save()) {
        $this->response->setContent(json_encode([
            'status' => 'ok', 
            'message' => 'Oportunidad guardada.',
            'newToken' => \FacturaScripts\Core\Base\Tools::newFormToken()
        ]));
    } else {
        $this->response->setContent(json_encode(['status' => 'error', 'message' => 'Error al guardar la oportunidad.']));
    }
    
    $this->response->send();
    exit();
}


}