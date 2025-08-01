<?php

namespace FacturaScripts\Plugins\MartosOS\Controller;
use FacturaScripts\Core\Session; // <-- AÑADIDO

use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Plugins\MartosOS\Model\Oportunidad;
use FacturaScripts\Plugins\MartosOS\Model\Actividad;
use FacturaScripts\Dinamic\Model\Cliente;
use FacturaScripts\Dinamic\Model\User;
use FacturaScripts\Core\DataSrc\Agentes;
use FacturaScripts\Core\Tools;
use FacturaScripts\Core\Base\Controller;
//use FacturaScripts\Dinamic\Lib\ExtendedController\PanelController;
//use FacturaScripts\Core\Base\Tools; // <-- LÍNEA AÑADIDA
use FacturaScripts\Core\Lib\MultiRequestProtection; // <-- AÑADIDO

class CRMoportunidades extends Controller
{
    public function getPageData(): array
    {
                $data = parent::getPageData();
        $data['menu'] = 'CRM';
        $data['title'] = 'CRM 360';
        $data['icon'] = 'fa-solid fa-bolt';
        $data['ordernum'] = 'Pipeline de Ventas';

        return $data;
    }
        public function privateCore(&$response, $user, $permissions)
    {
        parent::privateCore($response, $user, $permissions);
                $this->agentes = (new \FacturaScripts\Dinamic\Model\Agente())->all();


        // Ejecutar acción AJAX si la hay
        $action = $this->request->request->get('action', $this->request->query->get('action', ''));
        if (!empty($action) && $this->execPreviousAction($action)) {
            return;
        } 
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
            case 'saveSingleOpportunityAjax':
                $this->saveSingleOpportunityAjax();
                return true;
            case 'toggleActividadStatusAjax':
                $this->toggleActividadStatusAjax();
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

// === FILTROS FIJOS ===
if ($codagente !== 'all') {
    $where[] = new DataBaseWhere('codagente', $codagente);
}
if (!empty($fechaDesde)) {
    $where[] = new DataBaseWhere('fecha_cierre_prevista', $fechaDesde, '>=');
}
if (!empty($fechaHasta)) {
    $where[] = new DataBaseWhere('fecha_cierre_prevista', $fechaHasta, '<=');
}

// === FILTRO DE TEXTO AGRUPADO CORRECTAMENTE ===
if (!empty($query)) {
    // Creamos un marcador especial que inicia el grupo de OR
    $where[] = new DataBaseWhere('(', null, '', 'AND'); // empieza grupo

    $where[] = new DataBaseWhere('nombre', '%' . $query . '%', 'LIKE');
    $where[] = new DataBaseWhere('descripcion', '%' . $query . '%', 'LIKE', 'OR');
    $where[] = new DataBaseWhere(
        'codcliente',
        "SELECT codcliente FROM clientes WHERE nombre LIKE " . $this->dataBase->var2str('%' . $query . '%'),
        'IN',
        'OR'
    );

    // Cierra el grupo de OR
    $where[] = new DataBaseWhere(')', null, '', 'AND');
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
                    'nombre_agente' => $agenteNombre,
                    'objetivos_negocio' => $oportunidad->objetivos_negocio, // <--- ¡NUEVO!
                    'puntos_dolor' => $oportunidad->puntos_dolor, // <--- ¡NUEVO!
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
                    $oportunidad->objetivos_negocio = $data['objetivos_negocio'];
                    $oportunidad->puntos_dolor = $data['puntos_dolor'];
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
                $oportunidad->objetivos_negocio = $data['objetivos_negocio'];
                $oportunidad->puntos_dolor = $data['puntos_dolor'];
                // 🟢 Aquí también, igual:
                $oportunidad->codagente = empty($data['codagente']) ? $this->user->codagente : $data['codagente'];
                $oportunidad->ultima_actividad = date('Y-m-d H:i:s');
                $oportunidad->save();
            }
        }

        
        $this->dataBase->commit();
        ob_end_clean();
         // ▼▼▼ CORRECCIÓN FINAL Y VERIFICADA ▼▼▼
         $mrp = new MultiRequestProtection();
         $this->response->setContent(json_encode([
             'status' => 'ok', 
             'message' => 'Pipeline guardado.',
             'newToken' => $mrp->newToken() 
         ]));

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
      // ==========================================================================
    // FUNCIONES PARA GESTIONAR ACTIVIDADES
    // ==========================================================================

    

    public function getActividadesListAjax()
    {
        $this->template = false;
        header('Content-Type: application/json');
    
        // 1. Recogemos el ID de la oportunidad desde la URL
        $idOportunidad = (int) $this->request->query->get('idoportunidad');
        if ($idOportunidad <= 0) {
            $this->response->setContent(json_encode(['pendientes' => [], 'completadas' => []]));
            $this->response->send();
            exit();
        }
    
        // 2. Buscamos todas las actividades para esa oportunidad
        $actividadModel = new \FacturaScripts\Plugins\MartosOS\Model\Actividad();
        $where = [new \FacturaScripts\Core\Base\DataBase\DataBaseWhere('idoportunidad', $idOportunidad)];
        // CORRECCIÓN: Usamos el nombre de tu columna "fecha" para ordenar
        $todas = $actividadModel->all($where, ['fecha' => 'DESC']);
    
        // 3. Las separamos en dos listas: pendientes y completadas
        $pendientes = array_filter($todas, function($act) {
            return !$act->completada;
        });
        $completadas = array_filter($todas, function($act) {
            return $act->completada;
        });
    
        // 4. Devolvemos las dos listas en formato JSON
        $this->response->setContent(json_encode([
            'pendientes' => array_values($pendientes),
            'completadas' => array_values($completadas)
        ]));
        $this->response->send();
        exit();
    }
    public function createActividadAjax()
{
    $this->template = false;
    header('Content-Type: application/json');
    if (false === $this->validateFormToken()) {
        $this->response->setContent(json_encode(['status' => 'error', 'message' => 'Token no válido.']));
        $this->response->send();
        exit();
    }

    // 1. Recogemos todos los datos del formulario
    $idOportunidad = (int)$this->request->request->get('idoportunidad');
    $tipo = $this->request->request->get('tipo');
    $prioridad = $this->request->request->get('prioridad');
    $descripcion = $this->request->request->get('descripcion');
    $fecha = $this->request->request->get('fecha');
    $hora = $this->request->request->get('hora');

    // 2. Creamos y guardamos el nuevo objeto Actividad
    $actividad = new \FacturaScripts\Plugins\MartosOS\Model\Actividad();
    $actividad->idoportunidad = $idOportunidad;
    $actividad->tipo = $tipo;
    $actividad->prioridad = $prioridad;
    $actividad->descripcion = $descripcion;
    $actividad->fecha = $fecha;
    $actividad->hora = $hora;
    $actividad->codagente = $this->user->codagente;
    // 'completada' y 'estado' se asignan por defecto desde el modelo

    if ($actividad->save()) {
        // 3. Actualizamos la fecha de última actividad en la oportunidad
        $oportunidad = new \FacturaScripts\Plugins\MartosOS\Model\Oportunidad();
        if ($oportunidad->loadFromCode($idOportunidad)) {
            $oportunidad->ultima_actividad = date('Y-m-d H:i:s');
            $oportunidad->save();
        }
        // ▼▼▼ CORRECCIÓN AQUÍ ▼▼▼
        $mrp = new MultiRequestProtection();
        $this->response->setContent(json_encode([
            'status' => 'ok', 
            'message' => 'Actividad creada.',
            'newToken' => $mrp->newToken() // Se añade el nuevo token
        ]));
    } else {
        $this->response->setContent(json_encode(['status' => 'error', 'message' => 'No se pudo crear la actividad.']));
    }
    
    $this->response->send();
    exit();
}
// ... dentro de la clase CRMoportunidades ...

public function saveSingleOpportunityAjax()
{
    $this->template = false;
    header('Content-Type: application/json');

    if (false === $this->validateFormToken()) {
        $this->response->setContent(json_encode(['status' => 'error', 'message' => 'Token de formulario no válido.']));
        $this->response->send();
        exit();
    }
    
    $oportunidad = new Oportunidad();
    $id = $this->request->request->get('id');
    $isInsert = empty($id) || strpos($id, 'new-') === 0;

    if (!$isInsert) {
        if (!$oportunidad->loadFromCode($id)) {
            $this->response->setContent(json_encode(['status' => 'error', 'message' => 'Oportunidad no encontrada.']));
            $this->response->send();
            exit();
        }
    }

    // Leemos los datos directamente de la petición POST
    $oportunidad->nombre = $this->request->request->get('title');
    $oportunidad->valor_estimado = $this->request->request->get('valor');
    $oportunidad->fecha_cierre_prevista = $this->request->request->get('fecha_cierre');
    $oportunidad->codcliente = $this->request->request->get('codcliente');
    $oportunidad->codagente = $this->request->request->get('codagente', $this->user->codagente);
    $oportunidad->probabilidad = (int)$this->request->request->get('probabilidad', 0);
    $oportunidad->objetivos_negocio = $this->request->request->get('objetivos_negocio');
    $oportunidad->puntos_dolor = $this->request->request->get('puntos_dolor');
    $oportunidad->ultima_actividad = date('Y-m-d H:i:s');
    
    // ▼▼▼ LÍNEA AÑADIDA ▼▼▼
    // Si la petición incluye una etapa, la actualizamos también.
    if ($this->request->request->has('etapa')) {
        $oportunidad->etapa = $this->request->request->get('etapa');
    }
    
    if ($oportunidad->save()) {
        // ▼▼▼ CORRECCIÓN FINAL Y VERIFICADA ▼▼▼
        $mrp = new MultiRequestProtection();
        $this->response->setContent(json_encode([
            'status' => 'ok', 
            'message' => 'Oportunidad guardada.',
            'newToken' => $mrp->newToken()
        ]));
    } else {
        $this->response->setContent(json_encode(['status' => 'error', 'message' => 'Error al guardar la oportunidad.']));
    }
    
    $this->response->send();
    exit();
}

// ▼▼▼ FUNCIÓN AÑADIDA ▼▼▼
public function toggleActividadStatusAjax()
{
    $this->template = false;
    header('Content-Type: application/json');

    if (false === $this->validateFormToken()) {
        $this->response->setContent(json_encode(['status' => 'error', 'message' => 'Token de formulario no válido.']));
        $this->response->send();
        exit();
    }

    $idActividad = (int)$this->request->request->get('idactividad');
    $actividad = new Actividad();

    if ($actividad->loadFromCode($idActividad)) {
        $actividad->completada = !$actividad->completada; // Invierte el estado
        
        if ($actividad->save()) {
            // Actualizamos la oportunidad relacionada
            $oportunidad = new Oportunidad();
            if ($oportunidad->loadFromCode($actividad->idoportunidad)) {
                $oportunidad->ultima_actividad = date('Y-m-d H:i:s');
                $oportunidad->save();
            }

            $mrp = new MultiRequestProtection();
            $this->response->setContent(json_encode([
                'status' => 'ok',
                'message' => 'Estado de la actividad actualizado.',
                'newToken' => $mrp->newToken()
            ]));
        } else {
            $this->response->setContent(json_encode(['status' => 'error', 'message' => 'No se pudo guardar el cambio.']));
        }
    } else {
        $this->response->setContent(json_encode(['status' => 'error', 'message' => 'Actividad no encontrada.']));
    }

    $this->response->send();
    exit();
}

}