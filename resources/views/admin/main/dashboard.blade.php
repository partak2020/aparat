<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="video sharing service">
    <meta name="author" content="PARTAK">

    <title>داشبورد مدیریت</title>
    <!-- Favicon Icon -->
    <link rel="icon" type="image/png" href="{{ url('admin/img/favicon.png') }}"><!--addressed from "public" folder-->
    <!--use bootstrap files-->
    <link rel="stylesheet" href="{{ url('admin/css/bootstrap.min.css') }}"><!--addressed from "public" folder-->
    <!--use self define styles-->
    <link rel="stylesheet" href="{{ url('admin/css/admin.css') }}"><!--addressed from "public" folder-->
</head>

<body id="page-top" dir="rtl">
    <nav class="navbar navbar-expand navbar-light bg-white static-top partak-nav sticky-top">
        @include('admin.layouts.navbar')
    </nav>
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="sidebar navbar-nav">
            @include('admin.layouts.sidebar')
        </ul>
        <div id="content-wrapper">
            <div class="container-fluid pb-0">
                <div class="top-mobile-search">
                    <div class="row">
                        <div class="col-md-12">
                            <form class="mobile-search">
                                <div class="input-group">
                                    <input type="text" placeholder="Search for..." class="form-control">
                                    <div class="input-group-append">
                                        <button type="button" class="btn btn-dark"></button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <hr> 
                @yield('content')
            </div>
        </div>
        <!-- /.container-fluid -->
        <!-- Sticky Footer -->
        @include('admin.layouts.footer')
    </div>
    <!-- /.content-wrapper -->
    </div>
    <!-- /#wrapper -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top" href="#page-top">
        <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-chevron-up" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
            <path fill-rule="evenodd" d="M7.646 4.646a.5.5 0 0 1 .708 0l6 6a.5.5 0 0 1-.708.708L8 5.707l-5.646 5.647a.5.5 0 0 1-.708-.708l6-6z"/>
          </svg>
    </a>
    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog modal-sm modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">اخطار</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                  <span aria-hidden="true"><svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-x" fill="currentColor" xmlns="http://www.w3.org/2000/svg">
                    <path fill-rule="evenodd" d="M4.646 4.646a.5.5 0 0 1 .708 0L8 7.293l2.646-2.647a.5.5 0 0 1 .708.708L8.707 8l2.647 2.646a.5.5 0 0 1-.708.708L8 8.707l-2.646 2.647a.5.5 0 0 1-.708-.708L7.293 8 4.646 5.354a.5.5 0 0 1 0-.708z"/>
                  </svg></span>
                  </button>
                </div>
                <div class="modal-body">میخواهید خارج شوید؟</div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">خیر</button>
                    <a class="btn btn-primary" href="login.html">خروج</a>
                </div>
            </div>
        </div>
    </div>
    <!-- Bootstrap core JavaScript-->
    <script src="{{ url('admin/js/jquery.min.js') }}"></script>
    <script src="{{ url('admin/js/bootstrap.bundle.min.js') }}"></script>
    <!-- Core plugin JavaScript-->
    <script src="{{ url('admin/js/jquery.easing.min.js') }}"></script>
    <!-- Owl Carousel -->
    <script src="{{ url('admin/js/owl.carousel.js') }}"></script>
    <!-- Custom scripts for all pages-->
    <script src="{{ url('admin/js/custom.js') }}"></script>
</body>

</html>