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

/* Master/PanelControllerBottom.html.twig */
class __TwigTemplate_ab5686a7fcb9baca4e100dcf411fd0e8 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/PanelController.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/PanelController.html.twig", "Master/PanelControllerBottom.html.twig", 20);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        yield "    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col\">
                ";
        // line 27
        yield "                ";
        $context["firstView"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 27));
        // line 28
        yield "                ";
        $context["firstViewName"] = CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "getViewName", [], "method", false, false, false, 28);
        // line 29
        yield "                ";
        CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "setCurrentView", [($context["firstViewName"] ?? null)], "method", false, false, false, 29);
        // line 30
        yield "                ";
        yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "template", [], "any", false, false, false, 30));
        yield "
            </div>
        </div>
        ";
        // line 33
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 33)) > 2)) {
            // line 34
            yield "            <div class=\"row\">
                <div class=\"col\">
                    <ul class=\"nav nav-pills mb-3 d-print-none\" id=\"mainTabs\" role=\"tablist\">
                        ";
            // line 37
            $context["contActiveTab"] = 0;
            // line 38
            yield "                        ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 38), 1, Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 38))));
            foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
                // line 39
                yield "                            ";
                if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 39), "active", [], "any", false, false, false, 39)) {
                    // line 40
                    yield "                                ";
                    $context["contActiveTab"] = (($context["contActiveTab"] ?? null) + 1);
                    // line 41
                    yield "                                <li class=\"nav-item\">
                                    ";
                    // line 42
                    $context["active"] = (((($context["viewName"] == CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 42)) || ((CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 42) == ($context["firstViewName"] ?? null)) && (($context["contActiveTab"] ?? null) == 1)))) ? (" active") : (""));
                    // line 43
                    yield "                                    <a href=\"#";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["viewName"], "html", null, true);
                    yield "\" class=\"nav-link";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["disable"] ?? null), "html", null, true);
                    yield "\" data-bs-toggle=\"tab\" role=\"tab\" aria-controls=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["viewName"], "html", null, true);
                    yield "\">
                                        <i class=\"";
                    // line 44
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "icon", [], "any", false, false, false, 44), "html", null, true);
                    yield "\" aria-hidden=\"true\"></i>
                                        <span class=\"d-none d-sm-inline-block\">&nbsp;";
                    // line 45
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "title", [], "any", false, false, false, 45), "html", null, true);
                    yield "</span>
                                        ";
                    // line 46
                    if ((CoreExtension::getAttribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 46) > 0)) {
                        // line 47
                        yield "                                            <span class=\"badge bg-secondary\">";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('number')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 47), 0), "html", null, true);
                        yield "</span>
                                        ";
                    }
                    // line 49
                    yield "                                    </a>
                                </li>
                            ";
                }
                // line 52
                yield "                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 53
            yield "                    </ul>
                </div>
            </div>
        ";
        }
        // line 57
        yield "        <div class=\"tab-content\" id=\"mainTabsContent\">
            ";
        // line 58
        $context["contActiveTab"] = 0;
        // line 59
        yield "            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 59), 1, Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 59))));
        $context['loop'] = [
          'parent' => $context['_parent'],
          'index0' => 0,
          'index'  => 1,
          'first'  => true,
        ];
        if (is_array($context['_seq']) || (is_object($context['_seq']) && $context['_seq'] instanceof \Countable)) {
            $length = count($context['_seq']);
            $context['loop']['revindex0'] = $length - 1;
            $context['loop']['revindex'] = $length;
            $context['loop']['length'] = $length;
            $context['loop']['last'] = 1 === $length;
        }
        foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
            // line 60
            yield "                ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 60), "active", [], "any", false, false, false, 60)) {
                // line 61
                yield "                    ";
                $context["contActiveTab"] = (($context["contActiveTab"] ?? null) + 1);
                // line 62
                yield "                    ";
                $context["active"] = (((($context["viewName"] == CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 62)) || ((CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 62) == ($context["firstViewName"] ?? null)) && (($context["contActiveTab"] ?? null) == 1)))) ? (" show active") : (""));
                // line 63
                yield "                    <div class=\"tab-pane";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
                yield "\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["viewName"], "html", null, true);
                yield "\" role=\"tabpanel\">
                        ";
                // line 64
                CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "setCurrentView", [$context["viewName"]], "method", false, false, false, 64);
                // line 65
                yield "                        ";
                yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["view"], "template", [], "any", false, false, false, 65));
                yield "
                    </div>
                ";
            }
            // line 68
            yield "            ";
            ++$context['loop']['index0'];
            ++$context['loop']['index'];
            $context['loop']['first'] = false;
            if (isset($context['loop']['length'])) {
                --$context['loop']['revindex0'];
                --$context['loop']['revindex'];
                $context['loop']['last'] = 0 === $context['loop']['revindex0'];
            }
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 69
        yield "        </div>
    </div>
";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Master/PanelControllerBottom.html.twig";
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
        return array (  202 => 69,  188 => 68,  181 => 65,  179 => 64,  172 => 63,  169 => 62,  166 => 61,  163 => 60,  145 => 59,  143 => 58,  140 => 57,  134 => 53,  128 => 52,  123 => 49,  117 => 47,  115 => 46,  111 => 45,  107 => 44,  97 => 43,  95 => 42,  92 => 41,  89 => 40,  86 => 39,  81 => 38,  79 => 37,  74 => 34,  72 => 33,  65 => 30,  62 => 29,  59 => 28,  56 => 27,  51 => 23,  47 => 22,  36 => 20,);
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
{% extends \"Master/PanelController.html.twig\" %}

{% block body %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            <div class=\"col\">
                {# -- First view -- #}
                {% set firstView = fsc.views | first %}
                {% set firstViewName = firstView.getViewName() %}
                {% do fsc.setCurrentView(firstViewName) %}
                {{ include(firstView.template) }}
            </div>
        </div>
        {% if fsc.views | length > 2 %}
            <div class=\"row\">
                <div class=\"col\">
                    <ul class=\"nav nav-pills mb-3 d-print-none\" id=\"mainTabs\" role=\"tablist\">
                        {% set contActiveTab = 0 %}
                        {% for viewName, view in fsc.views | slice(1, fsc.views | length) %}
                            {% if view.settings.active %}
                                {% set contActiveTab = contActiveTab + 1 %}
                                <li class=\"nav-item\">
                                    {% set active = (viewName == fsc.active) or (fsc.active == firstViewName and contActiveTab == 1) ? ' active' : '' %}
                                    <a href=\"#{{ viewName }}\" class=\"nav-link{{ active }}{{ disable }}\" data-bs-toggle=\"tab\" role=\"tab\" aria-controls=\"{{ viewName }}\">
                                        <i class=\"{{ view.icon }}\" aria-hidden=\"true\"></i>
                                        <span class=\"d-none d-sm-inline-block\">&nbsp;{{ view.title }}</span>
                                        {% if view.count > 0 %}
                                            <span class=\"badge bg-secondary\">{{ number(view.count, 0) }}</span>
                                        {% endif %}
                                    </a>
                                </li>
                            {% endif %}
                        {% endfor %}
                    </ul>
                </div>
            </div>
        {% endif %}
        <div class=\"tab-content\" id=\"mainTabsContent\">
            {% set contActiveTab = 0 %}
            {% for viewName, view in fsc.views | slice(1, fsc.views | length) %}
                {% if view.settings.active %}
                    {% set contActiveTab = contActiveTab + 1 %}
                    {% set active = (viewName == fsc.active) or (fsc.active == firstViewName and contActiveTab == 1) ? ' show active' : '' %}
                    <div class=\"tab-pane{{ active }}\" id=\"{{ viewName }}\" role=\"tabpanel\">
                        {% do fsc.setCurrentView(viewName) %}
                        {{ include(view.template) }}
                    </div>
                {% endif %}
            {% endfor %}
        </div>
    </div>
{% endblock %}
", "Master/PanelControllerBottom.html.twig", "D:\\xampp\\htdocs\\Facturascripts\\Core\\View\\Master\\PanelControllerBottom.html.twig");
    }
}
