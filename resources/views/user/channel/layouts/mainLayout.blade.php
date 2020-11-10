<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Askbootstrap">
    <meta name="author" content="Askbootstrap">
    <title>@yield('pageTitle')</title>
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="{{ url('user/img/favicon.png') }}">
    <!-- Bootstrap core CSS-->

    <link rel="stylesheet" href="{{ url('user/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('user/font/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('user/css/partak.css') }}">
    <link rel="stylesheet" href="{{ url('user/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ url('user/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ url('user/css/bootstrap-rtl.css') }}">
    <link rel="stylesheet" href="{{ url('user/css/bootstrap-rtl.min.css') }}">
</head>

<body id="page-top">
    @include('user.layouts.notification')
    <nav class="navbar navbar-expand navbar-light bg-white static-top partak-nav sticky-top">
        @include('user.layouts.navbar')
    </nav>
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="sidebar navbar-nav pb-5 bg-light">
            @include('user.layouts.sidebar')
        </ul>
        @yield('content')
    </div>
    <!-- /.content-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    {{-- @include('user.layouts.logout') --}}

    <script src="{{ url('user/js/jquery.min.js') }}"></script>
    <script src="{{ url('user/js/bootstrap.bundle.min.js') }}"></script>
    <script src="{{ url('user/js/owl.carousel.js') }}"></script>
    <script src="{{ url('user/js/jquery.easing.min.js') }}"></script>
    <script src="{{ url('user/js/custom.js') }}"></script>

</body>

</html>
