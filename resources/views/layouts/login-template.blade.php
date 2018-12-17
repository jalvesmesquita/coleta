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

        <title>@yield('titulo')</title>

        <!-- Bootstrap core CSS -->
        <link href="/css/bootstrap.min.css" rel="stylesheet">
        <link href="/css/bootstrap-reset.css" rel="stylesheet">
        <!--external css-->
        <link rel="/stylesheet" href="css/owl.carousel.css" type="text/css">
        <!-- Custom styles for this template -->
        <link href="/css/style.css" rel="stylesheet">
        <link href="/css/style-responsive.css" rel="stylesheet" />

        <!--Datatables] -->
        <link href="/css/datatables.min.css" rel="stylesheet" />

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

@yield('conteudo')

@stack('scripts')

<!-- js placed at the end of the document so the pages load faster -->

<script src="/js/bootstrap.min.js"></script>
<script src="/js/jquery.scrollTo.min.js"></script>
<script src="/js/jquery.nicescroll.js" type="text/javascript"></script>
<script src="/js/jquery.sparkline.js" type="text/javascript"></script>
<script src="/js/owl.carousel.js" ></script>
<script src="/js/jquery.customSelect.min.js" ></script>
<script src="/js/respond.min.js"></script>

<script src="/js/sweetalert2.js"></script>

<script class="include" type="text/javascript" src="/js/jquery.dcjqaccordion.2.7.js"></script>
<script class="include" type="text/javascript" src="js/jquery.dcjqaccordion.2.7.js"></script>

<!--common script for all pages-->
<script src="/js/common-scripts.js"></script>

<!--script for this page-->
<script src="/js/sparkline-chart.js"></script>
<script src="/js/count.js"></script>

</html>