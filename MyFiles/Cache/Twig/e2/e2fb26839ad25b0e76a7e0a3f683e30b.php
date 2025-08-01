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

/* Master/PanelController.html.twig */
class __TwigTemplate_bbdd39e79d688570e99afa7c6bc21649 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->blocks = [
            'bodyHeaderOptions' => [$this, 'block_bodyHeaderOptions'],
            'body' => [$this, 'block_body'],
            'javascripts' => [$this, 'block_javascripts'],
        ];
        $macros["_self"] = $this->macros["_self"] = $this;
    }

    protected function doGetParent(array $context)
    {
        // line 20
        return "Master/MenuBgTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuBgTemplate.html.twig", "Master/PanelController.html.twig", 20);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 22
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 23
        yield "    ";
        yield from $this->yieldParentBlock("bodyHeaderOptions", $context, $blocks);
        yield "
    ";
        // line 24
        $context["pageData"] = CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 24);
        // line 25
        yield "    ";
        $context["firstView"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 25));
        // line 26
        yield "    <div class=\"container-fluid d-print-none\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                ";
        // line 30
        yield "                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb d-md-none\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"#\">";
        // line 33
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["pageData"] ?? null), "menu", [], "any", false, false, false, 33)), "html", null, true);
        yield "</a>
                        </li>
                        ";
        // line 35
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["pageData"] ?? null), "submenu", [], "any", false, false, false, 35)) {
            // line 36
            yield "                            <li class=\"breadcrumb-item\">
                                <a href=\"#\">";
            // line 37
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["pageData"] ?? null), "submenu", [], "any", false, false, false, 37)), "html", null, true);
            yield "</a>
                            </li>
                        ";
        }
        // line 40
        yield "                        <li class=\"breadcrumb-item\">
                            <a href=\"";
        // line 41
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 41), "url", ["list"], "method", false, false, false, 41), "html", null, true);
        yield "\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["pageData"] ?? null), "title", [], "any", false, false, false, 41)), "html", null, true);
        yield "</a>
                        </li>
                        <li class=\"breadcrumb-item active\" aria-current=\"page\">
                            ";
        // line 44
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 44)) {
            // line 45
            yield "                                ";
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 45), "primaryDescription", [], "method", false, false, false, 45);
            yield "
                            ";
        } else {
            // line 47
            yield "                                ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("new"), "html", null, true);
            yield "
                            ";
        }
        // line 49
        yield "                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class=\"row\">
            ";
        // line 56
        yield "            <div class=\"col-md-8 mb-2\">
                <div class=\"btn-group\">
                    <a href=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 58), "url", ["list"], "method", false, false, false, 58), "html", null, true);
        yield "\" class=\"btn btn-sm btn-secondary\">
                        <i class=\"fa-solid fa-list fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-lg-inline-block\">";
        // line 60
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("all"), "html", null, true);
        yield "</span>
                    </a>
                    <a href=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 62), "url", ["edit"], "method", false, false, false, 62), "html", null, true);
        yield "\" class=\"btn btn-sm btn-secondary\"
                       title=\"";
        // line 63
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("refresh"), "html", null, true);
        yield "\">
                        <i class=\"fa-solid fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                ";
        // line 68
        yield "                ";
        yield CoreExtension::callMacro($macros["_self"], "macro_optionsButton", [($context["fsc"] ?? null), ($context["firstView"] ?? null), ($context["i18n"] ?? null)], 68, $context, $this->getSourceContext());
        yield "
                ";
        // line 70
        yield "                ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 70) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "settings", [], "any", false, false, false, 70), "btnNew", [], "any", false, false, false, 70))) {
            // line 71
            yield "                    <a href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 71), "url", ["new"], "method", false, false, false, 71), "html", null, true);
            yield "\" class=\"btn btn-sm btn-success\">
                        <i class=\"fa-solid fa-plus fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-lg-inline-block\">";
            // line 73
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("new"), "html", null, true);
            yield "</span>
                    </a>
                ";
        }
        // line 76
        yield "                ";
        // line 77
        yield "                ";
        yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "getRow", ["actions"], "method", false, false, false, 77), "renderTop", [], "method", false, false, false, 77);
        yield "
                ";
        // line 79
        yield "                ";
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 79) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "settings", [], "any", false, false, false, 79), "btnPrint", [], "any", false, false, false, 79))) {
            // line 80
            yield "                    ";
            yield CoreExtension::callMacro($macros["_self"], "macro_printButton", [($context["fsc"] ?? null), ($context["firstView"] ?? null), ($context["i18n"] ?? null)], 80, $context, $this->getSourceContext());
            yield "
                ";
        }
        // line 82
        yield "                ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('getIncludeViews')->getCallable()("PanelController", "topButtons"));
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
            // line 83
            yield "                    ";
            yield from             $this->loadTemplate((($__internal_compile_0 = $context["includeView"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["path"] ?? null) : null), "Master/PanelController.html.twig", 83)->unwrap()->yield($context);
            // line 84
            yield "                ";
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
        // line 85
        yield "            </div>
            ";
        // line 87
        yield "            <div class=\"col-md d-none d-md-inline-block text-end\">
                ";
        // line 88
        $context["image"] = CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getImageUrl", [], "method", false, false, false, 88);
        // line 89
        yield "                ";
        if (Twig\Extension\CoreExtension::testEmpty(($context["image"] ?? null))) {
            // line 90
            yield "                    <i class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pageData"] ?? null), "icon", [], "any", false, false, false, 90), "html", null, true);
            yield " fa-3x ps-3 float-end\" aria-hidden=\"true\"></i>
                ";
        } else {
            // line 92
            yield "                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["image"] ?? null), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 92), "html", null, true);
            yield "\" class=\"img-thumbnail ms-3 mb-2 float-end\"/>
                ";
        }
        // line 94
        yield "                <h1 class=\"h5 mb-0\">";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, ($context["pageData"] ?? null), "title", [], "any", false, false, false, 94)), "html", null, true);
        yield "</h1>
                ";
        // line 95
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "hasData", [], "any", false, false, false, 95)) {
            // line 96
            yield "                    <p class=\"text-info mb-3\">";
            yield CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 96), "primaryDescription", [], "method", false, false, false, 96);
            yield "</p>
                ";
        } else {
            // line 98
            yield "                    <p class=\"text-info mb-3\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("new"), "html", null, true);
            yield "</p>
                ";
        }
        // line 100
        yield "            </div>
        </div>
    </div>
";
        return; yield '';
    }

    // line 105
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 106
        yield "    ";
        $context["firstView"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 106));
        // line 107
        yield "    <div class=\"container-fluid\">
        <div class=\"row\">
            ";
        // line 110
        yield "            ";
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 110)) > 1)) {
            // line 111
            yield "                <div class=\"col-lg-2\">
                    ";
            // line 113
            yield "                    <div class=\"nav nav-pills flex-row flex-lg-column pb-3\" id=\"mainTabs\" role=\"tablist\">
                        ";
            // line 114
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 114));
            foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
                // line 115
                yield "                            ";
                $context["active"] = ((($context["viewName"] == CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 115))) ? (" active") : (""));
                // line 116
                yield "                            ";
                $context["disable"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 116), "active", [], "any", false, false, false, 116)) ? ("") : (" disabled"));
                // line 117
                yield "                            <a class=\"nav-link";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["disable"] ?? null), "html", null, true);
                yield "\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["viewName"], "html", null, true);
                yield "-tab\" data-bs-toggle=\"pill\"
                               href=\"#";
                // line 118
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["viewName"], "html", null, true);
                yield "\" role=\"tab\" aria-controls=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["viewName"], "html", null, true);
                yield "\" aria-expanded=\"true\">
                                <i class=\"";
                // line 119
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "icon", [], "any", false, false, false, 119), "html", null, true);
                yield " fa-fw me-1 d-none d-xl-inline-block\"
                                   aria-hidden=\"true\"></i>";
                // line 120
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "title", [], "any", false, false, false, 120), "html", null, true);
                yield "
                                ";
                // line 121
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 121) >= 1) && ($context["viewName"] != CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "getViewName", [], "method", false, false, false, 121)))) {
                    // line 122
                    yield "                                    <span class='badge bg-secondary mt-lg-1 mb-lg-1 float-lg-end'>";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 122), "html", null, true);
                    yield "</span>
                                ";
                }
                // line 124
                yield "                            </a>
                        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 126
            yield "                    </div>
                </div>
            ";
        }
        // line 129
        yield "            ";
        // line 130
        yield "            ";
        $context["rightPanelClass"] = (((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 130)) > 1)) ? ("col-lg-10") : ("col"));
        // line 131
        yield "            <div class=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["rightPanelClass"] ?? null), "html", null, true);
        yield "\">
                ";
        // line 133
        yield "                <div class=\"tab-content\" id=\"mainTabsContent\">
                    ";
        // line 134
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 134));
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
            // line 135
            yield "                        ";
            $context["active"] = ((($context["viewName"] == CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 135))) ? (" show active") : (""));
            // line 136
            yield "                        <div class=\"tab-pane fade";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["viewName"], "html", null, true);
            yield "\" role=\"tabpanel\"
                             aria-labelledby=\"";
            // line 137
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["viewName"], "html", null, true);
            yield "-tab\">
                            ";
            // line 138
            CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "setCurrentView", [$context["viewName"]], "method", false, false, false, 138);
            // line 139
            yield "                            ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["view"], "template", [], "any", false, false, false, 139));
            yield "
                        </div>
                    ";
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
        // line 142
        yield "                </div>
            </div>
        </div>
    </div>
";
        return; yield '';
    }

    // line 148
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 149
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        \$(document).ready(function () {
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) == false) {
                \$(\"input:visible,textarea:visible\").filter(\":not([readonly='readonly']):not([disabled='disabled']):not([type='hidden']):not([type='checkbox']):not([type='radio'])\").first().focus();
            }
        });
    </script>
";
        return; yield '';
    }

    // line 159
    public function macro_optionsButton($__fsc__ = null, $__firstView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "firstView" => $__firstView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 160
            yield "    ";
            $context["show"] = false;
            // line 161
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 161));
            foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
                // line 162
                yield "        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 162), "active", [], "any", false, false, false, 162) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "columns", [], "any", false, false, false, 162)))) {
                    // line 163
                    yield "            ";
                    $context["show"] = true;
                    // line 164
                    yield "        ";
                }
                // line 165
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 166
            yield "    ";
            if ((($context["show"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "settings", [], "any", false, false, false, 166), "btnOptions", [], "any", false, false, false, 166))) {
                // line 167
                yield "        <div class=\"btn-group\">
            <div class=\"dropdown\">
                <button class=\"btn btn-sm btn-secondary me-3 dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\"
                        aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"fa-solid fa-wrench fa-fw\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-lg-inline-block\">";
                // line 172
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("options"), "html", null, true);
                yield "</span>
                </button>
                <div class=\"dropdown-menu\">
                    <h6 class=\"dropdown-header\">";
                // line 175
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("options-button-header"), "html", null, true);
                yield "</h6>
                    ";
                // line 176
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 176));
                foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
                    // line 177
                    yield "                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 177), "active", [], "any", false, false, false, 177) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "columns", [], "any", false, false, false, 177)))) {
                        // line 178
                        yield "                            <a class=\"dropdown-item\"
                               href=\"EditPageOption?code=";
                        // line 179
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["viewName"], "html", null, true);
                        yield "&url=";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 179), "url", [], "method", false, false, false, 179)), "html", null, true);
                        yield "\">
                                <i class=\"";
                        // line 180
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "icon", [], "any", false, false, false, 180), "html", null, true);
                        yield " fa-fw\" aria-hidden=\"true\"></i> ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "title", [], "any", false, false, false, 180), "html", null, true);
                        yield "
                                ";
                        // line 181
                        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 181), "customized", [], "any", false, false, false, 181)) {
                            // line 182
                            yield "                                    <i class=\"fa-solid fa-user-pen ms-2\" title=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("personalized"), "html", null, true);
                            yield "\"></i>
                                ";
                        }
                        // line 184
                        yield "                            </a>
                        ";
                    }
                    // line 186
                    yield "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 187
                yield "                </div>
            </div>
        </div>
    ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 193
    public function macro_printButton($__fsc__ = null, $__firstView__ = null, $__i18n__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "firstView" => $__firstView__,
            "i18n" => $__i18n__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 194
            yield "    <div class=\"btn-group\">
        <a href=\"";
            // line 195
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 195), "url", [], "method", false, false, false, 195), "html", null, true);
            yield "&action=export&option=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 195), "defaultOption", [], "method", false, false, false, 195), "html", null, true);
            yield "\"
           target=\"_blank\" class=\"btn btn-sm btn-secondary\">
            <i class=\"fa-solid fa-print fa-fw\" aria-hidden=\"true\"></i>
            <span class=\"d-none d-lg-inline-block\">";
            // line 198
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("print"), "html", null, true);
            yield "</span>
        </a>
        <button type=\"button\" class=\"btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split\"
                data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <span class=\"sr-only\">";
            // line 202
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("more"), "html", null, true);
            yield "</span>
        </button>
        <div class=\"dropdown-menu dropdown-menu-end\">
            ";
            // line 205
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 205), "options", [], "method", false, false, false, 205));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 206
                yield "                ";
                if (($context["key"] != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 206), "defaultOption", [], "method", false, false, false, 206))) {
                    // line 207
                    yield "                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 207), "url", [], "method", false, false, false, 207), "html", null, true);
                    yield "&action=export&option=";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "\" class=\"dropdown-item\">
                        <i class=\"";
                    // line 208
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "icon", [], "any", false, false, false, 208), "html", null, true);
                    yield " fa-fw\" aria-hidden=\"true\"></i>
                        ";
                    // line 209
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "description", [], "any", false, false, false, 209)), "html", null, true);
                    yield "
                    </a>
                ";
                }
                // line 212
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 213
            yield "            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\" data-bs-toggle=\"modal\" data-bs-target=\"#advancedExportModal\">
                <i class=\"fa-solid fa-tools fa-fw\" aria-hidden=\"true\"></i>
                ";
            // line 216
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("advanced"), "html", null, true);
            yield "
            </a>
            ";
            // line 218
            $context["tools"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 218), "tools", [], "method", false, false, false, 218);
            // line 219
            yield "            ";
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["tools"] ?? null))) {
                // line 220
                yield "                <div class=\"dropdown-divider\"></div>
                ";
                // line 221
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["tools"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["tool"]) {
                    // line 222
                    yield "                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tool"], "link", [], "any", false, false, false, 222), "html", null, true);
                    yield "\" target=\"_blank\" class=\"dropdown-item\">
                        <i class=\"";
                    // line 223
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tool"], "icon", [], "any", false, false, false, 223), "html", null, true);
                    yield " fa-fw\" aria-hidden=\"true\"></i>
                        ";
                    // line 224
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["tool"], "description", [], "any", false, false, false, 224)), "html", null, true);
                    yield "
                    </a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['tool'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 227
                yield "            ";
            }
            // line 228
            yield "        </div>
    </div>
    <form action=\"";
            // line 230
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 230), "url", [], "method", false, false, false, 230), "html", null, true);
            yield "\" method=\"post\" class=\"float-start\" target=\"_blank\" onsubmit=\"animateSpinner('add')\">
        <input type=\"hidden\" name=\"action\" value=\"export\"/>
        <div class=\"modal fade\" id=\"advancedExportModal\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">
                            <i class=\"fa-solid fa-tools fa-fw\" aria-hidden=\"true\"></i>
                            ";
            // line 238
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("advanced"), "html", null, true);
            yield "
                        </h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body text-start\">
                        <div class=\"mb-3\">
                            <select name=\"option\" class=\"form-select\">
                                ";
            // line 245
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 245), "options", [], "method", false, false, false, 245));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 246
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "description", [], "any", false, false, false, 246)), "html", null, true);
                yield "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 248
            yield "                            </select>
                        </div>
                        <div class=\"mb-3\">
                            ";
            // line 251
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("format"), "html", null, true);
            yield "
                            <select name=\"idformat\" class=\"form-select\">
                                <option value=\"\">";
            // line 253
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("default"), "html", null, true);
            yield "</option>
                                <option value=\"\">------</option>
                                ";
            // line 255
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 255), "getFormats", [CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 255)], "method", false, false, false, 255));
            foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                // line 256
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["format"], "id", [], "any", false, false, false, 256), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["format"], "nombre", [], "any", false, false, false, 256), "html", null, true);
                yield "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 258
            yield "                            </select>
                        </div>
                        <div class=\"mb-3\">
                            ";
            // line 261
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("language"), "html", null, true);
            yield "
                            <select name=\"langcode\" class=\"form-select\">
                                <option value=\"\">";
            // line 263
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("default"), "html", null, true);
            yield "</option>
                                <option value=\"\">------</option>
                                ";
            // line 265
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "getAvailableLanguages", [], "method", false, false, false, 265));
            foreach ($context['_seq'] as $context["code"] => $context["lang"]) {
                // line 266
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["code"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["lang"], "html", null, true);
                yield "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['code'], $context['lang'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 268
            yield "                            </select>
                        </div>
                        <div class=\"text-end\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                ";
            // line 272
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("accept"), "html", null, true);
            yield "
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Master/PanelController.html.twig";
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
        return array (  759 => 272,  753 => 268,  742 => 266,  738 => 265,  733 => 263,  728 => 261,  723 => 258,  712 => 256,  708 => 255,  703 => 253,  698 => 251,  693 => 248,  682 => 246,  678 => 245,  668 => 238,  657 => 230,  653 => 228,  650 => 227,  641 => 224,  637 => 223,  632 => 222,  628 => 221,  625 => 220,  622 => 219,  620 => 218,  615 => 216,  610 => 213,  604 => 212,  598 => 209,  594 => 208,  587 => 207,  584 => 206,  580 => 205,  574 => 202,  567 => 198,  559 => 195,  556 => 194,  542 => 193,  532 => 187,  526 => 186,  522 => 184,  516 => 182,  514 => 181,  508 => 180,  502 => 179,  499 => 178,  496 => 177,  492 => 176,  488 => 175,  482 => 172,  475 => 167,  472 => 166,  466 => 165,  463 => 164,  460 => 163,  457 => 162,  452 => 161,  449 => 160,  435 => 159,  420 => 149,  416 => 148,  407 => 142,  389 => 139,  387 => 138,  383 => 137,  376 => 136,  373 => 135,  356 => 134,  353 => 133,  348 => 131,  345 => 130,  343 => 129,  338 => 126,  331 => 124,  325 => 122,  323 => 121,  319 => 120,  315 => 119,  309 => 118,  301 => 117,  298 => 116,  295 => 115,  291 => 114,  288 => 113,  285 => 111,  282 => 110,  278 => 107,  275 => 106,  271 => 105,  263 => 100,  257 => 98,  251 => 96,  249 => 95,  244 => 94,  236 => 92,  230 => 90,  227 => 89,  225 => 88,  222 => 87,  219 => 85,  205 => 84,  202 => 83,  184 => 82,  178 => 80,  175 => 79,  170 => 77,  168 => 76,  162 => 73,  156 => 71,  153 => 70,  148 => 68,  141 => 63,  137 => 62,  132 => 60,  127 => 58,  123 => 56,  115 => 49,  109 => 47,  103 => 45,  101 => 44,  93 => 41,  90 => 40,  84 => 37,  81 => 36,  79 => 35,  74 => 33,  69 => 30,  64 => 26,  61 => 25,  59 => 24,  54 => 23,  50 => 22,  39 => 20,);
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
{% extends \"Master/MenuBgTemplate.html.twig\" %}

{% block bodyHeaderOptions %}
    {{ parent() }}
    {% set pageData = fsc.getPageData() %}
    {% set firstView = fsc.views | first %}
    <div class=\"container-fluid d-print-none\">
        <div class=\"row\">
            <div class=\"col-md-12\">
                {# -- Hidden alternative page info -- #}
                <nav aria-label=\"breadcrumb\">
                    <ol class=\"breadcrumb d-md-none\">
                        <li class=\"breadcrumb-item\">
                            <a href=\"#\">{{ trans(pageData.menu) }}</a>
                        </li>
                        {% if pageData.submenu %}
                            <li class=\"breadcrumb-item\">
                                <a href=\"#\">{{ trans(pageData.submenu) }}</a>
                            </li>
                        {% endif %}
                        <li class=\"breadcrumb-item\">
                            <a href=\"{{ firstView.model.url('list') }}\">{{ trans(pageData.title) }}</a>
                        </li>
                        <li class=\"breadcrumb-item active\" aria-current=\"page\">
                            {% if fsc.hasData %}
                                {{ firstView.model.primaryDescription() | raw }}
                            {% else %}
                                {{ trans('new') }}
                            {% endif %}
                        </li>
                    </ol>
                </nav>
            </div>
        </div>
        <div class=\"row\">
            {# -- Top left buttons -- #}
            <div class=\"col-md-8 mb-2\">
                <div class=\"btn-group\">
                    <a href=\"{{ firstView.model.url('list') }}\" class=\"btn btn-sm btn-secondary\">
                        <i class=\"fa-solid fa-list fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-lg-inline-block\">{{ trans('all') }}</span>
                    </a>
                    <a href=\"{{ firstView.model.url('edit') }}\" class=\"btn btn-sm btn-secondary\"
                       title=\"{{ trans('refresh') }}\">
                        <i class=\"fa-solid fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                {# -- Options button -- #}
                {{ _self.optionsButton(fsc, firstView, i18n) }}
                {# -- New button -- #}
                {% if fsc.hasData and firstView.settings.btnNew %}
                    <a href=\"{{ firstView.model.url('new') }}\" class=\"btn btn-sm btn-success\">
                        <i class=\"fa-solid fa-plus fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-lg-inline-block\">{{ trans('new') }}</span>
                    </a>
                {% endif %}
                {# -- Action buttons -- #}
                {{ firstView.getRow('actions').renderTop() | raw }}
                {# -- Print button -- #}
                {% if fsc.hasData and firstView.settings.btnPrint %}
                    {{ _self.printButton(fsc, firstView, i18n) }}
                {% endif %}
                {% for includeView in getIncludeViews('PanelController', 'topButtons') %}
                    {% include includeView['path'] %}
                {% endfor %}
            </div>
            {# -- Top right text -- #}
            <div class=\"col-md d-none d-md-inline-block text-end\">
                {% set image = fsc.getImageUrl() %}
                {% if image is empty %}
                    <i class=\"{{ pageData.icon }} fa-3x ps-3 float-end\" aria-hidden=\"true\"></i>
                {% else %}
                    <img src=\"{{ image }}\" alt=\"{{ fsc.title }}\" class=\"img-thumbnail ms-3 mb-2 float-end\"/>
                {% endif %}
                <h1 class=\"h5 mb-0\">{{ trans(pageData.title) }}</h1>
                {% if fsc.hasData %}
                    <p class=\"text-info mb-3\">{{ firstView.model.primaryDescription() | raw }}</p>
                {% else %}
                    <p class=\"text-info mb-3\">{{ trans('new') }}</p>
                {% endif %}
            </div>
        </div>
    </div>
{% endblock %}

{% block body %}
    {% set firstView = fsc.views | first %}
    <div class=\"container-fluid\">
        <div class=\"row\">
            {# -- Left Panel -- #}
            {% if fsc.views | length > 1 %}
                <div class=\"col-lg-2\">
                    {# -- Left tabs -- #}
                    <div class=\"nav nav-pills flex-row flex-lg-column pb-3\" id=\"mainTabs\" role=\"tablist\">
                        {% for viewName, view in fsc.views %}
                            {% set active = (viewName == fsc.active) ? ' active' : '' %}
                            {% set disable = view.settings.active ? '' : ' disabled' %}
                            <a class=\"nav-link{{ active }}{{ disable }}\" id=\"{{ viewName }}-tab\" data-bs-toggle=\"pill\"
                               href=\"#{{ viewName }}\" role=\"tab\" aria-controls=\"{{ viewName }}\" aria-expanded=\"true\">
                                <i class=\"{{ view.icon }} fa-fw me-1 d-none d-xl-inline-block\"
                                   aria-hidden=\"true\"></i>{{ view.title }}
                                {% if view.count >= 1 and viewName != firstView.getViewName() %}
                                    <span class='badge bg-secondary mt-lg-1 mb-lg-1 float-lg-end'>{{ view.count }}</span>
                                {% endif %}
                            </a>
                        {% endfor %}
                    </div>
                </div>
            {% endif %}
            {# -- Right Panel -- #}
            {% set rightPanelClass = (fsc.views | length > 1) ? 'col-lg-10' : 'col' %}
            <div class=\"{{ rightPanelClass }}\">
                {# -- Tab content -- #}
                <div class=\"tab-content\" id=\"mainTabsContent\">
                    {% for viewName, view in fsc.views %}
                        {% set active = (viewName == fsc.active) ? ' show active' : '' %}
                        <div class=\"tab-pane fade{{ active }}\" id=\"{{ viewName }}\" role=\"tabpanel\"
                             aria-labelledby=\"{{ viewName }}-tab\">
                            {% do fsc.setCurrentView(viewName) %}
                            {{ include(view.template) }}
                        </div>
                    {% endfor %}
                </div>
            </div>
        </div>
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        \$(document).ready(function () {
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) == false) {
                \$(\"input:visible,textarea:visible\").filter(\":not([readonly='readonly']):not([disabled='disabled']):not([type='hidden']):not([type='checkbox']):not([type='radio'])\").first().focus();
            }
        });
    </script>
{% endblock %}

{% macro optionsButton(fsc, firstView, i18n) %}
    {% set show = false %}
    {% for viewName, view in fsc.views %}
        {% if view.settings.active and view.columns is not empty %}
            {% set show = true %}
        {% endif %}
    {% endfor %}
    {% if show and firstView.settings.btnOptions %}
        <div class=\"btn-group\">
            <div class=\"dropdown\">
                <button class=\"btn btn-sm btn-secondary me-3 dropdown-toggle\" type=\"button\" data-bs-toggle=\"dropdown\"
                        aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"fa-solid fa-wrench fa-fw\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-lg-inline-block\">{{ trans('options') }}</span>
                </button>
                <div class=\"dropdown-menu\">
                    <h6 class=\"dropdown-header\">{{ trans('options-button-header') }}</h6>
                    {% for viewName, view in fsc.views %}
                        {% if view.settings.active and view.columns is not empty %}
                            <a class=\"dropdown-item\"
                               href=\"EditPageOption?code={{ viewName }}&url={{ firstView.model.url() | url_encode }}\">
                                <i class=\"{{ view.icon }} fa-fw\" aria-hidden=\"true\"></i> {{ view.title }}
                                {% if view.settings.customized %}
                                    <i class=\"fa-solid fa-user-pen ms-2\" title=\"{{ trans('personalized') }}\"></i>
                                {% endif %}
                            </a>
                        {% endif %}
                    {% endfor %}
                </div>
            </div>
        </div>
    {% endif %}
{% endmacro %}

{% macro printButton(fsc, firstView, i18n) %}
    <div class=\"btn-group\">
        <a href=\"{{ firstView.model.url() }}&action=export&option={{ fsc.exportManager.defaultOption() }}\"
           target=\"_blank\" class=\"btn btn-sm btn-secondary\">
            <i class=\"fa-solid fa-print fa-fw\" aria-hidden=\"true\"></i>
            <span class=\"d-none d-lg-inline-block\">{{ trans('print') }}</span>
        </a>
        <button type=\"button\" class=\"btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split\"
                data-bs-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <span class=\"sr-only\">{{ trans('more') }}</span>
        </button>
        <div class=\"dropdown-menu dropdown-menu-end\">
            {% for key, option in fsc.exportManager.options() %}
                {% if key != fsc.exportManager.defaultOption() %}
                    <a href=\"{{ firstView.model.url() }}&action=export&option={{ key }}\" class=\"dropdown-item\">
                        <i class=\"{{ option.icon }} fa-fw\" aria-hidden=\"true\"></i>
                        {{ trans(option.description) }}
                    </a>
                {% endif %}
            {% endfor %}
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\" data-bs-toggle=\"modal\" data-bs-target=\"#advancedExportModal\">
                <i class=\"fa-solid fa-tools fa-fw\" aria-hidden=\"true\"></i>
                {{ trans('advanced') }}
            </a>
            {% set tools = fsc.exportManager.tools() %}
            {% if tools is not empty %}
                <div class=\"dropdown-divider\"></div>
                {% for key, tool in tools %}
                    <a href=\"{{ tool.link }}\" target=\"_blank\" class=\"dropdown-item\">
                        <i class=\"{{ tool.icon }} fa-fw\" aria-hidden=\"true\"></i>
                        {{ trans(tool.description) }}
                    </a>
                {% endfor %}
            {% endif %}
        </div>
    </div>
    <form action=\"{{ firstView.model.url() }}\" method=\"post\" class=\"float-start\" target=\"_blank\" onsubmit=\"animateSpinner('add')\">
        <input type=\"hidden\" name=\"action\" value=\"export\"/>
        <div class=\"modal fade\" id=\"advancedExportModal\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">
                            <i class=\"fa-solid fa-tools fa-fw\" aria-hidden=\"true\"></i>
                            {{ trans('advanced') }}
                        </h5>
                        <button type=\"button\" class=\"btn-close\" data-bs-dismiss=\"modal\" aria-label=\"Close\"></button>
                    </div>
                    <div class=\"modal-body text-start\">
                        <div class=\"mb-3\">
                            <select name=\"option\" class=\"form-select\">
                                {% for key, option in fsc.exportManager.options() %}
                                    <option value=\"{{ key }}\">{{ trans(option.description) }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class=\"mb-3\">
                            {{ trans('format') }}
                            <select name=\"idformat\" class=\"form-select\">
                                <option value=\"\">{{ trans('default') }}</option>
                                <option value=\"\">------</option>
                                {% for format in fsc.exportManager.getFormats(firstView.model) %}
                                    <option value=\"{{ format.id }}\">{{ format.nombre }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class=\"mb-3\">
                            {{ trans('language') }}
                            <select name=\"langcode\" class=\"form-select\">
                                <option value=\"\">{{ trans('default') }}</option>
                                <option value=\"\">------</option>
                                {% for code, lang in i18n.getAvailableLanguages() %}
                                    <option value=\"{{ code }}\">{{ lang }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class=\"text-end\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                {{ trans('accept') }}
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </form>
{% endmacro %}
", "Master/PanelController.html.twig", "D:\\xampp\\htdocs\\Facturascripts\\Core\\View\\Master\\PanelController.html.twig");
    }
}
