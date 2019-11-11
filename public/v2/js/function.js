/**
 * Created by blendo.santos on 02/03/2017.
 */

//var urlServidor = "http://localhost:8000/";
//var urlServidor = "http://plusvision.dlinkddns.com:8084/ipim/";
var urlServidor = "http://web.ipimweb.com.br/";

$(function(){

    var emailAntigo = "";

    $('.cpf').mask('999.999.999.99', {placeholder: "000.000.000.00"});
    $('.data').mask("00/00/0000", {placeholder: "__/__/____"});
    $('.telefone').mask('(00) 00000-0000', {placeholder: "(__) _____-____"});

    $('.select2').select2();

    $('.data-time').datetimepicker({
        locale: 'pt-br',
        icons: {
            time: 'icmn-clock2',
            date: 'icmn-calendar',
            up: 'icmn-arrow-up2',
            down: 'icmn-arrow-down2',
            previous: 'icmn-arrow-left2',
            next: 'icmn-arrow-right2',
            today: 'glyphicon glyphicon-screenshot',
            clear: 'glyphicon glyphicon-trash',
            close: 'glyphicon glyphicon-remove'
        }
    });

    $('.data-normal').datetimepicker({
        format: 'L',
        locale: 'pt-br',
        icons: {
            time: 'icmn-clock2',
            date: 'icmn-calendar',
            up: 'icmn-arrow-up2',
            down: 'icmn-arrow-down2',
            previous: 'icmn-arrow-left2',
            next: 'icmn-arrow-right2',
            today: 'glyphicon glyphicon-screenshot',
            clear: 'glyphicon glyphicon-trash',
            close: 'glyphicon glyphicon-remove'
        }
    });

    $(".icmn-bin.btnExcluir").click(function(e){
        e.preventDefault();
        var pageCompleto = 'excluir';
        if($(this).data('pgcompleto') !== undefined ){
            pageCompleto = $(this).data('pgcompleto');
        }
        var url = $(this).data('page') + '/' + pageCompleto + '/' + $(this).data('codigo');
        swal({
                title: "Realmente Deseja Excluir?",
                //text: "Your will not be able to recover this file!",
                type: "warning",
                showCancelButton: true,
                cancelButtonClass: "btn-default",
                confirmButtonClass: "btn-warning",
                confirmButtonText: "Excluir",
                cancelButtonText: "Cancelar",
                closeOnConfirm: false
            },
            function(){
                swal({
                    title: "Processando Exclusão!!",
                    type: "success",
                    showConfirmButton: false,
                    confirmButtonClass: "btn-success"
                });
                window.location.href = "/" + url;
            });
    });

    $("#btnPesquisar").click(function () {
        var p = $("#p").val();
        window.location.href = "?p=" + p;
    });

    // Email
    $('.messaging-list-item').on('click', function(){
        $('.messaging-list-item').removeClass('current');
        $(this).addClass('current');
        if(emailAntigo != ""){
            $(emailAntigo).hide();
        }
        var code = $(this).data('code');
        $("#email-"+code).show();
        emailAntigo = "#email-"+code;
        
        /* Marca Como Lido */
        $.get( "mensagem/leitura/"+code, function( data ) {
            if(data.error){
                alert('Ocorreu um error.!');
            }
        });

    });

    $("#listaTelas").change(function(e){
        var valores = $(this).val();
        if(jQuery.inArray('avaliacao', valores) >= 1 || jQuery.inArray('avaliacao', valores) == 0){
            $("#areaDadosAvaliacao").show();
        }else{
            $("#areaDadosAvaliacao").hide();
        }
        if(jQuery.inArray('desafio', valores) >= 1 || jQuery.inArray('desafio', valores) == 0){
            $("#areaDadosDesafio").show();
        }else{
            $("#areaDadosDesafio").hide();
        }
    });

    $(".areaVerdadeiroFalse").hide();
    $(".areaAlternativas").hide();
    $("#idTipo").change(function(e){
        var valor = $(this).val();
        if(valor == "1"){
            $(".areaVerdadeiroFalse").hide();
            $(".areaAlternativas").show();
        }
        if(valor == "2"){
            $(".areaAlternativas").hide();
            $(".areaVerdadeiroFalse").hide();
        }
        if(valor == "3"){
            $(".areaAlternativas").hide();
            $(".areaVerdadeiroFalse").show();
        }
    });

    tinymce.init({
        selector: '#texto_caixa_mensagem',
        height: 300,
        menubar: false,
        plugins: [
            'advlist autolink lists link image charmap print preview anchor',
            'searchreplace visualblocks code fullscreen',
            'insertdatetime media table contextmenu paste code'
        ],
        toolbar: 'styleselect | bold italic | alignleft aligncenter alignright alignjustify | outdent indent',
        content_css: [
            '//fonts.googleapis.com/css?family=Lato:300,300i,400,400i',
            '//www.tinymce.com/css/codepen.min.css']
    });

    $(".areaEnviarArquivos").dropzone({ dictDefaultMessage:"Solte os arquivos aqui e faça upload instantâneo para iPIM."});

    $(".areaEnviarOneArquivo").dropzone({ dictDefaultMessage:"Solte o arquivo aqui e faça upload instantâneo para iPIM.", maxFile:1});

    $('.dropify-pergunta').dropify({
        messages: {
            'default': 'Solte a imagem aqui e faça upload instantâneo.',
            'replace': 'Solte a nova imagem aqui para substituir a atual.',
            'remove':  'Remover',
            'error':   'Ooops, something wrong happended.'
        }
    });

    $('.dropify-arquivos').dropify({
        messages: {
            'default': 'Solte os arquivos.',
            'replace': '',
            'remove':  'Remover',
            'error':   'Ooops, something wrong happended.'
        }
    });

    $('.dropify-audio').dropify({
        messages: {
            'default': 'Solte o áudio aqui e faça upload instantâneo.',
            'replace': 'Solte o novo áudio aqui para substituir o atual.',
            'remove':  'Remover',
            'error':   'Ooops, something wrong happended.'
        },
        error: {
            'imageFormat': 'Apenas o formato ({{ value }} é permitido.'
        }
    });

    $("#assunto_grupo_pergunta").change(function (e) {
        var tela = $("#telaPergunta").val();
        var assunto = $("#assunto_grupo_pergunta option:selected").val();
        $.get(urlServidor + 'grupo_lista_pergunta?tela='+tela+'&assunto='+assunto, function(data){
            $("#listaPergunta").html('');
            $.each(data.perguntas, function (index, value) {
                $("#listaPergunta").append('<option value="'+value.id+'">'+value.pergunta+'</otion>');
            });
        });
    });

    $("#telaClicker").change(function (e) {
        var tela = $("#telaClicker option:selected").val();
        $.get(urlServidor + 'grupos_tela/'+tela, function(data){
            $("#grupoClicker").html('');
            $.each(data.results, function (index, value) {
                $("#grupoClicker").append('<option value="'+value.id+'">'+value.dsGrupo+'</otion>');
            });
        });
    });

    $("#telaDiscursiva").change(function (e) {
        var tela = $("#telaDiscursiva option:selected").val();
        $.get(urlServidor + 'grupos_discursiva/'+tela, function(data){
            console.log(data);
            $("#grupoDiscursiva").html('');
            $.each(data.results, function (index, value) {
                $("#grupoDiscursiva").append('<option value="'+value.id+'">'+value.dsGrupo+'</otion>');
            });
        });
    });

    setInterval(function(){
        $(".mce-widget.mce-notification.mce-notification-warning.mce-has-close.mce-in").hide();
    }, 1000);

    $("#perfilAdmin").change(function (e) {
        NProgress.start();
        var idGrupo = $("#perfilAdmin option:selected").val();
        window.location.href = urlServidor + "grupo_administrador/atualizar_perfil_admin/" + idGrupo;
    });
});

Chart.pluginService.register({
    beforeRender: function (chart) {
        if (chart.config.options.showAllTooltips) {
            // create an array of tooltips
            // we can't use the chart tooltip because there is only one tooltip per chart
            chart.pluginTooltips = [];
            chart.config.data.datasets.forEach(function (dataset, i) {
                chart.getDatasetMeta(i).data.forEach(function (sector, j) {
                    chart.pluginTooltips.push(new Chart.Tooltip({
                        _chart: chart.chart,
                        _chartInstance: chart,
                        _data: chart.data,
                        _options: chart.options.tooltips,
                        _active: [sector]
                    }, chart));
                });
            });

            // turn off normal tooltips
            chart.options.tooltips.enabled = false;
        }
    },
    afterDraw: function (chart, easing) {
        if (chart.config.options.showAllTooltips) {
            // we don't want the permanent tooltips to animate, so don't do anything till the animation runs atleast once
            if (!chart.allTooltipsOnce) {
                if (easing !== 1)
                    return;
                chart.allTooltipsOnce = true;
            }

            // turn on tooltips
            chart.options.tooltips.enabled = true;
            Chart.helpers.each(chart.pluginTooltips, function (tooltip) {
                tooltip.initialize();
                tooltip.update();
                // we don't actually need this since we are not animating tooltips
                tooltip.pivot();
                tooltip.transition(easing).draw();
            });
            chart.options.tooltips.enabled = false;
        }
    }
})

