@extends('layout.header-left')


@section('header')

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
<link rel="icon" href="{{ asset('/images/fav.png') }}" type="image/png">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="icon" href="images/favicon.ico" type="image/ico" />

    <title>Taletalk Marketplace | Home</title>

    <!-- Bootstrap -->
    <link href="{{asset('template-vendor/bootstrap/dist/css/bootstrap.min.css')}}" rel="stylesheet">
    <!-- Font Awesome -->
    <link href="{{asset('template-vendor/font-awesome/css/font-awesome.min.css')}}" rel="stylesheet">
    <!-- NProgress -->
    <link href="{{asset('template-vendor/nprogress/nprogress.css')}}" rel="stylesheet">
    <!-- iCheck -->
    <link href="{{asset('template-vendor/iCheck/skins/flat/green.css')}}" rel="stylesheet">

    <!-- bootstrap-progressbar -->
    <link href="{{asset('template-vendor/bootstrap-progressbar/css/bootstrap-progressbar-3.3.4.min.css')}}" rel="stylesheet">
    <!-- JQVMap -->
    <link href="{{asset('template-vendor/jqvmap/dist/jqvmap.min.css')}}" rel="stylesheet"/>
    <!-- bootstrap-daterangepicker -->
    <link href="{{asset('template-vendor/bootstrap-daterangepicker/daterangepicker.css')}}" rel="stylesheet">

    <!-- Custom Theme Style -->
    <link href="{{asset('build/css/custom.min.css')}}" rel="stylesheet">


    <style>
        .tile_count .tile_stats_count {
            padding: 0 10px 0 20px;
            text-overflow: ellipsis;
            overflow: hidden;
            white-space: nowrap;
            position: relative;
            display: inline-table;
        }
    </style>
  </head>

  <body class="nav-md">
    <div class="container body">
      <div class="main_container">

@endsection



        <!-- page content -->


        @section('content')


        <!-- page content -->
        <div class="right_col" role="main">





        </div>
        <!-- /page content -->

        <!-- footer content -->
        <footer>
          <div class="pull-right">

          </div>
          <div class="clearfix"></div>
        </footer>
        <!-- /footer content -->
      </div>
    </div>

    <!-- jQuery -->
    <script src="{{asset('template-vendor/jquery/dist/jquery.min.js')}}"></script>
    <!-- Bootstrap -->
    <script src="{{asset('template-vendor/bootstrap/dist/js/bootstrap.bundle.min.js')}}"></script>
    <!-- FastClick -->
    <script src="{{asset('template-vendor/fastclick/lib/fastclick.js')}}"></script>
    <!-- NProgress -->
    <script src="{{asset('template-vendor/nprogress/nprogress.js')}}"></script>
    <!-- Chart.js -->
    <script src="{{asset('template-vendor/Chart.js/dist/Chart.min.js')}}"></script>
    <!-- gauge.js -->
    <script src="{{asset('template-vendor/gauge.js/dist/gauge.min.js')}}"></script>
    <!-- bootstrap-progressbar -->
    <script src="{{asset('template-vendor/bootstrap-progressbar/bootstrap-progressbar.min.js')}}"></script>
    <!-- iCheck -->
    <script src="{{asset('template-vendor/iCheck/icheck.min.js')}}"></script>
    <!-- Skycons -->
    <script src="{{asset('template-vendor/skycons/skycons.js')}}"></script>
    <!-- Flot -->
    <script src="{{asset('template-vendor/Flot/jquery.flot.js')}}"></script>
    <script src="{{asset('template-vendor/Flot/jquery.flot.pie.js')}}"></script>
    <script src="{{asset('template-vendor/Flot/jquery.flot.time.js')}}"></script>
    <script src="{{asset('template-vendor/Flot/jquery.flot.stack.js')}}"></script>
    <script src="{{asset('template-vendor/Flot/jquery.flot.resize.js')}}"></script>
    <!-- Flot plugins -->
    <script src="{{asset('template-vendor/flot.orderbars/js/jquery.flot.orderBars.js')}}"></script>
    <script src="{{asset('template-vendor/flot-spline/js/jquery.flot.spline.min.js')}}"></script>
    <script src="{{asset('template-vendor/flot.curvedlines/curvedLines.js')}}"></script>
    <!-- DateJS -->
    <script src="{{asset('template-vendor/DateJS/build/date.js')}}"></script>
    <!-- JQVMap -->
    <script src="{{asset('template-vendor/jqvmap/dist/jquery.vmap.js')}}"></script>
    <script src="{{asset('template-vendor/jqvmap/dist/maps/jquery.vmap.world.js')}}"></script>
    <script src="{{asset('template-vendor/jqvmap/examples/js/jquery.vmap.sampledata.js')}}"></script>
    <!-- bootstrap-daterangepicker -->
    <script src="{{asset('template-vendor/moment/min/moment.min.js')}}"></script>
    <script src="{{asset('template-vendor/bootstrap-daterangepicker/daterangepicker.js')}}"></script>

    <!-- Custom Theme Scripts -->
    <script src="{{asset('build/js/custom.min.js')}}"></script>


  </body>
</html>

@endsection
