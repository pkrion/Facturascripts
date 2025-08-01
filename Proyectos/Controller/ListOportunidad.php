<?php

namespace FacturaScripts\Plugins\Proyectos\Controller;

use FacturaScripts\Core\Base\Controller;
use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Plugins\Proyectos\Model\Oportunidad;
use FacturaScripts\Dinamic\Model\Cliente;

class ListOportunidad extends Controller
{
    public function getPageData(): array
    {
        $data = parent::getPageData();
        $data['menu'] = 'sales';
        $data['title'] = 'Pipeline de Ventas';
        $data['icon'] = 'fa-solid fa-funnel-dollar';
        return $data;
    }

    public function privateCore(&$response, $user, $permissions)
    {
        parent::privateCore($response, $user, $permissions);
        $this->setTemplate('PipelineOportunidades');
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
        }
        return parent::execPreviousAction($action);
    }

    public function getKanbanDataAjax()
{
    $this->template = false;
    header('Content-Type: application/json');
    $this->response->setContent(json_encode(['test' => 'FUNCIONA']));
    $this->response->send();
    exit();
}

    public function saveKanbanStateAjax()
    {
        ob_start();
        $this->template = false;

        if (false === $this->validateFormToken()) {
            $this->response->setContent(json_encode(['status' => 'error', 'message' => 'Token de formulario no válido.']));
            ob_end_clean();
            $this->response->send();
            exit();
        }

        $state = json_decode($this->request->request->get('tasks'), true);
        if (is_null($state)) {
            $this->response->setContent(json_encode(['status' => 'error', 'message' => 'Datos no válidos.']));
            ob_end_clean();
            $this->response->send();
            exit();
        }
        
        $this->dataBase->beginTransaction();
        foreach($state as $update) {
            $oportunidad = new Oportunidad();
            if ($oportunidad->loadFromCode($update['idTarea'])) {
                $oportunidad->etapa = $update['idFase'];
                if(false === $oportunidad->save()) {
                    $this->dataBase->rollback();
                    $this->response->setContent(json_encode(['status' => 'error', 'message' => 'No se pudo guardar la oportunidad.']));
                    ob_end_clean();
                    $this->response->send();
                    exit();
                }
            }
        }

        $this->dataBase->commit();
        ob_end_clean();
        $this->response->setContent(json_encode(['status' => 'ok', 'message' => 'Pipeline guardado.']));
        $this->response->send();
        exit();
    }
}