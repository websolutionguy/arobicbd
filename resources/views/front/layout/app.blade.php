<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge" />
    <meta name="description" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
    <link rel="shortcut icon" type="image/x-icon" href="/images/favicon.svg" />

    <title>@yield('title') | Arobic Recruitment Consultant</title>

    <link rel="shortcut icon" href="{{ asset('/front/images/fev.png') }}" type="image/svg" />
    <link rel="stylesheet" href="{{ asset('/front/css/bootstrap.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/css/lineicons.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/css/tiny-slider.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/css/glightbox.min.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/css/style.css') }}" />
    <link rel="stylesheet" href="{{ asset('/front/css/custom.css') }}" />
</head>
<body>

    
    @include('front.partials.header');
    <main>@yield('content')</main>
    @include('front.partials.footer');
    

    <script src="https://code.jquery.com/jquery-3.6.1.min.js"></script>
    <script data-cfasync="false" src="{{ asset('front/js/email-decode.min.js') }}"></script>
    <script src="{{ asset('front/js/bootstrap.bundle.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('front/js/glightbox.min.js') }}" type="text/javascript"></script>
    <script src="{{ asset('front/js/main.js') }}" type="text/javascript"></script>
    <script src="{{ asset('front/js/tiny-slider.js') }}" type="text/javascript"></script>
    <script type="text/javascript">

    //===== close navbar-collapse when a  clicked
    let navbarTogglerNine = document.querySelector(
      ".navbar-nine .navbar-toggler"
    );
    navbarTogglerNine.addEventListener("click", function () {
      navbarTogglerNine.classList.toggle("active");
    });

    // ==== left sidebar toggle
    let sidebarLeft = document.querySelector(".sidebar-left");
    let overlayLeft = document.querySelector(".overlay-left");
    let sidebarClose = document.querySelector(".sidebar-close .close");

    overlayLeft.addEventListener("click", function () {
      sidebarLeft.classList.toggle("open");
      overlayLeft.classList.toggle("open");
    });
    sidebarClose.addEventListener("click", function () {
      sidebarLeft.classList.remove("open");
      overlayLeft.classList.remove("open");
    });

    // ===== navbar nine sideMenu
    let sideMenuLeftNine = document.querySelector(".navbar-nine .menu-bar");

    sideMenuLeftNine.addEventListener("click", function () {
      sidebarLeft.classList.add("open");
      overlayLeft.classList.add("open");
    });

    </script>
    <script src="{{ asset('front/js/rocket-loader.min.js') }}" data-cf-settings="ec24e8d40437bdb3363561eb-|49" defer=""></script>
</body>
</html>

@yield('script')