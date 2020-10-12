<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="Askbootstrap">
    <meta name="author" content="Askbootstrap">
    <title>VIDOE - Video Streaming Website HTML Template</title>
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="{{ url('user/img/favicon.png') }}">
    <!-- Bootstrap core CSS-->
    <link href="{{ url('user/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- Custom fonts for this template-->
    <link href="{{ url('user/font/css/all.min.css') }}" rel="stylesheet" type="text/css">
    <!-- Custom styles for this template-->
    <link href="{{ url('user/css/partak.css') }}" rel="stylesheet">
    <!-- Owl Carousel -->
    <link rel="stylesheet" href="{{ url('user/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ url('user/css/owl.theme.css') }}">
</head>

<body class="login-main-body" dir="rtl">
    <section class="login-main-wrapper">
        <div class="container-fluid pl-0 pr-0">
            <div class="row no-gutters">

                <div class="col-md-5 p-5 bg-light full-height">
                    <div class="login-main-left">
                        <div class="text-center mb-5 login-main-left-header pt-4">
                            <img src="{{ url('user/img/icon.png') }}" class="img-fluid" alt="LOGO">
                            <h5 class="mt-4 mb-3">سایت اشتراک ویدیو آپارات</h5>
                        </div>
                        @yield('form')
                    </div>
                </div>
                <div class="col-md-7 login-img-side">
                    <img src="{{ url('user/img/login-side3.jpg') }}" class="w-100 h-100" alt="">
                </div>
            </div>
        </div>
    </section>
    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('user/js/jquery.min.js') }}"></script>
    <script src="{{ url('user/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ url('user/js/jquery.easing.min.js') }}"></script>
    <!-- Owl Carousel -->
    <script src="{{ url('user/js/owl.carousel.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ url('user/js/custom.js') }}"></script>
</body>

</html>
