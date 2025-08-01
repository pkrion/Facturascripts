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
class DashboardCRM extends Controller
{
    public function getPageData(): array
    {
                $data = parent::getPageData();
        $data['menu'] = 'CRM';
        $data['title'] = 'Inicio';
        $data['icon'] = 'fa-solid fa-bolt';
      
        return $data;
    }
 

    protected function createViews()
    {
       
        $this->addHtmlView('DashboardCRM', 'DashboardCRM', 'Oportunidad', 'Oportunidades', 'fa-solid fa-grip-vertical');
       
    }

    protected function loadData($viewName, $view)
    {
    }
}