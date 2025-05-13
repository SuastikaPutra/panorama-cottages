<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title -->
    <title>@yield('title')</title>

    <!-- Favicon -->
    <link rel="icon" href="{{ asset('favicon.ico') }}">

    <!-- Core Stylesheet -->
    <link rel="stylesheet" href="{{ asset('assets/style.css') }}">
    <link rel="stylesheet" href="{{ asset('assets/fontawesome-free-6.7.2-web/css/all.min.css') }}">

</head>
</body>

<!-- Preloader -->
<div class="preloader d-flex align-items-center justify-content-center">
    <div class="cssload-container">
        <div class="cssload-loading"><i></i><i></i><i></i><i></i></div>
    </div>
</div>

@include('layouts.header')
@yield('content')
@include('layouts.footer')

<!-- Logo WhatsApp -->
<a href="https://wa.me/6281237208224" class="whatsapp-icon">
    <img src="{{ asset('assets/img/icon-wa.png') }}" alt="WhatsApp" />
</a>

<!-- ##### All Javascript Script ##### -->
<!-- jQuery-2.2.4 js -->
<script src="{{ asset('assets/js/jquery/jquery-2.2.4.min.js') }}"></script>
<!-- Popper js -->
<script src="{{ asset('assets/js/bootstrap/popper.min.js') }}"></script>
<!-- Bootstrap js -->
<script src="{{ asset('assets/js/bootstrap/bootstrap.min.js') }}"></script>
<!-- All Plugins js -->
<script src="{{ asset('assets/js/plugins/plugins.js') }}"></script>
<!-- Active js -->
<script src="{{ asset('assets/js/active.js') }}"></script>
</body>

</html>
