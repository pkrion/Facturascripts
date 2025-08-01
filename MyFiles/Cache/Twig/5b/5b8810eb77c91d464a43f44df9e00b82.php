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

/* Tab/DocFiles.html.twig */
class __TwigTemplate_6cfc340598211a61cd674a0bcb2e88a4 extends Template
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
        $context["firstView"] = Twig\Extension\CoreExtension::first($this->env->getCharset(), CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "views", [], "any", false, false, false, 1));
        // line 2
        $context["doc"] = CoreExtension::getAttribute($this->env, $this->source, ($context["firstView"] ?? null), "model", [], "any", false, false, false, 2);
        // line 3
        $context["currentView"] = CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getCurrentView", [], "method", false, false, false, 3);
        // line 4
        yield "
<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-sm-12\">
            ";
        // line 8
        if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "permissions", [], "any", false, false, false, 8), "allowUpdate", [], "any", false, false, false, 8)) {
            // line 9
            yield "                <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["doc"] ?? null), "url", [], "method", false, false, false, 9), "html", null, true);
            yield "\" method=\"post\" enctype=\"multipart/form-data\"
                      onsubmit=\"animateSpinner('add')\">
                    <input type=\"hidden\" name=\"activetab\" value=\"";
            // line 11
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 11), "html", null, true);
            yield "\"/>
                    <input type=\"hidden\" name=\"action\" value=\"add-file\"/>
                    ";
            // line 13
            yield $this->env->getFunction('formToken')->getCallable()();
            yield "
                    <div class=\"card border-success shadow mb-3\">
                        <div class=\"card-body p-3\">
                            <h5 class=\"card-title\">
                                <i class=\"fa-solid fa-folder-plus fa-fw\"></i> ";
            // line 17
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("add"), "html", null, true);
            yield "
                            </h5>
                            <div class=\"mb-3\">
                                <textarea name=\"observations\" class=\"form-control\"
                                          placeholder=\"";
            // line 21
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("observations"), "html", null, true);
            yield "\"></textarea>
                            </div>
                            <div class=\"row align-items-end\">
                                <div class=\"col\">
                                    <input type=\"file\" name=\"new-files[]\" class=\"form-control-file\" multiple required/>
                                    <p class=\"text-muted mb-0\">
                                        ";
            // line 27
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("help-server-accepts-filesize", ["%size%" => CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "model", [], "any", false, false, false, 27), "getMaxFileUpload", [], "method", false, false, false, 27)]), "html", null, true);
            yield "
                                    </p>
                                    ";
            // line 29
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('getIncludeViews')->getCallable()("DocFiles", "formAddBody"));
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
                // line 30
                yield "                                        ";
                yield from                 $this->loadTemplate((($__internal_compile_0 = $context["includeView"]) && is_array($__internal_compile_0) || $__internal_compile_0 instanceof ArrayAccess ? ($__internal_compile_0["path"] ?? null) : null), "Tab/DocFiles.html.twig", 30)->unwrap()->yield($context);
                // line 31
                yield "                                    ";
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
            // line 32
            yield "                                </div>
                                <div class=\"col text-end\">
                                    <button type=\"submit\" class=\"btn btn-sm btn-success\">
                                        <i class=\"fa-solid fa-save fa-fw\" aria-hidden=\"true\"></i> ";
            // line 35
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("save"), "html", null, true);
            yield "
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            ";
        }
        // line 43
        yield "
            <div class=\"card-columns\">
                ";
        // line 45
        $context['_parent'] = $context;
        $context['_seq'] = CoreExtension::ensureTraversable(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "cursor", [], "any", false, false, false, 45));
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
        foreach ($context['_seq'] as $context["_key"] => $context["docfile"]) {
            // line 46
            yield "                    ";
            $context["file"] = CoreExtension::getAttribute($this->env, $this->source, $context["docfile"], "getFile", [], "method", false, false, false, 46);
            // line 47
            yield "                    <form action=\"";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["doc"] ?? null), "url", [], "method", false, false, false, 47), "html", null, true);
            yield "\" method=\"post\" enctype=\"multipart/form-data\"
                          onsubmit=\"animateSpinner('add')\">
                        <input type=\"hidden\" name=\"activetab\" value=\"";
            // line 49
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["currentView"] ?? null), "getViewName", [], "method", false, false, false, 49), "html", null, true);
            yield "\"/>
                        <input type=\"hidden\" name=\"id\" value=\"";
            // line 50
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["docfile"], "id", [], "any", false, false, false, 50), "html", null, true);
            yield "\"/>
                        <input type=\"hidden\" name=\"action\" value=\"\"/>
                        ";
            // line 52
            yield $this->env->getFunction('formToken')->getCallable()();
            yield "
                        <div class=\"card shadow mb-3\">
                            ";
            // line 54
            if (CoreExtension::getAttribute($this->env, $this->source, ($context["file"] ?? null), "isImage", [], "method", false, false, false, 54)) {
                // line 55
                yield "                                <a href=\"";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["file"] ?? null), "url", ["download-permanent"], "method", false, false, false, 55), "html", null, true);
                yield "\" target=\"_blank\">
                                    <img src=\"";
                // line 56
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["file"] ?? null), "url", ["download"], "method", false, false, false, 56), "html", null, true);
                yield "\" class=\"card-img-top\"
                                         alt=\"";
                // line 57
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["file"] ?? null), "filename", [], "any", false, false, false, 57), "html", null, true);
                yield "\">
                                </a>
                            ";
            } else {
                // line 60
                yield "                                <div class=\"ps-3 pt-3 pe-3\">
                                    <a href=\"";
                // line 61
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["file"] ?? null), "url", ["download-permanent"], "method", false, false, false, 61), "html", null, true);
                yield "\" target=\"_blank\"
                                       class=\"btn w-100 btn-lg btn-secondary\">
                                        ";
                // line 63
                if (CoreExtension::getAttribute($this->env, $this->source, ($context["file"] ?? null), "isPdf", [], "method", false, false, false, 63)) {
                    // line 64
                    yield "                                            <i class=\"far fa-file-pdf fa-fw\"></i>
                                        ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source,                 // line 65
($context["file"] ?? null), "isVideo", [], "method", false, false, false, 65)) {
                    // line 66
                    yield "                                            <i class=\"far fa-file-video fa-fw\"></i>
                                        ";
                } elseif (CoreExtension::getAttribute($this->env, $this->source,                 // line 67
($context["file"] ?? null), "isArchive", [], "method", false, false, false, 67)) {
                    // line 68
                    yield "                                            <i class=\"far fa-file-archive fa-fw\"></i>
                                        ";
                } else {
                    // line 70
                    yield "                                            <i class=\"far fa-file fa-fw\"></i>
                                        ";
                }
                // line 72
                yield "                                        ";
                yield CoreExtension::getAttribute($this->env, $this->source, ($context["file"] ?? null), "filename", [], "any", false, false, false, 72);
                yield "
                                    </a>
                                </div>
                            ";
            }
            // line 76
            yield "                            <div class=\"card-body p-3\">
                                <div class=\"mb-3\">
                                <textarea name=\"observations\" class=\"form-control\"
                                          placeholder=\"";
            // line 79
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("observations"), "html", null, true);
            yield "\">";
            yield CoreExtension::getAttribute($this->env, $this->source, $context["docfile"], "observations", [], "any", false, false, false, 79);
            yield "</textarea>
                                </div>
                                ";
            // line 81
            $context['_parent'] = $context;
            $context['_seq'] = CoreExtension::ensureTraversable($this->env->getFunction('getIncludeViews')->getCallable()("DocFiles", "formEditBody"));
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
                // line 82
                yield "                                    ";
                yield from                 $this->loadTemplate((($__internal_compile_1 = $context["includeView"]) && is_array($__internal_compile_1) || $__internal_compile_1 instanceof ArrayAccess ? ($__internal_compile_1["path"] ?? null) : null), "Tab/DocFiles.html.twig", 82)->unwrap()->yield($context);
                // line 83
                yield "                                ";
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
            // line 84
            yield "                                <p class=\"card-text text-muted\">
                                    ";
            // line 85
            if (CoreExtension::getAttribute($this->env, $this->source, $context["docfile"], "nick", [], "any", false, false, false, 85)) {
                // line 86
                yield "                                        <i class=\"fa-solid fa-user\"></i> ";
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["docfile"], "nick", [], "any", false, false, false, 86), "html", null, true);
                yield "
                                    ";
            }
            // line 88
            yield "                                    <i class=\"fa-solid fa-calendar-alt ms-3\"></i> ";
            yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, $context["docfile"], "creationdate", [], "any", false, false, false, 88), "html", null, true);
            yield "
                                </p>
                            </div>
                            <div class=\"card-footer p-2\">
                                ";
            // line 92
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "permissions", [], "any", false, false, false, 92), "allowUpdate", [], "any", false, false, false, 92)) {
                // line 93
                yield "                                    <button type=\"button\" class=\"btn btn-sm btn-primary float-end\"
                                            onclick=\"this.form.action.value='edit-file';this.form.onsubmit();this.form.submit();\">
                                        <i class=\"fa-solid fa-save fa-fw\" aria-hidden=\"true\"></i> ";
                // line 95
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("save"), "html", null, true);
                yield "
                                    </button>
                                ";
            }
            // line 98
            yield "                                ";
            if (CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "permissions", [], "any", false, false, false, 98), "allowDelete", [], "any", false, false, false, 98)) {
                // line 99
                yield "                                    <div class=\"btn-group\">
                                        <div class=\"dropdown\">
                                            <button class=\"btn btn-sm btn-outline-danger dropdown-toggle\" type=\"button\"
                                                    data-bs-toggle=\"dropdown\" aria-haspopup=\"true\"
                                                    aria-expanded=\"false\">
                                                <i class=\"fa-solid fa-trash-alt\"></i>
                                            </button>
                                            <div class=\"dropdown-menu\">
                                                <button type=\"button\"
                                                        onclick=\"this.form.action.value='unlink-file';this.form.onsubmit();this.form.submit();\"
                                                        class=\"dropdown-item\">
                                                    <i class=\"fa-solid fa-unlink fa-fw\"></i> ";
                // line 110
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("unlink-file"), "html", null, true);
                yield "
                                                </button>
                                                <div class=\"dropdown-divider\"></div>
                                                <button type=\"button\"
                                                        onclick=\"this.form.action.value='delete-file';this.form.submit();\"
                                                        class=\"dropdown-item\">
                                                    <i class=\"far fa-trash-alt fa-fw\"></i> ";
                // line 116
                yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("delete-file"), "html", null, true);
                yield "
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                ";
            }
            // line 122
            yield "                            </div>
                        </div>
                    </form>
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
        unset($context['_seq'], $context['_iterated'], $context['_key'], $context['docfile'], $context['_parent'], $context['loop']);
        $context = array_intersect_key($context, $_parent) + $_parent;
        // line 126
        yield "            </div>
        </div>
    </div>
</div>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Tab/DocFiles.html.twig";
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
        return array (  366 => 126,  349 => 122,  340 => 116,  331 => 110,  318 => 99,  315 => 98,  309 => 95,  305 => 93,  303 => 92,  295 => 88,  289 => 86,  287 => 85,  284 => 84,  270 => 83,  267 => 82,  250 => 81,  243 => 79,  238 => 76,  230 => 72,  226 => 70,  222 => 68,  220 => 67,  217 => 66,  215 => 65,  212 => 64,  210 => 63,  205 => 61,  202 => 60,  196 => 57,  192 => 56,  187 => 55,  185 => 54,  180 => 52,  175 => 50,  171 => 49,  165 => 47,  162 => 46,  145 => 45,  141 => 43,  130 => 35,  125 => 32,  111 => 31,  108 => 30,  91 => 29,  86 => 27,  77 => 21,  70 => 17,  63 => 13,  58 => 11,  52 => 9,  50 => 8,  44 => 4,  42 => 3,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set firstView = fsc.views | first %}
{% set doc = firstView.model %}
{% set currentView = fsc.getCurrentView() %}

<div class=\"container-fluid\">
    <div class=\"row\">
        <div class=\"col-sm-12\">
            {% if fsc.permissions.allowUpdate %}
                <form action=\"{{ doc.url() }}\" method=\"post\" enctype=\"multipart/form-data\"
                      onsubmit=\"animateSpinner('add')\">
                    <input type=\"hidden\" name=\"activetab\" value=\"{{ currentView.getViewName() }}\"/>
                    <input type=\"hidden\" name=\"action\" value=\"add-file\"/>
                    {{ formToken() }}
                    <div class=\"card border-success shadow mb-3\">
                        <div class=\"card-body p-3\">
                            <h5 class=\"card-title\">
                                <i class=\"fa-solid fa-folder-plus fa-fw\"></i> {{ trans('add') }}
                            </h5>
                            <div class=\"mb-3\">
                                <textarea name=\"observations\" class=\"form-control\"
                                          placeholder=\"{{ trans('observations') }}\"></textarea>
                            </div>
                            <div class=\"row align-items-end\">
                                <div class=\"col\">
                                    <input type=\"file\" name=\"new-files[]\" class=\"form-control-file\" multiple required/>
                                    <p class=\"text-muted mb-0\">
                                        {{ trans('help-server-accepts-filesize', {'%size%': currentView.model.getMaxFileUpload()}) }}
                                    </p>
                                    {% for includeView in getIncludeViews('DocFiles', 'formAddBody') %}
                                        {% include includeView['path'] %}
                                    {% endfor %}
                                </div>
                                <div class=\"col text-end\">
                                    <button type=\"submit\" class=\"btn btn-sm btn-success\">
                                        <i class=\"fa-solid fa-save fa-fw\" aria-hidden=\"true\"></i> {{ trans('save') }}
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            {% endif %}

            <div class=\"card-columns\">
                {% for docfile in currentView.cursor %}
                    {% set file = docfile.getFile() %}
                    <form action=\"{{ doc.url() }}\" method=\"post\" enctype=\"multipart/form-data\"
                          onsubmit=\"animateSpinner('add')\">
                        <input type=\"hidden\" name=\"activetab\" value=\"{{ currentView.getViewName() }}\"/>
                        <input type=\"hidden\" name=\"id\" value=\"{{ docfile.id }}\"/>
                        <input type=\"hidden\" name=\"action\" value=\"\"/>
                        {{ formToken() }}
                        <div class=\"card shadow mb-3\">
                            {% if file.isImage() %}
                                <a href=\"{{ file.url('download-permanent') }}\" target=\"_blank\">
                                    <img src=\"{{ file.url('download') }}\" class=\"card-img-top\"
                                         alt=\"{{ file.filename }}\">
                                </a>
                            {% else %}
                                <div class=\"ps-3 pt-3 pe-3\">
                                    <a href=\"{{ file.url('download-permanent') }}\" target=\"_blank\"
                                       class=\"btn w-100 btn-lg btn-secondary\">
                                        {% if file.isPdf() %}
                                            <i class=\"far fa-file-pdf fa-fw\"></i>
                                        {% elseif file.isVideo() %}
                                            <i class=\"far fa-file-video fa-fw\"></i>
                                        {% elseif file.isArchive() %}
                                            <i class=\"far fa-file-archive fa-fw\"></i>
                                        {% else %}
                                            <i class=\"far fa-file fa-fw\"></i>
                                        {% endif %}
                                        {{ file.filename | raw }}
                                    </a>
                                </div>
                            {% endif %}
                            <div class=\"card-body p-3\">
                                <div class=\"mb-3\">
                                <textarea name=\"observations\" class=\"form-control\"
                                          placeholder=\"{{ trans('observations') }}\">{{ docfile.observations | raw }}</textarea>
                                </div>
                                {% for includeView in getIncludeViews('DocFiles', 'formEditBody') %}
                                    {% include includeView['path'] %}
                                {% endfor %}
                                <p class=\"card-text text-muted\">
                                    {% if docfile.nick %}
                                        <i class=\"fa-solid fa-user\"></i> {{ docfile.nick }}
                                    {% endif %}
                                    <i class=\"fa-solid fa-calendar-alt ms-3\"></i> {{ docfile.creationdate }}
                                </p>
                            </div>
                            <div class=\"card-footer p-2\">
                                {% if fsc.permissions.allowUpdate %}
                                    <button type=\"button\" class=\"btn btn-sm btn-primary float-end\"
                                            onclick=\"this.form.action.value='edit-file';this.form.onsubmit();this.form.submit();\">
                                        <i class=\"fa-solid fa-save fa-fw\" aria-hidden=\"true\"></i> {{ trans('save') }}
                                    </button>
                                {% endif %}
                                {% if fsc.permissions.allowDelete %}
                                    <div class=\"btn-group\">
                                        <div class=\"dropdown\">
                                            <button class=\"btn btn-sm btn-outline-danger dropdown-toggle\" type=\"button\"
                                                    data-bs-toggle=\"dropdown\" aria-haspopup=\"true\"
                                                    aria-expanded=\"false\">
                                                <i class=\"fa-solid fa-trash-alt\"></i>
                                            </button>
                                            <div class=\"dropdown-menu\">
                                                <button type=\"button\"
                                                        onclick=\"this.form.action.value='unlink-file';this.form.onsubmit();this.form.submit();\"
                                                        class=\"dropdown-item\">
                                                    <i class=\"fa-solid fa-unlink fa-fw\"></i> {{ trans('unlink-file') }}
                                                </button>
                                                <div class=\"dropdown-divider\"></div>
                                                <button type=\"button\"
                                                        onclick=\"this.form.action.value='delete-file';this.form.submit();\"
                                                        class=\"dropdown-item\">
                                                    <i class=\"far fa-trash-alt fa-fw\"></i> {{ trans('delete-file') }}
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                {% endif %}
                            </div>
                        </div>
                    </form>
                {% endfor %}
            </div>
        </div>
    </div>
</div>", "Tab/DocFiles.html.twig", "D:\\xampp\\htdocs\\Facturascripts\\Core\\View\\Tab\\DocFiles.html.twig");
    }
}
