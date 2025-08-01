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

/* ClientesListado.html.twig */
class __TwigTemplate_1980eee65d814dd0565461bd0caa6dc4 extends Template
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
        $this->parent = $this->loadTemplate("Master/MenuTemplate.html.twig", "ClientesListado.html.twig", 1);
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
        .page-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem; }
        .summary-card .card-body { padding: 1.25rem; text-align: center; }
        .summary-card-value { font-size: 2.25rem; font-weight: 700; color: #3a3b45; }
        .summary-card-title { font-size: 0.9rem; color: #858796; margin-bottom: 0; }
        .client-card { border: 1px solid #e3e6f0; box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, .08); transition: transform 0.2s, box-shadow 0.2s; }
        .client-card:hover { transform: translateY(-5px); box-shadow: 0 0.5rem 1.75rem 0 rgba(58, 59, 69, .15); }
        .client-card .card-header { background-color: #f8f9fc; }
        .client-card .client-name { font-weight: 700; font-size: 1.1rem; color: #3a3b45; }
    </style>
";
        return; yield '';
    }

    // line 17
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 18
        yield "<div class=\"container-fluid\">

    <div class=\"page-header\">
        <div>
            <h1 class=\"h3 mb-1 text-gray-800\">Gestión de Clientes</h1>
            <p class=\"text-muted mb-0\">Administra tu base de datos de clientes</p>
        </div>
        <a href=\"#\" class=\"btn btn-primary disabled\">
            <i class=\"fas fa-plus fa-fw me-2\"></i>Nuevo Cliente
        </a>
    </div>

    <div class=\"row mb-4\">
        <div class=\"col-md-4\">
            <div class=\"card summary-card shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"summary-card-value\">";
        // line 34
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "stats", [], "any", false, false, false, 34), "totalClientes", [], "any", false, false, false, 34), "html", null, true);
        yield "</div>
                    <p class=\"summary-card-title\">Clientes en total</p>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card summary-card shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"summary-card-value\">";
        // line 42
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "stats", [], "any", false, false, false, 42), "oportunidadesTotales", [], "any", false, false, false, 42), "html", null, true);
        yield "</div>
                    <p class=\"summary-card-title\">Oportunidades Totales</p>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card summary-card shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"summary-card-value\">";
        // line 50
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatNumber(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "stats", [], "any", false, false, false, 50), "valorTotal", [], "any", false, false, false, 50), 0, ",", "."), "html", null, true);
        yield " €</div>
                    <p class=\"summary-card-title\">Valor Pipeline Activo</p>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        ";
        // line 58
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "clientes", [], "any", false, false, false, 58));
        $context['_iterated'] = false;
        foreach ($context['_seq'] as $context["_key"] => $context["cliente"]) {
            // line 59
            yield "            <div class=\"col-lg-4 col-md-6 mb-4\">
                <div class=\"card client-card h-100\">
                    <div class=\"card-header\">
                        <a href=\"";
            // line 62
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 62), "html", null, true);
            yield "?id=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cliente"], "codcliente", [], "any", false, false, false, 62), "html", null, true);
            yield "\" class=\"text-decoration-none\">
                            <div class=\"client-name\">";
            // line 63
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cliente"], "nombre", [], "any", false, false, false, 63), "html", null, true);
            yield "</div>
                            <div class=\"text-muted small\">";
            // line 64
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["cliente"], "actividad", [], "any", true, true, false, 64)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["cliente"], "actividad", [], "any", false, false, false, 64), "Sin sector")) : ("Sin sector")), "html", null, true);
            yield "</div>
                        </a>
                    </div>
                    <div class=\"card-body\">
                        <p class=\"mb-1\"><i class=\"fas fa-user fa-fw me-2 text-muted\"></i> ";
            // line 68
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["cliente"], "personacontacto", [], "any", true, true, false, 68)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["cliente"], "personacontacto", [], "any", false, false, false, 68), "Sin contacto")) : ("Sin contacto")), "html", null, true);
            yield "</p>
                        <p class=\"mb-1\"><i class=\"fas fa-envelope fa-fw me-2 text-muted\"></i> ";
            // line 69
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["cliente"], "email", [], "any", true, true, false, 69)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["cliente"], "email", [], "any", false, false, false, 69), "No disponible")) : ("No disponible")), "html", null, true);
            yield "</p>
                        <p class=\"mb-0\"><i class=\"fas fa-phone fa-fw me-2 text-muted\"></i> ";
            // line 70
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, $context["cliente"], "telefono1", [], "any", true, true, false, 70)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, $context["cliente"], "telefono1", [], "any", false, false, false, 70), "No disponible")) : ("No disponible")), "html", null, true);
            yield "</p>
                    </div>
                    <div class=\"card-footer text-end bg-light\">
                        <a href=\"";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 73), "html", null, true);
            yield "?id=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["cliente"], "codcliente", [], "any", false, false, false, 73), "html", null, true);
            yield "\" class=\"btn btn-sm btn-outline-primary\">
                            Ver ficha
                        </a>
                    </div>
                </div>
            </div>
        ";
            $context['_iterated'] = true;
        }
        if (!$context['_iterated']) {
            // line 80
            yield "            <div class=\"col-12\">
                <div class=\"alert alert-info text-center p-5\">
                    <h5>No se encontraron clientes</h5>
                    <p class=\"mb-0\">Prueba a quitar filtros o crea tu primer cliente.</p>
                </div>
            </div>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['cliente'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 87
        yield "    </div>

</div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "ClientesListado.html.twig";
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
        return array (  192 => 87,  180 => 80,  166 => 73,  160 => 70,  156 => 69,  152 => 68,  145 => 64,  141 => 63,  135 => 62,  130 => 59,  125 => 58,  114 => 50,  103 => 42,  92 => 34,  74 => 18,  70 => 17,  52 => 4,  48 => 3,  37 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% extends 'Master/MenuTemplate.html.twig' %}

{% block css %}
    {{ parent() }}
    <style>
        .page-header { display: flex; justify-content: space-between; align-items: center; margin-bottom: 1.5rem; }
        .summary-card .card-body { padding: 1.25rem; text-align: center; }
        .summary-card-value { font-size: 2.25rem; font-weight: 700; color: #3a3b45; }
        .summary-card-title { font-size: 0.9rem; color: #858796; margin-bottom: 0; }
        .client-card { border: 1px solid #e3e6f0; box-shadow: 0 0.15rem 1.75rem 0 rgba(58, 59, 69, .08); transition: transform 0.2s, box-shadow 0.2s; }
        .client-card:hover { transform: translateY(-5px); box-shadow: 0 0.5rem 1.75rem 0 rgba(58, 59, 69, .15); }
        .client-card .card-header { background-color: #f8f9fc; }
        .client-card .client-name { font-weight: 700; font-size: 1.1rem; color: #3a3b45; }
    </style>
{% endblock %}

{% block body %}
<div class=\"container-fluid\">

    <div class=\"page-header\">
        <div>
            <h1 class=\"h3 mb-1 text-gray-800\">Gestión de Clientes</h1>
            <p class=\"text-muted mb-0\">Administra tu base de datos de clientes</p>
        </div>
        <a href=\"#\" class=\"btn btn-primary disabled\">
            <i class=\"fas fa-plus fa-fw me-2\"></i>Nuevo Cliente
        </a>
    </div>

    <div class=\"row mb-4\">
        <div class=\"col-md-4\">
            <div class=\"card summary-card shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"summary-card-value\">{{ fsc.stats.totalClientes }}</div>
                    <p class=\"summary-card-title\">Clientes en total</p>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card summary-card shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"summary-card-value\">{{ fsc.stats.oportunidadesTotales }}</div>
                    <p class=\"summary-card-title\">Oportunidades Totales</p>
                </div>
            </div>
        </div>
        <div class=\"col-md-4\">
            <div class=\"card summary-card shadow-sm\">
                <div class=\"card-body\">
                    <div class=\"summary-card-value\">{{ fsc.stats.valorTotal|number_format(0, ',', '.') }} €</div>
                    <p class=\"summary-card-title\">Valor Pipeline Activo</p>
                </div>
            </div>
        </div>
    </div>

    <div class=\"row\">
        {% for cliente in fsc.clientes %}
            <div class=\"col-lg-4 col-md-6 mb-4\">
                <div class=\"card client-card h-100\">
                    <div class=\"card-header\">
                        <a href=\"{{ fsc.url() }}?id={{ cliente.codcliente }}\" class=\"text-decoration-none\">
                            <div class=\"client-name\">{{ cliente.nombre }}</div>
                            <div class=\"text-muted small\">{{ cliente.actividad|default('Sin sector') }}</div>
                        </a>
                    </div>
                    <div class=\"card-body\">
                        <p class=\"mb-1\"><i class=\"fas fa-user fa-fw me-2 text-muted\"></i> {{ cliente.personacontacto|default('Sin contacto') }}</p>
                        <p class=\"mb-1\"><i class=\"fas fa-envelope fa-fw me-2 text-muted\"></i> {{ cliente.email|default('No disponible') }}</p>
                        <p class=\"mb-0\"><i class=\"fas fa-phone fa-fw me-2 text-muted\"></i> {{ cliente.telefono1|default('No disponible') }}</p>
                    </div>
                    <div class=\"card-footer text-end bg-light\">
                        <a href=\"{{ fsc.url() }}?id={{ cliente.codcliente }}\" class=\"btn btn-sm btn-outline-primary\">
                            Ver ficha
                        </a>
                    </div>
                </div>
            </div>
        {% else %}
            <div class=\"col-12\">
                <div class=\"alert alert-info text-center p-5\">
                    <h5>No se encontraron clientes</h5>
                    <p class=\"mb-0\">Prueba a quitar filtros o crea tu primer cliente.</p>
                </div>
            </div>
        {% endfor %}
    </div>

</div>
{% endblock %}", "ClientesListado.html.twig", "D:\\xampp\\htdocs\\Facturascripts\\Plugins\\MartosOS\\View\\ClientesListado.html.twig");
    }
}
