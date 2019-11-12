<!DOCTYPE html>
<html>
<head lang="en">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>iPIM</title>

    <link href="{{ url('v2/common/img/favicon.png') }}" rel="icon" type="image/png">

    <!-- HTML5 shim and Respond.js for < IE9 support of HTML5 elements and media queries -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->

    <!-- Vendors Styles -->
    <!-- v1.0.0 -->
    <link rel="stylesheet" type="text/css" href="{{ url('v2/vendors/bootstrap/dist/css/bootstrap.min.css') }}">


    <link rel="stylesheet" type="text/css" href="{{ url('v2/vendors/jscrollpane/style/jquery.jscrollpane.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('v2/vendors/ladda/dist/ladda-themeless.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('v2/vendors/select2/dist/css/select2.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('v2/vendors/eonasdan-bootstrap-datetimepicker/build/css/bootstrap-datetimepicker.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('v2/vendors/fullcalendar/dist/fullcalendar.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('v2/vendors/cleanhtmlaudioplayer/src/player.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('v2/vendors/cleanhtmlvideoplayer/src/player.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('v2/vendors/bootstrap-sweetalert/dist/sweetalert.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('v2/vendors/summernote/dist/summernote.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('v2/vendors/owl.carousel/dist/v2/owl.carousel.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('v2/vendors/ionrangeslider/css/ion.rangeSlider.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('v2/vendors/datatables/media/css/dataTables.bootstrap4.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('v2/vendors/c3/c3.min.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('v2/vendors/chartist/dist/chartist.min.css') }}">

    <!-- v1.4.0 -->
    <link rel="stylesheet" type="text/css" href="{{ url('v2/vendors/nprogress/nprogress.css') }}">
    <link rel="stylesheet" type="text/css" href="{{ url('v2/vendors/jquery-steps/demo/css/jquery.steps.css') }}">
    <!-- v1.4.2 -->
    <link rel="stylesheet" type="text/css" href="{{ url('v2/vendors/bootstrap-select/dist/css/bootstrap-select.min.css') }}">
    <!-- v1.7.0 -->
    <link rel="stylesheet" type="text/css" href="{{ url('v2/vendors/dropify/dist/css/dropify.min.css') }}">

    <!-- Clean UI Styles -->
    <link rel="stylesheet" type="text/css" href="{{ url('v2/common/css/source/main.css') }}">

    <link rel="stylesheet" type="text/css" href="{{ url('v2/css/style.css') }}">

    <!-- Vendors Scripts -->
    <!-- v1.0.0 -->
    <script src="{{ url('v2/vendors/jquery/jquery.min.js') }}"></script>
    <script src="{{ url('v2/vendors/tether/dist/js/tether.min.js') }}"></script>
    <script src="{{ url('v2/vendors/bootstrap/dist/js/bootstrap.min.js') }}"></script>
    <script src="{{ url('v2/vendors/jquery-mousewheel/jquery.mousewheel.min.js') }}"></script>
    <script src="{{ url('v2/vendors/jscrollpane/script/jquery.jscrollpane.min.js') }}"></script>
    <script src="{{ url('v2/vendors/spin.js/spin.js') }}"></script>
    <script src="{{ url('v2/vendors/ladda/dist/ladda.min.js') }}"></script>
    <script src="{{ url('v2/vendors/select2/dist/js/select2.full.min.js') }}"></script>
    <script src="{{ url('v2/vendors/html5-form-validation/dist/jquery.validation.min.js') }}"></script>
    <script src="{{ url('v2/vendors/jquery-typeahead/dist/jquery.typeahead.min.js') }}"></script>
    <script src="{{ url('v2/vendors/jquery-mask-plugin/dist/jquery.mask.min.js') }}"></script>
    <script src="{{ url('v2/vendors/autosize/dist/autosize.min.js') }}"></script>
    <script src="{{ url('v2/vendors/bootstrap-show-password/bootstrap-show-password.min.js') }}"></script>
    <script src="{{ url('v2/vendors/moment/min/moment.min.js') }}"></script>
    <script src="{{ url('v2/vendors/eonasdan-bootstrap-datetimepicker/build/js/bootstrap-datetimepicker.min.js') }}"></script>
    <script src="{{ url('v2/vendors/fullcalendar/dist/fullcalendar.min.js') }}"></script>
    <script src="{{ url('v2/vendors/cleanhtmlaudioplayer/src/jquery.cleanaudioplayer.js') }}"></script>
    <script src="{{ url('v2/vendors/cleanhtmlvideoplayer/src/jquery.cleanvideoplayer.js') }}"></script>
    <script src="{{ url('v2/vendors/bootstrap-sweetalert/dist/sweetalert.min.js') }}"></script>
    <script src="{{ url('v2/vendors/remarkable-bootstrap-notify/dist/bootstrap-notify.min.js') }}"></script>
    <script src="{{ url('v2/vendors/summernote/dist/summernote.min.js') }}"></script>
    <script src="{{ url('v2/vendors/owl.carousel/dist/owl.carousel.min.js') }}"></script>
    <script src="{{ url('v2/vendors/ionrangeslider/js/ion.rangeSlider.min.js') }}"></script>
    <script src="{{ url('v2/vendors/nestable/jquery.nestable.js') }}"></script>
    <script src="{{ url('v2/vendors/datatables/media/js/jquery.dataTables.min.js') }}"></script>
    <script src="{{ url('v2/vendors/datatables/media/js/dataTables.bootstrap4.min.js') }}"></script>
    <script src="{{ url('v2/vendors/datatables-fixedcolumns/js/dataTables.fixedColumns.js') }}"></script>
    <script src="{{ url('v2/vendors/datatables-responsive/js/dataTables.responsive.js') }}"></script>
    <script src="{{ url('v2/vendors/editable-table/mindmup-editabletable.js') }}"></script>
    <script src="{{ url('v2/vendors/d3/d3.min.js') }}"></script>
    <script src="{{ url('v2/vendors/c3/c3.min.js') }}"></script>
    <script src="{{ url('v2/vendors/chartist/dist/chartist.min.js') }}"></script>
    <script src="{{ url('v2/vendors/peity/jquery.peity.min.js') }}"></script>
    <!-- v1.0.1 -->
    <script src="{{ url('v2/vendors/chartist-plugin-tooltip/dist/chartist-plugin-tooltip.min.js') }}"></script>
    <!-- v1.1.1 -->
    <script src="{{ url('v2/vendors/gsap/src/minified/TweenMax.min.js') }}"></script>
    <script src="{{ url('v2/vendors/hackertyper/hackertyper.js') }}"></script>
    <script src="{{ url('v2/vendors/jquery-countTo/jquery.countTo.js') }}"></script>
    <!-- v1.4.0 -->
    <script src="{{ url('v2/vendors/nprogress/nprogress.js') }}"></script>
    <script src="{{ url('v2/vendors/jquery-steps/build/jquery.steps.min.js') }}"></script>
    <!-- v1.4.2 -->
    <script src="{{ url('v2/vendors/bootstrap-select/dist/js/bootstrap-select.min.js') }}"></script>
    <script src="{{ url('v2/vendors/chart.js/src/Chart.bundle.min.js') }}"></script>
    <!-- v1.7.0 -->
    <script src="{{ url('v2/vendors/dropify/dist/js/dropify.min.js') }}"></script>

    <!-- Clean UI Scripts -->
    <script src="{{ url('v2/common/js/common.js') }}"></script>
    <script src="{{ url('v2/common/js/demo.temp.js') }}"></script>

    <script src="{{ url('v2/js/bootbox.min.js') }}"></script>
    <script src="{{ url('v2/js/function.js') }}"></script>

    <style>
        body{
            background: #FFF !important;
        }
        .panel{
            border: none !important;
        }
        .footer{
            text-align: left;
        }
    </style>
</head>

<body>

    <section class="panel">
        <div style="max-width: 800px;">
            <div class="row">
                <div class="col-xl-12">
                    <img src="{{ url('assets/images/reune-cursos-logotipo-1.png') }}" alt="iPIM" style="width: 100%">
                </div>
            </div>

            <div class="row margin-top-30">
                <div class="col-xl-12">
                    <h4 class="text-center">@yield('titulo')</h4>
                </div>

                <div class="col-xl-12 text-justify margin-top-20">
                    <p>@yield('texto')</p>
                </div>

                @if(isset($botao))
                    <div class="col-xl-12 text-center margin-top-30">
                        <a href="@yield('link')" class="btnClick">
                            <img src="@yield('urlImagem')">
                        </a>
                        <br/><br/>
                    </div>
                @endif
            </div>

            <div class="row margin-top-50">
                <div class="col-xl-12 footer">
                    <img src="{{ url('assets/images/reune-cursos-logotipo-1.png') }}" alt="Reúne" style="width: 100%">
                </div>
                <div class="col-xl-12 text-justify  margin-top-10">
                    <p>Essa mensagem é enviada automaticamente, por isso, não responda este e-mail.
                        Se necessitar de suporte ou informação, entre em contato:
                        <a href="mailto:contato@reunecursos.com.br">contato@reunecursos.com.br</a>
                    </p>
                </div>
            </div>

        </div>
    </section>

</body>
</html>
