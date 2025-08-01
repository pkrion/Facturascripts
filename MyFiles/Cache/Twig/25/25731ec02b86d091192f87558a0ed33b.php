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

/* Master/MenuTemplate.html.twig */
class __TwigTemplate_9aff1dbf48e1c5245232b76174561810 extends Template
{
    private $source;
    private $macros = [];

    public function __construct(Environment $env)
    {
        parent::__construct($env);

        $this->source = $this->getSourceContext();

        $this->parent = false;

        $this->blocks = [
            'meta' => [$this, 'block_meta'],
            'icons' => [$this, 'block_icons'],
            'css' => [$this, 'block_css'],
            'javascripts' => [$this, 'block_javascripts'],
            'fullBody' => [$this, 'block_fullBody'],
            'navbar' => [$this, 'block_navbar'],
            'navbarMenuIcon' => [$this, 'block_navbarMenuIcon'],
            'messages' => [$this, 'block_messages'],
            'bodyHeaderOptions' => [$this, 'block_bodyHeaderOptions'],
            'body' => [$this, 'block_body'],
        ];
    }

    protected function doDisplay(array $context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 20
        $macros["GoogleTagManager"] = $this->macros["GoogleTagManager"] = $this->loadTemplate("Macro/GoogleTagManager.html.twig", "Master/MenuTemplate.html.twig", 20)->unwrap();
        // line 21
        yield "<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"";
        // line 22
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::constant("FS_LANG"), 0, 2), "html", null, true);
        yield "\"
      xml:lang=\"";
        // line 23
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), Twig\Extension\CoreExtension::constant("FS_LANG"), 0, 2), "html", null, true);
        yield "\">
<head>
    ";
        // line 25
        yield CoreExtension::callMacro($macros["GoogleTagManager"], "macro_head", [], 25, $context, $this->getSourceContext());
        yield "
    ";
        // line 26
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('getIncludeViews')->getCallable()("MenuTemplate", "HeadFirst"));
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
            // line 27
            yield "        ";
            yield from             $this->loadTemplate((($__internal_compile_0 = $context["includeView"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["path"] ?? null) : null), "Master/MenuTemplate.html.twig", 27)->unwrap()->yield($context);
            // line 28
            yield "    ";
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
        // line 29
        yield "    ";
        yield from $this->unwrap()->yieldBlock('meta', $context, $blocks);
        // line 37
        yield "    ";
        yield from $this->unwrap()->yieldBlock('icons', $context, $blocks);
        // line 42
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('getIncludeViews')->getCallable()("MenuTemplate", "CssBefore"));
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
            // line 43
            yield "        ";
            yield from             $this->loadTemplate((($__internal_compile_1 = $context["includeView"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["path"] ?? null) : null), "Master/MenuTemplate.html.twig", 43)->unwrap()->yield($context);
            // line 44
            yield "    ";
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
        // line 45
        yield "    ";
        yield from $this->unwrap()->yieldBlock('css', $context, $blocks);
        // line 54
        yield "    ";
        // line 55
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["assetManager"] ?? null), "get", ["css"], "method", false, false, false, 55));
        foreach ($context['_seq'] as $context["_key"] => $context["css"]) {
            // line 56
            yield "        <link rel=\"stylesheet\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["css"], "html", null, true);
            yield "\"/>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['css'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 58
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('getIncludeViews')->getCallable()("MenuTemplate", "CssAfter"));
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
            // line 59
            yield "        ";
            yield from             $this->loadTemplate((($__internal_compile_2 = $context["includeView"]) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["path"] ?? null) : null), "Master/MenuTemplate.html.twig", 59)->unwrap()->yield($context);
            // line 60
            yield "    ";
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
        // line 61
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('getIncludeViews')->getCallable()("MenuTemplate", "JsHeadBefore"));
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
            // line 62
            yield "        ";
            yield from             $this->loadTemplate((($__internal_compile_3 = $context["includeView"]) && is_array($__internal_compile_3) || $__internal_compile_3 instanceof ArrayAccess ? ($__internal_compile_3["path"] ?? null) : null), "Master/MenuTemplate.html.twig", 62)->unwrap()->yield($context);
            // line 63
            yield "    ";
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
        // line 64
        yield "    ";
        yield from $this->unwrap()->yieldBlock('javascripts', $context, $blocks);
        // line 79
        yield "    ";
        // line 80
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["assetManager"] ?? null), "get", ["js"], "method", false, false, false, 80));
        foreach ($context['_seq'] as $context["_key"] => $context["js"]) {
            // line 81
            yield "        <script src=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($context["js"], "html", null, true);
            yield "\"></script>
    ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['js'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 83
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('getIncludeViews')->getCallable()("MenuTemplate", "JsHeadAfter"));
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
            // line 84
            yield "        ";
            yield from             $this->loadTemplate((($__internal_compile_4 = $context["includeView"]) && is_array($__internal_compile_4) || $__internal_compile_4 instanceof ArrayAccess ? ($__internal_compile_4["path"] ?? null) : null), "Master/MenuTemplate.html.twig", 84)->unwrap()->yield($context);
            // line 85
            yield "    ";
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
        // line 86
        yield "    ";
        if (($context["debugBarRender"] ?? null)) {
            // line 87
            yield "        ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["debugBarRender"] ?? null), "renderHead", [], "method", false, false, false, 87);
            yield "
    ";
        }
        // line 89
        yield "    ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('getIncludeViews')->getCallable()("MenuTemplate", "HeadEnd"));
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
            // line 90
            yield "        ";
            yield from             $this->loadTemplate((($__internal_compile_5 = $context["includeView"]) && is_array($__internal_compile_5) || $__internal_compile_5 instanceof ArrayAccess ? ($__internal_compile_5["path"] ?? null) : null), "Master/MenuTemplate.html.twig", 90)->unwrap()->yield($context);
            // line 91
            yield "    ";
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
        // line 92
        yield "</head>
";
        // line 93
        yield from $this->unwrap()->yieldBlock('fullBody', $context, $blocks);
        // line 181
        yield "</html>
";
        return; yield '';
    }

    // line 29
    public function block_meta($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 30
        yield "        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
        <title>";
        // line 31
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "title", [], "any", false, false, false, 31);
        yield "</title>
        <meta name=\"description\" content=\"";
        // line 32
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("meta-description"), "html", null, true);
        yield "\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        <meta name=\"generator\" content=\"FacturaScripts\"/>
        <meta name=\"robots\" content=\"noindex\"/>
    ";
        return; yield '';
    }

    // line 37
    public function block_icons($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 38
        yield "        <link rel=\"shortcut icon\" href=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("Dinamic/Assets/Images/favicon.ico"), "html", null, true);
        yield "\"/>
        <link rel=\"apple-touch-icon\" sizes=\"180x180\"
              href=\"";
        // line 40
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("Dinamic/Assets/Images/apple-icon-180x180.png"), "html", null, true);
        yield "\"/>
    ";
        return; yield '';
    }

    // line 45
    public function block_css($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 46
        yield "<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"";
        // line 47
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("node_modules/@fortawesome/fontawesome-free/css/all.min.css"), "html", null, true);
        yield "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 48
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("Dinamic/Assets/CSS/custom.css"), "html", null, true);
        yield "?v=6\"/>

        <!-- Flexy Theme -->
        <link rel=\"stylesheet\" href=\"";
        // line 51
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("Plugins/MartosOS/Assets/CSS/styles.min.css"), "html", null, true);
        yield "\"/>
        <link rel=\"stylesheet\" href=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("Plugins/MartosOS/Assets/CSS/flexy.min.css"), "html", null, true);
        yield "\"/>
    ";
        return; yield '';
    }

    // line 64
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 65
        yield "        <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("node_modules/jquery/dist/jquery.min.js"), "html", null, true);
        yield "\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>
        <script src=\"";
        // line 67
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("node_modules/bootbox/dist/bootbox.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 68
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("node_modules/bootbox/dist/bootbox.locales.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 69
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("node_modules/pace-js/pace.min.js"), "html", null, true);
        yield "\"></script>
        ";
        // line 71
        yield "        <script src=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("Dinamic/Assets/JS/Custom.js"), "html", null, true);
        yield "?v=6\"></script>

        <!-- Flexy Theme -->
        <script src=\"";
        // line 74
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("Plugins/MartosOS/Assets/JS/sidebarmenu.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 75
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("Plugins/MartosOS/Assets/JS/app.min.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 76
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("Plugins/MartosOS/Assets/libs/simplebar/dist/simplebar.js"), "html", null, true);
        yield "\"></script>
        <script src=\"";
        // line 77
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("Plugins/MartosOS/Assets/JS/FlexyTheme.js"), "html", null, true);
        yield "\"></script>
    ";
        return; yield '';
    }

    // line 93
    public function block_fullBody($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 94
        yield "    <body>
    <!--  Body Wrapper -->
    <div class=\"page-wrapper\" id=\"main-wrapper\" data-layout=\"vertical\" data-sidebartype=\"full\">
        ";
        // line 97
        yield CoreExtension::callMacro($macros["GoogleTagManager"], "macro_body", [], 97, $context, $this->getSourceContext());
        yield "
        ";
        // line 98
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('getIncludeViews')->getCallable()("MenuTemplate", "BodyFirst"));
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
            // line 99
            yield "            ";
            yield from             $this->loadTemplate((($__internal_compile_6 = $context["includeView"]) && is_array($__internal_compile_6) || $__internal_compile_6 instanceof ArrayAccess ? ($__internal_compile_6["path"] ?? null) : null), "Master/MenuTemplate.html.twig", 99)->unwrap()->yield($context);
            // line 100
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
        // line 101
        yield "        ";
        yield from $this->unwrap()->yieldBlock('navbar', $context, $blocks);
        // line 140
        yield "        <div class=\"body-wrapper\">
            <!--  Header Start -->
            
            <!--  Header End -->
            <div class=\"pt-4\" style=\"padding-top:0px !important;\">
            ";
        // line 145
        yield from         $this->loadTemplate("Master/AppHeader.html.twig", "Master/MenuTemplate.html.twig", 145)->unwrap()->yield($context);
        // line 146
        yield "                ";
        yield from $this->unwrap()->yieldBlock('messages', $context, $blocks);
        // line 156
        yield "                ";
        yield from $this->unwrap()->yieldBlock('bodyHeaderOptions', $context, $blocks);
        // line 158
        yield "            </div>
            ";
        // line 159
        yield from $this->unwrap()->yieldBlock('body', $context, $blocks);
        // line 161
        yield "        </div>
        ";
        // line 162
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
            // line 163
            yield "            ";
            yield from             $this->loadTemplate((($__internal_compile_7 = $context["includeView"]) && is_array($__internal_compile_7) || $__internal_compile_7 instanceof ArrayAccess ? ($__internal_compile_7["path"] ?? null) : null), "Master/MenuTemplate.html.twig", 163)->unwrap()->yield($context);
            // line 164
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
        // line 165
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
            // line 166
            yield "            ";
            yield from             $this->loadTemplate((($__internal_compile_8 = $context["includeView"]) && is_array($__internal_compile_8) || $__internal_compile_8 instanceof ArrayAccess ? ($__internal_compile_8["path"] ?? null) : null), "Master/MenuTemplate.html.twig", 166)->unwrap()->yield($context);
            // line 167
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
        // line 168
        yield "        ";
        if (($context["debugBarRender"] ?? null)) {
            // line 169
            yield "            ";
            yield CoreExtension::getAttribute($this->env, $this->source, ($context["debugBarRender"] ?? null), "render", [], "method", false, false, false, 169);
            yield "
        ";
        }
        // line 171
        yield "        <br/>
        <br/>
        <!-- execution time: ";
        // line 173
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('executionTime')->getCallable()(), "html", null, true);
        yield " s -->
    </div>
    <script>
        let vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `\${vh}px`);
    </script>
    </body>
";
        return; yield '';
    }

    // line 101
    public function block_navbar($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 102
        yield "            <!-- Sidebar Start -->
            <aside class=\"left-sidebar with-vertical bg-dark text-white\">
                <!-- Sidebar scroll-->
                <div>
                    <div class=\"brand-logo d-flex justify-content-between align-items-center p-3\">
                        <div class=\"d-xl-none d-block\">
                            <!-- Puedes poner algo aquí si quieres que haya algo a la izquierda en móvil -->
                        </div>

                        <a class=\"d-flex align-items-center mx-auto\" href=\"";
        // line 111
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()(CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 111), "homepage", [], "any", false, false, false, 111)), "html", null, true);
        yield "\"
                           title=\"";
        // line 112
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("homepage"), "html", null, true);
        yield "\">
                            <img src=\"";
        // line 113
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('asset')->getCallable()("Dinamic/Assets/Images/logo-white.png"), "html", null, true);
        yield "\" width=\"64\" height=\"64\"
                                 class=\"d-inline-block align-top\" alt=\"FacturaScripts\">
                        </a>

                        <div class=\"text-white close-btn d-xl-none d-block sidebartoggler cursor-pointer\"
                             id=\"sidebarCollapse\">
                            <i class=\"fa-solid fa-xmark\"></i>
                        </div>
                    </div>
                    <!-- Sidebar navigation-->
                    <nav class=\"sidebar-nav scroll-sidebar\" style=\"height: calc(100vh - 120px);\"
                         data-simplebar=\"\">
                        <ul id=\"sidebarnav\">
                            ";
        // line 126
        $macros["macros"] = $this->loadTemplate("Macro/Menu.html.twig", "Master/MenuTemplate.html.twig", 126)->unwrap();
        // line 127
        yield "                            ";
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["menuManager"] ?? null), "getMenu", [], "method", false, false, false, 127));
        foreach ($context['_seq'] as $context["_key"] => $context["menuItem"]) {
            // line 128
            yield "                                ";
            yield CoreExtension::callMacro($macros["macros"], "macro_showMenu", [$context["menuItem"]], 128, $context, $this->getSourceContext());
            yield "
                            ";
        }
        $_parent = $context['_parent'];
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['menuItem'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 130
        yield "                            ";
        yield from $this->unwrap()->yieldBlock('navbarMenuIcon', $context, $blocks);
        // line 132
        yield "                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>
            <!-- Sidebar End -->
        ";
        return; yield '';
    }

    // line 130
    public function block_navbarMenuIcon($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "                            ";
        return; yield '';
    }

    // line 146
    public function block_messages($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 147
        yield "                    ";
        yield from         $this->loadTemplate("Macro/Toasts.html.twig", "Master/MenuTemplate.html.twig", 147)->unwrap()->yield($context);
        // line 148
        yield "                    ";
        $macros["__internal_parse_0"] = $this->loadTemplate("Macro/Utils.html.twig", "Master/MenuTemplate.html.twig", 148)->unwrap();
        // line 149
        yield "
                    ";
        // line 150
        yield CoreExtension::callMacro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), ["error", "critical"], "danger"], 150, $context, $this->getSourceContext());
        yield "
                    ";
        // line 151
        yield CoreExtension::callMacro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), ["warning"], "warning"], 151, $context, $this->getSourceContext());
        yield "
                    ";
        // line 152
        yield CoreExtension::callMacro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), ["notice"], "success"], 152, $context, $this->getSourceContext());
        yield "
                    ";
        // line 153
        yield CoreExtension::callMacro($macros["__internal_parse_0"], "macro_message", [($context["log"] ?? null), ["info"], "info"], 153, $context, $this->getSourceContext());
        yield "

                ";
        return; yield '';
    }

    // line 156
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "                ";
        return; yield '';
    }

    // line 159
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        yield "            ";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Master/MenuTemplate.html.twig";
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
        return array (  740 => 159,  732 => 156,  724 => 153,  720 => 152,  716 => 151,  712 => 150,  709 => 149,  706 => 148,  703 => 147,  699 => 146,  691 => 130,  679 => 132,  676 => 130,  667 => 128,  662 => 127,  660 => 126,  644 => 113,  640 => 112,  636 => 111,  625 => 102,  621 => 101,  608 => 173,  604 => 171,  598 => 169,  595 => 168,  581 => 167,  578 => 166,  560 => 165,  546 => 164,  543 => 163,  526 => 162,  523 => 161,  521 => 159,  518 => 158,  515 => 156,  512 => 146,  510 => 145,  503 => 140,  500 => 101,  486 => 100,  483 => 99,  466 => 98,  462 => 97,  457 => 94,  453 => 93,  446 => 77,  442 => 76,  438 => 75,  434 => 74,  427 => 71,  423 => 69,  419 => 68,  415 => 67,  409 => 65,  405 => 64,  398 => 52,  394 => 51,  388 => 48,  384 => 47,  381 => 46,  377 => 45,  370 => 40,  364 => 38,  360 => 37,  350 => 32,  346 => 31,  343 => 30,  339 => 29,  333 => 181,  331 => 93,  328 => 92,  314 => 91,  311 => 90,  293 => 89,  287 => 87,  284 => 86,  270 => 85,  267 => 84,  249 => 83,  240 => 81,  235 => 80,  233 => 79,  230 => 64,  216 => 63,  213 => 62,  195 => 61,  181 => 60,  178 => 59,  160 => 58,  151 => 56,  146 => 55,  144 => 54,  141 => 45,  127 => 44,  124 => 43,  106 => 42,  103 => 37,  100 => 29,  86 => 28,  83 => 27,  66 => 26,  62 => 25,  57 => 23,  53 => 22,  50 => 21,  48 => 20,);
    }

    public function getSourceContext()
    {
        return new Source("{#
/**
 * This file is part of FacturaScripts
 * Copyright (C) 2017-2024 Carlos Garcia Gomez <carlos@facturascripts.com>
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
<!DOCTYPE html>
<html xmlns=\"http://www.w3.org/1999/xhtml\" lang=\"{{ constant('FS_LANG') | slice(0, 2) }}\"
      xml:lang=\"{{ constant('FS_LANG') | slice(0, 2) }}\">
<head>
    {{ GoogleTagManager.head() }}
    {% for includeView in getIncludeViews('MenuTemplate', 'HeadFirst') %}
        {% include includeView['path'] %}
    {% endfor %}
    {% block meta %}
        <meta http-equiv=\"Content-Type\" content=\"text/html; charset=UTF-8\"/>
        <title>{{ fsc.title | raw }}</title>
        <meta name=\"description\" content=\"{{ trans('meta-description') }}\"/>
        <meta name=\"viewport\" content=\"width=device-width, initial-scale=1.0\"/>
        <meta name=\"generator\" content=\"FacturaScripts\"/>
        <meta name=\"robots\" content=\"noindex\"/>
    {% endblock %}
    {% block icons %}
        <link rel=\"shortcut icon\" href=\"{{ asset('Dinamic/Assets/Images/favicon.ico') }}\"/>
        <link rel=\"apple-touch-icon\" sizes=\"180x180\"
              href=\"{{ asset('Dinamic/Assets/Images/apple-icon-180x180.png') }}\"/>
    {% endblock %}
    {% for includeView in getIncludeViews('MenuTemplate', 'CssBefore') %}
        {% include includeView['path'] %}
    {% endfor %}
    {% block css %}
<link href=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css\" rel=\"stylesheet\" integrity=\"sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC\" crossorigin=\"anonymous\">
        <link rel=\"stylesheet\" href=\"{{ asset('node_modules/@fortawesome/fontawesome-free/css/all.min.css') }}\"/>
        <link rel=\"stylesheet\" href=\"{{ asset('Dinamic/Assets/CSS/custom.css') }}?v=6\"/>

        <!-- Flexy Theme -->
        <link rel=\"stylesheet\" href=\"{{ asset('Plugins/MartosOS/Assets/CSS/styles.min.css') }}\"/>
        <link rel=\"stylesheet\" href=\"{{ asset('Plugins/MartosOS/Assets/CSS/flexy.min.css') }}\"/>
    {% endblock %}
    {# Adds custom CSS assets #}
    {% for css in assetManager.get('css') %}
        <link rel=\"stylesheet\" href=\"{{ css }}\"/>
    {% endfor %}
    {% for includeView in getIncludeViews('MenuTemplate', 'CssAfter') %}
        {% include includeView['path'] %}
    {% endfor %}
    {% for includeView in getIncludeViews('MenuTemplate', 'JsHeadBefore') %}
        {% include includeView['path'] %}
    {% endfor %}
    {% block javascripts %}
        <script src=\"{{ asset('node_modules/jquery/dist/jquery.min.js') }}\"></script>
<script src=\"https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js\" integrity=\"sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM\" crossorigin=\"anonymous\"></script>
        <script src=\"{{ asset('node_modules/bootbox/dist/bootbox.min.js') }}\"></script>
        <script src=\"{{ asset('node_modules/bootbox/dist/bootbox.locales.min.js') }}\"></script>
        <script src=\"{{ asset('node_modules/pace-js/pace.min.js') }}\"></script>
        {# <script src=\"{{ asset('node_modules/@fortawesome/fontawesome-free/js/all.min.js') }}\"></script> #}
        <script src=\"{{ asset('Dinamic/Assets/JS/Custom.js') }}?v=6\"></script>

        <!-- Flexy Theme -->
        <script src=\"{{ asset('Plugins/MartosOS/Assets/JS/sidebarmenu.js') }}\"></script>
        <script src=\"{{ asset('Plugins/MartosOS/Assets/JS/app.min.js') }}\"></script>
        <script src=\"{{ asset('Plugins/MartosOS/Assets/libs/simplebar/dist/simplebar.js') }}\"></script>
        <script src=\"{{ asset('Plugins/MartosOS/Assets/JS/FlexyTheme.js') }}\"></script>
    {% endblock %}
    {# Adds custom JS assets #}
    {% for js in assetManager.get('js') %}
        <script src=\"{{ js }}\"></script>
    {% endfor %}
    {% for includeView in getIncludeViews('MenuTemplate', 'JsHeadAfter') %}
        {% include includeView['path'] %}
    {% endfor %}
    {% if debugBarRender %}
        {{ debugBarRender.renderHead() | raw }}
    {% endif %}
    {% for includeView in getIncludeViews('MenuTemplate', 'HeadEnd') %}
        {% include includeView['path'] %}
    {% endfor %}
</head>
{% block fullBody %}
    <body>
    <!--  Body Wrapper -->
    <div class=\"page-wrapper\" id=\"main-wrapper\" data-layout=\"vertical\" data-sidebartype=\"full\">
        {{ GoogleTagManager.body() }}
        {% for includeView in getIncludeViews('MenuTemplate', 'BodyFirst') %}
            {% include includeView['path'] %}
        {% endfor %}
        {% block navbar %}
            <!-- Sidebar Start -->
            <aside class=\"left-sidebar with-vertical bg-dark text-white\">
                <!-- Sidebar scroll-->
                <div>
                    <div class=\"brand-logo d-flex justify-content-between align-items-center p-3\">
                        <div class=\"d-xl-none d-block\">
                            <!-- Puedes poner algo aquí si quieres que haya algo a la izquierda en móvil -->
                        </div>

                        <a class=\"d-flex align-items-center mx-auto\" href=\"{{ asset(fsc.user.homepage) }}\"
                           title=\"{{ trans('homepage') }}\">
                            <img src=\"{{ asset('Dinamic/Assets/Images/logo-white.png') }}\" width=\"64\" height=\"64\"
                                 class=\"d-inline-block align-top\" alt=\"FacturaScripts\">
                        </a>

                        <div class=\"text-white close-btn d-xl-none d-block sidebartoggler cursor-pointer\"
                             id=\"sidebarCollapse\">
                            <i class=\"fa-solid fa-xmark\"></i>
                        </div>
                    </div>
                    <!-- Sidebar navigation-->
                    <nav class=\"sidebar-nav scroll-sidebar\" style=\"height: calc(100vh - 120px);\"
                         data-simplebar=\"\">
                        <ul id=\"sidebarnav\">
                            {% import 'Macro/Menu.html.twig' as macros %}
                            {% for menuItem in menuManager.getMenu() %}
                                {{ macros.showMenu(menuItem) }}
                            {% endfor %}
                            {% block navbarMenuIcon %}
                            {% endblock %}
                        </ul>
                    </nav>
                    <!-- End Sidebar navigation -->
                </div>
                <!-- End Sidebar scroll-->
            </aside>
            <!-- Sidebar End -->
        {% endblock %}
        <div class=\"body-wrapper\">
            <!--  Header Start -->
            
            <!--  Header End -->
            <div class=\"pt-4\" style=\"padding-top:0px !important;\">
            {% include 'Master/AppHeader.html.twig' %}
                {% block messages %}
                    {% include 'Macro/Toasts.html.twig' %}
                    {% from 'Macro/Utils.html.twig' import message as showMessage %}

                    {{ showMessage(log, ['error', 'critical'], 'danger') }}
                    {{ showMessage(log, ['warning'], 'warning') }}
                    {{ showMessage(log, ['notice'], 'success') }}
                    {{ showMessage(log, ['info'], 'info') }}

                {% endblock %}
                {% block bodyHeaderOptions %}
                {% endblock %}
            </div>
            {% block body %}
            {% endblock %}
        </div>
        {% for includeView in getIncludeViews('MenuTemplate', 'JsFooter') %}
            {% include includeView['path'] %}
        {% endfor %}
        {% for includeView in getIncludeViews('MenuTemplate', 'BodyEnd') %}
            {% include includeView['path'] %}
        {% endfor %}
        {% if debugBarRender %}
            {{ debugBarRender.render() | raw }}
        {% endif %}
        <br/>
        <br/>
        <!-- execution time: {{ executionTime() }} s -->
    </div>
    <script>
        let vh = window.innerHeight * 0.01;
        document.documentElement.style.setProperty('--vh', `\${vh}px`);
    </script>
    </body>
{% endblock %}
</html>
", "Master/MenuTemplate.html.twig", "D:\\xampp\\htdocs\\Facturascripts\\Plugins\\MartosOS\\View\\Master\\MenuTemplate.html.twig");
    }
}
