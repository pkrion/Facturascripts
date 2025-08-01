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

/* AdminPlugins.html.twig */
class __TwigTemplate_797070bfdb94c662526a734ffc6eb732 extends Template
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
        // line 21
        $macros["Utils"] = $this->macros["Utils"] = $this->loadTemplate("Macro/Utils.html.twig", "AdminPlugins.html.twig", 21)->unwrap();
        // line 20
        $this->parent = $this->loadTemplate("Master/MenuBghTemplate.html.twig", "AdminPlugins.html.twig", 20);
        yield from $this->parent->unwrap()->yield($context, array_merge($this->blocks, $blocks));
    }

    // line 23
    public function block_bodyHeaderOptions($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 24
        yield "    ";
        yield from $this->yieldParentBlock("bodyHeaderOptions", $context, $blocks);
        yield "
    <div class=\"container-fluid d-print-none mb-2\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"btn-group\">
                    <a class=\"btn btn-sm btn-secondary\" href=\"";
        // line 29
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 29), "html", null, true);
        yield "\" title=\"";
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("refresh"), "html", null, true);
        yield "\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                    ";
        // line 32
        if (((($__internal_compile_0 = CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 32)) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["name"] ?? null) : null) == CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "user", [], "any", false, false, false, 32), "homepage", [], "any", false, false, false, 32))) {
            // line 33
            yield "                        <a class=\"btn btn-sm btn-secondary active\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 33), "html", null, true);
            yield "?defaultPage=FALSE\"
                           title=\"";
            // line 34
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("marked-as-homepage"), "html", null, true);
            yield "\">
                            <i class=\"fas fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        } else {
            // line 38
            yield "                        <a class=\"btn btn-sm btn-secondary\" href=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 38), "html", null, true);
            yield "?defaultPage=TRUE\"
                           title=\"";
            // line 39
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("mark-as-homepage"), "html", null, true);
            yield "\">
                            <i class=\"far fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    ";
        }
        // line 43
        yield "                </div>
                ";
        // line 44
        if (($this->env->getFunction('config')->getCallable()("disable_add_plugins", false) == false)) {
            // line 45
            yield "                    <button class=\"btn btn-spin-action btn-sm btn-success\" type=\"button\" data-toggle=\"modal\"
                            data-target=\"#modalAddPlugin\">
                        <i class=\"fas fa-plus fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-sm-inline-block\">";
            // line 48
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("add"), "html", null, true);
            yield "</span>
                    </button>
                ";
        }
        // line 51
        yield "                <div class=\"btn-group\">
                    <a href=\"";
        // line 52
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 52), "html", null, true);
        yield "?action=rebuild&multireqtoken=";
        yield $this->env->getFunction('formToken')->getCallable()(false);
        yield "\"
                       onclick=\"animateSpinner('add')\" class=\"btn btn-spin-action btn-sm btn-warning\">
                        <i class=\"fas fa-hammer fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-sm-inline-block\">";
        // line 55
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("rebuild"), "html", null, true);
        yield "</span>
                    </a>
                </div>
            </div>
            <div class=\"col-sm text-right\">
                <h1 class=\"h3\">
                    ";
        // line 61
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::capitalize($this->env->getCharset(), $this->env->getFunction('trans')->getCallable()((($__internal_compile_1 = CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 61)) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["title"] ?? null) : null))), "html", null, true);
        yield "
                    <i class=\"";
        // line 62
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape((($__internal_compile_2 = CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getPageData", [], "method", false, false, false, 62)) && is_array($__internal_compile_2) || $__internal_compile_2 instanceof ArrayAccess ? ($__internal_compile_2["icon"] ?? null) : null), "html", null, true);
        yield "\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
    </div>
    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" id=\"installedPluginsTab\" data-toggle=\"tab\" href=\"#installed\" role=\"tab\">
                <i class=\"fas fa-box-open fa-fw\" aria-hidden=\"true\"></i> ";
        // line 70
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("installed-plugins"), "html", null, true);
        yield "
                ";
        // line 71
        if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "pluginList", [], "any", false, false, false, 71)) > 0)) {
            // line 72
            yield "                    <span class=\"badge badge-secondary\">";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "pluginList", [], "any", false, false, false, 72)), "html", null, true);
            yield "</span>
                ";
        }
        // line 74
        yield "            </a>
        </li>
        ";
        // line 76
        if (($this->env->getFunction('config')->getCallable()("disable_add_plugins", false) == false)) {
            // line 77
            yield "            <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"allPluginsTab\" data-toggle=\"tab\" href=\"#all\" role=\"tab\">
                    <i class=\"fas fa-boxes fa-fw\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-sm-inline-block\">";
            // line 80
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("more-plugins"), "html", null, true);
            yield "</span>
                    ";
            // line 81
            if ((Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "remotePluginList", [], "any", false, false, false, 81)) > 0)) {
                // line 82
                yield "                        <span class=\"badge badge-secondary\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::length($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "remotePluginList", [], "any", false, false, false, 82)), "html", null, true);
                yield "</span>
                    ";
            }
            // line 84
            yield "                </a>
            </li>
        ";
        }
        // line 87
        yield "    </ul>
";
        return; yield '';
    }

    // line 90
    public function block_body($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 91
        yield "    ";
        yield from $this->yieldParentBlock("body", $context, $blocks);
        yield "
    <div class=\"tab-content p-3 bg-white\">
        <div class=\"tab-pane fade show active\" id=\"installed\" role=\"tabpanel\">
            ";
        // line 94
        yield CoreExtension::callMacro($macros["_self"], "macro_showInstalledPlugins", [($context["fsc"] ?? null)], 94, $context, $this->getSourceContext());
        yield "
            ";
        // line 95
        if ((CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "updated", [], "any", false, false, false, 95) == false)) {
            // line 96
            yield "                <div class=\"ml-2 mt-3 mr-2 mb-3\">
                    ";
            // line 97
            yield CoreExtension::callMacro($macros["Utils"], "macro_updateInstall", [], 97, $context, $this->getSourceContext());
            yield "
                </div>
            ";
        } elseif ((CoreExtension::getAttribute($this->env, $this->source,         // line 99
($context["fsc"] ?? null), "registered", [], "any", false, false, false, 99) == false)) {
            // line 100
            yield "                <div class=\"ml-2 mt-3 mr-2 mb-3\">
                    ";
            // line 101
            yield CoreExtension::callMacro($macros["Utils"], "macro_registerInstall", [], 101, $context, $this->getSourceContext());
            yield "
                </div>
            ";
        }
        // line 104
        yield "        </div>
        ";
        // line 105
        if (($this->env->getFunction('config')->getCallable()("disable_add_plugins", false) == false)) {
            // line 106
            yield "            <div class=\"tab-pane fade\" id=\"all\" role=\"tabpanel\">
                ";
            // line 107
            yield CoreExtension::callMacro($macros["_self"], "macro_showAllPlugins", [($context["fsc"] ?? null)], 107, $context, $this->getSourceContext());
            yield "
            </div>
        ";
        }
        // line 110
        yield "    </div>

    ";
        // line 113
        yield "    ";
        if (($this->env->getFunction('config')->getCallable()("disable_add_plugins", false) == false)) {
            // line 114
            yield "        <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 114), "html", null, true);
            yield "\" class=\"form\" enctype=\"multipart/form-data\" id=\"f_add_plugins\" method=\"post\"
              name=\"upload-plugins\" onsubmit=\"animateSpinner('add')\">
            ";
            // line 116
            yield $this->env->getFunction('formToken')->getCallable()();
            yield "
            <input type=\"hidden\" name=\"action\" value=\"upload\"/>
            <div class=\"modal fade\" id=\"modalAddPlugin\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">
                                <i class=\"fa-solid fa-file-zipper mr-2\"></i> ";
            // line 123
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("add-new-plugin"), "html", null, true);
            yield "
                            </h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"";
            // line 125
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("close"), "html", null, true);
            yield "\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        ";
            // line 129
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 129) < 99)) {
                // line 130
                yield "                            <div class=\"alert alert-warning mb-0\">
                                ";
                // line 131
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("help-server-accepts-filesize", ["%size%" => CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 131)]), "html", null, true);
                yield "
                            </div>
                        ";
            }
            // line 134
            yield "                        <div class=\"modal-body\">
                            <div class=\"form-group\">
                                ";
            // line 136
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("select-plugin-zip-file"), "html", null, true);
            yield "<br/>
                                <input type=\"file\" name=\"plugin[]\" accept=\"application/zip\" multiple required/>
                                ";
            // line 138
            if ((CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 138) >= 99)) {
                // line 139
                yield "                                    <small class=\"form-text text-muted\">
                                        ";
                // line 140
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("help-server-accepts-filesize", ["%size%" => CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 140)]), "html", null, true);
                yield "
                                    </small>
                                ";
            }
            // line 143
            yield "                            </div>
                            <div class=\"text-right mt-5\">
                                <button type=\"button\" class=\"btn btn-spin-action btn-secondary\" data-dismiss=\"modal\">
                                    ";
            // line 146
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("cancel"), "html", null, true);
            yield "
                                </button>
                                <button type=\"submit\" class=\"btn btn-spin-action btn-success\">
                                    ";
            // line 149
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("continue"), "html", null, true);
            yield "
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    ";
        }
        return; yield '';
    }

    // line 160
    public function block_javascripts($context, array $blocks = [])
    {
        $macros = $this->macros;
        // line 161
        yield "    ";
        yield from $this->yieldParentBlock("javascripts", $context, $blocks);
        yield "
    ";
        // line 162
        if (($this->env->getFunction('config')->getCallable()("disable_rm_plugins", false) == false)) {
            // line 163
            yield "        <script>
            function deletePlugin(pluginName) {
                bootbox.confirm({
                    title: \"";
            // line 166
            yield $this->env->getFunction('trans')->getCallable()("confirm-delete");
            yield "\",
                    message: \"";
            // line 167
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("are-you-sure"), "html", null, true);
            yield "\",
                    closeButton: false,
                    buttons: {
                        cancel: {
                            label: \"<i class='fas fa-times'></i> ";
            // line 171
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("cancel"), "html", null, true);
            yield "\"
                        },
                        confirm: {
                            label: \"<i class='fas fa-check'></i> ";
            // line 174
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("delete"), "html", null, true);
            yield "\",
                            className: 'btn-danger'
                        }
                    },
                    callback: function (result) {
                        if (result) {
                            animateSpinner('add');
                            window.location = \"";
            // line 181
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 181), "html", null, true);
            yield "?action=remove\" + \"\\u0026\" + \"plugin=\" + pluginName
                                + \"\\u0026\" + \"multireqtoken=";
            // line 182
            yield $this->env->getFunction('formToken')->getCallable()(false);
            yield "\";
                        }
                    }
                });
            }

            \$(document).ready(function () {
                searchList('#querySearchPlugin', '#all-plugins .card', '.card-title');
                searchList('#querySearchInstalledPlugins', '#installed-plugins .item-plugin', '.plugin-name');

                // si los archivos son demasiado grandes, no se pueden subir
                \$(\"#f_add_plugins\").submit(function (e) {
                    let size = 0;
                    let files = document.querySelector('input[type=file]').files;
                    for (let i = 0; i < files.length; i++) {
                        size += files[i].size;
                    }

                    if (size > ";
            // line 200
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 200), "html", null, true);
            yield " * 1024 * 1024) { // MB
                        e.preventDefault();
                        alert('";
            // line 202
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("plugin-file-too-big", ["%size%" => CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getMaxFileUpload", [], "method", false, false, false, 202)]), "html", null, true);
            yield "');
                        animateSpinner('remove');
                    }
                });
            });

            function searchList(querySelectorInput, querySelectorItem, querySelectorPluginName) {
                \$(querySelectorInput).on('keyup', function (e) {
                    const query = this.value.toLowerCase().trim();
                    \$(querySelectorItem).each(function (index, value) {
                        \$(value).toggle(\$(querySelectorPluginName, value).text().toLowerCase().trim().includes(query));
                    });
                });
            }
        </script>
    ";
        }
        return; yield '';
    }

    // line 220
    public function macro_healthStatus($__value__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "value" => $__value__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 221
            yield "    ";
            if ((($context["value"] ?? null) < 1)) {
                // line 222
                yield "        <i class=\"fas fa-heart-broken\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } elseif ((            // line 227
($context["value"] ?? null) < 2)) {
                // line 228
                yield "        <i class=\"fas fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } elseif ((            // line 233
($context["value"] ?? null) < 3)) {
                // line 234
                yield "        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } elseif ((            // line 239
($context["value"] ?? null) < 4)) {
                // line 240
                yield "        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } elseif ((            // line 245
($context["value"] ?? null) < 5)) {
                // line 246
                yield "        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    ";
            } else {
                // line 252
                yield "        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
    ";
            }
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 260
    public function macro_showAllPlugins($__fsc__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 261
            yield "    <div class=\"p-2\">
        <input type=\"text\" class=\"form-control shadow-sm\" id=\"querySearchPlugin\" placeholder=\"";
            // line 262
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("search"), "html", null, true);
            yield "\"/>
    </div>
    <div class=\"card-columns pl-2 pr-2\" id=\"all-plugins\">
        ";
            // line 265
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "remotePluginList", [], "any", false, false, false, 265));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 266
                yield "            ";
                $context["extraClass"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "health", [], "any", false, false, false, 266) > 2)) ? ("border-success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "health", [], "any", false, false, false, 266) == 0)) ? ("border-danger") : ("border-warning"))));
                // line 267
                yield "            <div class=\"card ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["extraClass"] ?? null), "html", null, true);
                yield " shadow-sm\" id=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "idplugin", [], "any", false, false, false, 267), "html", null, true);
                yield "\">
                <div class=\"card-body p-2\">
                    <h5 class=\"card-title\">";
                // line 269
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 269), "html", null, true);
                yield " v";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 269), "html", null, true);
                yield "</h5>
                    <p class=\"card-text\">";
                // line 270
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(Twig\Extension\CoreExtension::slice($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "description", [], "any", false, false, false, 270), 0, 300), "html", null, true));
                yield "</p>
                </div>
                <div class=\"card-footer p-2\">
                    ";
                // line 273
                $context["extraBtnClass"] = (((CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "health", [], "any", false, false, false, 273) > 2)) ? ("btn-outline-success") : ((((CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "health", [], "any", false, false, false, 273) == 0)) ? ("btn-outline-danger") : ("btn-outline-warning"))));
                // line 274
                yield "                    <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "url", [], "any", false, false, false, 274), "html", null, true);
                yield "\" class=\"btn ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["extraBtnClass"] ?? null), "html", null, true);
                yield "\" target=\"_blank\">";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("add"), "html", null, true);
                yield "</a>
                    <span class=\"ml-2 text-danger\" title=\"";
                // line 275
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("health"), "html", null, true);
                yield "\">
                        ";
                // line 276
                yield CoreExtension::callMacro($macros["_self"], "macro_healthStatus", [CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "health", [], "any", false, false, false, 276)], 276, $context, $this->getSourceContext());
                yield "
                    </span>
                </div>
            </div>
        ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 281
                yield "            <div class=\"text-center bg-warning rounded\">
                <h2>";
                // line 282
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("no-data"), "html", null, true);
                yield "</h2>
            </div>
        ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 285
            yield "    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 288
    public function macro_showInstalledPlugins($__fsc__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "fsc" => $__fsc__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 289
            yield "    <div class=\"m-2 mb-3\">
        <input type=\"text\" class=\"form-control border-dark\" id=\"querySearchInstalledPlugins\"
               placeholder=\"";
            // line 291
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("search"), "html", null, true);
            yield "\"/>
    </div>

    <div class=\"card border-success m-2 mb-3\">
        <div class=\"card-header border-success\">";
            // line 295
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("enabled-plugins"), "html", null, true);
            yield "</div>
        ";
            // line 296
            yield CoreExtension::callMacro($macros["_self"], "macro_tablePlugins", [Twig\Extension\CoreExtension::sort($this->env, Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "pluginList", [], "any", false, false, false, 296), function ($__plugin__) use ($context, $macros) { $context["plugin"] = $__plugin__; return CoreExtension::getAttribute($this->env, $this->source, ($context["plugin"] ?? null), "enabled", [], "any", false, false, false, 296); }), function ($__a__, $__b__) use ($context, $macros) { $context["a"] = $__a__; $context["b"] = $__b__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["a"] ?? null), "order", [], "any", false, false, false, 296) <=> CoreExtension::getAttribute($this->env, $this->source, ($context["b"] ?? null), "order", [], "any", false, false, false, 296)); }), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 296)], 296, $context, $this->getSourceContext());
            yield "
    </div>

    <div class=\"card border-dark m-2\">
        <div class=\"card-header border-dark\">";
            // line 300
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("disabled-plugins"), "html", null, true);
            yield "</div>
        ";
            // line 301
            yield CoreExtension::callMacro($macros["_self"], "macro_tablePlugins", [Twig\Extension\CoreExtension::filter($this->env, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "pluginList", [], "any", false, false, false, 301), function ($__plugin__) use ($context, $macros) { $context["plugin"] = $__plugin__; return (CoreExtension::getAttribute($this->env, $this->source, ($context["plugin"] ?? null), "enabled", [], "any", false, false, false, 301) == false); }), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 301)], 301, $context, $this->getSourceContext());
            yield "
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    // line 305
    public function macro_tablePlugins($__pluginList__ = null, $__url__ = null, ...$__varargs__)
    {
        $macros = $this->macros;
        $context = $this->env->mergeGlobals([
            "pluginList" => $__pluginList__,
            "url" => $__url__,
            "varargs" => $__varargs__,
        ]);

        $blocks = [];

        return ('' === $tmp = \Twig\Extension\CoreExtension::captureOutput((function () use (&$context, $macros, $blocks) {
            // line 306
            yield "    <div class=\"table-responsive\" id=\"installed-plugins\">
        <table class=\"table table-striped table-hover mb-0\">
            <thead>
            <tr>
                <th>";
            // line 310
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("name"), "html", null, true);
            yield "</th>
                <th class=\"text-right\">";
            // line 311
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("version"), "html", null, true);
            yield "</th>
                <th>";
            // line 312
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("description"), "html", null, true);
            yield "</th>
                <th class=\"text-right pr-3\">";
            // line 313
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("actions"), "html", null, true);
            yield "</th>
            </tr>
            </thead>
            <tbody>
            ";
            // line 317
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable(($context["pluginList"] ?? null));
            $context['_iterated'] = false;
            foreach ($context['_seq'] as $context["_key"] => $context["plugin"]) {
                // line 318
                yield "                ";
                $context["trClass"] = "table-danger";
                // line 319
                yield "                ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "enabled", [], "any", false, false, false, 319)) {
                    // line 320
                    yield "                    ";
                    $context["trClass"] = "table-success";
                    // line 321
                    yield "                ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "compatible", [], "any", false, false, false, 321)) {
                    // line 322
                    yield "                    ";
                    $context["trClass"] = "";
                    // line 323
                    yield "                ";
                }
                // line 324
                yield "                <tr class=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["trClass"] ?? null), "html", null, true);
                yield " item-plugin\">
                    <td class=\"plugin-name\">";
                // line 325
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 325), "html", null, true);
                yield "</td>
                    <td class=\"text-right\">
                        ";
                // line 327
                if ((CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 327) == 0)) {
                    // line 328
                    yield "                            <span class=\"text-danger\">v";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 328), "html", null, true);
                    yield "</span>
                        ";
                } elseif ((CoreExtension::getAttribute($this->env, $this->source,                 // line 329
$context["plugin"], "version", [], "any", false, false, false, 329) < 1)) {
                    // line 330
                    yield "                            <span class=\"text-warning\">v";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 330), "html", null, true);
                    yield "</span>
                        ";
                } else {
                    // line 332
                    yield "                            v";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "version", [], "any", false, false, false, 332), "html", null, true);
                    yield "
                        ";
                }
                // line 334
                yield "                    </td>
                    <td>
                        ";
                // line 336
                yield Twig\Extension\CoreExtension::nl2br($this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "description", [], "any", false, false, false, 336), "html", null, true));
                yield "
                        ";
                // line 337
                if (CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "forja", ["url", ""], "method", false, false, false, 337)) {
                    // line 338
                    yield "                            <a href=\"";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "forja", ["url", ""], "method", false, false, false, 338), "html", null, true);
                    yield "\" target=\"_blank\" class=\"ml-2\">
                                ";
                    // line 339
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("more"), "html", null, true);
                    yield " <i class=\"fas fa-external-link-alt\"></i>
                            </a>
                        ";
                }
                // line 342
                yield "                        <br/>
                        ";
                // line 343
                $context['_parent'] = $context;
                $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "require", [], "any", false, false, false, 343));
                foreach ($context['_seq'] as $context["_key"] => $context["requiredPluginName"]) {
                    // line 344
                    yield "                            <div class=\"badge badge-secondary\">
                                ";
                    // line 345
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("plugin-needed", ["%pluginName%" => $context["requiredPluginName"]]), "html", null, true);
                    yield "
                            </div>
                        ";
                }
                $_parent = $context['_parent'];
                unset($context['_seq'], $context['_iterated'], $context['_key'], $context['requiredPluginName'], $context['_parent'], $context['loop']);
                $context = array_intersect_key($context, $_parent) + $_parent;
                // line 348
                yield "                    </td>
                    <td class=\"text-right text-nowrap\">
                        ";
                // line 350
                if (CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "hasUpdate", [], "method", false, false, false, 350)) {
                    // line 351
                    yield "                            <a href=\"Updater\" class=\"btn btn-spin-action btn-sm btn-info mr-1\"
                               title=\"";
                    // line 352
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("updater"), "html", null, true);
                    yield "\">
                                <i class=\"fas fa-cloud-download-alt\" aria-hidden=\"true\"></i>
                            </a>
                        ";
                }
                // line 356
                yield "                        ";
                if (CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "enabled", [], "any", false, false, false, 356)) {
                    // line 357
                    yield "                            <a class=\"btn btn-sm btn-secondary btn-spin-action\" onclick=\"animateSpinner('add');\"
                               href=\"";
                    // line 358
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["url"] ?? null), "html", null, true);
                    yield "?action=disable&amp;plugin=";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 358), "html", null, true);
                    yield "&amp;multireqtoken=";
                    yield $this->env->getFunction('formToken')->getCallable()(false);
                    yield "\">
                                <i class=\"fa-solid fa-toggle-off mr-1\" aria-hidden=\"true\"></i>
                                <span class=\"d-none d-sm-inline-block\">";
                    // line 360
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("disable"), "html", null, true);
                    yield "</span>
                            </a>
                            <br/>
                            <small>";
                    // line 363
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("plugin-order", ["%num%" => CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "order", [], "any", false, false, false, 363)]), "html", null, true);
                    yield "</small>
                        ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source,                 // line 364
$context["plugin"], "compatible", [], "any", false, false, false, 364)) {
                    // line 365
                    yield "                            ";
                    if (CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "hasUpdate", [], "method", false, false, false, 365)) {
                        // line 366
                        yield "                                <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-sm btn-warning dropdown-toggle\"
                                            data-toggle=\"dropdown\" aria-expanded=\"false\">
                                        ";
                        // line 369
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("enable"), "html", null, true);
                        yield "
                                    </button>
                                    <div class=\"dropdown-menu\">
                                        <a class=\"dropdown-item\" href=\"Updater\">
                                            <i class=\"fas fa-cloud-download-alt fa-fw mr-1\" aria-hidden=\"true\"></i>
                                            ";
                        // line 374
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("update"), "html", null, true);
                        yield "
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\"
                                           href=\"";
                        // line 378
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["url"] ?? null), "html", null, true);
                        yield "?action=enable&amp;plugin=";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 378), "html", null, true);
                        yield "&amp;multireqtoken=";
                        yield $this->env->getFunction('formToken')->getCallable()(false);
                        yield "\">
                                            <i class=\"fas fa-check fa-fw mr-1\" aria-hidden=\"true\"></i>
                                            ";
                        // line 380
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("enable"), "html", null, true);
                        yield "
                                        </a>
                                    </div>
                                </div>
                            ";
                    } else {
                        // line 385
                        yield "                                <a class=\"btn btn-sm btn-success btn-spin-action\" onclick=\"animateSpinner('add');\"
                                   href=\"";
                        // line 386
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(($context["url"] ?? null), "html", null, true);
                        yield "?action=enable&amp;plugin=";
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 386), "html", null, true);
                        yield "&amp;multireqtoken=";
                        yield $this->env->getFunction('formToken')->getCallable()(false);
                        yield "\">
                                    <i class=\"fa-solid fa-toggle-on mr-1\" aria-hidden=\"true\"></i>
                                    <span class=\"d-none d-sm-inline-block\">";
                        // line 388
                        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("enable"), "html", null, true);
                        yield "</span>
                                </a>
                            ";
                    }
                    // line 391
                    yield "                        ";
                } else {
                    // line 392
                    yield "                            ";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "compatibilityDescription", [], "method", false, false, false, 392), "html", null, true);
                    yield "
                        ";
                }
                // line 394
                yield "                        ";
                if (((CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "enabled", [], "any", false, false, false, 394) == false) && ($this->env->getFunction('config')->getCallable()("disable_rm_plugins", false) == false))) {
                    // line 395
                    yield "                            <a class=\"btn btn-sm btn-danger ml-2 btn-spin-action\" href=\"#\"
                               title=\"";
                    // line 396
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("delete"), "html", null, true);
                    yield "\" onclick=\"deletePlugin('";
                    yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["plugin"], "name", [], "any", false, false, false, 396), "html", null, true);
                    yield "');\">
                                <i class=\"fas fa-trash-alt\" aria-hidden=\"true\"></i>
                            </a>
                        ";
                }
                // line 400
                yield "                    </td>
                </tr>
            ";
                $context['_iterated'] = true;
            }
            if (!$context['_iterated']) {
                // line 403
                yield "                <tr class=\"table-warning\">
                    <td colspan=\"4\"><b>";
                // line 404
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("no-data"), "html", null, true);
                yield "</b></td>
                </tr>
            ";
            }
            $_parent = $context['_parent'];
            unset($context['_seq'], $context['_iterated'], $context['_key'], $context['plugin'], $context['_parent'], $context['loop']);
            $context = array_intersect_key($context, $_parent) + $_parent;
            // line 407
            yield "            </tbody>
        </table>
    </div>
";
            return; yield '';
        })())) ? '' : new Markup($tmp, $this->env->getCharset());
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "AdminPlugins.html.twig";
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
        return array (  921 => 407,  912 => 404,  909 => 403,  902 => 400,  893 => 396,  890 => 395,  887 => 394,  881 => 392,  878 => 391,  872 => 388,  863 => 386,  860 => 385,  852 => 380,  843 => 378,  836 => 374,  828 => 369,  823 => 366,  820 => 365,  818 => 364,  814 => 363,  808 => 360,  799 => 358,  796 => 357,  793 => 356,  786 => 352,  783 => 351,  781 => 350,  777 => 348,  768 => 345,  765 => 344,  761 => 343,  758 => 342,  752 => 339,  747 => 338,  745 => 337,  741 => 336,  737 => 334,  731 => 332,  725 => 330,  723 => 329,  718 => 328,  716 => 327,  711 => 325,  706 => 324,  703 => 323,  700 => 322,  697 => 321,  694 => 320,  691 => 319,  688 => 318,  683 => 317,  676 => 313,  672 => 312,  668 => 311,  664 => 310,  658 => 306,  645 => 305,  636 => 301,  632 => 300,  625 => 296,  621 => 295,  614 => 291,  610 => 289,  598 => 288,  591 => 285,  582 => 282,  579 => 281,  569 => 276,  565 => 275,  556 => 274,  554 => 273,  548 => 270,  542 => 269,  534 => 267,  531 => 266,  526 => 265,  520 => 262,  517 => 261,  505 => 260,  493 => 252,  485 => 246,  483 => 245,  476 => 240,  474 => 239,  467 => 234,  465 => 233,  458 => 228,  456 => 227,  449 => 222,  446 => 221,  434 => 220,  412 => 202,  407 => 200,  386 => 182,  382 => 181,  372 => 174,  366 => 171,  359 => 167,  355 => 166,  350 => 163,  348 => 162,  343 => 161,  339 => 160,  324 => 149,  318 => 146,  313 => 143,  307 => 140,  304 => 139,  302 => 138,  297 => 136,  293 => 134,  287 => 131,  284 => 130,  282 => 129,  275 => 125,  270 => 123,  260 => 116,  254 => 114,  251 => 113,  247 => 110,  241 => 107,  238 => 106,  236 => 105,  233 => 104,  227 => 101,  224 => 100,  222 => 99,  217 => 97,  214 => 96,  212 => 95,  208 => 94,  201 => 91,  197 => 90,  191 => 87,  186 => 84,  180 => 82,  178 => 81,  174 => 80,  169 => 77,  167 => 76,  163 => 74,  157 => 72,  155 => 71,  151 => 70,  140 => 62,  136 => 61,  127 => 55,  119 => 52,  116 => 51,  110 => 48,  105 => 45,  103 => 44,  100 => 43,  93 => 39,  88 => 38,  81 => 34,  76 => 33,  74 => 32,  66 => 29,  57 => 24,  53 => 23,  48 => 20,  46 => 21,  39 => 20,);
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
{% extends \"Master/MenuBghTemplate.html.twig\" %}
{% import 'Macro/Utils.html.twig' as Utils %}

{% block bodyHeaderOptions %}
    {{ parent() }}
    <div class=\"container-fluid d-print-none mb-2\">
        <div class=\"row\">
            <div class=\"col-sm-6\">
                <div class=\"btn-group\">
                    <a class=\"btn btn-sm btn-secondary\" href=\"{{ fsc.url() }}\" title=\"{{ trans('refresh') }}\">
                        <i class=\"fas fa-redo\" aria-hidden=\"true\"></i>
                    </a>
                    {% if fsc.getPageData()['name'] == fsc.user.homepage %}
                        <a class=\"btn btn-sm btn-secondary active\" href=\"{{ fsc.url() }}?defaultPage=FALSE\"
                           title=\"{{ trans('marked-as-homepage') }}\">
                            <i class=\"fas fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    {% else %}
                        <a class=\"btn btn-sm btn-secondary\" href=\"{{ fsc.url() }}?defaultPage=TRUE\"
                           title=\"{{ trans('mark-as-homepage') }}\">
                            <i class=\"far fa-bookmark\" aria-hidden=\"true\"></i>
                        </a>
                    {% endif %}
                </div>
                {% if config('disable_add_plugins', false) == false %}
                    <button class=\"btn btn-spin-action btn-sm btn-success\" type=\"button\" data-toggle=\"modal\"
                            data-target=\"#modalAddPlugin\">
                        <i class=\"fas fa-plus fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-sm-inline-block\">{{ trans('add') }}</span>
                    </button>
                {% endif %}
                <div class=\"btn-group\">
                    <a href=\"{{ fsc.url() }}?action=rebuild&multireqtoken={{ formToken(false) }}\"
                       onclick=\"animateSpinner('add')\" class=\"btn btn-spin-action btn-sm btn-warning\">
                        <i class=\"fas fa-hammer fa-fw\" aria-hidden=\"true\"></i>
                        <span class=\"d-none d-sm-inline-block\">{{ trans('rebuild') }}</span>
                    </a>
                </div>
            </div>
            <div class=\"col-sm text-right\">
                <h1 class=\"h3\">
                    {{ trans(fsc.getPageData()['title']) | capitalize }}
                    <i class=\"{{ fsc.getPageData()['icon'] }}\" aria-hidden=\"true\"></i>
                </h1>
            </div>
        </div>
    </div>
    <ul class=\"nav nav-tabs\" role=\"tablist\">
        <li class=\"nav-item\">
            <a class=\"nav-link active\" id=\"installedPluginsTab\" data-toggle=\"tab\" href=\"#installed\" role=\"tab\">
                <i class=\"fas fa-box-open fa-fw\" aria-hidden=\"true\"></i> {{ trans('installed-plugins') }}
                {% if fsc.pluginList | length > 0 %}
                    <span class=\"badge badge-secondary\">{{ fsc.pluginList | length }}</span>
                {% endif %}
            </a>
        </li>
        {% if config('disable_add_plugins', false) == false %}
            <li class=\"nav-item\">
                <a class=\"nav-link\" id=\"allPluginsTab\" data-toggle=\"tab\" href=\"#all\" role=\"tab\">
                    <i class=\"fas fa-boxes fa-fw\" aria-hidden=\"true\"></i>
                    <span class=\"d-none d-sm-inline-block\">{{ trans('more-plugins') }}</span>
                    {% if fsc.remotePluginList | length > 0 %}
                        <span class=\"badge badge-secondary\">{{ fsc.remotePluginList | length }}</span>
                    {% endif %}
                </a>
            </li>
        {% endif %}
    </ul>
{% endblock %}

{% block body %}
    {{ parent() }}
    <div class=\"tab-content p-3 bg-white\">
        <div class=\"tab-pane fade show active\" id=\"installed\" role=\"tabpanel\">
            {{ _self.showInstalledPlugins(fsc) }}
            {% if fsc.updated == false %}
                <div class=\"ml-2 mt-3 mr-2 mb-3\">
                    {{ Utils.updateInstall() }}
                </div>
            {% elseif fsc.registered == false %}
                <div class=\"ml-2 mt-3 mr-2 mb-3\">
                    {{ Utils.registerInstall() }}
                </div>
            {% endif %}
        </div>
        {% if config('disable_add_plugins', false) == false %}
            <div class=\"tab-pane fade\" id=\"all\" role=\"tabpanel\">
                {{ _self.showAllPlugins(fsc) }}
            </div>
        {% endif %}
    </div>

    {# Modal for add new plugins #}
    {% if config('disable_add_plugins', false) == false %}
        <form action=\"{{ fsc.url() }}\" class=\"form\" enctype=\"multipart/form-data\" id=\"f_add_plugins\" method=\"post\"
              name=\"upload-plugins\" onsubmit=\"animateSpinner('add')\">
            {{ formToken() }}
            <input type=\"hidden\" name=\"action\" value=\"upload\"/>
            <div class=\"modal fade\" id=\"modalAddPlugin\" tabindex=\"-1\" role=\"dialog\" aria-hidden=\"true\">
                <div class=\"modal-dialog\" role=\"document\">
                    <div class=\"modal-content\">
                        <div class=\"modal-header\">
                            <h5 class=\"modal-title\">
                                <i class=\"fa-solid fa-file-zipper mr-2\"></i> {{ trans('add-new-plugin') }}
                            </h5>
                            <button type=\"button\" class=\"close\" data-dismiss=\"modal\" aria-label=\"{{ trans('close') }}\">
                                <span aria-hidden=\"true\">&times;</span>
                            </button>
                        </div>
                        {% if fsc.getMaxFileUpload() < 99 %}
                            <div class=\"alert alert-warning mb-0\">
                                {{ trans('help-server-accepts-filesize', {'%size%': fsc.getMaxFileUpload()}) }}
                            </div>
                        {% endif %}
                        <div class=\"modal-body\">
                            <div class=\"form-group\">
                                {{ trans('select-plugin-zip-file') }}<br/>
                                <input type=\"file\" name=\"plugin[]\" accept=\"application/zip\" multiple required/>
                                {% if fsc.getMaxFileUpload() >= 99 %}
                                    <small class=\"form-text text-muted\">
                                        {{ trans('help-server-accepts-filesize', {'%size%': fsc.getMaxFileUpload()}) }}
                                    </small>
                                {% endif %}
                            </div>
                            <div class=\"text-right mt-5\">
                                <button type=\"button\" class=\"btn btn-spin-action btn-secondary\" data-dismiss=\"modal\">
                                    {{ trans('cancel') }}
                                </button>
                                <button type=\"submit\" class=\"btn btn-spin-action btn-success\">
                                    {{ trans('continue') }}
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    {% endif %}
{% endblock %}

{% block javascripts %}
    {{ parent() }}
    {% if config('disable_rm_plugins', false) == false %}
        <script>
            function deletePlugin(pluginName) {
                bootbox.confirm({
                    title: \"{{ trans('confirm-delete')|raw }}\",
                    message: \"{{ trans('are-you-sure') }}\",
                    closeButton: false,
                    buttons: {
                        cancel: {
                            label: \"<i class='fas fa-times'></i> {{ trans('cancel') }}\"
                        },
                        confirm: {
                            label: \"<i class='fas fa-check'></i> {{ trans('delete') }}\",
                            className: 'btn-danger'
                        }
                    },
                    callback: function (result) {
                        if (result) {
                            animateSpinner('add');
                            window.location = \"{{ fsc.url() }}?action=remove\" + \"\\u0026\" + \"plugin=\" + pluginName
                                + \"\\u0026\" + \"multireqtoken={{ formToken(false) }}\";
                        }
                    }
                });
            }

            \$(document).ready(function () {
                searchList('#querySearchPlugin', '#all-plugins .card', '.card-title');
                searchList('#querySearchInstalledPlugins', '#installed-plugins .item-plugin', '.plugin-name');

                // si los archivos son demasiado grandes, no se pueden subir
                \$(\"#f_add_plugins\").submit(function (e) {
                    let size = 0;
                    let files = document.querySelector('input[type=file]').files;
                    for (let i = 0; i < files.length; i++) {
                        size += files[i].size;
                    }

                    if (size > {{ fsc.getMaxFileUpload() }} * 1024 * 1024) { // MB
                        e.preventDefault();
                        alert('{{ trans('plugin-file-too-big', {'%size%': fsc.getMaxFileUpload()}) }}');
                        animateSpinner('remove');
                    }
                });
            });

            function searchList(querySelectorInput, querySelectorItem, querySelectorPluginName) {
                \$(querySelectorInput).on('keyup', function (e) {
                    const query = this.value.toLowerCase().trim();
                    \$(querySelectorItem).each(function (index, value) {
                        \$(value).toggle(\$(querySelectorPluginName, value).text().toLowerCase().trim().includes(query));
                    });
                });
            }
        </script>
    {% endif %}
{% endblock %}

{% macro healthStatus(value) %}
    {% if value < 1 %}
        <i class=\"fas fa-heart-broken\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    {% elseif value < 2 %}
        <i class=\"fas fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    {% elseif value < 3 %}
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    {% elseif value < 4 %}
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    {% elseif value < 5 %}
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"far fa-heart\"></i>
    {% else %}
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
        <i class=\"fas fa-heart\"></i>
    {% endif %}
{% endmacro %}

{% macro showAllPlugins(fsc) %}
    <div class=\"p-2\">
        <input type=\"text\" class=\"form-control shadow-sm\" id=\"querySearchPlugin\" placeholder=\"{{ trans('search') }}\"/>
    </div>
    <div class=\"card-columns pl-2 pr-2\" id=\"all-plugins\">
        {% for plugin in fsc.remotePluginList %}
            {% set extraClass = plugin.health > 2 ? 'border-success' : plugin.health == 0 ? 'border-danger' : 'border-warning' %}
            <div class=\"card {{ extraClass }} shadow-sm\" id=\"{{ plugin.idplugin }}\">
                <div class=\"card-body p-2\">
                    <h5 class=\"card-title\">{{ plugin.name }} v{{ plugin.version }}</h5>
                    <p class=\"card-text\">{{ plugin.description | slice(0, 300) | nl2br }}</p>
                </div>
                <div class=\"card-footer p-2\">
                    {% set extraBtnClass = plugin.health > 2 ? 'btn-outline-success' : plugin.health == 0 ? 'btn-outline-danger' : 'btn-outline-warning' %}
                    <a href=\"{{ plugin.url }}\" class=\"btn {{ extraBtnClass }}\" target=\"_blank\">{{ trans('add') }}</a>
                    <span class=\"ml-2 text-danger\" title=\"{{ trans('health') }}\">
                        {{ _self.healthStatus(plugin.health) }}
                    </span>
                </div>
            </div>
        {% else %}
            <div class=\"text-center bg-warning rounded\">
                <h2>{{ trans('no-data') }}</h2>
            </div>
        {% endfor %}
    </div>
{% endmacro %}

{% macro showInstalledPlugins(fsc) %}
    <div class=\"m-2 mb-3\">
        <input type=\"text\" class=\"form-control border-dark\" id=\"querySearchInstalledPlugins\"
               placeholder=\"{{ trans('search') }}\"/>
    </div>

    <div class=\"card border-success m-2 mb-3\">
        <div class=\"card-header border-success\">{{ trans('enabled-plugins') }}</div>
        {{ _self.tablePlugins(fsc.pluginList | filter(plugin => plugin.enabled)|sort((a, b) => a.order <=> b.order), fsc.url()) }}
    </div>

    <div class=\"card border-dark m-2\">
        <div class=\"card-header border-dark\">{{ trans('disabled-plugins') }}</div>
        {{ _self.tablePlugins(fsc.pluginList | filter(plugin => plugin.enabled == false), fsc.url()) }}
    </div>
{% endmacro %}

{% macro tablePlugins(pluginList, url) %}
    <div class=\"table-responsive\" id=\"installed-plugins\">
        <table class=\"table table-striped table-hover mb-0\">
            <thead>
            <tr>
                <th>{{ trans('name') }}</th>
                <th class=\"text-right\">{{ trans('version') }}</th>
                <th>{{ trans('description') }}</th>
                <th class=\"text-right pr-3\">{{ trans('actions') }}</th>
            </tr>
            </thead>
            <tbody>
            {% for plugin in pluginList %}
                {% set trClass = 'table-danger' %}
                {% if plugin.enabled %}
                    {% set trClass = 'table-success' %}
                {% elseif plugin.compatible %}
                    {% set trClass = '' %}
                {% endif %}
                <tr class=\"{{ trClass }} item-plugin\">
                    <td class=\"plugin-name\">{{ plugin.name }}</td>
                    <td class=\"text-right\">
                        {% if plugin.version == 0 %}
                            <span class=\"text-danger\">v{{ plugin.version }}</span>
                        {% elseif plugin.version < 1 %}
                            <span class=\"text-warning\">v{{ plugin.version }}</span>
                        {% else %}
                            v{{ plugin.version }}
                        {% endif %}
                    </td>
                    <td>
                        {{ plugin.description | nl2br }}
                        {% if plugin.forja('url', '') %}
                            <a href=\"{{ plugin.forja('url', '') }}\" target=\"_blank\" class=\"ml-2\">
                                {{ trans('more') }} <i class=\"fas fa-external-link-alt\"></i>
                            </a>
                        {% endif %}
                        <br/>
                        {% for requiredPluginName in plugin.require %}
                            <div class=\"badge badge-secondary\">
                                {{ trans('plugin-needed', {'%pluginName%': requiredPluginName}) }}
                            </div>
                        {% endfor %}
                    </td>
                    <td class=\"text-right text-nowrap\">
                        {% if plugin.hasUpdate() %}
                            <a href=\"Updater\" class=\"btn btn-spin-action btn-sm btn-info mr-1\"
                               title=\"{{ trans('updater') }}\">
                                <i class=\"fas fa-cloud-download-alt\" aria-hidden=\"true\"></i>
                            </a>
                        {% endif %}
                        {% if plugin.enabled %}
                            <a class=\"btn btn-sm btn-secondary btn-spin-action\" onclick=\"animateSpinner('add');\"
                               href=\"{{ url }}?action=disable&amp;plugin={{ plugin.name }}&amp;multireqtoken={{ formToken(false) }}\">
                                <i class=\"fa-solid fa-toggle-off mr-1\" aria-hidden=\"true\"></i>
                                <span class=\"d-none d-sm-inline-block\">{{ trans('disable') }}</span>
                            </a>
                            <br/>
                            <small>{{ trans('plugin-order', {'%num%': plugin.order}) }}</small>
                        {% elseif plugin.compatible %}
                            {% if plugin.hasUpdate() %}
                                <div class=\"btn-group\">
                                    <button type=\"button\" class=\"btn btn-sm btn-warning dropdown-toggle\"
                                            data-toggle=\"dropdown\" aria-expanded=\"false\">
                                        {{ trans('enable') }}
                                    </button>
                                    <div class=\"dropdown-menu\">
                                        <a class=\"dropdown-item\" href=\"Updater\">
                                            <i class=\"fas fa-cloud-download-alt fa-fw mr-1\" aria-hidden=\"true\"></i>
                                            {{ trans('update') }}
                                        </a>
                                        <div class=\"dropdown-divider\"></div>
                                        <a class=\"dropdown-item\"
                                           href=\"{{ url }}?action=enable&amp;plugin={{ plugin.name }}&amp;multireqtoken={{ formToken(false) }}\">
                                            <i class=\"fas fa-check fa-fw mr-1\" aria-hidden=\"true\"></i>
                                            {{ trans('enable') }}
                                        </a>
                                    </div>
                                </div>
                            {% else %}
                                <a class=\"btn btn-sm btn-success btn-spin-action\" onclick=\"animateSpinner('add');\"
                                   href=\"{{ url }}?action=enable&amp;plugin={{ plugin.name }}&amp;multireqtoken={{ formToken(false) }}\">
                                    <i class=\"fa-solid fa-toggle-on mr-1\" aria-hidden=\"true\"></i>
                                    <span class=\"d-none d-sm-inline-block\">{{ trans('enable') }}</span>
                                </a>
                            {% endif %}
                        {% else %}
                            {{ plugin.compatibilityDescription() }}
                        {% endif %}
                        {% if plugin.enabled == false and config('disable_rm_plugins', false) == false %}
                            <a class=\"btn btn-sm btn-danger ml-2 btn-spin-action\" href=\"#\"
                               title=\"{{ trans('delete') }}\" onclick=\"deletePlugin('{{ plugin.name }}');\">
                                <i class=\"fas fa-trash-alt\" aria-hidden=\"true\"></i>
                            </a>
                        {% endif %}
                    </td>
                </tr>
            {% else %}
                <tr class=\"table-warning\">
                    <td colspan=\"4\"><b>{{ trans('no-data') }}</b></td>
                </tr>
            {% endfor %}
            </tbody>
        </table>
    </div>
{% endmacro %}
", "AdminPlugins.html.twig", "D:\\xampp\\htdocs\\Facturascripts\\Plugins\\MartosOS\\View\\AdminPlugins.html.twig");
    }
}
