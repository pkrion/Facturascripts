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

/* Master/PanelControllerTop.html.twig */
class __TwigTemplate_a935193616d3def8c71b9b533da71d35 extends Template
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
        return "Master/MenuBghTemplate.html.twig";
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        $this->parent = $this->loadTemplate("Master/MenuBghTemplate.html.twig", "Master/PanelControllerTop.html.twig", 20);
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
        yield "    <div class=\"pt-3 container-fluid d-print-none\">
        <div class=\"form-row\">
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
        <div class=\"form-row\">
            ";
        // line 56
        yield "            <div class=\"col-md-8 mb-2\">
                <div class=\"btn-group\">
                    <a href=\"";
        // line 58
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 58), "url", ["list"], "method", false, false, false, 58), "html", null, true);
        yield "\" class=\"btn btn-sm btn-secondary\">
                        <i class=\"fas fa-list fa-fw\" aria-hidden=\"true\"></i>
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
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
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
                        <i class=\"fas fa-plus fa-fw\" aria-hidden=\"true\"></i>
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
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('getIncludeViews')->getCallable()("PanelControllerTop", "topButtons"));
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
            yield from             $this->loadTemplate((($__internal_compile_0 = $context["includeView"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["path"] ?? null) : null), "Master/PanelControllerTop.html.twig", 83)->unwrap()->yield($context);
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
        yield "            <div class=\"col-md d-none d-md-inline-block text-right\">
                ";
        // line 88
        $context["image"] = CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getImageUrl", [], "method", false, false, false, 88);
        // line 89
        yield "                ";
        if (Twig\Extension\CoreExtension::testEmpty(($context["image"] ?? null))) {
            // line 90
            yield "                    <i class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["pageData"] ?? null), "icon", [], "any", false, false, false, 90), "html", null, true);
            yield " fa-3x pl-3 float-right\" aria-hidden=\"true\"></i>
                ";
        } else {
            // line 92
            yield "                    <img src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["image"] ?? null), "html", null, true);
            yield "\" alt=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 92), "html", null, true);
            yield "\" class=\"img-thumbnail ml-3 mb-2 float-right\"/>
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
        // line 123
        yield "    <ul class=\"nav nav-tabs d-print-none\" id=\"mainTabs\" role=\"tablist\">
        ";
        // line 124
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 124));
        foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
            // line 125
            yield "            <li class=\"nav-item\">
                ";
            // line 126
            $context["active"] = ((($context["viewName"] == CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 126))) ? (" active") : (""));
            // line 127
            yield "                ";
            $context["disable"] = ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 127), "active", [], "any", false, false, false, 127)) ? ("") : (" disabled"));
            // line 128
            yield "                <a href=\"#";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["viewName"], "html", null, true);
            yield "\" class=\"nav-link";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["disable"] ?? null), "html", null, true);
            yield "\" data-toggle=\"tab\" role=\"tab\"
                   aria-controls=\"";
            // line 129
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["viewName"], "html", null, true);
            yield "\">
                    <i class=\"";
            // line 130
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "icon", [], "any", false, false, false, 130), "html", null, true);
            yield "\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-sm-inline-block\">";
            // line 131
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "title", [], "any", false, false, false, 131), "html", null, true);
            yield "</span>
                    ";
            // line 132
            if ((CoreExtension::getAttribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 132) > 0)) {
                // line 133
                yield "                        <span class=\"badge badge-secondary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('number')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "count", [], "any", false, false, false, 133), 0), "html", null, true);
                yield "</span>
                    ";
            }
            // line 135
            yield "                </a>
            </li>
        ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 138
        yield "    </ul>
";
        return; yield '';
    }

    // line 141
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 142
        yield "    <div class=\"tab-content bg-white\" id=\"mainPillsContent\">
        ";
        // line 143
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 143));
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
            // line 144
            yield "            ";
            $context["active"] = ((($context["viewName"] == CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "active", [], "any", false, false, false, 144))) ? ("tab-pane fade show active") : ("tab-pane fade"));
            // line 145
            yield "            <div class=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["active"] ?? null), "html", null, true);
            yield "\" id=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["viewName"], "html", null, true);
            yield "\" role=\"tabpanel\">
                ";
            // line 146
            CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "setCurrentView", [$context["viewName"]], "method", false, false, false, 146);
            // line 147
            yield "                ";
            yield Twig\Extension\CoreExtension::include($this->env, $context, CoreExtension::getAttribute($this->env, $this->source, $context["view"], "template", [], "any", false, false, false, 147));
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
        // line 150
        yield "    </div>
";
        return; yield '';
    }

    // line 153
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 154
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    <script>
        \$(document).ready(function () {
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) == false) {
                \$(\"input:visible,textarea:visible\").filter(\":not([readonly='readonly']):not([disabled='disabled']):not([type='hidden'])\").first().focus();
            }
        });
    </script>
";
        return; yield '';
    }

    // line 164
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
            // line 165
            yield "    ";
            $context["show"] = false;
            // line 166
            yield "    ";
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 166));
            foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
                // line 167
                yield "        ";
                if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 167), "active", [], "any", false, false, false, 167) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "columns", [], "any", false, false, false, 167)))) {
                    // line 168
                    yield "            ";
                    $context["show"] = true;
                    // line 169
                    yield "        ";
                }
                // line 170
                yield "    ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 171
            yield "    ";
            if ((($context["show"] ?? null) && CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "settings", [], "any", false, false, false, 171), "btnOptions", [], "any", false, false, false, 171))) {
                // line 172
                yield "        <div class=\"btn-group\">
            <div class=\"dropdown\">
                <button class=\"btn btn-sm btn-secondary mr-3 dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"
                        aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"fas fa-wrench fa-fw\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-lg-inline-block\">";
                // line 177
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("options"), "html", null, true);
                yield "</span>
                </button>
                <div class=\"dropdown-menu\">
                    ";
                // line 180
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 180));
                foreach ($context['_seq'] as $context["viewName"] => $context["view"]) {
                    // line 181
                    yield "                        ";
                    if ((CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 181), "active", [], "any", false, false, false, 181) &&  !Twig\Extension\CoreExtension::testEmpty(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "columns", [], "any", false, false, false, 181)))) {
                        // line 182
                        yield "                            <a class=\"dropdown-item\"
                               href=\"EditPageOption?code=";
                        // line 183
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["viewName"], "html", null, true);
                        yield "&url=";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::urlencode(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 183), "url", [], "method", false, false, false, 183)), "html", null, true);
                        yield "\">
                                <i class=\"";
                        // line 184
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "icon", [], "any", false, false, false, 184), "html", null, true);
                        yield " fa-fw\" aria-hidden=\"true\"></i> ";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["view"], "title", [], "any", false, false, false, 184), "html", null, true);
                        yield "
                                ";
                        // line 185
                        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, $context["view"], "settings", [], "any", false, false, false, 185), "customized", [], "any", false, false, false, 185)) {
                            // line 186
                            yield "                                    <i class=\"fas fa-user-pen ml-2\" title=\"";
                            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("personalized"), "html", null, true);
                            yield "\"></i>
                                ";
                        }
                        // line 188
                        yield "                            </a>
                        ";
                    }
                    // line 190
                    yield "                    ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['viewName'], $context['view'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 191
                yield "                </div>
            </div>
        </div>
    ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 197
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
            // line 198
            yield "    <div class=\"btn-group\">
        <a href=\"";
            // line 199
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 199), "url", [], "method", false, false, false, 199), "html", null, true);
            yield "&action=export&option=";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 199), "defaultOption", [], "method", false, false, false, 199), "html", null, true);
            yield "\"
           target=\"_blank\" class=\"btn btn-sm btn-secondary\">
            <i class=\"fas fa-print fa-fw\" aria-hidden=\"true\"></i>
            <span class=\"d-none d-lg-inline-block\">";
            // line 202
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("print"), "html", null, true);
            yield "</span>
        </a>
        <button type=\"button\" class=\"btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split\"
                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <span class=\"sr-only\">";
            // line 206
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("more"), "html", null, true);
            yield "</span>
        </button>
        <div class=\"dropdown-menu dropdown-menu-right\">
            ";
            // line 209
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 209), "options", [], "method", false, false, false, 209));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 210
                yield "                ";
                if (($context["key"] != CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 210), "defaultOption", [], "method", false, false, false, 210))) {
                    // line 211
                    yield "                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 211), "url", [], "method", false, false, false, 211), "html", null, true);
                    yield "&action=export&option=";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                    yield "\" class=\"dropdown-item\">
                        <i class=\"";
                    // line 212
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "icon", [], "any", false, false, false, 212), "html", null, true);
                    yield " fa-fw\" aria-hidden=\"true\"></i>
                        ";
                    // line 213
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "description", [], "any", false, false, false, 213)), "html", null, true);
                    yield "
                    </a>
                ";
                }
                // line 216
                yield "            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 217
            yield "            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\" data-toggle=\"modal\" data-target=\"#advancedExportModal\">
                <i class=\"fas fa-tools fa-fw\" aria-hidden=\"true\"></i>
                ";
            // line 220
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("advanced"), "html", null, true);
            yield "
            </a>
            ";
            // line 222
            $context["tools"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 222), "tools", [], "method", false, false, false, 222);
            // line 223
            yield "            ";
            if ( !Twig\Extension\CoreExtension::testEmpty(($context["tools"] ?? null))) {
                // line 224
                yield "                <div class=\"dropdown-divider\"></div>
                ";
                // line 225
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(($context["tools"] ?? null));
                foreach ($context['_seq'] as $context["key"] => $context["tool"]) {
                    // line 226
                    yield "                    <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tool"], "link", [], "any", false, false, false, 226), "html", null, true);
                    yield "\" target=\"_blank\" class=\"dropdown-item\">
                        <i class=\"";
                    // line 227
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["tool"], "icon", [], "any", false, false, false, 227), "html", null, true);
                    yield " fa-fw\" aria-hidden=\"true\"></i>
                        ";
                    // line 228
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["tool"], "description", [], "any", false, false, false, 228)), "html", null, true);
                    yield "
                    </a>
                ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['key'], $context['tool'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 231
                yield "            ";
            }
            // line 232
            yield "        </div>
    </div>
    <form action=\"";
            // line 234
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 234), "url", [], "method", false, false, false, 234), "html", null, true);
            yield "\" method=\"post\" class=\"float-left\" target=\"_blank\"
          onsubmit=\"animateSpinner('add')\">
        <input type=\"hidden\" name=\"action\" value=\"export\"/>
        <div class=\"modal fade\" id=\"advancedExportModal\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">
                            <i class=\"fas fa-tools fa-fw\" aria-hidden=\"true\"></i>
                            ";
            // line 243
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("advanced"), "html", null, true);
            yield "
                        </h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body text-left\">
                        <div class=\"form-group\">
                            <select name=\"option\" class=\"form-control\">
                                ";
            // line 252
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 252), "options", [], "method", false, false, false, 252));
            foreach ($context['_seq'] as $context["key"] => $context["option"]) {
                // line 253
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["key"], "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, $context["option"], "description", [], "any", false, false, false, 253)), "html", null, true);
                yield "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['key'], $context['option'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 255
            yield "                            </select>
                        </div>
                        <div class=\"form-group\">
                            ";
            // line 258
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("format"), "html", null, true);
            yield "
                            <select name=\"idformat\" class=\"form-control\">
                                <option value=\"\">";
            // line 260
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("default"), "html", null, true);
            yield "</option>
                                <option value=\"\">------</option>
                                ";
            // line 262
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "exportManager", [], "any", false, false, false, 262), "getFormats", [CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 262)], "method", false, false, false, 262));
            foreach ($context['_seq'] as $context["_key"] => $context["format"]) {
                // line 263
                yield "                                    <option value=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["format"], "id", [], "any", false, false, false, 263), "html", null, true);
                yield "\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["format"], "nombre", [], "any", false, false, false, 263), "html", null, true);
                yield "</option>
                                ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['format'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 265
            yield "                            </select>
                        </div>
                        <div class=\"form-group\">
                            ";
            // line 268
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("language"), "html", null, true);
            yield "
                            <select name=\"langcode\" class=\"form-control\">
                                <option value=\"\">";
            // line 270
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("default"), "html", null, true);
            yield "</option>
                                <option value=\"\">------</option>
                                ";
            // line 272
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["i18n"] ?? null), "getAvailableLanguages", [], "method", false, false, false, 272));
            foreach ($context['_seq'] as $context["code"] => $context["lang"]) {
                // line 273
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
            // line 275
            yield "                            </select>
                        </div>
                        <div class=\"text-right\">
                            <button type=\"submit\" class=\"btn btn-primary\">
                                ";
            // line 279
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
        return "Master/PanelControllerTop.html.twig";
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
        return array (  727 => 279,  721 => 275,  710 => 273,  706 => 272,  701 => 270,  696 => 268,  691 => 265,  680 => 263,  676 => 262,  671 => 260,  666 => 258,  661 => 255,  650 => 253,  646 => 252,  634 => 243,  622 => 234,  618 => 232,  615 => 231,  606 => 228,  602 => 227,  597 => 226,  593 => 225,  590 => 224,  587 => 223,  585 => 222,  580 => 220,  575 => 217,  569 => 216,  563 => 213,  559 => 212,  552 => 211,  549 => 210,  545 => 209,  539 => 206,  532 => 202,  524 => 199,  521 => 198,  507 => 197,  497 => 191,  491 => 190,  487 => 188,  481 => 186,  479 => 185,  473 => 184,  467 => 183,  464 => 182,  461 => 181,  457 => 180,  451 => 177,  444 => 172,  441 => 171,  435 => 170,  432 => 169,  429 => 168,  426 => 167,  421 => 166,  418 => 165,  404 => 164,  389 => 154,  385 => 153,  379 => 150,  361 => 147,  359 => 146,  352 => 145,  349 => 144,  332 => 143,  329 => 142,  325 => 141,  319 => 138,  311 => 135,  305 => 133,  303 => 132,  299 => 131,  295 => 130,  291 => 129,  283 => 128,  280 => 127,  278 => 126,  275 => 125,  271 => 124,  268 => 123,  263 => 100,  257 => 98,  251 => 96,  249 => 95,  244 => 94,  236 => 92,  230 => 90,  227 => 89,  225 => 88,  222 => 87,  219 => 85,  205 => 84,  202 => 83,  184 => 82,  178 => 80,  175 => 79,  170 => 77,  168 => 76,  162 => 73,  156 => 71,  153 => 70,  148 => 68,  141 => 63,  137 => 62,  132 => 60,  127 => 58,  123 => 56,  115 => 49,  109 => 47,  103 => 45,  101 => 44,  93 => 41,  90 => 40,  84 => 37,  81 => 36,  79 => 35,  74 => 33,  69 => 30,  64 => 26,  61 => 25,  59 => 24,  54 => 23,  50 => 22,  39 => 20,);
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
{% extends \"Master/MenuBghTemplate.html.twig\" %}

{% block bodyHeaderOptions %}
    {{ parent() }}
    {% set pageData = fsc.getPageData() %}
    {% set firstView = fsc.views | first %}
    <div class=\"pt-3 container-fluid d-print-none\">
        <div class=\"form-row\">
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
        <div class=\"form-row\">
            {# -- Top left buttons -- #}
            <div class=\"col-md-8 mb-2\">
                <div class=\"btn-group\">
                    <a href=\"{{ firstView.model.url('list') }}\" class=\"btn btn-sm btn-secondary\">
                        <i class=\"fas fa-list fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-lg-inline-block\">{{ trans('all') }}</span>
                    </a>
                    <a href=\"{{ firstView.model.url('edit') }}\" class=\"btn btn-sm btn-secondary\"
                       title=\"{{ trans('refresh') }}\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                </div>
                {# -- Options button -- #}
                {{ _self.optionsButton(fsc, firstView, i18n) }}
                {# -- New button -- #}
                {% if fsc.hasData and firstView.settings.btnNew %}
                    <a href=\"{{ firstView.model.url('new') }}\" class=\"btn btn-sm btn-success\">
                        <i class=\"fas fa-plus fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-lg-inline-block\">{{ trans('new') }}</span>
                    </a>
                {% endif %}
                {# -- Action buttons -- #}
                {{ firstView.getRow('actions').renderTop() | raw }}
                {# -- Print button -- #}
                {% if fsc.hasData and firstView.settings.btnPrint %}
                    {{ _self.printButton(fsc, firstView, i18n) }}
                {% endif %}
                {% for includeView in getIncludeViews('PanelControllerTop', 'topButtons') %}
                    {% include includeView['path'] %}
                {% endfor %}
            </div>
            {# -- Top right text -- #}
            <div class=\"col-md d-none d-md-inline-block text-right\">
                {% set image = fsc.getImageUrl() %}
                {% if image is empty %}
                    <i class=\"{{ pageData.icon }} fa-3x pl-3 float-right\" aria-hidden=\"true\"></i>
                {% else %}
                    <img src=\"{{ image }}\" alt=\"{{ fsc.title }}\" class=\"img-thumbnail ml-3 mb-2 float-right\"/>
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
    {# <ul class=\"nav nav-pills d-print-none mb-3\" id=\"mainPills\" role=\"tablist\">
        {% for viewName, view in fsc.views %}
            {% set active = (viewName == fsc.active) ? ' active' : '' %}
            {% set disable = view.settings.active ? '' : ' disabled' %}
            <li class=\"nav-item\">
                <a class=\"nav-link rounded-pill{{ active }}{{ disable }}\"
                   id=\"pill-{{ viewName }}-tab\"
                   data-toggle=\"pill\"
                   href=\"#pill-{{ viewName }}\"
                   role=\"tab\"
                   aria-controls=\"pill-{{ viewName }}\">
                    <i class=\"{{ view.icon }}\"></i>
                    <span class=\"d-none d-sm-inline-block\">{{ view.title }}</span>
                    {% if view.count > 0 %}
                        <span class=\"badge badge-secondary ml-1\">{{ number(view.count, 0) }}</span>
                    {% endif %}
                </a>
            </li>
        {% endfor %}
    </ul> #}
    <ul class=\"nav nav-tabs d-print-none\" id=\"mainTabs\" role=\"tablist\">
        {% for viewName, view in fsc.views %}
            <li class=\"nav-item\">
                {% set active = (viewName == fsc.active) ? ' active' : '' %}
                {% set disable = view.settings.active ? '' : ' disabled' %}
                <a href=\"#{{ viewName }}\" class=\"nav-link{{ active }}{{ disable }}\" data-toggle=\"tab\" role=\"tab\"
                   aria-controls=\"{{ viewName }}\">
                    <i class=\"{{ view.icon }}\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-sm-inline-block\">{{ view.title }}</span>
                    {% if view.count > 0 %}
                        <span class=\"badge badge-secondary\">{{ number(view.count, 0) }}</span>
                    {% endif %}
                </a>
            </li>
        {% endfor %}
    </ul>
{% endblock %}

{% block body %}
    <div class=\"tab-content bg-white\" id=\"mainPillsContent\">
        {% for viewName, view in fsc.views %}
            {% set active = (viewName == fsc.active) ? 'tab-pane fade show active' : 'tab-pane fade' %}
            <div class=\"{{ active }}\" id=\"{{ viewName }}\" role=\"tabpanel\">
                {% do fsc.setCurrentView(viewName) %}
                {{ include(view.template) }}
            </div>
        {% endfor %}
    </div>
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    <script>
        \$(document).ready(function () {
            if (/Android|webOS|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(navigator.userAgent) == false) {
                \$(\"input:visible,textarea:visible\").filter(\":not([readonly='readonly']):not([disabled='disabled']):not([type='hidden'])\").first().focus();
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
                <button class=\"btn btn-sm btn-secondary mr-3 dropdown-toggle\" type=\"button\" data-toggle=\"dropdown\"
                        aria-haspopup=\"true\" aria-expanded=\"false\">
                    <i class=\"fas fa-wrench fa-fw\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-lg-inline-block\">{{ trans('options') }}</span>
                </button>
                <div class=\"dropdown-menu\">
                    {% for viewName, view in fsc.views %}
                        {% if view.settings.active and view.columns is not empty %}
                            <a class=\"dropdown-item\"
                               href=\"EditPageOption?code={{ viewName }}&url={{ firstView.model.url() | url_encode }}\">
                                <i class=\"{{ view.icon }} fa-fw\" aria-hidden=\"true\"></i> {{ view.title }}
                                {% if view.settings.customized %}
                                    <i class=\"fas fa-user-pen ml-2\" title=\"{{ trans('personalized') }}\"></i>
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
            <i class=\"fas fa-print fa-fw\" aria-hidden=\"true\"></i>
            <span class=\"d-none d-lg-inline-block\">{{ trans('print') }}</span>
        </a>
        <button type=\"button\" class=\"btn btn-sm btn-secondary dropdown-toggle dropdown-toggle-split\"
                data-toggle=\"dropdown\" aria-haspopup=\"true\" aria-expanded=\"false\">
            <span class=\"sr-only\">{{ trans('more') }}</span>
        </button>
        <div class=\"dropdown-menu dropdown-menu-right\">
            {% for key, option in fsc.exportManager.options() %}
                {% if key != fsc.exportManager.defaultOption() %}
                    <a href=\"{{ firstView.model.url() }}&action=export&option={{ key }}\" class=\"dropdown-item\">
                        <i class=\"{{ option.icon }} fa-fw\" aria-hidden=\"true\"></i>
                        {{ trans(option.description) }}
                    </a>
                {% endif %}
            {% endfor %}
            <div class=\"dropdown-divider\"></div>
            <a href=\"#\" class=\"dropdown-item\" data-toggle=\"modal\" data-target=\"#advancedExportModal\">
                <i class=\"fas fa-tools fa-fw\" aria-hidden=\"true\"></i>
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
    <form action=\"{{ firstView.model.url() }}\" method=\"post\" class=\"float-left\" target=\"_blank\"
          onsubmit=\"animateSpinner('add')\">
        <input type=\"hidden\" name=\"action\" value=\"export\"/>
        <div class=\"modal fade\" id=\"advancedExportModal\" tabindex=\"-1\" aria-hidden=\"true\">
            <div class=\"modal-dialog\">
                <div class=\"modal-content\">
                    <div class=\"modal-header\">
                        <h5 class=\"modal-title\">
                            <i class=\"fas fa-tools fa-fw\" aria-hidden=\"true\"></i>
                            {{ trans('advanced') }}
                        </h5>
                        <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"Close\">
                            <span aria-hidden=\"true\">&times;</span>
                        </button>
                    </div>
                    <div class=\"modal-body text-left\">
                        <div class=\"form-group\">
                            <select name=\"option\" class=\"form-control\">
                                {% for key, option in fsc.exportManager.options() %}
                                    <option value=\"{{ key }}\">{{ trans(option.description) }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class=\"form-group\">
                            {{ trans('format') }}
                            <select name=\"idformat\" class=\"form-control\">
                                <option value=\"\">{{ trans('default') }}</option>
                                <option value=\"\">------</option>
                                {% for format in fsc.exportManager.getFormats(firstView.model) %}
                                    <option value=\"{{ format.id }}\">{{ format.nombre }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class=\"form-group\">
                            {{ trans('language') }}
                            <select name=\"langcode\" class=\"form-control\">
                                <option value=\"\">{{ trans('default') }}</option>
                                <option value=\"\">------</option>
                                {% for code, lang in i18n.getAvailableLanguages() %}
                                    <option value=\"{{ code }}\">{{ lang }}</option>
                                {% endfor %}
                            </select>
                        </div>
                        <div class=\"text-right\">
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
", "Master/PanelControllerTop.html.twig", "D:\\xampp\\htdocs\\Facturascripts\\Plugins\\MartosOS\\View\\Master\\PanelControllerTop.html.twig");
    }
}
