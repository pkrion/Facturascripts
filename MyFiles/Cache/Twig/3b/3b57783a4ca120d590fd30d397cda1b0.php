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

/* Master/EditView.html.twig */
class __TwigTemplate_d87ea8f530c7422c9a0b92b66f017f18 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        $context["currentView"] = CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getCurrentView", [], "method", false, false, false, 20);
        // line 21
        $context["action"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 21), "exists", [], "method", false, false, false, 21)) ? ("edit") : ("insert"));
        // line 22
        $context["fieldCount"] = 0;
        // line 23
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 23));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 24
            yield "    ";
            $context["fieldCount"] = (($context["fieldCount"] ?? null) + Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["group"], "columns", [], "any", false, false, false, 24)));
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 26
        yield "
<script>
    function editViewDelete(viewName) {
        const deleteModal = new bootstrap.Modal(document.getElementById('deleteConfirmModal' + viewName));
        
        document.getElementById('confirmDeleteBtn' + viewName).onclick = function() {
            document.querySelector(\"#form\" + viewName + \" input[name='action']\").value = \"delete\";
            document.getElementById(\"form\" + viewName).submit();
        };
        
        deleteModal.show();
        return false;
    }
</script>

";
        // line 42
        yield "<div class=\"row\">
    ";
        // line 43
        $context["row"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["header"], "method", false, false, false, 43);
        // line 44
        yield "    ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "render", [CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 44), "", ($context["fsc"] ?? null)], "method", false, false, false, 44);
        yield "
</div>

<form id=\"form";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 47), "html", null, true);
        yield "\" method=\"post\" enctype=\"multipart/form-data\" onsubmit=\"animateSpinner('add')\">
    ";
        // line 48
        yield $this->env->getFunction('formToken')->getCallable()();
        yield "
    <input type=\"hidden\" name=\"action\" value=\"";
        // line 49
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["action"] ?? null), "html", null, true);
        yield "\"/>
    <input type=\"hidden\" name=\"activetab\" value=\"";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 50), "html", null, true);
        yield "\"/>
    <input type=\"hidden\" name=\"code\" value=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 51), "primaryColumnValue", [], "method", false, false, false, 51), "html", null, true);
        yield "\"/>
    <div class=\"";
        // line 52
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 52), "card", [], "any", false, false, false, 52)) ? ("card shadow") : (""));
        yield "\">
        <div class=\"";
        // line 53
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 53), "card", [], "any", false, false, false, 53)) ? ("card-body") : ("container-fluid"));
        yield "\">
            <div class=\"row\">
                <div class=\"col-12 text-end\">
                    ";
        // line 57
        yield "                    ";
        $context["row"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["statistics"], "method", false, false, false, 57);
        // line 58
        yield "                    ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "render", [($context["fsc"] ?? null)], "method", false, false, false, 58);
        yield "
                    ";
        // line 59
        if (((($context["fieldCount"] ?? null) > 30) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 59), "btnSave", [], "any", false, false, false, 59))) {
            // line 60
            yield "                        <button class=\"btn btn-sm btn-primary\" type=\"submit\">
                            <i class=\"fa-solid fa-save fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("save"), "html", null, true);
            yield "</span>
                        </button>
                    ";
        }
        // line 65
        yield "                </div>
            </div>
            <div class=\"row\">
                ";
        // line 68
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getColumns", [], "method", false, false, false, 68));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 69
            yield "                    ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["group"], "edit", [CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 69)], "method", false, false, false, 69);
            yield "
                ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 71
        yield "            </div>
        </div>
        <div class=\"";
        // line 73
        yield ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 73), "card", [], "any", false, false, false, 73)) ? ("card-footer p-2") : ("container-fluid"));
        yield "\">
            <div class=\"row\">
                ";
        // line 75
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 75) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 75), "btnDelete", [], "any", false, false, false, 75))) {
            // line 76
            yield "                    <div class=\"col-auto\">
                        <button type=\"button\" class=\"btn btn-sm btn-danger\"
                                onclick=\"editViewDelete('";
            // line 78
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 78), "html", null, true);
            yield "');\">
                            <i class=\"fa-solid fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("delete"), "html", null, true);
            yield "</span>
                        </button>
                    </div>
                ";
        }
        // line 84
        yield "                ";
        $context["extraClass"] = (((CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 84) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 84), "btnDelete", [], "any", false, false, false, 84))) ? ("text-center") : (""));
        // line 85
        yield "                <div class=\"col ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["extraClass"] ?? null), "html", null, true);
        yield "\">
                    ";
        // line 87
        yield "                    ";
        $context["row"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["actions"], "method", false, false, false, 87);
        // line 88
        yield "                    ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "render", [false, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 88)], "method", false, false, false, 88);
        yield "
                </div>
                <div class=\"col-auto\">
                    ";
        // line 91
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 91), "btnUndo", [], "any", false, false, false, 91)) {
            // line 92
            yield "                        <button class=\"btn btn-sm btn-secondary\" type=\"reset\">
                            <i class=\"fa-solid fa-undo fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">";
            // line 94
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("undo"), "html", null, true);
            yield "</span>
                        </button>
                    ";
        }
        // line 97
        yield "                    ";
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "settings", [], "any", false, false, false, 97), "btnSave", [], "any", false, false, false, 97)) {
            // line 98
            yield "                        <button class=\"btn btn-sm btn-primary\" type=\"submit\">
                            <i class=\"fa-solid fa-save fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">";
            // line 100
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("save"), "html", null, true);
            yield "</span>
                        </button>
                    ";
        }
        // line 103
        yield "                </div>
            </div>
        </div>
    </div>
</form>

<br/>

";
        // line 112
        yield "<div class=\"row\">
    ";
        // line 113
        $context["row"] = CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getRow", ["footer"], "method", false, false, false, 113);
        // line 114
        yield "    ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["row"] ?? null), "render", [CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 114), "", ($context["fsc"] ?? null)], "method", false, false, false, 114);
        yield "
</div>

";
        // line 118
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getModals", [], "method", false, false, false, 118));
        foreach ($context['_seq'] as $context["_key"] => $context["group"]) {
            // line 119
            yield "    ";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["group"], "modal", [CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 119), CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 119)], "method", false, false, false, 119);
            yield "
";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['group'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 121
        yield "
";
        // line 123
        yield "<div class=\"modal fade\" id=\"deleteConfirmModal";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 123), "html", null, true);
        yield "\" tabindex=\"-1\" aria-labelledby=\"deleteConfirmModalLabel";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 123), "html", null, true);
        yield "\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"deleteConfirmModalLabel";
        // line 127
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 127), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("confirm-delete"), "html", null, true);
        yield "</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                ";
        // line 131
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("are-you-sure"), "html", null, true);
        yield "
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fa-solid fa-times\"></i> ";
        // line 135
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("cancel"), "html", null, true);
        yield "
                </button>
                <button type=\"button\" class=\"btn btn-danger\" id=\"confirmDeleteBtn";
        // line 137
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 137), "html", null, true);
        yield "\">
                    <i class=\"fa-solid fa-check\"></i> ";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("confirm"), "html", null, true);
        yield "
                </button>
            </div>
        </div>
    </div>
</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Master/EditView.html.twig";
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
        return array (  295 => 138,  291 => 137,  286 => 135,  279 => 131,  270 => 127,  260 => 123,  257 => 121,  248 => 119,  244 => 118,  237 => 114,  235 => 113,  232 => 112,  222 => 103,  216 => 100,  212 => 98,  209 => 97,  203 => 94,  199 => 92,  197 => 91,  190 => 88,  187 => 87,  182 => 85,  179 => 84,  172 => 80,  167 => 78,  163 => 76,  161 => 75,  156 => 73,  152 => 71,  143 => 69,  139 => 68,  134 => 65,  128 => 62,  124 => 60,  122 => 59,  117 => 58,  114 => 57,  108 => 53,  104 => 52,  100 => 51,  96 => 50,  92 => 49,  88 => 48,  84 => 47,  77 => 44,  75 => 43,  72 => 42,  55 => 26,  48 => 24,  44 => 23,  42 => 22,  40 => 21,  38 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * This file is part of FacturaScripts
 * Copyright (C) 2017-2023 Carlos Garcia Gomez <carlos@facturascripts.com>
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
 * along with this program. If not, see http://www.gnu.org/licenses/.
 */
#}
{% set currentView = fsc.getCurrentView() %}
{% set action = currentView.model.exists() ? 'edit' : 'insert' %}
{% set fieldCount = 0 %}
{% for group in currentView.getColumns() %}
    {% set fieldCount = fieldCount + group.columns | length %}
{% endfor %}

<script>
    function editViewDelete(viewName) {
        const deleteModal = new bootstrap.Modal(document.getElementById('deleteConfirmModal' + viewName));
        
        document.getElementById('confirmDeleteBtn' + viewName).onclick = function() {
            document.querySelector(\"#form\" + viewName + \" input[name='action']\").value = \"delete\";
            document.getElementById(\"form\" + viewName).submit();
        };
        
        deleteModal.show();
        return false;
    }
</script>

{# -- Row header -- #}
<div class=\"row\">
    {% set row = currentView.getRow('header') %}
    {{ row.render(currentView.getViewName(), '', fsc) | raw }}
</div>

<form id=\"form{{ currentView.getViewName() }}\" method=\"post\" enctype=\"multipart/form-data\" onsubmit=\"animateSpinner('add')\">
    {{ formToken() }}
    <input type=\"hidden\" name=\"action\" value=\"{{ action }}\"/>
    <input type=\"hidden\" name=\"activetab\" value=\"{{ currentView.getViewName() }}\"/>
    <input type=\"hidden\" name=\"code\" value=\"{{ currentView.model.primaryColumnValue() }}\"/>
    <div class=\"{{ currentView.settings.card ? 'card shadow' : '' }}\">
        <div class=\"{{ currentView.settings.card ? 'card-body' : 'container-fluid' }}\">
            <div class=\"row\">
                <div class=\"col-12 text-end\">
                    {# -- Row statistics -- #}
                    {% set row = currentView.getRow('statistics') %}
                    {{ row.render(fsc) | raw }}
                    {% if fieldCount > 30 and currentView.settings.btnSave %}
                        <button class=\"btn btn-sm btn-primary\" type=\"submit\">
                            <i class=\"fa-solid fa-save fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">{{ trans('save') }}</span>
                        </button>
                    {% endif %}
                </div>
            </div>
            <div class=\"row\">
                {% for group in currentView.getColumns() %}
                    {{ group.edit(currentView.model) | raw }}
                {% endfor %}
            </div>
        </div>
        <div class=\"{{ currentView.settings.card ? 'card-footer p-2' : 'container-fluid' }}\">
            <div class=\"row\">
                {% if fsc.hasData and currentView.settings.btnDelete %}
                    <div class=\"col-auto\">
                        <button type=\"button\" class=\"btn btn-sm btn-danger\"
                                onclick=\"editViewDelete('{{ currentView.getViewName() }}');\">
                            <i class=\"fa-solid fa-trash-alt fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">{{ trans('delete') }}</span>
                        </button>
                    </div>
                {% endif %}
                {% set extraClass = fsc.hasData and currentView.settings.btnDelete ? 'text-center' : '' %}
                <div class=\"col {{ extraClass }}\">
                    {# -- Row actions -- #}
                    {% set row = currentView.getRow('actions') %}
                    {{ row.render(false, currentView.getViewName()) | raw }}
                </div>
                <div class=\"col-auto\">
                    {% if currentView.settings.btnUndo %}
                        <button class=\"btn btn-sm btn-secondary\" type=\"reset\">
                            <i class=\"fa-solid fa-undo fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">{{ trans('undo') }}</span>
                        </button>
                    {% endif %}
                    {% if currentView.settings.btnSave %}
                        <button class=\"btn btn-sm btn-primary\" type=\"submit\">
                            <i class=\"fa-solid fa-save fa-fw\" aria-hidden=\"true\"></i>
                            <span class=\"d-none d-sm-inline-block\">{{ trans('save') }}</span>
                        </button>
                    {% endif %}
                </div>
            </div>
        </div>
    </div>
</form>

<br/>

{# -- Row footer -- #}
<div class=\"row\">
    {% set row = currentView.getRow('footer') %}
    {{ row.render(currentView.getViewName(), '', fsc) | raw }}
</div>

{# -- Modals -- #}
{% for group in currentView.getModals() %}
    {{ group.modal(currentView.model, currentView.getViewName()) | raw }}
{% endfor %}

{# -- Delete Confirmation Modal -- #}
<div class=\"modal fade\" id=\"deleteConfirmModal{{ currentView.getViewName() }}\" tabindex=\"-1\" aria-labelledby=\"deleteConfirmModalLabel{{ currentView.getViewName() }}\" aria-hidden=\"true\">
    <div class=\"modal-dialog\">
        <div class=\"modal-content\">
            <div class=\"modal-header\">
                <h5 class=\"modal-title\" id=\"deleteConfirmModalLabel{{ currentView.getViewName() }}\">{{ trans('confirm-delete') }}</h5>
                <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
            </div>
            <div class=\"modal-body\">
                {{ trans('are-you-sure') }}
            </div>
            <div class=\"modal-footer\">
                <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">
                    <i class=\"fa-solid fa-times\"></i> {{ trans('cancel') }}
                </button>
                <button type=\"button\" class=\"btn btn-danger\" id=\"confirmDeleteBtn{{ currentView.getViewName() }}\">
                    <i class=\"fa-solid fa-check\"></i> {{ trans('confirm') }}
                </button>
            </div>
        </div>
    </div>
</div>
", "Master/EditView.html.twig", "D:\\xampp\\htdocs\\Facturascripts\\Core\\View\\Master\\EditView.html.twig");
    }
}
