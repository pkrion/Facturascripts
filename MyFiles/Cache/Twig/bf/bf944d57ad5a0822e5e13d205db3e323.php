<?php

use Twig\Environment;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Extension\CoreExtension;
use Twig\Extension\SandboxExtension;
use Twig\Markup;
use Twig\Sandbox\SecurityError;
use Twig\Sandbox\SecurityNotAllowedTagError;
use Twig\Sandbox\SecurityNotAllowedFilterError;
use Twig\Sandbox\SecurityNotAllowedFunctionError;
use Twig\Source;
use Twig\Template;

/* CRMoportunidades.html.twig */
class __TwigTemplate_55aad930ea626520fbcbb527176b71b6 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'css' => [$this, 'block_css'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 1
        return "Master/MenuTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuTemplate.html.twig", "CRMoportunidades.html.twig", 1);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 3
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 4
        yield "    ";
        yield from $this->yieldParentBlock("css", $context, $blocks);
        yield "
    <link rel=\"stylesheet\" href=\"https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"";
        // line 6
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("/Plugins/MartosOS/Assets/CSS/jkanban.css"), "html", null, true);
        yield "\">
    <style>
/* --- ESTILO GENERAL --- */
body {
    background-color: #f8f9fc;
    /* Evita el scroll horizontal en la página principal */
    overflow: visible;
}
.mb-4 {
    margin-bottom: 0rem !important;
}
.fw-bold
 {
    font-weight: 700 !important;
}
.text-xs {
    font-size: .7rem;
}
.font-weight-bold {
    font-weight: 700 !important;
}
.card.shadow
 {
    box-shadow: 0 2px 6px rgb(0 0 0 / 28%) !important;
    margin-bottom: 10px !important;
}

/* --- TARJETAS DE ESTADÍSTICAS --- */
.stat-card {
    border: none;
    border-left: 4px solid #4e73df;
}
.border-left-primary { border-left-color: #4e73df !important; }
.border-left-success { border-left-color: #1cc88a !important; }
.border-left-info { border-left-color: #36b9cc !important; }
.border-left-warning { border-left-color: #f6c23e !important; }

/* --- KANBAN GENERAL --- */
#opp_kanban-container {
    display: flex;
    gap: 1.5rem;
    overflow-x: auto;
    padding-bottom: 1rem;
}
.kanban-board {
    min-width: 250px;
    max-width: 22%;
    border: 2px solid #e3e6f0;
    border-radius: 0.5rem;
    background-color: #f8f9fa;
    display: flex;
    flex-direction: column;
    padding-bottom: 5px;
    box-shadow: 0 2px 6px rgb(0 0 0 / 85%) !important;
}
.text-muted {
    --bs-text-opacity: 1;
    color: rgb(0 0 0) !important;
}
.kanban-board header {
    padding: 10px;
    padding-left: 30px;
    margin-bottom: -10px;
    border-bottom: none !important;
    z-index: 150;
}

.kanban-container {
    position: relative;
    box-sizing: border-box;
    width: auto;
    display: flex
;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
}

/* --- CABECERAS KANBAN --- */
.kanban-board-header {
    padding: 1rem;
    font-weight: 600;
    border-bottom: 2px solid #e3e6f0; /* Borde por defecto */
}
.kanban-title-board {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

/* --- ZONA DE TARJETAS (CON SCROLL) --- */
.kanban-drag {
    height: 40vh; /* Altura fija para el área de tarjetas */
    overflow-y: auto; /* Scroll vertical solo cuando se necesita */
        padding: 20px 10px 10px 10px !important;
}
/* --- TARJETAS DE OPORTUNIDAD (DISEÑO COMPACTO) --- */
.kanban-item {
    background-color: #fff;
    border: 1px solid #e3e6f0;
    border-left-width: 5px;
    border-radius: 0.5rem;
    box-shadow: 0 1px 3px rgba(58, 59, 69, 0.08);
    padding: 0.75rem 1rem; /* Padding reducido */
    margin-bottom: 1rem;
    cursor: pointer;
    transition: box-shadow 0.2s, border-color 0.2s;
    font-size: 0.85em; /* Fuente base más pequeña */
}
.kanban-item:hover {
    box-shadow: 0 4px 8px rgba(58, 59, 69, 0.15);
    border-color: #cdd2e1;
}

/* Contenido de la tarjeta */
.card-title {
    font-weight: 600;
    font-size: 1.1em;
    color: #172b4d;
}
.card-client {
    font-size: 0.95em;
    color: #5e6c84;
    margin-bottom: 0.4rem;
}

/* Fila de iconos (Agente y Próxima Actividad) */
.card-meta-info {
    font-size: 0.9em;
    color: #5e6c84;
    display: flex;
    gap: 1rem;
    padding-top: 0.2rem;
    margin-bottom: 0rem; 
    border-top: 1px solid #f0f2f5;
}
.card-meta-info > div {
    display: flex;
    align-items: center;
    gap: 0.5rem;
}
.card-meta-info i.fa-fw {
    color: #858796;
}
.card-value {
    font-weight: bold;
    font-size: 1.05em;
    color: #008b8b; /* Color verde para el valor */
}


/* Footer de la tarjeta */
.card-footer-details {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 0.9em;
}
.card-date {
    color: #858796;
}
.card-date.card-date-overdue {
    color: #e74a3b; /* Rojo para fechas vencidas */
    font-weight: bold;
}
.delete-item-btn {
    color: #b8c2d1;
    cursor: pointer;
    padding: 5px;
    border-radius: 50%;
    transition: color 0.2s, background-color 0.2s;
}
.delete-item-btn:hover {
    color: #e74a3b;
    background-color: #fdf насле;
}

/* Círculo para la probabilidad con colores */
.card-metric-circle {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.85em;
    font-weight: bold;
    transition: background-color 0.2s, color 0.2s;
}
.prob-low {
    background-color: #fce4e4;
    color: #e74a3b;
}
.prob-medium {
    background-color: #fff4e0;
    color: #e59f1c;
}
.prob-high {
    background-color: #e0f8f0;
    color: #1cc88a;
}

/* --- BOTÓN '+' EN CABECERAS --- */
.kanban-add-item-btn {
    font-size: 1.5rem;
    font-weight: bold;
    color: #5a5c69;
    cursor: pointer;
    line-height: 1;
    padding: 0 0.5rem;
    border-radius: 5px;
    transition: background-color 0.2s;
}
.kanban-add-item-btn:hover {
    background-color: rgba(0,0,0,0.1);
}

/* === MODIFICADO: PALETA DE COLORES COORDINADA === */
/* Se aplica al borde de la columna, fondo de cabecera y borde de tarjeta */

/* Orden 1 - Azul */
.orden-1 { border-color: #4e73df; }
.orden-1 .kanban-board-header { background-color: #4e73df; color: white; border-color: #4e73df; }
.orden-1 .kanban-item { border-left-color: #4e73df; }

/* Orden 2 - Verde */
.orden-2 { border-color: #1cc88a; }
.orden-2 .kanban-board-header { background-color: #1cc88a; color: white; border-color: #1cc88a; }
.orden-2 .kanban-item { border-left-color: #1cc88a; }

/* Orden 3 - Turquesa */
.orden-3 { border-color: #36b9cc; }
.orden-3 .kanban-board-header { background-color: #36b9cc; color: white; border-color: #36b9cc; }
.orden-3 .kanban-item { border-left-color: #36b9cc; }

/* Orden 4 - Amarillo */
.orden-4 { border-color: #f6c23e; }
.orden-4 .kanban-board-header { background-color: #f6c23e; color: #333; border-color: #f6c23e; }
.orden-4 .kanban-item { border-left-color: #f6c23e; }

/* Orden 5 - Rojo */
.orden-5 { border-color: #e74a3b; }
.orden-5 .kanban-board-header { background-color: #e74a3b; color: white; border-color: #e74a3b; }
.orden-5 .kanban-item { border-left-color: #e74a3b; }

/* Orden 6 - Morado */
.orden-6 { border-color: #8e44ad; }
.orden-6 .kanban-board-header { background-color: #8e44ad; color: white; border-color: #8e44ad; }
.orden-6 .kanban-item { border-left-color: #8e44ad; }

/* Orden 7 - Gris */
.orden-7 { border-color: #5a5c69; }
.orden-7 .kanban-board-header { background-color: #5a5c69; color: white; border-color: #5a5c69; }
.orden-7 .kanban-item { border-left-color: #5a5c69; }


/* --- ESTILOS DEL MODAL (SIN CAMBIOS) --- */
.modal-content {
    border-radius: 0.5rem;
    border: none;
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.15);
}
.modal-body {
    background-color: #f5f7fa;
}
.modal .nav-tabs {
    border-bottom: 1px solid #dee2e6;
    padding: 0.5rem 1rem;
}
.modal .nav-tabs .nav-link {
    border: none;
    color: #858796;
    padding: 0.75rem 1rem;
    font-weight: 600;
}
.modal .nav-tabs .nav-link.active {
    color: #4e73df;
    border-bottom: 2px solid #4e73df;
    background-color: transparent;
}
.modal-footer {
    border-top: 1px solid #e3e6f0;
    background-color: #fff;
}
.modal .form-control, .modal .form-select {
    border: 1px solid #d1d3e2;
    border-radius: 0.35rem;
}
.modal .form-control:focus {
    box-shadow: 0 0 0 0.25rem rgba(78, 115, 223, 0.25);
    border-color: #4e73df;
}
.modal .form-label {
    font-size: 0.8em;
    font-weight: 600;
    color: #5a5c69;
    margin-bottom: 0.25rem;
}

.card-body {
    flex: 1 1 auto;
    padding: var(--bs-card-spacer-y) var(--bs-card-spacer-x);
    color: var(--bs-card-color);
    display: flex
;
    justify-content: flex-start;
    padding: 15px;
}
    </style>
";
        return; yield '';
    }

    // line 318
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 319
        yield "<div id=\"opp_form-token-provider\" class=\"d-none\">";
        yield $this->env->getFunction('formToken')->getCallable()();
        yield "</div>

<div class=\"container-fluid\">
<div class=\"row mb-4\" style=\"align-items: center;\">
    <div class=\"col-xl-3 col-md-6 mb-3\">
        <div class=\"card stat-card border-left-primary shadow h-100 py-2\">
            <div class=\"card-body\">
                <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                        <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">Valor Total Pipeline</div>
                        <div id=\"stats-total-pipeline\" class=\"h5 mb-0 font-weight-bold text-gray-800\">€0</div>
                    </div>
                    <div class=\"col-auto\">
                        <i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-xl-3 col-md-6 mb-3\">
        <div class=\"card stat-card border-left-success shadow h-100 py-2\">
            <div class=\"card-body\">
                <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                        <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">Oportunidades Activas</div>
                        <div id=\"stats-active-opportunities\" class=\"h5 mb-0 font-weight-bold text-gray-800\">0</div>
                    </div>
                    <div class=\"col-auto\">
                        <i class=\"fas fa-tasks fa-2x text-gray-300\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-xl-3 col-md-6 mb-3\">
        <div class=\"card stat-card border-left-info shadow h-100 py-2\">
            <div class=\"card-body\">
                <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                        <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">Mayor Oportunidad</div>
                        <div id=\"stats-max-opportunity\" class=\"h5 mb-0 font-weight-bold text-gray-800\">€0</div>
                    </div>
                    <div class=\"col-auto\">
                        <i class=\"fas fa-trophy fa-2x text-gray-300\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-xl-3 col-md-6 mb-3\">
        <div class=\"card stat-card border-left-warning shadow h-100 py-2\">
            <div class=\"card-body\">
                <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                        <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">Probabilidad Promedio</div>
                        <div id=\"stats-avg-probability\" class=\"h5 mb-0 font-weight-bold text-gray-800\">0%</div>
                    </div>
                    <div class=\"col-auto\">
                        <i class=\"fas fa-percent fa-2x text-gray-300\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
    <div class=\"row bg-light p-2 mb-3 border rounded align-items-end g-2\" style=\"display: flex; flex-direction: row; padding: 0px 0px 5px 0px !important; margin-bottom: 20px !important; background-color: #fff !important; box-shadow: 0 2px 6px rgb(0 0 0 / 28%) !important;\">
        <div class=\"col-md-3\" style=\"width: 40%;\">
            <div class=\"input-group\">
                <span class=\"input-group-text\" style=\"color: white; background-color: #1e4db7bf;\"><i class=\"fa-solid fa-search fa-fw\"></i></span>
                <input type=\"text\" id=\"filterQuery\" class=\"form-control\" placeholder=\"Buscar por nombre o cliente\">
            </div>
        </div>
        <div class=\"col-md-2\">
            <div class=\"input-group\">
                <span class=\"input-group-text\" style=\"color: white; background-color: #1e4db7bf;\"><i class=\"fa-solid fa-user fa-fw\"></i></span>
                <select id=\"filterAgent\" class=\"form-select\">
                    <option value=\"all\">Todos los comerciales</option>
                    ";
        // line 397
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "agentes", [], "any", false, false, false, 397));
        foreach ($context['_seq'] as $context["_key"] => $context["agente"]) {
            // line 398
            yield "                        <option value=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agente"], "codagente", [], "any", false, false, false, 398), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["agente"], "nombre", [], "any", false, false, false, 398), "html", null, true);
            yield "</option>
                    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['agente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 400
        yield "                </select>
            </div>
        </div>
        <div class=\"col-md-2\">
            <div class=\"input-group\">
                <span class=\"input-group-text\" style=\"color: white; background-color: #1e4db7bf;\"><i class=\"fa-solid fa-calendar-day fa-fw\"></i></span>
                <input type=\"date\" id=\"filterFechaDesde\" class=\"form-control\" placeholder=\"Desde\">
            </div>
        </div>
        <div class=\"col-md-2\">
            <div class=\"input-group\">
                <span class=\"input-group-text\" style=\"color: white; background-color: #1e4db7bf;\"><i class=\"fa-solid fa-calendar-check fa-fw\"></i></span>
                <input type=\"date\" id=\"filterFechaHasta\" class=\"form-control\" placeholder=\"Hasta\">
            </div>
        </div>
        <div class=\"col-md-1 text-end\">
            <button type=\"button\" id=\"clearFiltersBtn\" class=\"btn btn-outline-secondary\">
                <i class=\"fa-solid fa-broom\" style=\"color: white; color: #1e4db7bf;\" ></i>
            </button>
        </div>
    </div>
    <div style=\"display:none !important;\" class=\"d-flex justify-content-between align-items-center mb-3\">
        <div>            
            <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#opportunityModal\">
                <i class=\"fa-solid fa-plus fa-fw\"></i> Nueva Oportunidad
            </button>
            <button id=\"opp_save-kanban-button\" class=\"btn btn-primary\">
            <i class=\"fa-solid fa-save fa-fw\"></i> Guardar Cambios
        </button>
        </div>
    </div>


    
    <div id=\"opp_kanban-container\">
        <div class=\"text-center py-5\"><i class=\"fas fa-spinner fa-spin fa-3x\"></i></div>
    </div>
</div>

<div class=\"modal fade\" id=\"opportunityModal\" tabindex=\"-1\" aria-labelledby=\"opportunityModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"opportunityModalLabel\">Oportunidad</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <ul class=\"nav nav-tabs\" id=\"opportunityTab\" role=\"tablist\">
                    <li class=\"nav-item\" role=\"presentation\">
                        <button class=\"nav-link active\" id=\"details-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#details-tab-pane\" type=\"button\" role=\"tab\" aria-controls=\"details-tab-pane\" aria-selected=\"true\">Detalles y Actividad</button>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                        <button class=\"nav-link\" id=\"edit-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#edit-tab-pane\" type=\"button\" role=\"tab\" aria-controls=\"edit-tab-pane\" aria-selected=\"false\">Edición</button>
                    </li>
                </ul>

                <div class=\"tab-content\" id=\"opportunityTabContent\">

                    <div class=\"tab-pane fade show active p-3\" id=\"details-tab-pane\" role=\"tabpanel\" aria-labelledby=\"details-tab\">
                          <h5><i class=\"fa-solid fa-circle-info fa-fw\"></i> Resumen de la Oportunidad</h5>
                            <div class=\"card p-3 mb-4 bg-light border-0\">
                                <div class=\"row\">
                                    <div class=\"col-md-8\">
                                        <small class=\"text-muted\">Nombre</small>
                                        <p id=\"detail-nombre\" class=\"fs-5 fw-bold mb-2\"></p>
                                        <small class=\"text-muted\">Cliente</small>
                                        <p id=\"detail-cliente\" class=\"mb-md-0 mb-2\"></p>
                                    </div>
                                    <div class=\"col-md-4 text-md-end\">
                                        <small class=\"text-muted\">Valor Estimado</small>
                                        <p id=\"detail-valor\" class=\"fs-5 fw-bold text-success mb-2\"></p>
                                        <small class=\"text-muted\">Probabilidad</small>
                                        <p id=\"detail-probabilidad\" class=\"mb-0\"></p>
                                    </div>
                                    <div class=\"col-md-6 mt-2\">
                                        <small class=\"text-muted\">Fecha de Cierre Prevista</small>
                                        <p id=\"detail-fecha-cierre\" class=\"mb-md-0 mb-2\"></p>
                                    </div>
                                    <div class=\"col-md-6 mt-2\">
                                        <small class=\"text-muted\">Agente Asignado</small>
                                        <p id=\"detail-agente\" class=\"mb-0\"></p>
                                    </div>
                                    
                                    <div class=\"col-12 mt-3\">
                                        <small class=\"text-muted\">Objetivos de Negocio</small>
                                        <p id=\"detail-objetivos\" style=\"white-space: pre-wrap;\"></p>
                                    </div>
                                    <div class=\"col-12\">
                                        <small class=\"text-muted\">Puntos de Dolor</small>
                                        <p id=\"detail-puntos-dolor\" style=\"white-space: pre-wrap;\"></p>
                                    </div>
                                    </div>
                            </div>
                            <hr class=\"my-4\">
                        <h5 class=\"mt-4\">Actividades Pendientes</h5>
                        <div id=\"pendingActivitiesList\" class=\"mb-4\"><p class=\"text-muted\">Cargando...</p></div>
                        <h5 class=\"mt-4\">Actividades Realizadas</h5>
                        <div id=\"completedActivitiesList\" class=\"mb-4\"></div>
                        <hr>
                        <h5 class=\"mt-4\">Nueva Actividad</h5>
                       <form id=\"newActivityForm\">
                            <input type=\"hidden\" name=\"idoportunidad\">
                            
                            <div class=\"row\">
                                <div class=\"col-md-6 mb-2\">
                                    <label for=\"act-tipo\" class=\"form-label\">Tipo</label>
                                    <select name=\"tipo\" id=\"act-tipo\" class=\"form-select\" required>
                                        <option value=\"Llamada\">Llamada</option>
                                        <option value=\"Reunión\">Reunión</option>
                                        <option value=\"Email\">Email</option>
                                        <option value=\"Tarea\">Tarea</option>
                                    </select>
                                </div>
                                <div class=\"col-md-6 mb-2\">
                                    <label for=\"act-prioridad\" class=\"form-label\">Prioridad</label>
                                    <select name=\"prioridad\" id=\"act-prioridad\" class=\"form-select\" required>
                                        <option value=\"Media\">Media</option>
                                        <option value=\"Baja\">Baja</option>
                                        <option value=\"Alta\">Alta</option>
                                    </select>
                                </div>
                            </div>

                            <div class=\"mb-2\">
                                <label for=\"act-descripcion\" class=\"form-label\">Descripción</label>
                                <textarea name=\"descripcion\" id=\"act-descripcion\" class=\"form-control\" rows=\"2\" required></textarea>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-6 mb-2\">
                                    <label for=\"act-fecha\" class=\"form-label\">Fecha</label>
                                    <input type=\"date\" name=\"fecha\" id=\"act-fecha\" class=\"form-control\" required>
                                </div>
                                <div class=\"col-md-6 mb-2\">
                                    <label for=\"act-hora\" class=\"form-label\">Hora</label>
                                    <input type=\"time\" name=\"hora\" id=\"act-hora\" class=\"form-control\" required>
                                </div>
                            </div>
                            
                            <div class=\"text-end mt-2\">
                                <button type=\"submit\" class=\"btn btn-success\">Guardar Actividad</button>
                            </div>
                        </form>
                    </div>

                    <div class=\"tab-pane fade p-3\" id=\"edit-tab-pane\" role=\"tabpanel\" aria-labelledby=\"edit-tab\">
                        <form id=\"opportunityForm\" onsubmit=\"return false;\">
                            <input type=\"hidden\" id=\"opportunityId\" name=\"id\">
                            <input type=\"hidden\" id=\"opportunityStage\" name=\"etapa\">

                            <input type=\"hidden\" id=\"opportunityCodCliente\" name=\"codcliente\">
                            <input type=\"hidden\" id=\"opportunityCodAgente\" name=\"codagente\">
                            <div class=\"mb-3\"><label for=\"opportunityName\" class=\"form-label\">Nombre</label><input type=\"text\" class=\"form-control\" id=\"opportunityName\" name=\"nombre\" required></div>
                            <div class=\"row g-3 mb-3\"><div class=\"col-md-6\"><label for=\"opportunityValue\" class=\"form-label\">Valor (€)</label><input type=\"number\" class=\"form-control\" id=\"opportunityValue\" name=\"valor_estimado\" step=\"0.01\" placeholder=\"45000\"></div><div class=\"col-md-6\"><label for=\"opportunityCloseDate\" class=\"form-label\">Fecha de Cierre</label><input type=\"date\" class=\"form-control\" id=\"opportunityCloseDate\" name=\"fecha_cierre_prevista\"></div></div>
                            <div class=\"mb-3\"><label for=\"opportunityClient\" class=\"form-label\">Cliente</label><input type=\"text\" class=\"form-control\" id=\"opportunityClient\" name=\"nombre_cliente\" placeholder=\"Buscar cliente...\"></div>
                            <div class=\"row g-3 mb-4\"><div class=\"col-md-6\"><label for=\"opportunityAgent\" class=\"form-label\">Agente</label><input type=\"text\" class=\"form-control\" id=\"opportunityAgent\" name=\"nombre_agente\" placeholder=\"Buscar agente...\"></div><div class=\"col-md-6\"><label for=\"opportunityProbability\" class=\"form-label\">Probabilidad (%)</label><input type=\"number\" class=\"form-control\" id=\"opportunityProbability\" name=\"probabilidad\" min=\"0\" max=\"100\"></div></div>
                            <hr>
                            <div class=\"mt-4\"><h6 class=\"text-muted fw-light mb-3\">Contexto para Handoff</h6><div class=\"mb-3\"><label for=\"opportunityObjectives\" class=\"form-label\">Objetivos de Negocio</label><textarea class=\"form-control\" id=\"opportunityObjectives\" name=\"objetivos_negocio\" rows=\"3\" placeholder=\"Lanzar una nueva canal de ventas online.\"></textarea></div><div class=\"mb-3\"><label for=\"opportunityPainPoints\" class=\"form-label\">Puntos de Dolor (Pain Points)</label><textarea class=\"form-control\" id=\"opportunityPainPoints\" name=\"puntos_dolor\" rows=\"3\" placeholder=\"Falta de plataforma para vender directamente al consumidor.\"></textarea></div></div>
                            
                            <div class=\"text-end mt-4\">
                                <button type=\"button\" id=\"saveOpportunityBtn\" class=\"btn btn-primary\">Guardar Cambios</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
    </div>
</div>
";
        return; yield '';
    }

    // line 570
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 571
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\"></script>
<script src=\"https://code.jquery.com/ui/1.13.3/jquery-ui.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"";
        // line 575
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("/Plugins/MartosOS/Assets/JS/jkanban.js"), "html", null, true);
        yield "\"></script>

<script type=\"module\" src=\"";
        // line 577
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("/Plugins/MartosOS/Assets/JS/CRM/crm-app.js"), "html", null, true);
        yield "\"></script>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "CRMoportunidades.html.twig";
    }

    /**
     * @codeCoverageIgnore
     */
    public function isTraitable()
    {
        return false;
    }

    /**
     * @codeCoverageIgnore
     */
    public function getDebugInfo()
    {
        return array (  666 => 577,  661 => 575,  654 => 571,  650 => 570,  476 => 400,  465 => 398,  461 => 397,  379 => 319,  375 => 318,  59 => 6,  53 => 4,  49 => 3,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Master/MenuTemplate.html.twig' %}

{% block css %}
    {{ parent() }}
    <link rel=\"stylesheet\" href=\"https://code.jquery.com/ui/1.13.3/themes/base/jquery-ui.css\">
    <link rel=\"stylesheet\" href=\"{{ asset('/Plugins/MartosOS/Assets/CSS/jkanban.css') }}\">
    <style>
/* --- ESTILO GENERAL --- */
body {
    background-color: #f8f9fc;
    /* Evita el scroll horizontal en la página principal */
    overflow: visible;
}
.mb-4 {
    margin-bottom: 0rem !important;
}
.fw-bold
 {
    font-weight: 700 !important;
}
.text-xs {
    font-size: .7rem;
}
.font-weight-bold {
    font-weight: 700 !important;
}
.card.shadow
 {
    box-shadow: 0 2px 6px rgb(0 0 0 / 28%) !important;
    margin-bottom: 10px !important;
}

/* --- TARJETAS DE ESTADÍSTICAS --- */
.stat-card {
    border: none;
    border-left: 4px solid #4e73df;
}
.border-left-primary { border-left-color: #4e73df !important; }
.border-left-success { border-left-color: #1cc88a !important; }
.border-left-info { border-left-color: #36b9cc !important; }
.border-left-warning { border-left-color: #f6c23e !important; }

/* --- KANBAN GENERAL --- */
#opp_kanban-container {
    display: flex;
    gap: 1.5rem;
    overflow-x: auto;
    padding-bottom: 1rem;
}
.kanban-board {
    min-width: 250px;
    max-width: 22%;
    border: 2px solid #e3e6f0;
    border-radius: 0.5rem;
    background-color: #f8f9fa;
    display: flex;
    flex-direction: column;
    padding-bottom: 5px;
    box-shadow: 0 2px 6px rgb(0 0 0 / 85%) !important;
}
.text-muted {
    --bs-text-opacity: 1;
    color: rgb(0 0 0) !important;
}
.kanban-board header {
    padding: 10px;
    padding-left: 30px;
    margin-bottom: -10px;
    border-bottom: none !important;
    z-index: 150;
}

.kanban-container {
    position: relative;
    box-sizing: border-box;
    width: auto;
    display: flex
;
    flex-direction: row;
    flex-wrap: wrap;
    align-items: center;
    justify-content: center;
}

/* --- CABECERAS KANBAN --- */
.kanban-board-header {
    padding: 1rem;
    font-weight: 600;
    border-bottom: 2px solid #e3e6f0; /* Borde por defecto */
}
.kanban-title-board {
    display: flex;
    justify-content: space-between;
    align-items: center;
}

/* --- ZONA DE TARJETAS (CON SCROLL) --- */
.kanban-drag {
    height: 40vh; /* Altura fija para el área de tarjetas */
    overflow-y: auto; /* Scroll vertical solo cuando se necesita */
        padding: 20px 10px 10px 10px !important;
}
/* --- TARJETAS DE OPORTUNIDAD (DISEÑO COMPACTO) --- */
.kanban-item {
    background-color: #fff;
    border: 1px solid #e3e6f0;
    border-left-width: 5px;
    border-radius: 0.5rem;
    box-shadow: 0 1px 3px rgba(58, 59, 69, 0.08);
    padding: 0.75rem 1rem; /* Padding reducido */
    margin-bottom: 1rem;
    cursor: pointer;
    transition: box-shadow 0.2s, border-color 0.2s;
    font-size: 0.85em; /* Fuente base más pequeña */
}
.kanban-item:hover {
    box-shadow: 0 4px 8px rgba(58, 59, 69, 0.15);
    border-color: #cdd2e1;
}

/* Contenido de la tarjeta */
.card-title {
    font-weight: 600;
    font-size: 1.1em;
    color: #172b4d;
}
.card-client {
    font-size: 0.95em;
    color: #5e6c84;
    margin-bottom: 0.4rem;
}

/* Fila de iconos (Agente y Próxima Actividad) */
.card-meta-info {
    font-size: 0.9em;
    color: #5e6c84;
    display: flex;
    gap: 1rem;
    padding-top: 0.2rem;
    margin-bottom: 0rem; 
    border-top: 1px solid #f0f2f5;
}
.card-meta-info > div {
    display: flex;
    align-items: center;
    gap: 0.5rem;
}
.card-meta-info i.fa-fw {
    color: #858796;
}
.card-value {
    font-weight: bold;
    font-size: 1.05em;
    color: #008b8b; /* Color verde para el valor */
}


/* Footer de la tarjeta */
.card-footer-details {
    display: flex;
    justify-content: space-between;
    align-items: center;
    font-size: 0.9em;
}
.card-date {
    color: #858796;
}
.card-date.card-date-overdue {
    color: #e74a3b; /* Rojo para fechas vencidas */
    font-weight: bold;
}
.delete-item-btn {
    color: #b8c2d1;
    cursor: pointer;
    padding: 5px;
    border-radius: 50%;
    transition: color 0.2s, background-color 0.2s;
}
.delete-item-btn:hover {
    color: #e74a3b;
    background-color: #fdf насле;
}

/* Círculo para la probabilidad con colores */
.card-metric-circle {
    width: 32px;
    height: 32px;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    font-size: 0.85em;
    font-weight: bold;
    transition: background-color 0.2s, color 0.2s;
}
.prob-low {
    background-color: #fce4e4;
    color: #e74a3b;
}
.prob-medium {
    background-color: #fff4e0;
    color: #e59f1c;
}
.prob-high {
    background-color: #e0f8f0;
    color: #1cc88a;
}

/* --- BOTÓN '+' EN CABECERAS --- */
.kanban-add-item-btn {
    font-size: 1.5rem;
    font-weight: bold;
    color: #5a5c69;
    cursor: pointer;
    line-height: 1;
    padding: 0 0.5rem;
    border-radius: 5px;
    transition: background-color 0.2s;
}
.kanban-add-item-btn:hover {
    background-color: rgba(0,0,0,0.1);
}

/* === MODIFICADO: PALETA DE COLORES COORDINADA === */
/* Se aplica al borde de la columna, fondo de cabecera y borde de tarjeta */

/* Orden 1 - Azul */
.orden-1 { border-color: #4e73df; }
.orden-1 .kanban-board-header { background-color: #4e73df; color: white; border-color: #4e73df; }
.orden-1 .kanban-item { border-left-color: #4e73df; }

/* Orden 2 - Verde */
.orden-2 { border-color: #1cc88a; }
.orden-2 .kanban-board-header { background-color: #1cc88a; color: white; border-color: #1cc88a; }
.orden-2 .kanban-item { border-left-color: #1cc88a; }

/* Orden 3 - Turquesa */
.orden-3 { border-color: #36b9cc; }
.orden-3 .kanban-board-header { background-color: #36b9cc; color: white; border-color: #36b9cc; }
.orden-3 .kanban-item { border-left-color: #36b9cc; }

/* Orden 4 - Amarillo */
.orden-4 { border-color: #f6c23e; }
.orden-4 .kanban-board-header { background-color: #f6c23e; color: #333; border-color: #f6c23e; }
.orden-4 .kanban-item { border-left-color: #f6c23e; }

/* Orden 5 - Rojo */
.orden-5 { border-color: #e74a3b; }
.orden-5 .kanban-board-header { background-color: #e74a3b; color: white; border-color: #e74a3b; }
.orden-5 .kanban-item { border-left-color: #e74a3b; }

/* Orden 6 - Morado */
.orden-6 { border-color: #8e44ad; }
.orden-6 .kanban-board-header { background-color: #8e44ad; color: white; border-color: #8e44ad; }
.orden-6 .kanban-item { border-left-color: #8e44ad; }

/* Orden 7 - Gris */
.orden-7 { border-color: #5a5c69; }
.orden-7 .kanban-board-header { background-color: #5a5c69; color: white; border-color: #5a5c69; }
.orden-7 .kanban-item { border-left-color: #5a5c69; }


/* --- ESTILOS DEL MODAL (SIN CAMBIOS) --- */
.modal-content {
    border-radius: 0.5rem;
    border: none;
    box-shadow: 0 0.5rem 1rem rgba(0,0,0,0.15);
}
.modal-body {
    background-color: #f5f7fa;
}
.modal .nav-tabs {
    border-bottom: 1px solid #dee2e6;
    padding: 0.5rem 1rem;
}
.modal .nav-tabs .nav-link {
    border: none;
    color: #858796;
    padding: 0.75rem 1rem;
    font-weight: 600;
}
.modal .nav-tabs .nav-link.active {
    color: #4e73df;
    border-bottom: 2px solid #4e73df;
    background-color: transparent;
}
.modal-footer {
    border-top: 1px solid #e3e6f0;
    background-color: #fff;
}
.modal .form-control, .modal .form-select {
    border: 1px solid #d1d3e2;
    border-radius: 0.35rem;
}
.modal .form-control:focus {
    box-shadow: 0 0 0 0.25rem rgba(78, 115, 223, 0.25);
    border-color: #4e73df;
}
.modal .form-label {
    font-size: 0.8em;
    font-weight: 600;
    color: #5a5c69;
    margin-bottom: 0.25rem;
}

.card-body {
    flex: 1 1 auto;
    padding: var(--bs-card-spacer-y) var(--bs-card-spacer-x);
    color: var(--bs-card-color);
    display: flex
;
    justify-content: flex-start;
    padding: 15px;
}
    </style>
{% endblock %}

{% block body %}
<div id=\"opp_form-token-provider\" class=\"d-none\">{{ formToken() }}</div>

<div class=\"container-fluid\">
<div class=\"row mb-4\" style=\"align-items: center;\">
    <div class=\"col-xl-3 col-md-6 mb-3\">
        <div class=\"card stat-card border-left-primary shadow h-100 py-2\">
            <div class=\"card-body\">
                <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                        <div class=\"text-xs font-weight-bold text-primary text-uppercase mb-1\">Valor Total Pipeline</div>
                        <div id=\"stats-total-pipeline\" class=\"h5 mb-0 font-weight-bold text-gray-800\">€0</div>
                    </div>
                    <div class=\"col-auto\">
                        <i class=\"fas fa-dollar-sign fa-2x text-gray-300\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-xl-3 col-md-6 mb-3\">
        <div class=\"card stat-card border-left-success shadow h-100 py-2\">
            <div class=\"card-body\">
                <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                        <div class=\"text-xs font-weight-bold text-success text-uppercase mb-1\">Oportunidades Activas</div>
                        <div id=\"stats-active-opportunities\" class=\"h5 mb-0 font-weight-bold text-gray-800\">0</div>
                    </div>
                    <div class=\"col-auto\">
                        <i class=\"fas fa-tasks fa-2x text-gray-300\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-xl-3 col-md-6 mb-3\">
        <div class=\"card stat-card border-left-info shadow h-100 py-2\">
            <div class=\"card-body\">
                <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                        <div class=\"text-xs font-weight-bold text-info text-uppercase mb-1\">Mayor Oportunidad</div>
                        <div id=\"stats-max-opportunity\" class=\"h5 mb-0 font-weight-bold text-gray-800\">€0</div>
                    </div>
                    <div class=\"col-auto\">
                        <i class=\"fas fa-trophy fa-2x text-gray-300\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class=\"col-xl-3 col-md-6 mb-3\">
        <div class=\"card stat-card border-left-warning shadow h-100 py-2\">
            <div class=\"card-body\">
                <div class=\"row no-gutters align-items-center\">
                    <div class=\"col mr-2\">
                        <div class=\"text-xs font-weight-bold text-warning text-uppercase mb-1\">Probabilidad Promedio</div>
                        <div id=\"stats-avg-probability\" class=\"h5 mb-0 font-weight-bold text-gray-800\">0%</div>
                    </div>
                    <div class=\"col-auto\">
                        <i class=\"fas fa-percent fa-2x text-gray-300\"></i>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
    
    <div class=\"row bg-light p-2 mb-3 border rounded align-items-end g-2\" style=\"display: flex; flex-direction: row; padding: 0px 0px 5px 0px !important; margin-bottom: 20px !important; background-color: #fff !important; box-shadow: 0 2px 6px rgb(0 0 0 / 28%) !important;\">
        <div class=\"col-md-3\" style=\"width: 40%;\">
            <div class=\"input-group\">
                <span class=\"input-group-text\" style=\"color: white; background-color: #1e4db7bf;\"><i class=\"fa-solid fa-search fa-fw\"></i></span>
                <input type=\"text\" id=\"filterQuery\" class=\"form-control\" placeholder=\"Buscar por nombre o cliente\">
            </div>
        </div>
        <div class=\"col-md-2\">
            <div class=\"input-group\">
                <span class=\"input-group-text\" style=\"color: white; background-color: #1e4db7bf;\"><i class=\"fa-solid fa-user fa-fw\"></i></span>
                <select id=\"filterAgent\" class=\"form-select\">
                    <option value=\"all\">Todos los comerciales</option>
                    {% for agente in fsc.agentes %}
                        <option value=\"{{ agente.codagente }}\">{{ agente.nombre }}</option>
                    {% endfor %}
                </select>
            </div>
        </div>
        <div class=\"col-md-2\">
            <div class=\"input-group\">
                <span class=\"input-group-text\" style=\"color: white; background-color: #1e4db7bf;\"><i class=\"fa-solid fa-calendar-day fa-fw\"></i></span>
                <input type=\"date\" id=\"filterFechaDesde\" class=\"form-control\" placeholder=\"Desde\">
            </div>
        </div>
        <div class=\"col-md-2\">
            <div class=\"input-group\">
                <span class=\"input-group-text\" style=\"color: white; background-color: #1e4db7bf;\"><i class=\"fa-solid fa-calendar-check fa-fw\"></i></span>
                <input type=\"date\" id=\"filterFechaHasta\" class=\"form-control\" placeholder=\"Hasta\">
            </div>
        </div>
        <div class=\"col-md-1 text-end\">
            <button type=\"button\" id=\"clearFiltersBtn\" class=\"btn btn-outline-secondary\">
                <i class=\"fa-solid fa-broom\" style=\"color: white; color: #1e4db7bf;\" ></i>
            </button>
        </div>
    </div>
    <div style=\"display:none !important;\" class=\"d-flex justify-content-between align-items-center mb-3\">
        <div>            
            <button type=\"button\" class=\"btn btn-primary\" data-bs-toggle=\"modal\" data-bs-target=\"#opportunityModal\">
                <i class=\"fa-solid fa-plus fa-fw\"></i> Nueva Oportunidad
            </button>
            <button id=\"opp_save-kanban-button\" class=\"btn btn-primary\">
            <i class=\"fa-solid fa-save fa-fw\"></i> Guardar Cambios
        </button>
        </div>
    </div>


    
    <div id=\"opp_kanban-container\">
        <div class=\"text-center py-5\"><i class=\"fas fa-spinner fa-spin fa-3x\"></i></div>
    </div>
</div>

<div class=\"modal fade\" id=\"opportunityModal\" tabindex=\"-1\" aria-labelledby=\"opportunityModalLabel\" aria-hidden=\"true\">
    <div class=\"modal-dialog modal-lg\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"opportunityModalLabel\">Oportunidad</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                <ul class=\"nav nav-tabs\" id=\"opportunityTab\" role=\"tablist\">
                    <li class=\"nav-item\" role=\"presentation\">
                        <button class=\"nav-link active\" id=\"details-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#details-tab-pane\" type=\"button\" role=\"tab\" aria-controls=\"details-tab-pane\" aria-selected=\"true\">Detalles y Actividad</button>
                    </li>
                    <li class=\"nav-item\" role=\"presentation\">
                        <button class=\"nav-link\" id=\"edit-tab\" data-bs-toggle=\"tab\" data-bs-target=\"#edit-tab-pane\" type=\"button\" role=\"tab\" aria-controls=\"edit-tab-pane\" aria-selected=\"false\">Edición</button>
                    </li>
                </ul>

                <div class=\"tab-content\" id=\"opportunityTabContent\">

                    <div class=\"tab-pane fade show active p-3\" id=\"details-tab-pane\" role=\"tabpanel\" aria-labelledby=\"details-tab\">
                          <h5><i class=\"fa-solid fa-circle-info fa-fw\"></i> Resumen de la Oportunidad</h5>
                            <div class=\"card p-3 mb-4 bg-light border-0\">
                                <div class=\"row\">
                                    <div class=\"col-md-8\">
                                        <small class=\"text-muted\">Nombre</small>
                                        <p id=\"detail-nombre\" class=\"fs-5 fw-bold mb-2\"></p>
                                        <small class=\"text-muted\">Cliente</small>
                                        <p id=\"detail-cliente\" class=\"mb-md-0 mb-2\"></p>
                                    </div>
                                    <div class=\"col-md-4 text-md-end\">
                                        <small class=\"text-muted\">Valor Estimado</small>
                                        <p id=\"detail-valor\" class=\"fs-5 fw-bold text-success mb-2\"></p>
                                        <small class=\"text-muted\">Probabilidad</small>
                                        <p id=\"detail-probabilidad\" class=\"mb-0\"></p>
                                    </div>
                                    <div class=\"col-md-6 mt-2\">
                                        <small class=\"text-muted\">Fecha de Cierre Prevista</small>
                                        <p id=\"detail-fecha-cierre\" class=\"mb-md-0 mb-2\"></p>
                                    </div>
                                    <div class=\"col-md-6 mt-2\">
                                        <small class=\"text-muted\">Agente Asignado</small>
                                        <p id=\"detail-agente\" class=\"mb-0\"></p>
                                    </div>
                                    
                                    <div class=\"col-12 mt-3\">
                                        <small class=\"text-muted\">Objetivos de Negocio</small>
                                        <p id=\"detail-objetivos\" style=\"white-space: pre-wrap;\"></p>
                                    </div>
                                    <div class=\"col-12\">
                                        <small class=\"text-muted\">Puntos de Dolor</small>
                                        <p id=\"detail-puntos-dolor\" style=\"white-space: pre-wrap;\"></p>
                                    </div>
                                    </div>
                            </div>
                            <hr class=\"my-4\">
                        <h5 class=\"mt-4\">Actividades Pendientes</h5>
                        <div id=\"pendingActivitiesList\" class=\"mb-4\"><p class=\"text-muted\">Cargando...</p></div>
                        <h5 class=\"mt-4\">Actividades Realizadas</h5>
                        <div id=\"completedActivitiesList\" class=\"mb-4\"></div>
                        <hr>
                        <h5 class=\"mt-4\">Nueva Actividad</h5>
                       <form id=\"newActivityForm\">
                            <input type=\"hidden\" name=\"idoportunidad\">
                            
                            <div class=\"row\">
                                <div class=\"col-md-6 mb-2\">
                                    <label for=\"act-tipo\" class=\"form-label\">Tipo</label>
                                    <select name=\"tipo\" id=\"act-tipo\" class=\"form-select\" required>
                                        <option value=\"Llamada\">Llamada</option>
                                        <option value=\"Reunión\">Reunión</option>
                                        <option value=\"Email\">Email</option>
                                        <option value=\"Tarea\">Tarea</option>
                                    </select>
                                </div>
                                <div class=\"col-md-6 mb-2\">
                                    <label for=\"act-prioridad\" class=\"form-label\">Prioridad</label>
                                    <select name=\"prioridad\" id=\"act-prioridad\" class=\"form-select\" required>
                                        <option value=\"Media\">Media</option>
                                        <option value=\"Baja\">Baja</option>
                                        <option value=\"Alta\">Alta</option>
                                    </select>
                                </div>
                            </div>

                            <div class=\"mb-2\">
                                <label for=\"act-descripcion\" class=\"form-label\">Descripción</label>
                                <textarea name=\"descripcion\" id=\"act-descripcion\" class=\"form-control\" rows=\"2\" required></textarea>
                            </div>

                            <div class=\"row\">
                                <div class=\"col-md-6 mb-2\">
                                    <label for=\"act-fecha\" class=\"form-label\">Fecha</label>
                                    <input type=\"date\" name=\"fecha\" id=\"act-fecha\" class=\"form-control\" required>
                                </div>
                                <div class=\"col-md-6 mb-2\">
                                    <label for=\"act-hora\" class=\"form-label\">Hora</label>
                                    <input type=\"time\" name=\"hora\" id=\"act-hora\" class=\"form-control\" required>
                                </div>
                            </div>
                            
                            <div class=\"text-end mt-2\">
                                <button type=\"submit\" class=\"btn btn-success\">Guardar Actividad</button>
                            </div>
                        </form>
                    </div>

                    <div class=\"tab-pane fade p-3\" id=\"edit-tab-pane\" role=\"tabpanel\" aria-labelledby=\"edit-tab\">
                        <form id=\"opportunityForm\" onsubmit=\"return false;\">
                            <input type=\"hidden\" id=\"opportunityId\" name=\"id\">
                            <input type=\"hidden\" id=\"opportunityStage\" name=\"etapa\">

                            <input type=\"hidden\" id=\"opportunityCodCliente\" name=\"codcliente\">
                            <input type=\"hidden\" id=\"opportunityCodAgente\" name=\"codagente\">
                            <div class=\"mb-3\"><label for=\"opportunityName\" class=\"form-label\">Nombre</label><input type=\"text\" class=\"form-control\" id=\"opportunityName\" name=\"nombre\" required></div>
                            <div class=\"row g-3 mb-3\"><div class=\"col-md-6\"><label for=\"opportunityValue\" class=\"form-label\">Valor (€)</label><input type=\"number\" class=\"form-control\" id=\"opportunityValue\" name=\"valor_estimado\" step=\"0.01\" placeholder=\"45000\"></div><div class=\"col-md-6\"><label for=\"opportunityCloseDate\" class=\"form-label\">Fecha de Cierre</label><input type=\"date\" class=\"form-control\" id=\"opportunityCloseDate\" name=\"fecha_cierre_prevista\"></div></div>
                            <div class=\"mb-3\"><label for=\"opportunityClient\" class=\"form-label\">Cliente</label><input type=\"text\" class=\"form-control\" id=\"opportunityClient\" name=\"nombre_cliente\" placeholder=\"Buscar cliente...\"></div>
                            <div class=\"row g-3 mb-4\"><div class=\"col-md-6\"><label for=\"opportunityAgent\" class=\"form-label\">Agente</label><input type=\"text\" class=\"form-control\" id=\"opportunityAgent\" name=\"nombre_agente\" placeholder=\"Buscar agente...\"></div><div class=\"col-md-6\"><label for=\"opportunityProbability\" class=\"form-label\">Probabilidad (%)</label><input type=\"number\" class=\"form-control\" id=\"opportunityProbability\" name=\"probabilidad\" min=\"0\" max=\"100\"></div></div>
                            <hr>
                            <div class=\"mt-4\"><h6 class=\"text-muted fw-light mb-3\">Contexto para Handoff</h6><div class=\"mb-3\"><label for=\"opportunityObjectives\" class=\"form-label\">Objetivos de Negocio</label><textarea class=\"form-control\" id=\"opportunityObjectives\" name=\"objetivos_negocio\" rows=\"3\" placeholder=\"Lanzar una nueva canal de ventas online.\"></textarea></div><div class=\"mb-3\"><label for=\"opportunityPainPoints\" class=\"form-label\">Puntos de Dolor (Pain Points)</label><textarea class=\"form-control\" id=\"opportunityPainPoints\" name=\"puntos_dolor\" rows=\"3\" placeholder=\"Falta de plataforma para vender directamente al consumidor.\"></textarea></div></div>
                            
                            <div class=\"text-end mt-4\">
                                <button type=\"button\" id=\"saveOpportunityBtn\" class=\"btn btn-primary\">Guardar Cambios</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
            </div>
    </div>
</div>
{% endblock %}
{% block javascripts %}
{{parent()}}
<script src=\"https://code.jquery.com/jquery-3.7.1.min.js\"></script>
<script src=\"https://code.jquery.com/ui/1.13.3/jquery-ui.min.js\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js\"></script>
<script src=\"{{ asset('/Plugins/MartosOS/Assets/JS/jkanban.js') }}\"></script>

<script type=\"module\" src=\"{{ asset('/Plugins/MartosOS/Assets/JS/CRM/crm-app.js') }}\"></script>
{% endblock %}", "CRMoportunidades.html.twig", "D:\\xampp\\htdocs\\Facturascripts\\Plugins\\MartosOS\\View\\CRMoportunidades.html.twig");
    }
}
