<?php

namespace FacturaScripts\Plugins\Proyectos\Controller;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditOportunidad extends EditController
{
    public function getModelClassName(): string
    {
        return 'Oportunidad';
    }

    public function getPageData(): array
    {
        $data = parent::getPageData();
        $data['title'] = 'Editar Oportunidad';
        $data['menu'] = 'sales';
        $data['icon'] = 'fa-solid fa-handshake';
        return $data;
    }

    protected function createViews(): void
    {
        parent::createViews();

        // Vista principal de edición
        $this->addEditView('EditOportunidad', 'Oportunidad', 'Datos', 'fa-solid fa-pen');
    }
}
