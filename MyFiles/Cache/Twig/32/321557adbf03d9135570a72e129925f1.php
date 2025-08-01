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

/* Master/MenuBghTemplate.html.twig */
class __TwigTemplate_a76ad2835ed9af7eb7a567d677f85151 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'fullBody' => [$this, 'block_fullBody'],
            'navbar' => [$this, 'block_navbar'],
            'messages' => [$this, 'block_messages'],
            'bodyHeaderOptions' => [$this, 'block_bodyHeaderOptions'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doGetParent(array $context)
    {
        // line 21
        return "Master/MenuTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        $macros["GoogleTagManager"] = $this->macros["GoogleTagManager"] = $this->loadTemplate("Macro/GoogleTagManager.html.twig", "Master/MenuBghTemplate.html.twig", 20)->unwrap();
        // line 21
        $this->parent = $this->loadTemplate("Master/MenuTemplate.html.twig", "Master/MenuBghTemplate.html.twig", 21);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_fullBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        yield "    <body>
    <div class=\"page-wrapper\" id=\"main-wrapper\" data-layout=\"vertical\" data-sidebartype=\"full\">
        ";
        // line 26
        yield CoreExtension::callMacro($macros["GoogleTagManager"], "macro_body", [], 26, $context, $this->getSourceContext());
        yield "
        ";
        // line 27
        yield from $this->unwrap()->yieldBlock('navbar', $context, $blocks);
        // line 30
        yield "        <div class=\"body-wrapper\">
            <!--  Header Start -->
            ";
        // line 32
        yield from         $this->loadTemplate("Master/AppHeader.html.twig", "Master/MenuBghTemplate.html.twig", 32)->unwrap()->yield($context);
        // line 33
        yield "            <!--  Header End -->
            <div class=\"body-wrapper-inner\">
                ";
        // line 35
        yield from $this->unwrap()->yieldBlock('messages', $context, $blocks);
        // line 38
        yield "                ";
        yield from $this->unwrap()->yieldBlock('bodyHeaderOptions', $context, $blocks);
        // line 41
        yield "                ";
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 44
        yield "                <br/>
                <br/>
            </div>
        </div>
        ";
        // line 48
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('getIncludeViews')->getCallable()("MenuTemplate", "JsFooter"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["includeView"]) {
            // line 49
            yield "            ";
            yield from             $this->loadTemplate((($__internal_compile_0 = $context["includeView"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["path"] ?? null) : null), "Master/MenuBghTemplate.html.twig", 49)->unwrap()->yield($context);
            // line 50
            yield "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['includeView'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 51
        yield "        ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('getIncludeViews')->getCallable()("MenuTemplate", "BodyEnd"));
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
        foreach ($context['_seq'] as $context["_key"] => $context["includeView"]) {
            // line 52
            yield "            ";
            yield from             $this->loadTemplate((($__internal_compile_1 = $context["includeView"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["path"] ?? null) : null), "Master/MenuBghTemplate.html.twig", 52)->unwrap()->yield($context);
            // line 53
            yield "        ";
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['includeView'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 54
        yield "        ";
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["debugBarRender"] ?? null), "render", [], "method", false, false, false, 54);
        yield "
        <!-- execution time: ";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('executionTime')->getCallable()(), "html", null, true);
        yield " s -->
    </div>
    </body>
";
        return; yield '';
    }

    // line 27
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 28
        yield "            ";
        yield from $this->yieldParentBlock("navbar", $context, $blocks);
        yield "
        ";
        return; yield '';
    }

    // line 35
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 36
        yield "                    ";
        yield from $this->yieldParentBlock("messages", $context, $blocks);
        yield "
                ";
        return; yield '';
    }

    // line 38
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 39
        yield "                    ";
        yield from $this->yieldParentBlock("bodyHeaderOptions", $context, $blocks);
        yield "
                ";
        return; yield '';
    }

    // line 41
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 42
        yield "                    ";
        yield from $this->yieldParentBlock("body", $context, $blocks);
        yield "
                ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Master/MenuBghTemplate.html.twig";
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
        return array (  215 => 42,  211 => 41,  203 => 39,  199 => 38,  191 => 36,  187 => 35,  179 => 28,  175 => 27,  166 => 55,  161 => 54,  147 => 53,  144 => 52,  126 => 51,  112 => 50,  109 => 49,  92 => 48,  86 => 44,  83 => 41,  80 => 38,  78 => 35,  74 => 33,  72 => 32,  68 => 30,  66 => 27,  62 => 26,  58 => 24,  54 => 23,  49 => 21,  47 => 20,  40 => 21,);
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
{% import 'Macro/GoogleTagManager.html.twig' as GoogleTagManager %}
{% extends \"Master/MenuTemplate.html.twig\" %}

{% block fullBody %}
    <body>
    <div class=\"page-wrapper\" id=\"main-wrapper\" data-layout=\"vertical\" data-sidebartype=\"full\">
        {{ GoogleTagManager.body() }}
        {% block navbar %}
            {{ parent() }}
        {% endblock %}
        <div class=\"body-wrapper\">
            <!--  Header Start -->
            {% include 'Master/AppHeader.html.twig' %}
            <!--  Header End -->
            <div class=\"body-wrapper-inner\">
                {% block messages %}
                    {{ parent() }}
                {% endblock %}
                {% block bodyHeaderOptions %}
                    {{ parent() }}
                {% endblock %}
                {% block body %}
                    {{ parent() }}
                {% endblock %}
                <br/>
                <br/>
            </div>
        </div>
        {% for includeView in getIncludeViews('MenuTemplate', 'JsFooter') %}
            {% include includeView['path'] %}
        {% endfor %}
        {% for includeView in getIncludeViews('MenuTemplate', 'BodyEnd') %}
            {% include includeView['path'] %}
        {% endfor %}
        {{ debugBarRender.render() | raw }}
        <!-- execution time: {{ executionTime() }} s -->
    </div>
    </body>
{% endblock %}
", "Master/MenuBghTemplate.html.twig", "D:\\xampp\\htdocs\\Facturascripts\\Plugins\\MartosOS\\View\\Master\\MenuBghTemplate.html.twig");
    }
}
