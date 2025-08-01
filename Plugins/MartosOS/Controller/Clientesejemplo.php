<?php

namespace FacturaScripts\Plugins\MartosOS\Controller;

use FacturaScripts\Core\Base\DataBase\DataBaseWhere;

use FacturaScripts\Plugins\MartosOS\Model\Oportunidad;
use FacturaScripts\Plugins\MartosOS\Model\Actividad;
use FacturaScripts\Dinamic\Model\Cliente;
use FacturaScripts\Dinamic\Model\User;
use FacturaScripts\Core\DataSrc\Agentes;
use FacturaScripts\Core\Base\Tools;
use FacturaScripts\Core\Base\Controller;
class Clientesejemplo extends Controller
{
    public function getPageData(): array
    {
                $data = parent::getPageData();
        $data['menu'] = 'CRM';
        $data['title'] = 'clienye';
        $data['icon'] = 'fa-solid fa-bolt';
        $data['ordernum'] = 'clienye';

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
       /* switch ($action) {
           
        }
        return parent::execPreviousAction($action);*/
    }

    protected function loadData($viewName, $view)
    {
    }
}