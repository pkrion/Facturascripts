<?php

namespace FacturaScripts\Plugins\MartosOS\Controller;

use FacturaScripts\Core\Base\Controller;
use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Dinamic\Model\Cliente;
use FacturaScripts\Dinamic\Model\Agente;
use FacturaScripts\Dinamic\Model\FacturaCliente;
use FacturaScripts\Plugins\MartosOS\Model\Oportunidad;
use FacturaScripts\Plugins\MartosOS\Model\Actividad;

class ClientesCRM extends Controller
{
    public $cliente;
    public $clientes;
    public $agentes;
    public $stats;
    public $agenteSeleccionado;
    public $query; // Para el buscador
    public $status; // Para el filtro de estado

    public function getPageData(): array
    {
        $data = parent::getPageData();
        $data['menu'] = 'CRM';
        $data['title'] = 'Gestión de Clientes';
        $data['icon'] = 'fas fa-users';
        return $data;
    }

    public function privateCore(&$response, $user, $permissions)
    {
        parent::privateCore($response, $user, $permissions);
        $this->agentes = (new Agente())->all();

        $action = $this->request->request->get('action', $this->request->query->get('action', ''));
        if (!empty($action) && $this->execPreviousAction($action)) {
            return;
        }

        $this->cliente = new Cliente();
        $idCliente = (int) $this->request->query->get('id', 0);

        if ($idCliente > 0) {
            $this->loadDetailView($idCliente);
        } else {
            $this->loadListView();
        }
    }

    protected function execPreviousAction($action)
    {
        switch ($action) {
            case 'saveClient':
                $this->saveClientAjax();
                return true;
        }
        return parent::execPreviousAction($action);
    }
    
    private function loadListView()
    {
        $this->setTemplate('ClientesListado');

        // --- Lógica de Filtros y Búsqueda ---
        $this->agenteSeleccionado = $this->request->query->get('agente', '');
        $this->query = $this->request->query->get('query', '');
        $this->status = $this->request->query->get('status', 'todos');

        $where = [];
        if (!empty($this->query)) {
            // Buscamos en nombre, cifnif o email
            $where[] = new DataBaseWhere('nombre', '%' . $this->query . '%', 'ILIKE');
        }
        if ($this->status !== 'todos') {
            // Asumimos que el modelo extendido tendrá un campo 'estado'
            // $where[] = new DataBaseWhere('estado', $this->status);
        }
        
        $this->clientes = $this->cliente->all($where, ['nombre' => 'ASC'], 0, 100);

        // --- KPIs ---
        $this->stats = ['totalClientes' => 0, 'valorTotal' => 0, 'oportunidadesTotales' => 0];
        $oportunidadModel = new Oportunidad();
        foreach ($this->clientes as $cliente) {
            $this->stats['totalClientes']++;
            $oportunidades = $oportunidadModel->all([new DataBaseWhere('codcliente', $cliente->codcliente)]);
            $this->stats['oportunidadesTotales'] += count($oportunidades);
            foreach ($oportunidades as $oportunidad) {
                if ($oportunidad->resultado !== 'Perdida') {
                    $this->stats['valorTotal'] += $oportunidad->valor_estimado;
                }
            }
        }
    }

    private function loadDetailView(int $idCliente)
    {
        if (false === $this->cliente->loadFromCode($idCliente)) {
            $this->toolBox()->log()->warning('Cliente no encontrado.');
            $this->redirect('ClientesCRM');
            return;
        }

        $this->pageData['title'] = $this->cliente->nombre;
        $this->setTemplate('ClienteDetalle');
        $this->viewData['cliente'] = $this->cliente;

                // Variables disponibles en el detalle
        $this->oportunidades = (new Oportunidad())->all([
            new DataBaseWhere('codcliente', $this->cliente->codcliente)
        ]);
        $this->timeline = (new Actividad())->all([
            new DataBaseWhere('id_relacion', $this->cliente->codcliente)
        ]);
        $this->facturas = (new FacturaCliente())->all([
            new DataBaseWhere('codcliente', $this->cliente->codcliente)
        ]);
    }
    private function saveClientAjax()
    {
        // Esta función recibirá los datos del modal para guardar un nuevo cliente o editar uno existente.
        // La implementaremos en el siguiente paso.
        $this->template = false;
        $this->response->setJsonContent(['status' => 'ok', 'message' => 'Cliente guardado (simulación)']);
    }
}