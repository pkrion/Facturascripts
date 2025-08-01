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

/* Macro/Menu.html.twig */
class __TwigTemplate_dd03ab721eb16fa58d955692fb0a09a6 extends Template
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
        yield "
";
        return; yield '';
    }

    // line 21
    public function macro_showMenu($__menuItem__ = null, $__parent__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "menuItem" => $__menuItem__,
            "parent" => $__parent__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 22
            yield "    ";
            $macros["macros"] = $this;
            // line 23
            yield "    ";
            $context["active"] = ((CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "active", [], "any", false, false, false, 23)) ? (" active") : (""));
            // line 24
            yield "    ";
            $context["menuId"] = ((Twig\Extension\CoreExtension::testEmpty(($context["parent"] ?? null))) ? (("menu-" . Twig\Extension\CoreExtension::replace(Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "title", [], "any", false, false, false, 24)), [" " => "-"]))) : (((($context["parent"] ?? null) . "-") . Twig\Extension\CoreExtension::lower($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "name", [], "any", false, false, false, 24)))));
            // line 25
            yield "
    ";
            // line 26
            if (Twig\Extension\CoreExtension::testEmpty(($context["parent"] ?? null))) {
                // line 27
                yield "        <li class=\"sidebar-item\">
            <a class=\"sidebar-link justify-content-between";
                // line 28
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "menu", [], "any", false, false, false, 28))) {
                    yield " has-arrow";
                }
                yield "\"
               href=\"";
                // line 29
                ((Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "menu", [], "any", false, false, false, 29))) ? (yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "url", [], "any", false, false, false, 29), "html", null, true)) : (yield "javascript:void(0)"));
                yield "\"
               aria-expanded=\"false\">
                <div class=\"d-flex align-items-center gap-3\">
                    <span class=\"d-flex\">
                        ";
                // line 34
                yield "                        <i class=\"fa-regular fa-folder-closed\"></i>
                    </span>
                    <span class=\"hide-menu\">";
                // line 36
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "title", [], "any", false, false, false, 36), "html", null, true);
                yield "</span>
                </div>
            </a>

            ";
                // line 40
                if ( !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "menu", [], "any", false, false, false, 40))) {
                    // line 41
                    yield "            <ul aria-expanded=\"false\" class=\"collapse first-level\">
                ";
                    // line 42
                    $context['_parent'] = $context;
                    $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "menu", [], "any", false, false, false, 42));
                    foreach ($context['_seq'] as $context["_key"] => $context["item"]) {
                        // line 43
                        yield "                    ";
                        if (Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "menu", [], "any", false, false, false, 43))) {
                            // line 44
                            yield "                    <li class=\"sidebar-item\" style=\"padding-left: 15px;\">
                        <a class=\"sidebar-link justify-content-between\" href=\"";
                            // line 45
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "url", [], "any", false, false, false, 45), "html", null, true);
                            yield "\">
                            <div class=\"d-flex align-items-center gap-3\">
                                <div class=\"round-16 d-flex align-items-center justify-content-center\">
                                    <i class=\"";
                            // line 48
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "icon", [], "any", false, false, false, 48), "html", null, true);
                            yield " menu-icon\"></i>
                                </div>
                                <span class=\"hide-menu menu-title\">";
                            // line 50
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["item"], "title", [], "any", false, false, false, 50), "html", null, true);
                            yield "</span>
                            </div>
                        </a>
                    </li>
                    ";
                        } else {
                            // line 55
                            yield "                        ";
                            yield CoreExtension::callMacro($macros["macros"], "macro_showMenu", [$context["item"], ($context["menuId"] ?? null)], 55, $context, $this->getSourceContext());
                            yield "
                    ";
                        }
                        // line 57
                        yield "                ";
                    }
                    $_parent = $context['_parent'];
                    unset($context['_seq'], $context['_iterated'], $context['_key'], $context['item'], $context['_parent'], $context['loop']);
                    $context = array_intersect_key($context, $_parent) + $_parent;
                    // line 58
                    yield "            </ul>
            ";
                }
                // line 60
                yield "
        </li>
    ";
            } else {
                // line 63
                yield "        <li class=\"sidebar-item\">
            <a class=\"sidebar-link justify-content-between\" href=\"";
                // line 64
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "url", [], "any", false, false, false, 64), "html", null, true);
                yield "\">
                <div class=\"d-flex align-items-center gap-3\">
                    <div class=\"round-16 d-flex align-items-center justify-content-center\">
                        <i class=\"";
                // line 67
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(((CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "icon", [], "any", true, true, false, 67)) ? (Twig\Extension\CoreExtension::default(CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "icon", [], "any", false, false, false, 67), "ti ti-circle")) : ("ti ti-circle")), "html", null, true);
                yield "\"></i>
                    </div>
                    <span class=\"hide-menu\">";
                // line 69
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["menuItem"] ?? null), "title", [], "any", false, false, false, 69), "html", null, true);
                yield "</span>
                </div>
            </a>
        </li>
    ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Macro/Menu.html.twig";
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
        return array (  167 => 69,  162 => 67,  156 => 64,  153 => 63,  148 => 60,  144 => 58,  138 => 57,  132 => 55,  124 => 50,  119 => 48,  113 => 45,  110 => 44,  107 => 43,  103 => 42,  100 => 41,  98 => 40,  91 => 36,  87 => 34,  80 => 29,  74 => 28,  71 => 27,  69 => 26,  66 => 25,  63 => 24,  60 => 23,  57 => 22,  44 => 21,  38 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
    /**
     * This file is part of FacturaScripts
     * Copyright (C) 2017-2019 Carlos Garcia Gomez <carlos@facturascripts.com>
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
#}

{% macro showMenu(menuItem, parent) %}
    {% import _self as macros %}
    {% set active = menuItem.active ? ' active' : '' %}
    {% set menuId = parent is empty ? 'menu-' ~ menuItem.title|lower|replace({' ': '-'}) : parent ~ '-' ~ menuItem.name|lower %}

    {% if parent is empty %}
        <li class=\"sidebar-item\">
            <a class=\"sidebar-link justify-content-between{% if menuItem.menu is not empty %} has-arrow{% endif %}\"
               href=\"{{ menuItem.menu is empty ? menuItem.url : 'javascript:void(0)' }}\"
               aria-expanded=\"false\">
                <div class=\"d-flex align-items-center gap-3\">
                    <span class=\"d-flex\">
                        {#<i class=\"{{ menuItem.icon|default('ti ti-circle') }}\"></i>#}
                        <i class=\"fa-regular fa-folder-closed\"></i>
                    </span>
                    <span class=\"hide-menu\">{{ menuItem.title }}</span>
                </div>
            </a>

            {% if menuItem.menu is not empty %}
            <ul aria-expanded=\"false\" class=\"collapse first-level\">
                {% for item in menuItem.menu %}
                    {% if item.menu is empty %}
                    <li class=\"sidebar-item\" style=\"padding-left: 15px;\">
                        <a class=\"sidebar-link justify-content-between\" href=\"{{ item.url }}\">
                            <div class=\"d-flex align-items-center gap-3\">
                                <div class=\"round-16 d-flex align-items-center justify-content-center\">
                                    <i class=\"{{ item.icon }} menu-icon\"></i>
                                </div>
                                <span class=\"hide-menu menu-title\">{{ item.title }}</span>
                            </div>
                        </a>
                    </li>
                    {% else %}
                        {{ macros.showMenu(item, menuId) }}
                    {% endif %}
                {% endfor %}
            </ul>
            {% endif %}

        </li>
    {% else %}
        <li class=\"sidebar-item\">
            <a class=\"sidebar-link justify-content-between\" href=\"{{ menuItem.url }}\">
                <div class=\"d-flex align-items-center gap-3\">
                    <div class=\"round-16 d-flex align-items-center justify-content-center\">
                        <i class=\"{{ menuItem.icon|default('ti ti-circle') }}\"></i>
                    </div>
                    <span class=\"hide-menu\">{{ menuItem.title }}</span>
                </div>
            </a>
        </li>
    {% endif %}
{% endmacro %}
", "Macro/Menu.html.twig", "D:\\xampp\\htdocs\\Facturascripts\\Plugins\\MartosOS\\View\\Macro\\Menu.html.twig");
    }
}
