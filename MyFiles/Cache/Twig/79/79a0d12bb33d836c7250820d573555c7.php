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

/* Tab/SalesDocument.html.twig */
class __TwigTemplate_f5f10caecfe69b14b8d9c8fa6a5d5820 extends Template
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
        $context["model"] = CoreExtension::getAttribute($this->env, $this->source, CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "getCurrentView", [], "method", false, false, false, 1), "model", [], "any", false, false, false, 1);
        // line 2
        yield "
<style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>

<script>
    let waitCounter = 0;
    let keyupInputName = null;

    function changeColumn(btn) {
        \$(btn).addClass('active').siblings().removeClass('active');
        document.forms['salesForm']['columnView'].value = \$(btn).data('column');

        if (\$(btn).data('column') === 'subtotal') {
            \$('.columSubtotal').removeClass('d-none').addClass('d-block');
            \$('.columNeto').removeClass('d-block').addClass('d-none');
        } else {
            \$('.columSubtotal').removeClass('d-block').addClass('d-none');
            \$('.columNeto').removeClass('d-none').addClass('d-block');
        }
    }

    function findProduct() {
        \$(\"#findProductInput\").autocomplete({
            source: function (request, response) {
                \$.ajax({
                    method: \"POST\",
                    url: '";
        // line 39
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 39), "html", null, true);
        yield "',
                    data: {action: 'autocomplete-product', term: request.term},
                    dataType: \"json\",
                    success: function (results) {
                        let values = [];
                        results.forEach(function (element) {
                            if (element.key === null || element.key === element.value) {
                                values.push(element);
                            } else {
                                values.push({key: element.key, value: element.key + \" | \" + element.value});
                            }
                        });
                        response(values);
                    },
                    error: function (msg) {
                        alert(msg.status + \" \" + msg.responseText);
                    }
                });
            },
            select: function (event, ui) {
                if (ui.item.key !== null) {
                    const value = ui.item.value.split(\" | \");
                    salesFormAction(\"fast-product\", value[0]);
                }
            }
        });
    }

    function salesFastLine(e) {
        if (e.which == 13) {
            salesFormAction('fast-line', '0');
        }
    }

    function salesFormAction(action, selectedLine) {
        animateSpinner('add');
        \$('#headerModal').modal('hide');

        document.forms['salesForm']['action'].value = action;
        document.forms['salesForm']['selectedLine'].value = selectedLine;

        const formData = new FormData(document.forms['salesForm']);
        const plainFormData = Object.fromEntries(formData.entries());
        const formDataJsonString = JSON.stringify(plainFormData);

        let data = new FormData();
        data.append('action', action);
        data.append('code', document.forms['salesForm']['code'].value);
        data.append('multireqtoken', document.forms['salesForm']['multireqtoken'].value);
        data.append('selectedLine', document.forms['salesForm']['selectedLine'].value);
        data.append('data', formDataJsonString);
        console.log(data);

        fetch('";
        // line 92
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 92), "html", null, true);
        yield "', {
            method: 'POST',
            body: data
        }).then(function (response) {
            animateSpinner('remove');
            if (response.ok) {
                return response.json();
            }
            return Promise.reject(response);
        }).then(function (data) {
            if (data.header !== '') {
                document.getElementById(\"salesFormHeader\").innerHTML = data.header;
            }
            if (data.lines !== '') {
                document.getElementById(\"salesFormLines\").innerHTML = data.lines;
            } else {
                \$.each(data.linesMap, function (index, value) {
                    if (document.forms['salesForm'][index] != null) {
                        document.forms['salesForm'][index].value = value;
                    }
                });
            }
            if (data.footer !== '') {
                document.getElementById(\"salesFormFooter\").innerHTML = data.footer;
            }
            if (data.products !== '') {
                document.getElementById(\"findProductList\").innerHTML = data.products;
            }
            if (Array.isArray(data.messages)) {
                data.messages.forEach(item => alert(item.message));
            }
            switch (document.forms['salesForm']['action'].value) {
                case 'add-product':
                case 'fast-product':
                    \$(\".doc-line-qty:last\").select();
                    break;

                case 'fast-line':
                    document.forms['salesForm']['fastli'].focus();
                    break;

                case 'new-line':
                    \$(\".doc-line-desc:last\").focus();
                    break;

                case 'set-customer':
                    \$(\"#findProductInput\").focus();
                    break;
            }

            // si la acción no es eliminar la línea y,
            // si no hay foco, establecemos el foco si tenemos el name del input donde se estaba escribiendo
            if (document.forms['salesForm']['action'].value !== 'rm-line'
                && document.activeElement.name === undefined && keyupInputName !== null) {
                let focusInput = \$('input[name=\"' + keyupInputName + '\"]');
                let focusLength = focusInput.val().length;
                let focusType = focusInput[0].type;
                // para establecer el cursor al final de input el type debe ser text
                if (focusType !== 'text') {
                    focusInput[0].type = 'text';
                }
                focusInput.focus();
                focusInput[0].setSelectionRange(focusLength, focusLength);
                focusInput[0].type = focusType;
                keyupInputName = null;
            }

            findProduct();
        }).catch(function (error) {
            alert('error');
            console.warn(error);
            animateSpinner('remove', false);
        });

        return false;
    }

    async function salesFormActionWait(action, selectedLine, event) {
        if (event.keyCode === 9) {
            // si se pulsa tabulador no hacemos nada
            return false;
        }

        // usamos un contador y un temporizador para solamente procesar la última llamada
        waitCounter++;
        let waitNum = waitCounter;
        await new Promise(r => setTimeout(r, 300));
        if (waitNum < waitCounter) {
            return false;
        }

        // obtenemos el name del input si cumple la condición de pulsado
        if (\$(event.target).is('input') && ['keyup', 'keypress', 'change'].includes(event.type)) {
            keyupInputName = event.target.name;
        }

        console.log('waitNum: ' + waitNum);
        return salesFormAction(action, selectedLine)
    }

    function salesFormSave(action, selectedLine) {
        animateSpinner('add');
        setOrdenLines();

        document.forms['salesForm']['action'].value = action;
        document.forms['salesForm']['selectedLine'].value = selectedLine;

        const formData = new FormData(document.forms['salesForm']);
        const plainFormData = Object.fromEntries(formData.entries());
        const formDataJsonString = JSON.stringify(plainFormData);

        let data = new FormData();
        data.append('action', action);
        data.append('code', document.forms['salesForm']['code'].value);
        data.append('multireqtoken', document.forms['salesForm']['multireqtoken'].value);
        data.append('selectedLine', document.forms['salesForm']['selectedLine'].value);
        data.append('data', formDataJsonString);
        console.log(data);

        fetch('";
        // line 211
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 211), "html", null, true);
        yield "', {
            method: 'POST',
            body: data
        }).then(function (response) {
            if (response.ok) {
                return response.json();
            }
            animateSpinner('remove', true);
            return Promise.reject(response);
        }).then(function (data) {
            console.log(data);
            if (Array.isArray(data.messages)) {
                data.messages.forEach(item => alert(item.message));
            }
            if (data.ok) {
                window.location.replace(data.newurl);
            } else {
                animateSpinner('remove', true);
            }
        }).catch(function (error) {
            alert('error');
            console.warn(error);
            animateSpinner('remove', false);
        });

        return false;
    }

    function salesLineTotalWithTaxes(id) {
        const total = parseFloat(prompt('";
        // line 240
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("total-with-taxes"), "html", null, true);
        yield "').replace(',', '.')) || 0;
        const dtopor = parseFloat(document.forms['salesForm']['dtopor_' + id].value) || 0;
        const dtopor2 = parseFloat(document.forms['salesForm']['dtopor2_' + id].value) || 0;
        const iva = parseFloat(document.forms['salesForm']['iva_' + id].value) || 0;
        const recargo = document.forms['salesForm']['recargo_' + id] ? parseFloat(document.forms['salesForm']['recargo_' + id].value) || 0 : 0;
        const irpf = parseFloat(document.forms['salesForm']['irpf_' + id].value) || 0;
        const cantidad = parseFloat(document.forms['salesForm']['cantidad_' + id].value) || 0;
        if (total <= 0) {
            alert('total > 0');
        } else if (cantidad <= 0) {
            alert('cantidad > 0');
        } else {
            let pvpSinDto = (100 * total / cantidad) / (100 + iva + recargo - irpf);
            let pvp = 10000 * pvpSinDto / ((100 - dtopor) * (100 - dtopor2));
            document.forms['salesForm']['pvpunitario_' + id].value = Math.round(pvp * 100000) / 100000;
            salesFormAction('recalculate', '0');
        }
    }

    function salesLineTotalWithoutTaxes(id) {
        const total = parseFloat(prompt('";
        // line 260
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("net"), "html", null, true);
        yield "').replace(',', '.')) || 0;
        const dtopor = parseFloat(document.forms['salesForm']['dtopor_' + id].value) || 0;
        const dtopor2 = parseFloat(document.forms['salesForm']['dtopor2_' + id].value) || 0;
        const cantidad = parseFloat(document.forms['salesForm']['cantidad_' + id].value) || 0;
        if (total <= 0) {
            alert('total > 0');
        } else if (cantidad <= 0) {
            alert('cantidad > 0');
        } else {
            let pvpSinDto = (100 * total / cantidad) / 100;
            let pvp = 10000 * pvpSinDto / ((100 - dtopor) * (100 - dtopor2));
            document.forms['salesForm']['pvpunitario_' + id].value = Math.round(pvp * 100000) / 100000;
            salesFormAction('recalculate', '0');
        }
    }

    function setOrdenLines() {
        let orderInputs = \$(\"input[name^='orden_']\");
        let count = orderInputs.length * 10;
        orderInputs.each(function (index) {
            \$(this).val(count - (index * 10));
        });
    }

    function sortableEnable() {
        \$(\"#salesFormLines\").sortable({
            update: function (event, ui) {
                setOrdenLines();
            }
        });
        \$(\"#salesFormLines\").sortable(\"option\", \"items\", \"> .fs-line\");
        \$(\"#salesFormLines\").sortable(\"option\", \"disabled\", false);
        \$(\"#salesFormLines\").sortable(\"option\", \"cursor\", \"move\");
        \$(\"#salesFormLines\").sortable(\"option\", \"cancel\", \"null\");
        \$(\"#salesFormLines\").sortable(\"option\", \"cancel\", \".titles\");
        \$(\"#salesFormLines\").sortable(\"option\", \"axis\", \"y\");

        \$(\"#salesFormLines .fs-line\").css('cursor', 'grab');
        \$(\"#salesFormLines .fs-line :input\").css('cursor', 'grab');

        \$(\"#salesFormLines\").disableSelection();
    }

    function sortableDisable() {
        \$(\"#salesFormLines\").sortable(\"disable\");

        \$(\"#salesFormLines .fs-line\").css('cursor', 'default');
        \$(\"#salesFormLines .fs-line :input\").css('cursor', 'default');
    }

    // Muestra el modal para elegir la forma de pago y fecha de los recibos
    // al presionar el boton para pagar la factura.
    function showModalPaymentConditions(callback) {
        const textClose = \"";
        // line 313
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("close"), "html", null, true);
        yield "\";
        const textPaid = \"";
        // line 314
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('trans')->getCallable()("paid"), "html", null, true);
        yield "\";
        // reutilizamos los inputs del formulario del header
        // para mantener formatos y valores dinamicos
        const paymentMethodsHTML = \$('#payment-methods').html();
        const documentDateHTML = \$('#document-date').html();

        const html = `
            <div class=\"modal fade\" id=\"modalPaymentConditions\" tabindex=\"-1\" aria-hidden=\"true\">
              <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content\">
                  <div class=\"modal-body\">
                    <div class=\"mb-3\" id=\"payment-methods-modal\">
                        \${paymentMethodsHTML}
                    </div>
                    <div class=\"mb-3\" id=\"document-date-modal\">
                        \${documentDateHTML}
                    </div>
                  </div>
                  <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">\${textClose}</button>
                    <button type=\"button\" class=\"btn btn-primary\" onclick=\"prepareForm(\${callback})\">\${textPaid}</button>
                  </div>
                </div>
              </div>
            </div>
        `;
        document.body.insertAdjacentHTML('beforeend', html);

        // cambiamos la fecha del input para que por defecto sea la de hoy
        \$('#document-date-modal').children('input').val('";
        // line 343
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->extensions['Twig\Extension\CoreExtension']->formatDate("now", "Y-m-d"), "html", null, true);
        yield "');

        \$('#modalPaymentConditions').modal('show');
    }

    // creamos los inputs para que se envien por post
    // con el resto de campos del formulario
    function prepareForm(callback){

        // creamos un input para enviar la fecha de pago para los recibos
        const inputFechaPagoRecibo = document.createElement('input');
        inputFechaPagoRecibo.type = 'hidden';
        inputFechaPagoRecibo.name = 'fechapagorecibo';
        inputFechaPagoRecibo.value = \$('#document-date-modal').children('input').val();
        document.forms['salesForm'].appendChild(inputFechaPagoRecibo);

        // cambiamos la forma de pago para que coincida con la de los recibos y se envie por el formulario
        \$('#payment-methods').children('select').val(\$('#payment-methods-modal').children('select').val());

        callback('save-paid', 1);
    }

    \$(document).on('keyup', '.doc-line-desc', function (e) {
        while (\$(this).outerHeight() < this.scrollHeight + parseFloat(\$(this).css(\"borderTopWidth\")) + parseFloat(\$(this).css(\"borderBottomWidth\"))) {
            \$(this).height(\$(this).height() + 1);
            if (\$(this).height() > 200) {
                break;
            }
        }
    });

    ";
        // line 374
        if (CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "editable", [], "any", false, false, false, 374)) {
            // line 375
            yield "    let sortable = false;

    \$(document).on('click', '#sortableBtn', function () {
        if (sortable) {
            sortableDisable();
            sortable = false;
            \$(this).removeClass('btn-secondary').addClass('btn-light');
        } else {
            sortableEnable();
            sortable = true;
            \$(this).removeClass('btn-light').addClass('btn-secondary');
        }
    });
    ";
        }
        // line 389
        yield "
    \$(document).ready(function () {
        findProduct();

        if (document.forms['salesForm']['codcliente'].value === '') {
            \$('#btnFindCustomerModal').click();
        }

        \$(\"#findCustomerInput\").autocomplete({
            autoFocus: true,
            source: function (request, response) {
                \$.ajax({
                    method: \"POST\",
                    url: '";
        // line 402
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "url", [], "method", false, false, false, 402), "html", null, true);
        yield "',
                    data: {action: 'find-customer', term: request.term},
                    dataType: \"json\",
                    success: function (results) {
                        response(results);
                    },
                    error: function (msg) {
                        alert(msg.status + \" \" + msg.responseText);
                    }
                });
            },
            select: function (event, ui) {
                if (ui.item.key !== null) {
                    const value = ui.item.value.split(\" | \");
                    if (value.length > 1) {
                        document.forms['salesForm']['codcliente'].value = value[0];
                        ui.item.value = value[1];
                    }
                    \$(\"#findCustomerModal\").modal(\"hide\");
                    salesFormAction(\"set-customer\", \"0\");
                }
            },
            open: function (event, ui) {
                \$(this).autocomplete('widget').css('z-index', 1500);
                return false;
            }
        });
    });
</script>

<form name=\"salesForm\" method=\"post\">
    ";
        // line 433
        yield $this->env->getFunction('formToken')->getCallable()();
        yield "
    <input type=\"hidden\" name=\"action\"/>
    <input type=\"hidden\" name=\"code\" value=\"";
        // line 435
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape(CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "primaryColumnValue", [], "method", false, false, false, 435), "html", null, true);
        yield "\"/>
    <input type=\"hidden\" name=\"selectedLine\"/>
    <input type=\"hidden\" name=\"columnView\" value=\"";
        // line 437
        yield $this->env->getRuntime('Twig\Runtime\EscaperRuntime')->escape($this->env->getFunction('settings')->getCallable()("default", "columnetosubtotal", "subtotal"), "html", null, true);
        yield "\"/>
    ";
        // line 438
        yield CoreExtension::getAttribute($this->env, $this->source, ($context["fsc"] ?? null), "renderSalesForm", [($context["model"] ?? null), CoreExtension::getAttribute($this->env, $this->source, ($context["model"] ?? null), "getLines", [], "method", false, false, false, 438)], "method", false, false, false, 438);
        yield "
</form>";
        return; yield '';
    }

    /**
     * @codeCoverageIgnore
     */
    public function getTemplateName()
    {
        return "Tab/SalesDocument.html.twig";
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
        return array (  519 => 438,  515 => 437,  510 => 435,  505 => 433,  471 => 402,  456 => 389,  440 => 375,  438 => 374,  404 => 343,  372 => 314,  368 => 313,  312 => 260,  289 => 240,  257 => 211,  135 => 92,  79 => 39,  40 => 2,  38 => 1,);
    }

    public function getSourceContext()
    {
        return new Source("{% set model = fsc.getCurrentView().model %}

<style>
    /* Chrome, Safari, Edge, Opera */
    input::-webkit-outer-spin-button,
    input::-webkit-inner-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    /* Firefox */
    input[type=number] {
        -moz-appearance: textfield;
    }
</style>

<script>
    let waitCounter = 0;
    let keyupInputName = null;

    function changeColumn(btn) {
        \$(btn).addClass('active').siblings().removeClass('active');
        document.forms['salesForm']['columnView'].value = \$(btn).data('column');

        if (\$(btn).data('column') === 'subtotal') {
            \$('.columSubtotal').removeClass('d-none').addClass('d-block');
            \$('.columNeto').removeClass('d-block').addClass('d-none');
        } else {
            \$('.columSubtotal').removeClass('d-block').addClass('d-none');
            \$('.columNeto').removeClass('d-none').addClass('d-block');
        }
    }

    function findProduct() {
        \$(\"#findProductInput\").autocomplete({
            source: function (request, response) {
                \$.ajax({
                    method: \"POST\",
                    url: '{{ fsc.url() }}',
                    data: {action: 'autocomplete-product', term: request.term},
                    dataType: \"json\",
                    success: function (results) {
                        let values = [];
                        results.forEach(function (element) {
                            if (element.key === null || element.key === element.value) {
                                values.push(element);
                            } else {
                                values.push({key: element.key, value: element.key + \" | \" + element.value});
                            }
                        });
                        response(values);
                    },
                    error: function (msg) {
                        alert(msg.status + \" \" + msg.responseText);
                    }
                });
            },
            select: function (event, ui) {
                if (ui.item.key !== null) {
                    const value = ui.item.value.split(\" | \");
                    salesFormAction(\"fast-product\", value[0]);
                }
            }
        });
    }

    function salesFastLine(e) {
        if (e.which == 13) {
            salesFormAction('fast-line', '0');
        }
    }

    function salesFormAction(action, selectedLine) {
        animateSpinner('add');
        \$('#headerModal').modal('hide');

        document.forms['salesForm']['action'].value = action;
        document.forms['salesForm']['selectedLine'].value = selectedLine;

        const formData = new FormData(document.forms['salesForm']);
        const plainFormData = Object.fromEntries(formData.entries());
        const formDataJsonString = JSON.stringify(plainFormData);

        let data = new FormData();
        data.append('action', action);
        data.append('code', document.forms['salesForm']['code'].value);
        data.append('multireqtoken', document.forms['salesForm']['multireqtoken'].value);
        data.append('selectedLine', document.forms['salesForm']['selectedLine'].value);
        data.append('data', formDataJsonString);
        console.log(data);

        fetch('{{ fsc.url() }}', {
            method: 'POST',
            body: data
        }).then(function (response) {
            animateSpinner('remove');
            if (response.ok) {
                return response.json();
            }
            return Promise.reject(response);
        }).then(function (data) {
            if (data.header !== '') {
                document.getElementById(\"salesFormHeader\").innerHTML = data.header;
            }
            if (data.lines !== '') {
                document.getElementById(\"salesFormLines\").innerHTML = data.lines;
            } else {
                \$.each(data.linesMap, function (index, value) {
                    if (document.forms['salesForm'][index] != null) {
                        document.forms['salesForm'][index].value = value;
                    }
                });
            }
            if (data.footer !== '') {
                document.getElementById(\"salesFormFooter\").innerHTML = data.footer;
            }
            if (data.products !== '') {
                document.getElementById(\"findProductList\").innerHTML = data.products;
            }
            if (Array.isArray(data.messages)) {
                data.messages.forEach(item => alert(item.message));
            }
            switch (document.forms['salesForm']['action'].value) {
                case 'add-product':
                case 'fast-product':
                    \$(\".doc-line-qty:last\").select();
                    break;

                case 'fast-line':
                    document.forms['salesForm']['fastli'].focus();
                    break;

                case 'new-line':
                    \$(\".doc-line-desc:last\").focus();
                    break;

                case 'set-customer':
                    \$(\"#findProductInput\").focus();
                    break;
            }

            // si la acción no es eliminar la línea y,
            // si no hay foco, establecemos el foco si tenemos el name del input donde se estaba escribiendo
            if (document.forms['salesForm']['action'].value !== 'rm-line'
                && document.activeElement.name === undefined && keyupInputName !== null) {
                let focusInput = \$('input[name=\"' + keyupInputName + '\"]');
                let focusLength = focusInput.val().length;
                let focusType = focusInput[0].type;
                // para establecer el cursor al final de input el type debe ser text
                if (focusType !== 'text') {
                    focusInput[0].type = 'text';
                }
                focusInput.focus();
                focusInput[0].setSelectionRange(focusLength, focusLength);
                focusInput[0].type = focusType;
                keyupInputName = null;
            }

            findProduct();
        }).catch(function (error) {
            alert('error');
            console.warn(error);
            animateSpinner('remove', false);
        });

        return false;
    }

    async function salesFormActionWait(action, selectedLine, event) {
        if (event.keyCode === 9) {
            // si se pulsa tabulador no hacemos nada
            return false;
        }

        // usamos un contador y un temporizador para solamente procesar la última llamada
        waitCounter++;
        let waitNum = waitCounter;
        await new Promise(r => setTimeout(r, 300));
        if (waitNum < waitCounter) {
            return false;
        }

        // obtenemos el name del input si cumple la condición de pulsado
        if (\$(event.target).is('input') && ['keyup', 'keypress', 'change'].includes(event.type)) {
            keyupInputName = event.target.name;
        }

        console.log('waitNum: ' + waitNum);
        return salesFormAction(action, selectedLine)
    }

    function salesFormSave(action, selectedLine) {
        animateSpinner('add');
        setOrdenLines();

        document.forms['salesForm']['action'].value = action;
        document.forms['salesForm']['selectedLine'].value = selectedLine;

        const formData = new FormData(document.forms['salesForm']);
        const plainFormData = Object.fromEntries(formData.entries());
        const formDataJsonString = JSON.stringify(plainFormData);

        let data = new FormData();
        data.append('action', action);
        data.append('code', document.forms['salesForm']['code'].value);
        data.append('multireqtoken', document.forms['salesForm']['multireqtoken'].value);
        data.append('selectedLine', document.forms['salesForm']['selectedLine'].value);
        data.append('data', formDataJsonString);
        console.log(data);

        fetch('{{ fsc.url() }}', {
            method: 'POST',
            body: data
        }).then(function (response) {
            if (response.ok) {
                return response.json();
            }
            animateSpinner('remove', true);
            return Promise.reject(response);
        }).then(function (data) {
            console.log(data);
            if (Array.isArray(data.messages)) {
                data.messages.forEach(item => alert(item.message));
            }
            if (data.ok) {
                window.location.replace(data.newurl);
            } else {
                animateSpinner('remove', true);
            }
        }).catch(function (error) {
            alert('error');
            console.warn(error);
            animateSpinner('remove', false);
        });

        return false;
    }

    function salesLineTotalWithTaxes(id) {
        const total = parseFloat(prompt('{{ trans('total-with-taxes') }}').replace(',', '.')) || 0;
        const dtopor = parseFloat(document.forms['salesForm']['dtopor_' + id].value) || 0;
        const dtopor2 = parseFloat(document.forms['salesForm']['dtopor2_' + id].value) || 0;
        const iva = parseFloat(document.forms['salesForm']['iva_' + id].value) || 0;
        const recargo = document.forms['salesForm']['recargo_' + id] ? parseFloat(document.forms['salesForm']['recargo_' + id].value) || 0 : 0;
        const irpf = parseFloat(document.forms['salesForm']['irpf_' + id].value) || 0;
        const cantidad = parseFloat(document.forms['salesForm']['cantidad_' + id].value) || 0;
        if (total <= 0) {
            alert('total > 0');
        } else if (cantidad <= 0) {
            alert('cantidad > 0');
        } else {
            let pvpSinDto = (100 * total / cantidad) / (100 + iva + recargo - irpf);
            let pvp = 10000 * pvpSinDto / ((100 - dtopor) * (100 - dtopor2));
            document.forms['salesForm']['pvpunitario_' + id].value = Math.round(pvp * 100000) / 100000;
            salesFormAction('recalculate', '0');
        }
    }

    function salesLineTotalWithoutTaxes(id) {
        const total = parseFloat(prompt('{{ trans('net') }}').replace(',', '.')) || 0;
        const dtopor = parseFloat(document.forms['salesForm']['dtopor_' + id].value) || 0;
        const dtopor2 = parseFloat(document.forms['salesForm']['dtopor2_' + id].value) || 0;
        const cantidad = parseFloat(document.forms['salesForm']['cantidad_' + id].value) || 0;
        if (total <= 0) {
            alert('total > 0');
        } else if (cantidad <= 0) {
            alert('cantidad > 0');
        } else {
            let pvpSinDto = (100 * total / cantidad) / 100;
            let pvp = 10000 * pvpSinDto / ((100 - dtopor) * (100 - dtopor2));
            document.forms['salesForm']['pvpunitario_' + id].value = Math.round(pvp * 100000) / 100000;
            salesFormAction('recalculate', '0');
        }
    }

    function setOrdenLines() {
        let orderInputs = \$(\"input[name^='orden_']\");
        let count = orderInputs.length * 10;
        orderInputs.each(function (index) {
            \$(this).val(count - (index * 10));
        });
    }

    function sortableEnable() {
        \$(\"#salesFormLines\").sortable({
            update: function (event, ui) {
                setOrdenLines();
            }
        });
        \$(\"#salesFormLines\").sortable(\"option\", \"items\", \"> .fs-line\");
        \$(\"#salesFormLines\").sortable(\"option\", \"disabled\", false);
        \$(\"#salesFormLines\").sortable(\"option\", \"cursor\", \"move\");
        \$(\"#salesFormLines\").sortable(\"option\", \"cancel\", \"null\");
        \$(\"#salesFormLines\").sortable(\"option\", \"cancel\", \".titles\");
        \$(\"#salesFormLines\").sortable(\"option\", \"axis\", \"y\");

        \$(\"#salesFormLines .fs-line\").css('cursor', 'grab');
        \$(\"#salesFormLines .fs-line :input\").css('cursor', 'grab');

        \$(\"#salesFormLines\").disableSelection();
    }

    function sortableDisable() {
        \$(\"#salesFormLines\").sortable(\"disable\");

        \$(\"#salesFormLines .fs-line\").css('cursor', 'default');
        \$(\"#salesFormLines .fs-line :input\").css('cursor', 'default');
    }

    // Muestra el modal para elegir la forma de pago y fecha de los recibos
    // al presionar el boton para pagar la factura.
    function showModalPaymentConditions(callback) {
        const textClose = \"{{ trans('close') }}\";
        const textPaid = \"{{ trans('paid') }}\";
        // reutilizamos los inputs del formulario del header
        // para mantener formatos y valores dinamicos
        const paymentMethodsHTML = \$('#payment-methods').html();
        const documentDateHTML = \$('#document-date').html();

        const html = `
            <div class=\"modal fade\" id=\"modalPaymentConditions\" tabindex=\"-1\" aria-hidden=\"true\">
              <div class=\"modal-dialog modal-dialog-centered\">
                <div class=\"modal-content\">
                  <div class=\"modal-body\">
                    <div class=\"mb-3\" id=\"payment-methods-modal\">
                        \${paymentMethodsHTML}
                    </div>
                    <div class=\"mb-3\" id=\"document-date-modal\">
                        \${documentDateHTML}
                    </div>
                  </div>
                  <div class=\"modal-footer\">
                    <button type=\"button\" class=\"btn btn-secondary\" data-bs-dismiss=\"modal\">\${textClose}</button>
                    <button type=\"button\" class=\"btn btn-primary\" onclick=\"prepareForm(\${callback})\">\${textPaid}</button>
                  </div>
                </div>
              </div>
            </div>
        `;
        document.body.insertAdjacentHTML('beforeend', html);

        // cambiamos la fecha del input para que por defecto sea la de hoy
        \$('#document-date-modal').children('input').val('{{ \"now\"|date(\"Y-m-d\") }}');

        \$('#modalPaymentConditions').modal('show');
    }

    // creamos los inputs para que se envien por post
    // con el resto de campos del formulario
    function prepareForm(callback){

        // creamos un input para enviar la fecha de pago para los recibos
        const inputFechaPagoRecibo = document.createElement('input');
        inputFechaPagoRecibo.type = 'hidden';
        inputFechaPagoRecibo.name = 'fechapagorecibo';
        inputFechaPagoRecibo.value = \$('#document-date-modal').children('input').val();
        document.forms['salesForm'].appendChild(inputFechaPagoRecibo);

        // cambiamos la forma de pago para que coincida con la de los recibos y se envie por el formulario
        \$('#payment-methods').children('select').val(\$('#payment-methods-modal').children('select').val());

        callback('save-paid', 1);
    }

    \$(document).on('keyup', '.doc-line-desc', function (e) {
        while (\$(this).outerHeight() < this.scrollHeight + parseFloat(\$(this).css(\"borderTopWidth\")) + parseFloat(\$(this).css(\"borderBottomWidth\"))) {
            \$(this).height(\$(this).height() + 1);
            if (\$(this).height() > 200) {
                break;
            }
        }
    });

    {% if model.editable %}
    let sortable = false;

    \$(document).on('click', '#sortableBtn', function () {
        if (sortable) {
            sortableDisable();
            sortable = false;
            \$(this).removeClass('btn-secondary').addClass('btn-light');
        } else {
            sortableEnable();
            sortable = true;
            \$(this).removeClass('btn-light').addClass('btn-secondary');
        }
    });
    {% endif %}

    \$(document).ready(function () {
        findProduct();

        if (document.forms['salesForm']['codcliente'].value === '') {
            \$('#btnFindCustomerModal').click();
        }

        \$(\"#findCustomerInput\").autocomplete({
            autoFocus: true,
            source: function (request, response) {
                \$.ajax({
                    method: \"POST\",
                    url: '{{ fsc.url() }}',
                    data: {action: 'find-customer', term: request.term},
                    dataType: \"json\",
                    success: function (results) {
                        response(results);
                    },
                    error: function (msg) {
                        alert(msg.status + \" \" + msg.responseText);
                    }
                });
            },
            select: function (event, ui) {
                if (ui.item.key !== null) {
                    const value = ui.item.value.split(\" | \");
                    if (value.length > 1) {
                        document.forms['salesForm']['codcliente'].value = value[0];
                        ui.item.value = value[1];
                    }
                    \$(\"#findCustomerModal\").modal(\"hide\");
                    salesFormAction(\"set-customer\", \"0\");
                }
            },
            open: function (event, ui) {
                \$(this).autocomplete('widget').css('z-index', 1500);
                return false;
            }
        });
    });
</script>

<form name=\"salesForm\" method=\"post\">
    {{ formToken() }}
    <input type=\"hidden\" name=\"action\"/>
    <input type=\"hidden\" name=\"code\" value=\"{{ model.primaryColumnValue() }}\"/>
    <input type=\"hidden\" name=\"selectedLine\"/>
    <input type=\"hidden\" name=\"columnView\" value=\"{{ settings('default', 'columnetosubtotal', 'subtotal') }}\"/>
    {{ fsc.renderSalesForm(model, model.getLines()) | raw }}
</form>", "Tab/SalesDocument.html.twig", "D:\\xampp\\htdocs\\Facturascripts\\Core\\View\\Tab\\SalesDocument.html.twig");
    }
}
