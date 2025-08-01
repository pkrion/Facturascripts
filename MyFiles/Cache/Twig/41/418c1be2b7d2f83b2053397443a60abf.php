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

/* ClienteDetalle.html.twig */
class __TwigTemplate_50e49b2870fab5f91bcc1f6d4ecff5f2 extends Template
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
        $this->parent = $this->loadTemplate("Master/MenuTemplate.html.twig", "ClienteDetalle.html.twig", 1);
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
    <style>
        .kpi-box { text-align: center; padding: 1rem; background-color: #f8f9fc; border-radius: 0.5rem; }
        .kpi-box .value { font-size: 1.5rem; font-weight: 700; }
        .kpi-box .label { font-size: 0.8rem; color: #858796; }
        .timeline-item { position: relative; padding-left: 30px; border-left: 2px solid #e3e6f0; margin-left: 10px; padding-bottom: 1.5rem;}
        .timeline-icon { position: absolute; left: -17px; top: 0; width: 32px; height: 32px; background-color: #fff; border: 2px solid #e3e6f0; border-radius: 50%; display: flex; align-items: center; justify-content: center; }
    </style>
";
        return; yield '';
    }

    // line 14
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 15
        yield "<div class=\"container-fluid\">

    <div class=\"d-flex align-items-center gap-3 mb-4\">
        <div class=\"bg-primary text-white rounded-circle d-flex align-items-center justify-content-center\" style=\"width: 60px; height: 60px; font-size: 24px;\">
            ";
        // line 19
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::upper($this->env->getCharset(), Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "cliente", [], "any", false, false, false, 19), "nombre", [], "any", false, false, false, 19), 0, 2)), "html", null, true);
        yield "
        </div>
        <div>
            <h1 class=\"h3 mb-0 text-gray-800\">";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "cliente", [], "any", false, false, false, 22), "nombre", [], "any", false, false, false, 22), "html", null, true);
        yield "</h1>
            <p class=\"mb-0 text-muted\"><i class=\"fas fa-briefcase fa-fw me-1\"></i> ";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "cliente", [], "any", false, true, false, 23), "actividad", [], "any", true, true, false, 23)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "cliente", [], "any", false, true, false, 23), "actividad", [], "any", false, false, false, 23), "Sin sector")) : ("Sin sector")), "html", null, true);
        yield "</p>
        </div>
    </div>

    <div class=\"row mb-4\">
        <div class=\"col\">
            <div class=\"kpi-box\">
                <div class=\"value text-primary\">";
        // line 30
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "cliente", [], "any", false, true, false, 30), "last_nps_score", [], "any", true, true, false, 30)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "cliente", [], "any", false, true, false, 30), "last_nps_score", [], "any", false, false, false, 30), "-")) : ("-")), "html", null, true);
        yield "/10</div>
                <div class=\"label\">NPS Score</div>
            </div>
        </div>
        <div class=\"col\">
            <div class=\"kpi-box\">
                <div class=\"value text-success\">";
        // line 36
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "cliente", [], "any", false, true, false, 36), "health_score_actual", [], "any", true, true, false, 36)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "cliente", [], "any", false, true, false, 36), "health_score_actual", [], "any", false, false, false, 36), "-")) : ("-")), "html", null, true);
        yield "/100</div>
                <div class=\"label\">Health Score</div>
            </div>
        </div>
    </div>

    <ul class=\"nav nav-tabs mb-4\" role=\"tablist\">
        <li class=\"nav-item\"><a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#resumen\" role=\"tab\">Resumen</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#oportunidades\" role=\"tab\">Oportunidades</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#timeline\" role=\"tab\">Timeline</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#facturas\" role=\"tab\">Facturas</a></li>
    </ul>

    <div class=\"tab-content\">
        <div class=\"tab-pane fade show active p-3\" id=\"resumen\">
            <div class=\"row\"><div class=\"col-md-6\"><strong>Email:</strong> ";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "cliente", [], "any", false, true, false, 51), "email", [], "any", true, true, false, 51)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "cliente", [], "any", false, true, false, 51), "email", [], "any", false, false, false, 51), "-")) : ("-")), "html", null, true);
        yield "</div><div class=\"col-md-6\"><strong>Teléfono:</strong> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "cliente", [], "any", false, true, false, 51), "telefono1", [], "any", true, true, false, 51)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "cliente", [], "any", false, true, false, 51), "telefono1", [], "any", false, false, false, 51), "-")) : ("-")), "html", null, true);
        yield "</div></div>
            <hr class=\"my-3\">
            <div class=\"row\"><div class=\"col-md-6\"><strong>Dirección:</strong> ";
        // line 53
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "cliente", [], "any", false, true, false, 53), "direccion", [], "any", true, true, false, 53)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "cliente", [], "any", false, true, false, 53), "direccion", [], "any", false, false, false, 53), "-")) : ("-")), "html", null, true);
        yield "</div><div class=\"col-md-6\"><strong>CIF/NIF:</strong> ";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "cliente", [], "any", false, false, false, 53), "cifnif", [], "any", false, false, false, 53), "html", null, true);
        yield "</div></div>
        </div>

        <div class=\"tab-pane fade p-3\" id=\"oportunidades\">
            ";
        // line 57
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "oportunidades", [], "any", false, false, false, 57)) {
            // line 58
            yield "                <table class=\"table table-hover\">
                    <thead><tr><th>Nombre</th><th>Etapa</th><th>Valor</th><th>Resultado</th></tr></thead>
                    <tbody>
                    ";
            // line 61
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "oportunidades", [], "any", false, false, false, 61));
            foreach ($context['_seq'] as $context["_key"] => $context["op"]) {
                // line 62
                yield "                        <tr><td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["op"], "nombre", [], "any", false, false, false, 62), "html", null, true);
                yield "</td><td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["op"], "etapa", [], "any", false, false, false, 62), "html", null, true);
                yield "</td><td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["op"], "valor_estimado", [], "any", false, false, false, 62), 0, ",", "."), "html", null, true);
                yield " €</td><td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["op"], "resultado", [], "any", false, false, false, 62), "html", null, true);
                yield "</td></tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['op'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 64
            yield "                    </tbody>
                </table>
            ";
        } else {
            // line 67
            yield "                <p class=\"text-muted\">Sin oportunidades registradas.</p>
            ";
        }
        // line 69
        yield "        </div>

        <div class=\"tab-pane fade p-3\" id=\"timeline\">
            <div class=\"timeline\">
            ";
        // line 73
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "timeline", [], "any", false, false, false, 73));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["actividad"]) {
            // line 74
            yield "                <div class=\"timeline-item\">
                    <div class=\"timeline-icon bg-light\"><i class=\"fas fa-calendar-alt\"></i></div>
                    <p class=\"mb-1\"><strong>";
            // line 76
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "tipo", [], "any", false, false, false, 76), "html", null, true);
            yield ":</strong> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "descripcion", [], "any", false, false, false, 76), "html", null, true);
            yield "</p>
                    <small class=\"text-muted\">";
            // line 77
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["actividad"], "fecha", [], "any", false, false, false, 77), "d/m/Y H:i"), "html", null, true);
            yield "</small>
                </div>
            ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 80
            yield "                <p class=\"text-muted\">Sin actividades registradas.</p>
            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['actividad'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 82
        yield "            </div>
        </div>

        <div class=\"tab-pane fade p-3\" id=\"facturas\">
            ";
        // line 86
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "facturas", [], "any", false, false, false, 86)) {
            // line 87
            yield "                <table class=\"table table-hover\">
                    <thead><tr><th>Código</th><th>Fecha</th><th>Total</th><th>Pagada</th></tr></thead>
                    <tbody>
                    ";
            // line 90
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "facturas", [], "any", false, false, false, 90));
            foreach ($context['_seq'] as $context["_key"] => $context["factura"]) {
                // line 91
                yield "                        <tr><td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["factura"], "codigo", [], "any", false, false, false, 91), "html", null, true);
                yield "</td><td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate(CoreExtension::getAttribute($this->env, $this->source, $context["factura"], "fecha", [], "any", false, false, false, 91), "d/m/Y"), "html", null, true);
                yield "</td><td>";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, $context["factura"], "total", [], "any", false, false, false, 91), 2, ",", "."), "html", null, true);
                yield " €</td><td>";
                yield ((CoreExtension::getAttribute($this->env, $this->source, $context["factura"], "pagada", [], "any", false, false, false, 91)) ? ("Sí") : ("No"));
                yield "</td></tr>
                    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['factura'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 93
            yield "                    </tbody>
                </table>
            ";
        } else {
            // line 96
            yield "                <p class=\"text-muted\">Este cliente no tiene facturas.</p>
            ";
        }
        // line 98
        yield "        </div>
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
        return "ClienteDetalle.html.twig";
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
        return array (  252 => 98,  248 => 96,  243 => 93,  228 => 91,  224 => 90,  219 => 87,  217 => 86,  211 => 82,  204 => 80,  196 => 77,  190 => 76,  186 => 74,  181 => 73,  175 => 69,  171 => 67,  166 => 64,  151 => 62,  147 => 61,  142 => 58,  140 => 57,  131 => 53,  124 => 51,  106 => 36,  97 => 30,  87 => 23,  83 => 22,  77 => 19,  71 => 15,  67 => 14,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Master/MenuTemplate.html.twig' %}

{% block css %}
    {{ parent() }}
    <style>
        .kpi-box { text-align: center; padding: 1rem; background-color: #f8f9fc; border-radius: 0.5rem; }
        .kpi-box .value { font-size: 1.5rem; font-weight: 700; }
        .kpi-box .label { font-size: 0.8rem; color: #858796; }
        .timeline-item { position: relative; padding-left: 30px; border-left: 2px solid #e3e6f0; margin-left: 10px; padding-bottom: 1.5rem;}
        .timeline-icon { position: absolute; left: -17px; top: 0; width: 32px; height: 32px; background-color: #fff; border: 2px solid #e3e6f0; border-radius: 50%; display: flex; align-items: center; justify-content: center; }
    </style>
{% endblock %}

{% block body %}
<div class=\"container-fluid\">

    <div class=\"d-flex align-items-center gap-3 mb-4\">
        <div class=\"bg-primary text-white rounded-circle d-flex align-items-center justify-content-center\" style=\"width: 60px; height: 60px; font-size: 24px;\">
            {{ fsc.cliente.nombre|slice(0, 2)|upper }}
        </div>
        <div>
            <h1 class=\"h3 mb-0 text-gray-800\">{{ fsc.cliente.nombre }}</h1>
            <p class=\"mb-0 text-muted\"><i class=\"fas fa-briefcase fa-fw me-1\"></i> {{ fsc.cliente.actividad|default('Sin sector') }}</p>
        </div>
    </div>

    <div class=\"row mb-4\">
        <div class=\"col\">
            <div class=\"kpi-box\">
                <div class=\"value text-primary\">{{ fsc.cliente.last_nps_score|default('-') }}/10</div>
                <div class=\"label\">NPS Score</div>
            </div>
        </div>
        <div class=\"col\">
            <div class=\"kpi-box\">
                <div class=\"value text-success\">{{ fsc.cliente.health_score_actual|default('-') }}/100</div>
                <div class=\"label\">Health Score</div>
            </div>
        </div>
    </div>

    <ul class=\"nav nav-tabs mb-4\" role=\"tablist\">
        <li class=\"nav-item\"><a class=\"nav-link active\" data-bs-toggle=\"tab\" href=\"#resumen\" role=\"tab\">Resumen</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#oportunidades\" role=\"tab\">Oportunidades</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#timeline\" role=\"tab\">Timeline</a></li>
        <li class=\"nav-item\"><a class=\"nav-link\" data-bs-toggle=\"tab\" href=\"#facturas\" role=\"tab\">Facturas</a></li>
    </ul>

    <div class=\"tab-content\">
        <div class=\"tab-pane fade show active p-3\" id=\"resumen\">
            <div class=\"row\"><div class=\"col-md-6\"><strong>Email:</strong> {{ fsc.cliente.email|default('-') }}</div><div class=\"col-md-6\"><strong>Teléfono:</strong> {{ fsc.cliente.telefono1|default('-') }}</div></div>
            <hr class=\"my-3\">
            <div class=\"row\"><div class=\"col-md-6\"><strong>Dirección:</strong> {{ fsc.cliente.direccion|default('-') }}</div><div class=\"col-md-6\"><strong>CIF/NIF:</strong> {{ fsc.cliente.cifnif }}</div></div>
        </div>

        <div class=\"tab-pane fade p-3\" id=\"oportunidades\">
            {% if fsc.oportunidades %}
                <table class=\"table table-hover\">
                    <thead><tr><th>Nombre</th><th>Etapa</th><th>Valor</th><th>Resultado</th></tr></thead>
                    <tbody>
                    {% for op in fsc.oportunidades %}
                        <tr><td>{{ op.nombre }}</td><td>{{ op.etapa }}</td><td>{{ op.valor_estimado|number_format(0, ',', '.') }} €</td><td>{{ op.resultado }}</td></tr>
                    {% endfor %}
                    </tbody>
                </table>
            {% else %}
                <p class=\"text-muted\">Sin oportunidades registradas.</p>
            {% endif %}
        </div>

        <div class=\"tab-pane fade p-3\" id=\"timeline\">
            <div class=\"timeline\">
            {% for actividad in fsc.timeline %}
                <div class=\"timeline-item\">
                    <div class=\"timeline-icon bg-light\"><i class=\"fas fa-calendar-alt\"></i></div>
                    <p class=\"mb-1\"><strong>{{ actividad.tipo }}:</strong> {{ actividad.descripcion }}</p>
                    <small class=\"text-muted\">{{ actividad.fecha|date('d/m/Y H:i') }}</small>
                </div>
            {% else %}
                <p class=\"text-muted\">Sin actividades registradas.</p>
            {% endfor %}
            </div>
        </div>

        <div class=\"tab-pane fade p-3\" id=\"facturas\">
            {% if fsc.facturas %}
                <table class=\"table table-hover\">
                    <thead><tr><th>Código</th><th>Fecha</th><th>Total</th><th>Pagada</th></tr></thead>
                    <tbody>
                    {% for factura in fsc.facturas %}
                        <tr><td>{{ factura.codigo }}</td><td>{{ factura.fecha|date('d/m/Y') }}</td><td>{{ factura.total|number_format(2, ',', '.') }} €</td><td>{{ factura.pagada ? 'Sí' : 'No' }}</td></tr>
                    {% endfor %}
                    </tbody>
                </table>
            {% else %}
                <p class=\"text-muted\">Este cliente no tiene facturas.</p>
            {% endif %}
        </div>
    </div>
</div>
{% endblock %}", "ClienteDetalle.html.twig", "D:\\xampp\\htdocs\\Facturascripts\\Plugins\\MartosOS\\View\\ClienteDetalle.html.twig");
    }
}
