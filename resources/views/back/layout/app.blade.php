
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Arobic BD - Dashboard</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('/back/css/all.min.css') }}">
  <!-- overlayScrollbars -->
  <link rel="stylesheet" href="{{ asset('/back/css/OverlayScrollbars.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('/back/css/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/back/css/adminlte.min.css') }}">
  <!-- summernote -->
  <link rel="stylesheet" href="{{ asset('/back/css/summernote-bs4.min.css') }}">
  <!-- CodeMirror -->
  <link rel="stylesheet" href="{{ asset('/back/css/codemirror.css') }}">
  <link rel="stylesheet" href="{{ asset('/back/css/monokai.css') }}">

  
</head>
<body class="hold-transition dark-mode sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">

<div class="wrapper">

  @include('back.partials.header');
  @include('back.partials.nav');
  @include('back.partials.sidebar');

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <main>@yield('content')</main>
  </div>
  <!-- /.content-wrapper -->

  @include('back.partials.footer');

</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('back/js/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('back/js/bootstrap.bundle.min.js') }}"></script>
<!-- overlayScrollbars -->
<script src="{{ asset('back/js/jquery.overlayScrollbars.min.js') }}"></script>
<!-- backLTE App -->
<script src="{{ asset('back/js/adminlte.js') }}"></script>
<!-- Summernote -->
<script src="{{ asset('back/js/summernote-bs4.min.js') }}"></script>
<!-- CodeMirror -->
<script src="{{ asset('back/js/codemirror.js') }}"></script>
<script src="{{ asset('back/js/css.js') }}"></script>
<script src="{{ asset('back/js/xml.js') }}"></script>
<script src="{{ asset('back/js/htmlmixed.js') }}"></script>

<!-- PAGE PLUGINS -->
<!-- jQuery Mapael -->
<script src="{{ asset('/back/js/jquery.mousewheel.js') }}"></script>
<script src="{{ asset('/back/js/raphael.min.js') }}"></script>
<script src="{{ asset('/back/js/jquery.mapael.min.js') }}"></script>
<script src="{{ asset('/back/js/usa_states.min.js') }}"></script>
<!-- ChartJS -->
<script src="{{ asset('/back/js/Chart.min.js') }}"></script>

<!-- backLTE for demo purposes -->
<script src="{{ asset('/back/js/demo.js') }}"></script>
<!-- backLTE dashboard demo (This is only for demo purposes) -->
<script src="{{ asset('/back/js/dashboard2.js') }}"></script>
</body>
</html>
@yield('script')