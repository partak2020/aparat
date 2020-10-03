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
    <link rel="icon" type="image/png" href="img/favicon.png">
    <!-- Bootstrap core CSS-->

    <link rel="stylesheet" href="{{url("user/font/css/all.min.css") }}">
    <link rel="stylesheet" href="{{url("user/css/osahan.css") }}">
    <link rel="stylesheet" href="{{url("user/css/bootstrap.min.css") }}">
    <link rel="stylesheet" href="{{url("user/css/owl.carousel.css") }}">
    <link rel="stylesheet" href="{{url("user/css/owl.theme.css") }}">
    <link rel="stylesheet" href="{{url("user/css/bootstrap-rtl.css") }}">
    <link rel="stylesheet" href="{{url("user/css/bootstrap-rtl.min.css") }}">
</head>

<body id="page-top">
@include('user.layouts.navbar')
    <div id="wrapper">
        <!-- Sidebar -->
       @include('user.layouts.sidebar')
        
        <!-- /.container-fluid -->
        <!-- Sticky Footer -->
       @include('user.layouts.footer')
    </div>
    <!-- /.content-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
        <i class="fas fa-angle-up"></i>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true">×</span>
                  </button>
                </div>
                <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="login.html">Logout</a>
                </div>
            </div>
        </div>
    </div>
    <link rel="stylesheet" href="{{url("user/js/jquery.min.js") }}">
    <link rel="stylesheet" href="{{url("user/js/bootstrap.bundle.min.js") }}">
    <link rel="stylesheet" href="{{url("user/js/jquery.easing.min.js") }}">
    <link rel="stylesheet" href="{{url("user/js/owl.carousel.js") }}">
    <link rel="stylesheet" href="{{url("user/js/custom.js") }}">
    
</body>

</html>