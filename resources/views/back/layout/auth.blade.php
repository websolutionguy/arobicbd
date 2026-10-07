
<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <title>Arobic BD - Login</title>

  <!-- Google Font: Source Sans Pro -->
  <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Source+Sans+Pro:300,400,400i,700&display=fallback">
  <!-- Font Awesome Icons -->
  <link rel="stylesheet" href="{{ asset('/back/css/all.min.css') }}">
  <!-- icheck bootstrap -->
  <link rel="stylesheet" href="{{ asset('/back/css/icheck-bootstrap.min.css') }}">
  <!-- Theme style -->
  <link rel="stylesheet" href="{{ asset('/back/css/adminlte.min.css') }}">
  
</head>
<body class="hold-transition login-page">

    <main>@yield('content')</main>
  
<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="{{ asset('back/js/jquery.min.js') }}"></script>
<!-- Bootstrap -->
<script src="{{ asset('back/js/bootstrap.bundle.min.js') }}"></script>
<!-- backLTE App -->
<script src="{{ asset('back/js/adminlte.js') }}"></script>

</body>
</html>