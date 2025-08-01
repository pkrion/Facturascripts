<?php
/**
 * This file is part of Proyectos plugin for FacturaScripts
 * Copyright (C) 2020-2025 Carlos Garcia Gomez <carlos@facturascripts.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */

namespace FacturaScripts\Plugins\Proyectos\Controller;

use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Core\Cache;
use FacturaScripts\Core\DataSrc\Agentes;
use FacturaScripts\Core\DataSrc\Almacenes;
use FacturaScripts\Core\DataSrc\Divisas;
use FacturaScripts\Core\DataSrc\Empresas;
use FacturaScripts\Core\DataSrc\FormasPago;
use FacturaScripts\Core\DataSrc\GruposClientes;
use FacturaScripts\Core\DataSrc\Series;
use FacturaScripts\Core\Lib\ExtendedController\EditController;
use FacturaScripts\Core\Lib\ExtendedController\EditView;
use FacturaScripts\Core\Lib\InvoiceOperation;
use FacturaScripts\Core\Tools;
use FacturaScripts\Dinamic\Lib\ProjectStockManager;
use FacturaScripts\Dinamic\Lib\ProjectTotalManager;
use FacturaScripts\Dinamic\Model\EstadoDocumento;
use FacturaScripts\Dinamic\Model\FaseTarea;
// --- AÑADE ESTAS DOS LÍNEAS AQUÍ ---
use FacturaScripts\Dinamic\Model\TareaProyecto; // ¡Esta es la clave!

// ------------------------------------
use FacturaScripts\Dinamic\Model\Proyecto;
use FacturaScripts\Dinamic\Model\EstadoAT;

/**
 * Description of EditProyecto
 *
 * @author Carlos Garcia Gomez <carlos@facturascripts.com>
 */
class EditProyecto extends EditController
{
    public function getModelClassName(): string
    {
        return 'Proyecto';
    }

    public function getPageData(): array
    {
        $data = parent::getPageData();
        $data['menu'] = 'projects';
        $data['title'] = 'project';
        $data['icon'] = 'fa-brands fa-stack-overflow';
        $data['showonmenu'] = false;
        return $data;
    }

    protected function addColorStatus(string $viewName, string $modelName): void
    {
        $estadoDocumento = new EstadoDocumento();
        $where = [new DataBaseWhere('tipodoc', $modelName)];
        foreach ($estadoDocumento->all($where, [], 0, 0) as $status) {
            if ($status->color) {
                $this->listView($viewName)->addColor('idestado', $status->idestado, $status->color, $status->nombre);
            }
        }
    }

    protected function addCommonSalesPurchases(string $viewName, string $modelName)
    {
        // desactivamos la columna de proyecto
        $this->listView($viewName)->disableColumn('project');

        // añadimos botón para enlazar documentos
        $this->addButton($viewName, [
            'type' => 'modal',
            'action' => 'link-up-' . $modelName,
            'icon' => 'fa-solid fa-link',
            'label' => 'link-document'
        ]);

        // desactivamos el botón de eliminar
        $this->listView($viewName)->setSettings('btnDelete', false);
    }

    protected function addCommonViewFilters(string $viewName, string $modelName): void
    {
        $this->listView($viewName)
            ->addFilterPeriod('date', 'period', 'fecha')
            ->addFilterNumber('min-total', 'total', 'total', '>=')
            ->addFilterNumber('max-total', 'total', 'total', '<=');

        $where = [new DataBaseWhere('tipodoc', $modelName)];
        $statusValues = $this->codeModel->all('estados_documentos', 'idestado', 'nombre', true, $where);
        $this->listView($viewName)->addFilterSelect('idestado', 'state', 'idestado', $statusValues);

        if ($this->permissions->onlyOwnerData === false) {
            $users = $this->codeModel->all('users', 'nick', 'nick');
            if (count($users) > 1) {
                $this->listView($viewName)->addFilterSelect('nick', 'user', 'nick', $users);
            }
        }

        $companies = Empresas::codeModel();
        if (count($companies) > 2) {
            $this->listView($viewName)->addFilterSelect('idempresa', 'company', 'idempresa', $companies);
        }

        $warehouses = Almacenes::codeModel();
        if (count($warehouses) > 2) {
            $this->listView($viewName)->addFilterSelect('codalmacen', 'warehouse', 'codalmacen', $warehouses);
        }

        $series = Series::codeModel();
        if (count($series) > 2) {
            $this->listView($viewName)->addFilterSelect('codserie', 'series', 'codserie', $series);
        }

        $operations = [['code' => '', 'description' => '------']];
        foreach (InvoiceOperation::all() as $key => $value) {
            $operations[] = [
                'code' => $key,
                'description' => Tools::lang()->trans($value)
            ];
        }
        $this->listView($viewName)->addFilterSelect('operacion', 'operation', 'operacion', $operations);

        $payMethods = FormasPago::codeModel();
        if (count($payMethods) > 2) {
            $this->listView($viewName)->addFilterSelect('codpago', 'payment-method', 'codpago', $payMethods);
        }

        $currencies = Divisas::codeModel();
        if (count($currencies) > 2) {
            $this->listView($viewName)->addFilterSelect('coddivisa', 'currency', 'coddivisa', $currencies);
        }

        $this->listView($viewName)
            ->addFilterCheckbox('totalrecargo', 'surcharge', 'totalrecargo', '!=', 0)
            ->addFilterCheckbox('totalirpf', 'retention', 'totalirpf', '!=', 0)
            ->addFilterCheckbox('totalsuplidos', 'supplied-amount', 'totalsuplidos', '!=', 0)
            ->addFilterCheckbox('numdocs', 'has-attachments', 'numdocs', '!=', 0);
    }

    protected function createViews()
    {
        parent::createViews();

        // disable company column if there is only one company
        if ($this->empresa->count() < 2) {
            $this->views[$this->getMainViewName()]->disableColumn('company');
        }

        $this->createViewsTasks();
        $this->createViewsNotes();
        $this->createViewsStock();
        $this->createViewsServices();
        $this->createViewPurchases('PresupuestoProveedor', 'supplier-estimations');
        $this->createViewPurchases('PedidoProveedor', 'supplier-orders');
        $this->createViewPurchases('AlbaranProveedor', 'supplier-delivery-notes');
        $this->createViewPurchases('FacturaProveedor', 'supplier-invoices');
        $this->createViewSales('PresupuestoCliente', 'customer-estimations');
        $this->createViewSales('PedidoCliente', 'customer-orders');
        $this->createViewSales('AlbaranCliente', 'customer-delivery-notes');
        $this->createViewSales('FacturaCliente', 'customer-invoices');
        $this->createViewsUsers();
        $this->createViewsKanban();
        

    }
  
    protected function createViewsKanban(): void
    {
        $this->addHtmlView(
            'KanbanProyecto', // Nombre de la VISTA (y del archivo .html.twig)
            'KanbanProyecto', // Nombre del TEMPLATE (el mismo archivo)
            'Proyecto',       // Modelo principal
            'Kanban',         // Título de la pestaña
            'fa-tasks'        // Icono de la pestaña
        );
    }

    protected function createViewPurchases(string $modelName, string $label)
    {
        $viewName = 'List' . $modelName;
        $this->addlISTView($viewName, $modelName, $label, 'fa-solid fa-copy')
            ->addOrderBy(['codigo'], 'code')
            ->addOrderBy(['fecha', $this->tableColToNumber('numero')], 'date', 2)
            ->addOrderBy([$this->tableColToNumber('numero')], 'number')
            ->addOrderBy(['numproveedor'], 'numsupplier')
            ->addOrderBy(['codproveedor'], 'supplier-code')
            ->addOrderBy(['total'], 'total')
            ->addSearchFields(['cifnif', 'codigo', 'nombre', 'numproveedor', 'observaciones'])
            ->setSettings('btnNew', false);

        // filtros
        $this->addCommonViewFilters($viewName, $modelName);
        $this->listView($viewName)
            ->addFilterAutocomplete('codproveedor', 'supplier', 'codproveedor', 'Proveedor')
            ->addFilterCheckbox('femail', 'email-not-sent', 'femail', 'IS', null);

        // asignamos los colores
        $this->addColorStatus($viewName, $modelName);

        $this->addCommonSalesPurchases($viewName, $modelName);
    }

    protected function createViewSales(string $modelName, string $label)
    {
        $viewName = 'List' . $modelName;
        $this->addListView($viewName, $modelName, $label, 'fa-solid fa-copy')
            ->addOrderBy(['codigo'], 'code')
            ->addOrderBy(['codcliente'], 'customer-code')
            ->addOrderBy(['fecha', $this->tableColToNumber('numero')], 'date', 2)
            ->addOrderBy([$this->tableColToNumber('numero')], 'number')
            ->addOrderBy(['numero2'], 'number2')
            ->addOrderBy(['total'], 'total')
            ->addSearchFields(['cifnif', 'codigo', 'codigoenv', 'nombrecliente', 'numero2', 'observaciones'])
            ->setSettings('btnNew', false);

        if ($modelName === 'PresupuestoCliente') {
            $this->listView($viewName)->addOrderBy(['finoferta'], 'expiration');
        }

        $this->addCommonViewFilters($viewName, $modelName);

        // filtramos por grupos de clientes
        $optionsGroup = [
            ['label' => Tools::lang()->trans('any-group'), 'where' => []],
            [
                'label' => Tools::lang()->trans('without-groups'),
                'where' => [new DataBaseWhere('codcliente', "SELECT DISTINCT codcliente FROM clientes WHERE codgrupo IS NULL", 'IN')]
            ],
            ['label' => '------', 'where' => []],
        ];
        foreach (GruposClientes::all() as $grupo) {
            $sqlGrupo = 'SELECT DISTINCT codcliente FROM clientes WHERE codgrupo = ' . $this->dataBase->var2str($grupo->codgrupo);
            $optionsGroup[] = [
                'label' => $grupo->nombre,
                'where' => [new DataBaseWhere('codcliente', $sqlGrupo, 'IN')]
            ];
        }
        if (count($optionsGroup) > 3) {
            $this->listView($viewName)->addFilterSelectWhere('codgrupo', $optionsGroup);
        }

        // filtramos por clientes y direcciones
        $this->listView($viewName)
            ->addFilterAutocomplete('codcliente', 'customer', 'codcliente', 'Cliente')
            ->addFilterAutocomplete('idcontactofact', 'billing-address', 'idcontactofact', 'contactos', 'idcontacto', 'direccion')
            ->addFilterautocomplete('idcontactoenv', 'shipping-address', 'idcontactoenv', 'contactos', 'idcontacto', 'direccion');

        if ($this->permissions->onlyOwnerData === false) {
            $agents = Agentes::codeModel();
            if (count($agents) > 1) {
                $this->listView($viewName)->addFilterSelect('codagente', 'agent', 'codagente', $agents);
            }
        }

        $carriers = $this->codeModel->all('agenciastrans', 'codtrans', 'nombre');
        $this->listView($viewName)
            ->addFilterSelect('codtrans', 'carrier', 'codtrans', $carriers)
            ->addFilterCheckbox('femail', 'email-not-sent', 'femail', 'IS', null);

        // asignamos los colores
        $this->addColorStatus($viewName, $modelName);

        $this->addCommonSalesPurchases($viewName, $modelName);
    }

    protected function createViewsNotes(string $viewName = 'ListNotaProyecto'): void
    {
        $this->addListView($viewName, 'NotaProyecto', 'notes', 'fa-solid fa-sticky-note')
            ->addOrderBy(['fecha'], 'date', 2)
            ->addSearchFields(['descripcion']);

        $status = $this->codeModel->all('tareas', 'idtarea', 'nombre');
        $this->views[$viewName]->addFilterSelect('idtarea', 'task', 'idtarea', $status);
    }

    protected function createViewsServices(string $viewName = 'ListServicioAT'): void
    {
        if (false === class_exists('\\FacturaScripts\\Dinamic\\Model\\ServicioAT')) {
            return;
        }

        $this->addListView($viewName, 'ServicioAT', 'services', 'fa-solid fa-headset')
            ->addOrderBy(['fecha', 'hora'], 'date', 2)
            ->addOrderBy(['idprioridad'], 'priority')
            ->addOrderBy(['idservicio'], 'code')
            ->addOrderBy(['neto'], 'net')
            ->addSearchFields(['descripcion', 'idservicio', 'material', 'observaciones', 'solucion']);

        // filters
        $this->views[$viewName]->addFilterPeriod('fecha', 'date', 'fecha')
            ->addFilterAutocomplete('codcliente', 'customer', 'codcliente', 'clientes', 'codcliente', 'nombre');

        $priority = $this->codeModel->all('serviciosat_prioridades', 'id', 'nombre');
        $this->views[$viewName]->addFilterSelect('idprioridad', 'priority', 'idprioridad', $priority);

        $status = $this->codeModel->all('serviciosat_estados', 'id', 'nombre');
        $this->views[$viewName]->addFilterSelect('idestado', 'status', 'idestado', $status);

        $users = $this->codeModel->all('users', 'nick', 'nick');
        $this->views[$viewName]->addFilterSelect('nick', 'user', 'nick', $users);

        $agents = $this->codeModel->all('agentes', 'codagente', 'nombre');
        $this->views[$viewName]->addFilterSelect('codagente', 'agent', 'codagente', $agents);

        $this->views[$viewName]->addFilterNumber('netogt', 'net', 'neto', '>=')
            ->addFilterNumber('netolt', 'net', 'neto', '<=');

        // asignamos colores
        $estadoModel = new EstadoAT();
        foreach ($estadoModel->all() as $estado) {
            if (empty($estado->color)) {
                continue;
            }

            $this->views[$viewName]->getRow('status')->options[] = [
                'tag' => 'option',
                'children' => [],
                'color' => $estado->color,
                'fieldname' => 'idestado',
                'text' => $estado->id,
                'title' => $estado->nombre
            ];
        }

        // desactivamos el botón de eliminar
        $this->setSettings($viewName, 'btnDelete', false);
    }

    protected function createViewsStock(string $viewName = 'ListStockProyecto'): void
    {
        if (false === (bool)Tools::settings('proyectos', 'stock', false)) {
            return;
        }

        $this->addListView($viewName, 'StockProyecto', 'stock', 'fa-solid fa-dolly')
            ->addSearchFields(['referencia'])
            ->addOrderBy(['referencia'], 'reference')
            ->addOrderBy(['cantidad'], 'quantity')
            ->addOrderBy(['disponible'], 'available')
            ->addOrderBy(['reservada'], 'reserved')
            ->addOrderBy(['pterecibir'], 'pending-reception');

        // filters
        $this->views[$viewName]->addFilterNumber('cantidad', 'quantity', 'cantidad')
            ->addFilterNumber('reservada', 'reserved', 'reservada')
            ->addFilterNumber('pterecibir', 'pending-reception', 'pterecibir')
            ->addFilterNumber('disponible', 'available', 'disponible');

        // disable column
        $this->views[$viewName]->disableColumn('project');

        // disable buttons
        $this->setSettings($viewName, 'btnDelete', false);
        $this->setSettings($viewName, 'btnNew', false);
        $this->setSettings($viewName, 'checkBoxes', false);

        if ($this->user->admin) {
            $this->addButton($viewName, [
                'action' => 'rebuild-stock',
                'color' => 'warning',
                'confirm' => true,
                'icon' => 'fa-solid fa-magic',
                'label' => 'rebuild-stock'
            ]);
        }
    }

    protected function createViewsTasks(string $viewName = 'ListTareaProyecto'): void
    {
        $this->addListView($viewName, 'TareaProyecto', 'tasks', 'fa-solid fa-project-diagram')
            ->addOrderBy(['fecha'], 'date')
            ->addOrderBy(['fechainicio'], 'start-date')
            ->addOrderBy(['fechafin'], 'end-date')
            ->addOrderBy(['nombre'], 'name', 1)
            ->addOrderBy(['descripcion'], 'description')
            ->addSearchFields(['descripcion', 'nombre']);

        // filters
        $this->views[$viewName]->addFilterPeriod('fecha', 'date', 'fecha');

        $status = $this->codeModel->all('tareas_fases', 'idfase', 'nombre');
        $this->views[$viewName]->addFilterSelect('idfase', 'phase', 'idfase', $status);

        // disable columns
        $this->views[$viewName]->disableColumn('project');
        $this->views[$viewName]->disableColumn('company');

        $this->addButton($viewName, [
            'type' => 'modal',
            'action' => 'import-task',
            'icon' => 'fa-solid fa-file-import',
            'label' => 'import'
        ]);
    }

    protected function createViewsUsers(string $viewName = 'EditUserProyecto'): void
    {
        $this->addEditListView($viewName, 'UserProyecto', 'users', 'fa-solid fa-users');

        // disable column
        $this->views[$viewName]->disableColumn('project');
    }

    /**
     * @param EditView $view
     */
    protected function disableProjectColumns(&$view)
    {
        foreach ($view->getColumns() as $group) {
            foreach ($group->columns as $col) {
                if ($col->name !== 'status') {
                    $view->disableColumn($col->name, false, 'true');
                }
            }
        }
    }

    /**
     * @param string $action
     *
     * @return bool
     */
    protected function execPreviousAction($action)
    {
        switch ($action) {
             // --- NUESTRAS DOS NUEVAS ACCIONES ---
            case 'getKanbanDataAjax':
                $this->getKanbanDataAjax();
                return true; // Devolvemos true para detener la ejecución y no renderizar HTML

            // En el switch de execPreviousAction()
            case 'saveKanbanStateAjax': // Añade o reemplaza con esta
                $this->saveKanbanStateAjax();
                return true;
            // ...// Devolvemos true para detener la ejecución

        // --- ACCIONES EXISTENTES ---
            case 'import-task':
                return $this->importTaskAction();

            case 'link-up-PresupuestoCliente':
            case 'link-up-PedidoCliente':
            case 'link-up-AlbaranCliente':
            case 'link-up-FacturaCliente':
            case 'link-up-PresupuestoProveedor':
            case 'link-up-PedidoProveedor':
            case 'link-up-AlbaranProveedor':
            case 'link-up-FacturaProveedor':
                $parts = explode('-', $action);
                return $this->linkUpAction(end($parts));

            case 'rebuild-stock':
                $this->rebuildStockAction();
                return true;

            case 'unlink-up-PresupuestoCliente':
            case 'unlink-up-PedidoCliente':
            case 'unlink-up-AlbaranCliente':
            case 'unlink-up-FacturaCliente':
            case 'unlink-up-PresupuestoProveedor':
            case 'unlink-up-PedidoProveedor':
            case 'unlink-up-AlbaranProveedor':
            case 'unlink-up-FacturaProveedor':
                $parts = explode('-', $action);
                return $this->unlinkUpAction(end($parts));

            default:
                return parent::execPreviousAction($action);
        }
    }

    protected function importTaskAction(): bool
    {
        if (false === $this->permissions->allowUpdate) {
            Tools::log()->warning('not-allowed-to-update');
            return true;
        } elseif (false === $this->validateFormToken()) {
            return true;
        }

        // cargamos el proyecto actual
        $origProject = new Proyecto();
        if (false === $origProject->loadFromCode($this->request->get('code', ''))) {
            return true;
        }

        // obtenemos el ID del proyecto a copiar
        $copyProject = new Proyecto();
        if (false === $copyProject->loadFromCode($this->request->get('idproyecto', '')) ||
            $origProject->idproyecto === $copyProject->idproyecto) {
            return true;
        }

        $newTransaction = $this->dataBase->inTransaction();
        if (false === $newTransaction) {
            $newTransaction = true;
            $this->dataBase->beginTransaction();
        }

        // obtenemos la fase predefinida
        $idFase = null;
        foreach (FaseTarea::all() as $faseTarea) {
            if ($faseTarea->predeterminado) {
                $idFase = $faseTarea->idfase;
                break;
            }
        }

        // obtenemos las tareas del proyecto a copiar y las insertamos en el proyecto actual
        foreach ($copyProject->getTasks() as $task) {
            $task->idtarea = null;
            $task->fecha = Tools::dateTime();
            $task->idfase = $idFase;
            $task->idproyecto = $origProject->idproyecto;
            if (false === $task->save()) {
                if ($newTransaction) {
                    $this->dataBase->rollback();
                }
                Tools::log()->warning('tasks-not-imported');
                return true;
            }
        }

        if ($newTransaction) {
            $this->dataBase->commit();
        }

        Tools::log()->notice('tasks-imported-correctly');
        return true;
    }

    protected function linkUpAction(string $modelName): bool
    {
        if (false === $this->permissions->allowUpdate) {
            Tools::log()->warning('not-allowed-to-update');
            return true;
        } elseif (false === $this->validateFormToken()) {
            return true;
        }

        $modelClass = '\\FacturaScripts\\Dinamic\\Model\\' . $modelName;
        $model = new $modelClass();
        $modelTable = $model->tableName();
        $modelKey = $model->primaryColumn();
        $code = $this->request->request->get('linkupcode', '');
        $idproyecto = $this->request->get('code', '');

        $sql = "UPDATE $modelTable SET idproyecto = " . $this->dataBase->var2str($idproyecto)
            . " WHERE " . $this->dataBase->escapeColumn($modelKey) . " = " . $this->dataBase->var2str($code) . ';';
        if (false === $this->dataBase->exec($sql)) {
            Tools::log()->error('record-save-error');
            return true;
        }

        ProjectStockManager::rebuild($idproyecto);
        ProjectTotalManager::recalculate($idproyecto);

        Tools::log()->info('record-updated-correctly');
        return true;
    }

    /**
     * @param string $viewName
     * @param EditView $view
     */
    protected function loadData($viewName, $view)
    {
        $mainViewName = $this->getMainViewName();
        $idproyecto = $this->getViewModelValue($mainViewName, 'idproyecto');

        switch ($viewName) {
            case $mainViewName:
                parent::loadData($viewName, $view);
                if (false === $view->model->exists()) {
                    $view->model->idempresa = $this->user->idempresa;
                } elseif (false === $view->model->userCanSee($this->user)) {
                    $this->setTemplate('Error/AccessDenied');
                } elseif (false === $view->model->editable) {
                    $this->disableProjectColumns($view);
                    $this->setSettings('EditUserProyecto', 'active', false);
                } elseif (false === $view->model->privado) {
                    $this->setSettings('EditUserProyecto', 'active', false);
                }
                break;

            case 'EditUserProyecto':
            case 'ListNotaProyecto':
            case 'ListStockProyecto':
            case 'ListTareaProyecto':
            case 'ListServicioAT':
                $where = [new DataBaseWhere('idproyecto', $idproyecto)];
                $view->loadData('', $where);
                break;

            case 'ListAlbaranCliente':
            case 'ListAlbaranProveedor':
            case 'ListFacturaCliente':
            case 'ListFacturaProveedor':
            case 'ListPedidoCliente':
            case 'ListPedidoProveedor':
            case 'ListPresupuestoCliente':
            case 'ListPresupuestoProveedor':
                $where = [new DataBaseWhere('idproyecto', $idproyecto)];
                $view->loadData('', $where);

                // añadimos el botón de nuevo documento
                $codcliente = $this->getViewModelValue($mainViewName, 'codcliente');
                $url = $view->model->url('edit') . '?idproyecto=' . $idproyecto;
                if (false === empty($codcliente)
                    && in_array($view->model->modelClassName(), ['PresupuestoCliente', 'PedidoCliente', 'AlbaranCliente', 'FacturaCliente'])) {
                    $url .= '&codcliente=' . $codcliente;
                }
                $this->addButton($viewName, [
                    'type' => 'link',
                    'action' => $url,
                    'color' => 'success',
                    'icon' => 'fa-solid fa-plus',
                ]);

                // si hay documentos añadimos el botón de desvincular
                if ($view->count > 0) {
                    $this->addButton($viewName, [
                        'type' => 'action',
                        'action' => 'unlink-up-' . $view->model->modelClassName(),
                        'color' => 'warning',
                        'icon' => 'fa-solid fa-unlink',
                        'label' => 'unlink-document'
                    ]);
                }
                break;
        }
    }

    protected function rebuildStockAction(int $idproyecto = null): void
    {
        if (empty($idproyecto)) {
            $idproyecto = (int)$this->request->query->get('code');
        }

        if (ProjectStockManager::rebuild($idproyecto)) {
            ProjectTotalManager::recalculate($idproyecto);

            // limpiamos caché para forzar actualizar los totales de los listados
            Cache::clear();
            Tools::log()->notice('project-stock-rebuild-ok');
            return;
        }

        Tools::log()->warning('project-stock-rebuild-error');
    }

    private function tableColToNumber(string $name): string
    {
        return strtolower(FS_DB_TYPE) == 'postgresql' ?
            'CAST(' . $name . ' as integer)' :
            'CAST(' . $name . ' as unsigned)';
    }

    protected function unlinkUpAction(string $modelName): bool
    {
        if (false === $this->permissions->allowUpdate) {
            Tools::log()->warning('not-allowed-to-update');
            return true;
        } elseif (false === $this->validateFormToken()) {
            return true;
        }

        // obtenemos el proyecto
        $project = $this->getModel();
        if (false === $project->loadFromCode($this->request->get('code', ''))) {
            return true;
        }

        $modelClass = '\\FacturaScripts\\Dinamic\\Model\\' . $modelName;
        $model = new $modelClass();
        $modelTable = $model->tableName();
        $modelKey = $model->primaryColumn();
        $codes = $this->request->request->get('code', []);
        if (empty($codes)) {
            Tools::log()->warning('no-selected-item');
            return true;
        }

        foreach ($codes as $code) {
            $sql = "UPDATE $modelTable SET idproyecto = NULL WHERE "
                . $this->dataBase->escapeColumn($modelKey) . " = " . $this->dataBase->var2str($code) . ';';
            if (false === $this->dataBase->exec($sql)) {
                Tools::log()->error('record-save-error');
                return false;
            }
        }

        ProjectStockManager::rebuild($project->idproyecto);
        ProjectTotalManager::recalculate($project->idproyecto);

        Tools::log()->info('record-updated-correctly');
        return true;
    }

 // Reemplaza esta función en tu archivo EditProyecto.php con la versión final y verificada.


// Reemplaza estas dos funciones en tu archivo EditProyecto.php. Esta es la versión final.

// Reemplaza estas dos funciones en tu archivo EditProyecto.php. Esta es la versión final.

// Reemplaza estas dos funciones en tu archivo EditProyecto.php. Esta es la versión final.

// Reemplaza esta función en tu archivo EditProyecto.php con la versión final y verificada.

// Reemplaza esta función en tu archivo EditProyecto.php

// Reemplaza esta función en tu archivo EditProyecto.php

// Reemplaza esta función en tu archivo EditProyecto.php

// Reemplaza esta función en tu archivo EditProyecto.php

// Reemplaza esta función en tu archivo EditProyecto.php con la versión final y robusta.

// Reemplaza esta función en tu archivo EditProyecto.php con la versión final y robusta.

public function getKanbanDataAjax()
{
    $this->template = false;
    header('Content-Type: application/json');

    $idProyecto = $this->request->query->get('code');
    if (empty($idProyecto)) {
        $this->response->setContent(json_encode(['error' => 'ID de proyecto no proporcionado.']));
        $this->response->send();
        exit();
    }

    // 1. OBTENER LAS FASES Y PREPARAR LOS "BOARDS" DE FORMA ROBUSTA
    // Esta es la nueva línea con el orden añadido
$fases = $this->codeModel->all('tareas_fases', 'idfase', 'nombre', true, [], ['orden' => 'DESC']);
    $kanbanBoards = [];
    $allBoardIds = [];

    // Primero, creamos un array asociativo usando los IDs de las fases como claves.
    // Esto evita cualquier error con índices numéricos.
    foreach ($fases as $fase) {
        if (!empty($fase->code)) { // Solo procesamos fases con un ID válido
            $boardId = $fase->code;
            $allBoardIds[] = $boardId;
            $kanbanBoards[$boardId] = [
                'id' => $boardId,
                'title' => $fase->description,
                'item' => [] // Array de tareas vacío por ahora
            ];
        }
    }

    // 2. OBTENER LAS TAREAS Y AÑADIRLAS A SUS BOARDS
    $tareaModel = new TareaProyecto();
    $where = [new DataBaseWhere('idproyecto', $idProyecto)];
    $tareas = $tareaModel->all($where);

    foreach ($tareas as $tarea) {
        $idFaseDeLaTarea = $tarea->idfase;
        // Si la fase de la tarea existe como una clave en nuestro array, la añadimos.
        if (isset($kanbanBoards[$idFaseDeLaTarea])) {
            $kanbanBoards[$idFaseDeLaTarea]['item'][] = [
                'id' => $tarea->idtarea,
                'title' => $tarea->nombre,
                'description' => $tarea->descripcion,
                'category' => $tarea->categoria,
                'dueDate' => $tarea->fechafin
            ];
        }
    }

    // 3. AÑADIR LA PROPIEDAD 'dragTo' Y CONVERTIR A UN ARRAY NORMAL
    $finalBoards = [];
    foreach ($kanbanBoards as $boardId => $boardData) {
        $dragToIds = [];
        foreach ($allBoardIds as $id) {
            if ($id !== $boardId) {
                $dragToIds[] = $id;
            }
        }
        $boardData['dragTo'] = $dragToIds;
        $finalBoards[] = $boardData;
    }
    
    $this->response->setContent(json_encode($finalBoards));
    $this->response->send();
    exit();
}

// Reemplaza updateTareaFaseAjax con esta nueva función en EditProyecto.php

/**
 * Recibe el estado completo del Kanban y guarda todos los cambios en una transacción.
 */
// Reemplaza esta función en tu archivo EditProyecto.php

/**
 * Recibe el estado completo del Kanban y guarda todos los cambios (actualizaciones, creaciones y eliminaciones).
 */
public function saveKanbanStateAjax()
{

   /* $this->template = false;
    header('Content-Type: application/json');

    // --- ¡AQUÍ ESTÁ LA MAGIA DE LA DEPURACIÓN! ---
    // 1. Obtenemos el string JSON que nos envía el frontend.
    $rawState = $this->request->request->get('state');

    // 2. Escribimos ese string en el log de FacturaScripts para poder verlo.
    error_log("Datos recibidos en el backend para guardar el Kanban:\n" . $rawState);

    // 3. Devolvemos una respuesta temporal para que el proceso termine limpiamente.
    $this->response->setContent(json_encode(['status' => 'debug', 'message' => 'Datos recibidos, revisa el log.']));
    $this->response->send();
    exit();*/

    // Reemplaza esta función en tu archivo EditProyecto.php con la versión final.
 // 1. Iniciamos el búfer de salida para capturar cualquier aviso inesperado.
 ob_start();

    $this->template = false;
    header('Content-Type: application/json');

   if (false === $this->permissions->allowUpdate) {
        $this->response->setContent(json_encode(['status' => 'error', 'message' => 'Sin permiso para modificar.']));
        $this->response->send();
        exit();
    }
    if (false === $this->validateFormToken()) {
        $this->response->setContent(json_encode(['status' => 'error', 'message' => 'Token de formulario no válido.']));
        $this->response->send();
        exit();
    }

    $state = json_decode($this->request->request->get('state'), true);
    if (is_null($state)) {
        $this->response->setContent(json_encode(['status' => 'error', 'message' => 'Datos no válidos.']));
        $this->response->send();
        exit();
    }

    $this->dataBase->beginTransaction();

    // 1. PROCESAR ELIMINACIONES (sin cambios)
    if (!empty($state['deletes'])) {
        foreach ($state['deletes'] as $idTarea) {
            $tarea = new TareaProyecto();
            if ($tarea->loadFromCode($idTarea) && false === $tarea->delete()) {
                $this->dataBase->rollback();
                $this->response->setContent(json_encode(['status' => 'error', 'message' => 'Error al eliminar la tarea #' . $idTarea]));
                $this->response->send();
                exit();
            }
        }
    }

    // 2. PROCESAR ACTUALIZACIONES (con la corrección)
    if (!empty($state['updates'])) {
        foreach ($state['updates'] as $data) {
            $tarea = new TareaProyecto();
            // --- ¡AQUÍ ESTÁ LA CORRECCIÓN! ---
            if ($tarea->loadFromCode($data['idTarea'])) {
                $tarea->idfase = $data['idFase'];
                $tarea->nombre = $data['title'];
                $tarea->descripcion = $data['description'];
                $tarea->categoria = $data['category'];
                $tarea->fechafin = empty($data['dueDate']) ? null : $data['dueDate'];
                if (false === $tarea->save()) {
                    $this->dataBase->rollback();
                    $this->response->setContent(json_encode(['status' => 'error', 'message' => 'Error al actualizar la tarea #' . $data['idTarea']]));
                    $this->response->send();
                    exit();
                }
            }
        }
    }

     // --- ¡AQUÍ ESTÁ LA CORRECCIÓN! ---
    // 3. PROCESAR CREACIONES (con los campos que faltaban)
    // 3. PROCESAR CREACIONES (con el campo 'cantidad' que faltaba)
    if (!empty($state['inserts'])) {
        error_log("Crenadonueva");

        foreach ($state['inserts'] as $data) {
            error_log("Datos recibidos en el backend para nuevas:\n" . $data);

            $tarea = new TareaProyecto();
            $tarea->idproyecto = $this->request->request->get('idproyecto');
            $tarea->idfase = $data['idFase'];
            $tarea->nombre = $data['title'];
            $tarea->descripcion = $data['description'];
            $tarea->categoria = $data['category'];
            $tarea->fechafin = empty($data['dueDate']) ? null : $data['dueDate'];
            
            // Añadimos los valores por defecto para los campos obligatorios
            $tarea->fecha = \FacturaScripts\Core\Tools::date();
            $tarea->cantidad = 1; // <-- ¡ESTA ES LA LÍNEA CLAVE!

            if (false === $tarea->save()) {
                $this->dataBase->rollback();
                $this->response->setContent(json_encode(['status' => 'error', 'message' => 'Error al crear una nueva tarea.']));
                $this->response->send();
                exit();
            }
        }
    }

    ob_end_clean();
    $this->dataBase->commit();
    $this->response->setContent(json_encode(['status' => 'ok', 'message' => 'Tablero guardado correctamente.']));
    $this->response->send();
    exit();
}
}
