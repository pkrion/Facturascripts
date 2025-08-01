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

/* Tab/RefundFacturaCliente.html.twig */
class __TwigTemplate_4c6c59efcdb10dcbb1c83a915f46e883 extends Template
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
        $context["firstView"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 21));
        // line 22
        yield "
<script>
    function refundAll() {
        const refundableQty = document.getElementsByClassName(\"refundable\");
        const inputToBeRefunded = document.getElementsByClassName(\"to_refund\");
        for (let i = 0; i < inputToBeRefunded.length; i++) {
            inputToBeRefunded.item(i).value = refundableQty.item(i).value;
        }
        return false;
    }

    function refundNone() {
        const inputToBeRefunded = document.getElementsByClassName(\"to_refund\");
        for (let i = 0; i < inputToBeRefunded.length; i++) {
            inputToBeRefunded.item(i).value = 0;
        }
        return false;
    }
</script>

";
        // line 42
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "count", [], "any", false, false, false, 42) > 0)) {
            // line 43
            yield "    <div class=\"table-responsive\">
        <table class=\"table table-hover mb-5\">
            <thead>
            <tr>
                <th>";
            // line 47
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("rectified-invoice"), "html", null, true);
            yield "</th>
                <th>";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("number2"), "html", null, true);
            yield "</th>
                <th>";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("observations"), "html", null, true);
            yield "</th>
                <th class=\"text-end\">";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("total"), "html", null, true);
            yield "</th>
                <th class=\"text-end\">";
            // line 51
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("date"), "html", null, true);
            yield "</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 55
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "cursor", [], "any", false, false, false, 55));
            foreach ($context['_seq'] as $context["_key"] => $context["rectified"]) {
                // line 56
                yield "                <tr class=\"table-danger clickableRow\" data-href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rectified"], "url", [], "method", false, false, false, 56), "html", null, true);
                yield "\">
                    <td>";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rectified"], "codigo", [], "any", false, false, false, 57), "html", null, true);
                yield "</td>
                    <td>";
                // line 58
                yield CoreExtension::getAttribute($this->env, $this->source, $context["rectified"], "numero2", [], "any", false, false, false, 58);
                yield "</td>
                    <td>";
                // line 59
                yield CoreExtension::getAttribute($this->env, $this->source, $context["rectified"], "observaciones", [], "any", false, false, false, 59);
                yield "</td>
                    <td class=\"text-end\">";
                // line 60
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('money')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["rectified"], "total", [], "any", false, false, false, 60)), "html", null, true);
                yield "</td>
                    <td class=\"text-end\">";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["rectified"], "fecha", [], "any", false, false, false, 61), "html", null, true);
                yield "</td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['rectified'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            yield "            </tbody>
        </table>
    </div>
";
        }
        // line 68
        yield "
<form action=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 69), "url", [], "method", false, false, false, 69), "html", null, true);
        yield "\" method=\"post\" onsubmit=\"animateSpinner('add')\">
    ";
        // line 70
        yield $this->env->getFunction('formToken')->getCallable()();
        yield "
    <input type=\"hidden\" name=\"action\" value=\"new-refund\"/>
    <input type=\"hidden\" name=\"activetab\" value=\"";
        // line 72
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 72), "html", null, true);
        yield "\"/>
    <input type=\"hidden\" name=\"idfactura\" value=\"";
        // line 73
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 73), "primaryColumnValue", [], "method", false, false, false, 73), "html", null, true);
        yield "\"/>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card border-warning shadow mb-4\">
                    <div class=\"card-header bg-warning\">
                        <i class=\"fa-solid fa-share fa-fw\" aria-hidden=\"true\"></i> ";
        // line 79
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("new-refund"), "html", null, true);
        yield "
                    </div>
                    <div class=\"card-body\">
                        <p>";
        // line 82
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("rectified-invoice-p"), "html", null, true);
        yield "</p>
                        <div class=\"row align-items-end\">
                            <div class=\"col-sm\">
                                <div class=\"mb-3\">
                                    ";
        // line 86
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("serie"), "html", null, true);
        yield "
                                    <select name=\"codserie\" class=\"form-select\">
                                        ";
        // line 88
        $context["series"] = CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "series", ["R"], "method", false, false, false, 88);
        // line 89
        yield "                                        ";
        if (Twig\Extension\CoreExtension::testEmpty(($context["series"] ?? null))) {
            // line 90
            yield "                                            ";
            $context["series"] = CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "series", [], "method", false, false, false, 90);
            // line 91
            yield "                                        ";
        }
        // line 92
        yield "                                        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(($context["series"] ?? null));
        foreach ($context['_seq'] as $context["_key"] => $context["serie"]) {
            // line 93
            yield "                                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "codserie", [], "any", false, false, false, 93) == $this->env->getFunction('settings')->getCallable()("default", "codserierec", "R"))) {
                // line 94
                yield "                                                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "codserie", [], "any", false, false, false, 94), "html", null, true);
                yield "\" selected>
                                                    ";
                // line 95
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "descripcion", [], "any", false, false, false, 95), "html", null, true);
                yield "
                                                </option>
                                            ";
            } else {
                // line 98
                yield "                                                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "codserie", [], "any", false, false, false, 98), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["serie"], "descripcion", [], "any", false, false, false, 98), "html", null, true);
                yield "</option>
                                            ";
            }
            // line 100
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['serie'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 101
        yield "                                    </select>
                                </div>
                            </div>
                            <div class=\"col-sm\">
                                <div class=\"mb-3\">
                                    ";
        // line 106
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("date"), "html", null, true);
        yield "
                                    <input type=\"date\" name=\"fecha\" value=\"";
        // line 107
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, ($context["task"] ?? null), "end", [], "any", false, false, false, 107), "Y-m-d"), "html", null, true);
        yield "\"
                                           class=\"form-control\" required>
                                </div>
                            </div>
                            <div class=\"col-sm\">
                                <div class=\"mb-3\">
                                    ";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("status"), "html", null, true);
        yield "
                                    <select name=\"idestado\" class=\"form-select\">
                                        ";
        // line 115
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 115), "getAvailableStatus", [], "method", false, false, false, 115));
        foreach ($context['_seq'] as $context["_key"] => $context["status"]) {
            // line 116
            yield "                                            ";
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["status"], "idestado", [], "any", false, false, false, 116) === 11)) {
                // line 117
                yield "                                                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["status"], "idestado", [], "any", false, false, false, 117), "html", null, true);
                yield "\" selected>
                                                    ";
                // line 118
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["status"], "nombre", [], "any", false, false, false, 118), "html", null, true);
                yield "
                                                </option>
                                            ";
            } else {
                // line 121
                yield "                                                <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["status"], "idestado", [], "any", false, false, false, 121), "html", null, true);
                yield "\">
                                                    ";
                // line 122
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["status"], "nombre", [], "any", false, false, false, 122), "html", null, true);
                yield "
                                                </option>
                                            ";
            }
            // line 125
            yield "                                        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['status'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        yield "                                    </select>
                                </div>
                            </div>
                            <div class=\"col-sm text-end\">
                                <div class=\"btn-group mb-3\">
                                    <div class=\"dropdown\">
                                        <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\"
                                                data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <i class=\"fa-solid fa-check-square fa-fw\"></i> ";
        // line 134
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("select"), "html", null, true);
        yield "
                                        </button>
                                        <div class=\"dropdown-menu dropdown-menu-end\">
                                            <a class=\"dropdown-item\" href=\"#\" onClick=\"return refundNone();\">
                                                <i class=\"far fa-square fa-fw\"></i> ";
        // line 138
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("select-none"), "html", null, true);
        yield "
                                            </a>
                                            <a class=\"dropdown-item\" href=\"#\" onClick=\"return refundAll();\">
                                                <i class=\"fa-solid fa-square fa-fw\"></i> ";
        // line 141
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("select-all"), "html", null, true);
        yield "
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"btn-group mb-3 ms-3\">
                                    <button type=\"submit\" class=\"btn btn-spin-action btn-warning\">
                                        <i class=\"fa-solid fa-save fa-fw\" aria-hidden=\"true\"></i> ";
        // line 148
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("save"), "html", null, true);
        yield "
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table table-sm table-hover mb-0\">
                            <thead>
                            <tr>
                                <th>";
        // line 158
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("description"), "html", null, true);
        yield "</th>
                                <th class=\"text-end\">";
        // line 159
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("quantity"), "html", null, true);
        yield "</th>
                                <th class=\"text-end\">";
        // line 160
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("to-refund"), "html", null, true);
        yield "</th>
                                <th class=\"text-end\">";
        // line 161
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("refund-amount"), "html", null, true);
        yield "</th>
                            </tr>
                            </thead>
                            <tbody>
                            ";
        // line 165
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 165), "getLines", [], "method", false, false, false, 165));
        foreach ($context['_seq'] as $context["_key"] => $context["line"]) {
            // line 166
            yield "                                ";
            $context["refunded"] = CoreExtension::getAttribute($this->env, $this->source, $context["line"], "refundedQuantity", [], "method", false, false, false, 166);
            // line 167
            yield "                                <tr>
                                    <td class=\"align-middle\">
                                        <a href=\"";
            // line 169
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["line"], "getProducto", [], "method", false, false, false, 169), "url", [], "method", false, false, false, 169), "html", null, true);
            yield "\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["line"], "referencia", [], "any", false, false, false, 169), "html", null, true);
            yield "</a>
                                        ";
            // line 170
            yield CoreExtension::getAttribute($this->env, $this->source, $context["line"], "descripcion", [], "any", false, false, false, 170);
            yield "
                                    </td>
                                    <td class=\"align-middle text-end\">
                                        ";
            // line 173
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('number')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["line"], "cantidad", [], "any", false, false, false, 173)), "html", null, true);
            yield "
                                    </td>
                                    <td class=\"table-warning\">
                                        <input type=\"hidden\" value=\"";
            // line 176
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["line"], "cantidad", [], "any", false, false, false, 176), "html", null, true);
            yield "\" class=\"refundable\">
                                        ";
            // line 177
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["line"], "cantidad", [], "any", false, false, false, 177) > 0)) {
                // line 178
                yield "                                            <input type=\"number\" name=\"refund_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["line"], "primaryColumnValue", [], "method", false, false, false, 178), "html", null, true);
                yield "\"
                                                   value=\"0\" min=\"0\" max=\"";
                // line 179
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((CoreExtension::getAttribute($this->env, $this->source, $context["line"], "cantidad", [], "any", false, false, false, 179) - ($context["refunded"] ?? null)), "html", null, true);
                yield "\" step=\"any\"
                                                   class=\"form-control text-end to_refund\" autocomplete=\"off\"/>
                                        ";
            } else {
                // line 182
                yield "                                            <input type=\"number\" name=\"refund_";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["line"], "primaryColumnValue", [], "method", false, false, false, 182), "html", null, true);
                yield "\"
                                                   value=\"0\" step=\"any\" class=\"form-control text-end to_refund\"
                                                   autocomplete=\"off\"/>
                                        ";
            }
            // line 186
            yield "                                    </td>
                                    <td class=\"align-middle table-warning text-end\">
                                        ";
            // line 188
            if ((($context["refunded"] ?? null) == 0)) {
                // line 189
                yield "                                            -
                                        ";
            } else {
                // line 191
                yield "                                            ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('number')->getCallable()(($context["refunded"] ?? null)), "html", null, true);
                yield "
                                        ";
            }
            // line 193
            yield "                                    </td>
                                </tr>
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['line'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 196
        yield "                            </tbody>
                        </table>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"mb-3\">
                            <textarea name=\"observaciones\" class=\"form-control\"
                                      placeholder=\"";
        // line 202
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("observations"), "html", null, true);
        yield "\"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Tab/RefundFacturaCliente.html.twig";
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
        return array (  433 => 202,  425 => 196,  417 => 193,  411 => 191,  407 => 189,  405 => 188,  401 => 186,  393 => 182,  387 => 179,  382 => 178,  380 => 177,  376 => 176,  370 => 173,  364 => 170,  358 => 169,  354 => 167,  351 => 166,  347 => 165,  340 => 161,  336 => 160,  332 => 159,  328 => 158,  315 => 148,  305 => 141,  299 => 138,  292 => 134,  282 => 126,  276 => 125,  270 => 122,  265 => 121,  259 => 118,  254 => 117,  251 => 116,  247 => 115,  242 => 113,  233 => 107,  229 => 106,  222 => 101,  216 => 100,  208 => 98,  202 => 95,  197 => 94,  194 => 93,  189 => 92,  186 => 91,  183 => 90,  180 => 89,  178 => 88,  173 => 86,  166 => 82,  160 => 79,  151 => 73,  147 => 72,  142 => 70,  138 => 69,  135 => 68,  129 => 64,  120 => 61,  116 => 60,  112 => 59,  108 => 58,  104 => 57,  99 => 56,  95 => 55,  88 => 51,  84 => 50,  80 => 49,  76 => 48,  72 => 47,  66 => 43,  64 => 42,  42 => 22,  40 => 21,  38 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * This file is part of FacturaScripts
 * Copyright (C) 2018-2024 Carlos Garcia Gomez <carlos@facturascripts.com>
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
{% set firstView = fsc.views | first %}

<script>
    function refundAll() {
        const refundableQty = document.getElementsByClassName(\"refundable\");
        const inputToBeRefunded = document.getElementsByClassName(\"to_refund\");
        for (let i = 0; i < inputToBeRefunded.length; i++) {
            inputToBeRefunded.item(i).value = refundableQty.item(i).value;
        }
        return false;
    }

    function refundNone() {
        const inputToBeRefunded = document.getElementsByClassName(\"to_refund\");
        for (let i = 0; i < inputToBeRefunded.length; i++) {
            inputToBeRefunded.item(i).value = 0;
        }
        return false;
    }
</script>

{% if currentView.count > 0 %}
    <div class=\"table-responsive\">
        <table class=\"table table-hover mb-5\">
            <thead>
            <tr>
                <th>{{ trans('rectified-invoice') }}</th>
                <th>{{ trans('number2') }}</th>
                <th>{{ trans('observations') }}</th>
                <th class=\"text-end\">{{ trans('total') }}</th>
                <th class=\"text-end\">{{ trans('date') }}</th>
            </tr>
            </thead>
            <tbody>
            {% for rectified in currentView.cursor %}
                <tr class=\"table-danger clickableRow\" data-href=\"{{ rectified.url() }}\">
                    <td>{{ rectified.codigo }}</td>
                    <td>{{ rectified.numero2 | raw }}</td>
                    <td>{{ rectified.observaciones | raw }}</td>
                    <td class=\"text-end\">{{ money(rectified.total) }}</td>
                    <td class=\"text-end\">{{ rectified.fecha }}</td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
{% endif %}

<form action=\"{{ firstView.model.url() }}\" method=\"post\" onsubmit=\"animateSpinner('add')\">
    {{ formToken() }}
    <input type=\"hidden\" name=\"action\" value=\"new-refund\"/>
    <input type=\"hidden\" name=\"activetab\" value=\"{{ currentView.getViewName() }}\"/>
    <input type=\"hidden\" name=\"idfactura\" value=\"{{ firstView.model.primaryColumnValue() }}\"/>
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col\">
                <div class=\"card border-warning shadow mb-4\">
                    <div class=\"card-header bg-warning\">
                        <i class=\"fa-solid fa-share fa-fw\" aria-hidden=\"true\"></i> {{ trans('new-refund') }}
                    </div>
                    <div class=\"card-body\">
                        <p>{{ trans('rectified-invoice-p') }}</p>
                        <div class=\"row align-items-end\">
                            <div class=\"col-sm\">
                                <div class=\"mb-3\">
                                    {{ trans('serie') }}
                                    <select name=\"codserie\" class=\"form-select\">
                                        {% set series = fsc.series('R') %}
                                        {% if series is empty %}
                                            {% set series = fsc.series() %}
                                        {% endif %}
                                        {% for serie in series %}
                                            {% if serie.codserie == settings('default','codserierec','R') %}
                                                <option value=\"{{ serie.codserie }}\" selected>
                                                    {{ serie.descripcion }}
                                                </option>
                                            {% else %}
                                                <option value=\"{{ serie.codserie }}\">{{ serie.descripcion }}</option>
                                            {% endif %}
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                            <div class=\"col-sm\">
                                <div class=\"mb-3\">
                                    {{ trans('date') }}
                                    <input type=\"date\" name=\"fecha\" value=\"{{ task.end | date('Y-m-d') }}\"
                                           class=\"form-control\" required>
                                </div>
                            </div>
                            <div class=\"col-sm\">
                                <div class=\"mb-3\">
                                    {{ trans('status') }}
                                    <select name=\"idestado\" class=\"form-select\">
                                        {% for status in firstView.model.getAvailableStatus() %}
                                            {% if status.idestado is same as(11) %}
                                                <option value=\"{{ status.idestado }}\" selected>
                                                    {{ status.nombre }}
                                                </option>
                                            {% else %}
                                                <option value=\"{{ status.idestado }}\">
                                                    {{ status.nombre }}
                                                </option>
                                            {% endif %}
                                        {% endfor %}
                                    </select>
                                </div>
                            </div>
                            <div class=\"col-sm text-end\">
                                <div class=\"btn-group mb-3\">
                                    <div class=\"dropdown\">
                                        <button class=\"btn btn-secondary dropdown-toggle\" type=\"button\"
                                                data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
                                            <i class=\"fa-solid fa-check-square fa-fw\"></i> {{ trans('select') }}
                                        </button>
                                        <div class=\"dropdown-menu dropdown-menu-end\">
                                            <a class=\"dropdown-item\" href=\"#\" onClick=\"return refundNone();\">
                                                <i class=\"far fa-square fa-fw\"></i> {{ trans('select-none') }}
                                            </a>
                                            <a class=\"dropdown-item\" href=\"#\" onClick=\"return refundAll();\">
                                                <i class=\"fa-solid fa-square fa-fw\"></i> {{ trans('select-all') }}
                                            </a>
                                        </div>
                                    </div>
                                </div>
                                <div class=\"btn-group mb-3 ms-3\">
                                    <button type=\"submit\" class=\"btn btn-spin-action btn-warning\">
                                        <i class=\"fa-solid fa-save fa-fw\" aria-hidden=\"true\"></i> {{ trans('save') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class=\"table-responsive\">
                        <table class=\"table table-sm table-hover mb-0\">
                            <thead>
                            <tr>
                                <th>{{ trans('description') }}</th>
                                <th class=\"text-end\">{{ trans('quantity') }}</th>
                                <th class=\"text-end\">{{ trans('to-refund') }}</th>
                                <th class=\"text-end\">{{ trans('refund-amount') }}</th>
                            </tr>
                            </thead>
                            <tbody>
                            {% for line in firstView.model.getLines() %}
                                {% set refunded = line.refundedQuantity() %}
                                <tr>
                                    <td class=\"align-middle\">
                                        <a href=\"{{ line.getProducto().url() }}\">{{ line.referencia }}</a>
                                        {{ line.descripcion | raw }}
                                    </td>
                                    <td class=\"align-middle text-end\">
                                        {{ number(line.cantidad) }}
                                    </td>
                                    <td class=\"table-warning\">
                                        <input type=\"hidden\" value=\"{{ line.cantidad }}\" class=\"refundable\">
                                        {% if line.cantidad > 0 %}
                                            <input type=\"number\" name=\"refund_{{ line.primaryColumnValue() }}\"
                                                   value=\"0\" min=\"0\" max=\"{{ line.cantidad - refunded }}\" step=\"any\"
                                                   class=\"form-control text-end to_refund\" autocomplete=\"off\"/>
                                        {% else %}
                                            <input type=\"number\" name=\"refund_{{ line.primaryColumnValue() }}\"
                                                   value=\"0\" step=\"any\" class=\"form-control text-end to_refund\"
                                                   autocomplete=\"off\"/>
                                        {% endif %}
                                    </td>
                                    <td class=\"align-middle table-warning text-end\">
                                        {% if refunded == 0 %}
                                            -
                                        {% else %}
                                            {{ number(refunded) }}
                                        {% endif %}
                                    </td>
                                </tr>
                            {% endfor %}
                            </tbody>
                        </table>
                    </div>
                    <div class=\"card-body\">
                        <div class=\"mb-3\">
                            <textarea name=\"observaciones\" class=\"form-control\"
                                      placeholder=\"{{ trans('observations') }}\"></textarea>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>
", "Tab/RefundFacturaCliente.html.twig", "D:\\xampp\\htdocs\\Facturascripts\\Core\\View\\Tab\\RefundFacturaCliente.html.twig");
    }
}
