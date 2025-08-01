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

/* Master/AppHeader.html.twig */
class __TwigTemplate_5713d3a5f7b75d1fe1096c69ebe9f8bd extends Template
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
        // line 1
        yield "<header class=\"app-header\">
    <nav class=\"navbar navbar-expand-lg navbar-light\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item d-block d-xl-none\">
                <a class=\"nav-link sidebartoggler \" id=\"headerCollapse\" href=\"javascript:void(0)\">
                    ";
        // line 7
        yield "                    <i class=\"fa-solid fa-bars\"></i>
                </a>
            </li>
            <li class=\"nav-item\" style=\"display: flex; align-self: anchor-center\">
                    <a class=\"logo-link\" href=\"";
        // line 11
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 11), "homepage", [], "any", false, false, false, 11)), "html", null, true);
        yield "\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("homepage"), "html", null, true);
        yield "\">
                        <span class=\"logo-text text-dark\">";
        // line 12
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "pagedata", [], "any", false, false, false, 12), "ordernum", [], "any", false, false, false, 12), "html", null, true);
        yield "</span>
                    </a>
                </li>
        </ul>
        
    </nav>
</header>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Master/AppHeader.html.twig";
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
        return array (  57 => 12,  51 => 11,  45 => 7,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("<header class=\"app-header\">
    <nav class=\"navbar navbar-expand-lg navbar-light\">
        <ul class=\"navbar-nav\">
            <li class=\"nav-item d-block d-xl-none\">
                <a class=\"nav-link sidebartoggler \" id=\"headerCollapse\" href=\"javascript:void(0)\">
                    {# <i class=\"ti ti-menu-2\"></i> #}
                    <i class=\"fa-solid fa-bars\"></i>
                </a>
            </li>
            <li class=\"nav-item\" style=\"display: flex; align-self: anchor-center\">
                    <a class=\"logo-link\" href=\"{{ asset(fsc.user.homepage) }}\" title=\"{{ trans('homepage') }}\">
                        <span class=\"logo-text text-dark\">{{ fsc.pagedata.ordernum }}</span>
                    </a>
                </li>
        </ul>
        
    </nav>
</header>
", "Master/AppHeader.html.twig", "D:\\xampp\\htdocs\\Facturascripts\\Plugins\\MartosOS\\View\\Master\\AppHeader.html.twig");
    }
}
