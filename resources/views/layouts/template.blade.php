<!DOCTYPE html>
<html>
<head>
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description" content="">
        <meta name="author" content="Mosaddek">
        <meta name="keyword" content="FlatLab, Dashboard, Bootstrap, Admin, Template, Theme, Responsive, Fluid, Retina">
        <meta name="csrf-token" content="{{ csrf_token() }}">
        <link rel="shortcut icon" href="img/favicon.png">

        <title>DashBoard - Coleta</title>

        <!-- Bootstrap core CSS -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/bootstrap-reset.css" rel="stylesheet">
        <!--external css-->
        <link rel="/stylesheet" href="css/owl.carousel.css" type="text/css">
        <!-- Custom styles for this template -->
        <link href="/css/style.css" rel="stylesheet">
        <link href="/css/style-responsive.css" rel="stylesheet" />

        {{--<link href="/css/multi-select.css" rel="stylesheet" />--}}

        <link href="/assets/select2/css/select2.min.css" rel="stylesheet" />

        <!--Datatables] -->
        <link href="/css/datatables.min.css" rel="stylesheet" />
        @stack('estilo')
        <!--Font Awersome] -->
        <link href="/css/font-awesome.css" rel="stylesheet" />

        <link href="/css/sweetalert2.css" rel="stylesheet" />

        <!-- HTML5 shim and Respond.js IE8 support of HTML5 tooltipss and media queries -->
        <!--[if lt IE 9]>
        <script src="js/html5shiv.js"></script>
        <script src="js/respond.min.js"></script>

        <!--[endif]-->

        <script src="/js/jquery.js"></script>
        <script src="/js/datatables.min.js" type="text/javascript"></script>
    </head>

<body>
<section id="container">
    <!--header start-->
    <header class="header white-bg">
        <div class="sidebar-toggle-box">
            <div data-original-title="Barra de navegação" data-placement="right" class="icon-reorder tooltips"></div>
        </div>
        <!--logo start-->
        <a href="" class="logo">Coleta<span>Seletiva</span></a>
        <!--logo end-->
        <div class="nav notify-row" id="top_menu">

        </div>
        <div class="top-nav ">
            <ul class="nav pull-right top-menu">
                <!-- user login dropdown start-->
                <li class="dropdown">
                    <a data-toggle="dropdown" class="dropdown-toggle" href="{{ route('home') }}" aria-expanded="false">
                        <img alt="" src="{!! asset("img/avatar1_small.jpg") !!}">
                        <span class="username">{{ auth()->user()->name }}</span>
                        <b class="caret"></b>
                    </a>
                    <ul class="dropdown-menu extended logout dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-144px, 44px, 0px);">
                        <div class="log-arrow-up"></div>
                        <li><a href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();"><i class="fa fa-key"></i> Log Out</a></li>
                    </ul>
                </li>
            </ul>
        </div>
    </header>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
        {{ csrf_field() }}
    </form>
    <!--header end-->
    <!--sidebar start-->
    <aside>
        <div id="sidebar"  class="nav-collapse">
            <!-- sidebar menu start-->
            <ul class="sidebar-menu" id="nav-accordion">
                <li>
                    <a class="active" href="{{ route('home') }}">
                        <i class="fa fa-tachometer"></i>
                        <span>Dashboard</span>
                    </a>
                </li>

                <li class="sub-menu">
                    <a href="javascript:;" >
                        <i class="icon-laptop"></i>
                        <span>GERENCIAMENTO</span>
                    </a>
                    <ul class="sub">
                        <li><a href="{{ action('MotoristasController@index') }}">Motoristas</a></li>
                        <li><a href="{{ action('VeiculosController@index') }}">Veiculos</a></li>
                        <li><a href="{{ action('AjudantesController@index') }}">Ajudantes</a></li>
                        <li><a href="{{ action('UsuariosController@index') }}">Usuarios</a></li>
                        <li><a href="{{ action('ColetaController@index') }}">Coletas</a></li>
                    </ul>
                </li>

            </ul>
            <!-- sidebar menu end-->
        </div>
    </aside>
</section>

<section class="wrapper">
    <!--state overview start-->
    <section id="main-content">

        @yield('conteudo')
        
    </section>
    <!--state overview ends-->
</section>

@stack('scripts')

</body>

<!-- js placed at the end of the document so the pages load faster -->



<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.scrollTo.min.js"></script>
<script src="/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="/js/jquery.sparkline.js" type="text/javascript"></script>
<script src="/js/owl.carousel.js" ></script>
<script src="/js/jquery.customSelect.min.js" ></script>
<script src="/js/respond.min.js"></script>
<script src="/js/sweetalert2.js"></script>

    <!--select2-->
<script type="text/javascript" src="/assets/select2/js/select2.min.js"></script>
<script type="text/javascript" src="/assets/bootstrap-inputmask/bootstrap-inputmask.min.js"></script>

<script type="text/javascript" src="/assets/fuelux/js/spinner.min.js"></script>
<script type="text/javascript" src="/assets/bootstrap-fileupload/bootstrap-fileupload.js"></script>

<script type="text/javascript" src="/assets/bootstrap-wysihtml5/bootstrap-wysihtml5.js"></script>
<script type="text/javascript" src="/assets/bootstrap-datepicker/js/bootstrap-datepicker.js"></script>
<script type="text/javascript" src="/assets/bootstrap-datetimepicker/js/bootstrap-datetimepicker.js"></script>
<script type="text/javascript" src="/assets/bootstrap-daterangepicker/moment.min.js"></script>
<script type="text/javascript" src="/assets/bootstrap-daterangepicker/daterangepicker.js"></script>



<script type="text/javascript" src="/assets/bootstrap-timepicker/js/bootstrap-timepicker.js"></script>
<script type="text/javascript" src="/assets/jquery-multi-select/js/jquery.multi-select.js"></script>
<script type="text/javascript" src="/assets/jquery-multi-select/js/jquery.quicksearch.js"></script>

<script class="include" type="text/javascript" src="/js/jquery.dcjqaccordion.2.7.js"></script>
<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>

<!--common script for all pages-->
<script src="/js/common-scripts.js"></script>

<!--script for this page-->
<script src="/js/sparkline-chart.js"></script>
<script src="/js/count.js"></script>

</html>