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

    <link rel="stylesheet" href="{{ url('user/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ url('user/font/css/all.min.css') }}">
    <link rel="stylesheet" href="{{ url('user/css/partak.css') }}">
    <link rel="stylesheet" href="{{ url('user/css/owl.carousel.css') }}">
    <link rel="stylesheet" href="{{ url('user/css/owl.theme.css') }}">
    <link rel="stylesheet" href="{{ url('user/css/bootstrap-rtl.css') }}">
    <link rel="stylesheet" href="{{ url('user/css/bootstrap-rtl.min.css') }}">
</head>

<body id="page-top">
    <nav class="navbar navbar-expand navbar-light bg-white static-top partak-nav sticky-top">
        <button class="btn btn-link btn-sm text-secondary mr-4 ml-2 order-sm-0" id="sidebarToggle">
            <i class="fas fa-bars"></i>
        </button>
        <a class="navbar-brand mr-1" href="index.html">
            <img class="img-fluid" alt="" src="{{ url('user/img/logo.png') }}">
        </a>
        <!-- Navbar Search -->
        <form class="d-md-inline-block form-inline ml-auto mr-0 mr-md-5 my-2 my-md-0 partak-navbar-search">
            <div class="input-group overflow-hidden rounded-pill">
                <input type="text" class="form-control search-input" placeholder="جستجو ...">
                <div class="input-group-append">
                    <button class="btn btn-light search-btn" type="button">
                        <i class="fas fa-search"></i>
                    </button>
                </div>
            </div>
        </form>
        <!-- Navbar -->
        <ul class="navbar-nav mr-auto ml-md-1 pr-0 ml-sm-2 partak-right-navbar">
            <li class="nav-item mx-1">
                <a class="nav-link rounded-pill" id="upload-btn" href="upload.html">
                    {{-- <i class="fas fa-plus-circle fa-fw"></i>
                    --}}
                    <i class="fas fa-plus"></i>
                    بارگذاری ویدیو
                </a>
            </li>
            <li class="nav-item dropdown no-arrow mx-1">
                <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    {{-- <i class="fas fa-bell fa-fw"></i>
                    --}}
                    <i class="far fa-bell font-20"></i>
                    <span class="badge badge-danger">9+</span>
                </a>
                <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-edit "></i> &nbsp; Action</a>
                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-headphones-alt "></i> &nbsp; Another
                        action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star "></i> &nbsp; Something else here</a>
                </div>
            </li>

            <li class="nav-item dropdown no-arrow partak-right-navbar-user">
                <a class="nav-link dropdown-toggle user-dropdown-link" href="#" id="userDropdown" role="button"
                    data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    <img alt="Avatar" src="{{ url('user/img/user.png') }}">
                </a>
                <div class="dropdown-menu " aria-labelledby="userDropdown">
                    <a class="dropdown-item" href="account.html"><i class="fas fa-fw fa-user-circle"></i> &nbsp; My
                        Account</a>
                    <a class="dropdown-item" href="subscriptions.html"><i class="fas fa-fw fa-video"></i> &nbsp;
                        Subscriptions</a>
                    <a class="dropdown-item" href="settings.html"><i class="fas fa-fw fa-cog"></i> &nbsp; Settings</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i
                            class="fas fa-fw fa-sign-out-alt"></i> &nbsp; Logout</a>
                </div>
            </li>

        </ul>
    </nav>
    <div id="wrapper">
        <!-- Sidebar -->
        <ul class="sidebar navbar-nav pb-5 bg-light">
            <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-home"></i>
                    <span>صفحه نخست</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-home"></i>
                    <span>ویدیوهای دنبال شدگان</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="index.html">
                    <i class="fas fa-fw fa-home"></i>
                    <span>ویدیوهای پسند شده</span>
                </a>
            </li>
            {{-- start categories --}}
            <li class="nav-item sidebar-part">
                <h6 class="sidebar-part-title">دسته‌بندی‌ها</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="channels.html">
                    <i class="fas fa-fw fa-users"></i>
                    <span>سریال و فیلم های سینمایی</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="channels.html">
                    <i class="fas fa-fw fa-users"></i>
                    <span>گیم</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="channels.html">
                    <i class="fas fa-fw fa-users"></i>
                    <span>ورزشی</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="channels.html">
                    <i class="fas fa-fw fa-users"></i>
                    <span>کارتون</span>
                </a>
            </li>
            <div id="other-categories" class="collapse">
                <li class="nav-item">
                    <a class="nav-link" href="channels.html">
                        <i class="fas fa-fw fa-users"></i>
                        <span>طنز</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="channels.html">
                        <i class="fas fa-fw fa-users"></i>
                        <span>آموزشی</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="channels.html">
                        <i class="fas fa-fw fa-users"></i>
                        <span>تفریحی</span>
                    </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="channels.html">
                        <i class="fas fa-fw fa-users"></i>
                        <span>فیلم</span>
                    </a>
                </li>

            </div>
            <li class="nav-item">
                <a class="nav-link" href="channels.html" data-toggle="collapse" data-target="#other-categories">
                    <i class="fas fa-fw fa-users"></i>
                    <span>دیگر دسته بندی ها</span>
                </a>
            </li>
            {{-- end categories --}}
            <li class="nav-item sidebar-part">
                <h6 class="sidebar-part-title">دنبال شدگان</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="single-channel.html">
                    <i class="fas fa-fw fa-user-alt"></i>
                    <span>حساب کاربری</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="video-page.html">
                    <i class="fas fa-fw fa-video"></i>
                    <span>Video Page</span>
                </a>
            </li>
            <li class="nav-item sidebar-part">
                <h6 class="sidebar-part-title">دیگر صفحات آپارات</h6>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="upload-video.html">
                    <i class="fas fa-fw fa-cloud-upload-alt"></i>
                    <span>Upload Video</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
                    aria-expanded="false">
                    <i class="fas fa-fw fa-folder"></i>
                    <span>Pages</span>
                </a>
                <div class="dropdown-menu">
                    <h6 class="dropdown-header">Login Screens:</h6>
                    <a class="dropdown-item" href="login.html">Login</a>
                    <a class="dropdown-item" href="register.html">Register</a>
                    <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
                    <div class="dropdown-divider"></div>
                    <h6 class="dropdown-header">Other Pages:</h6>
                    <a class="dropdown-item" href="blog.html">Blog</a>
                    <a class="dropdown-item" href="blog-detail.html">Blog Detail</a>
                    <a class="dropdown-item" href="blank.html">Blank Page</a>
                    <a class="dropdown-item" href="404.html">404 Page</a>
                    <a class="dropdown-item" href="contact.html">Contact</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="history-page.html">
                    <i class="fas fa-fw fa-history"></i>
                    <span>History Page</span>
                </a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="categories.html" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    <i class="fas fa-fw fa-list-alt"></i>
                    <span>Categories</span>
                </a>
                <div class="dropdown-menu">
                    <a class="dropdown-item" href="categories.html">Movie</a>
                    <a class="dropdown-item" href="categories.html">Music</a>
                    <a class="dropdown-item" href="categories.html">Television</a>
                </div>
            </li>
        </ul>
        <div id="content-wrapper">
            <!-- /.container-fluid -->
            <div class="container-fluid pb-0">
                <div class="top-mobile-search overflow-hidden rounded-pill">
                    <div class="row">
                        <div class="col-md-12">
                            <form class="mobile-search ">
                                <div class="input-group">
                                    <input type="text" placeholder="جستجو..." class="h-auto form-control search-input">
                                    <div class="input-group-append">
                                        <button type="button" class="btn bg-none search-btn"><i
                                                class="fas fa-search"></i>
                                        </button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="video-block section-padding">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-title">
                                <h6 class="font-15 font-width-600">ویژه های اپارات</h6>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="{{ url('user/img/v1.png') }}" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="{{ url('user/img/v2.png') }}" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="{{ url('user/img/v3.png') }}" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-danger">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Unverified"><i
                                                class="fas fa-frown text-danger"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="{{ url('user/img/v4.png') }}" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="{{ url('user/img/v5.png') }}" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="{{ url('user/img/v6.png') }}" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-danger">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Unverified"><i
                                                class="fas fa-frown text-danger"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="{{ url('user/img/v7.png') }}" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="{{ url('user/img/v8.png') }}" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-title">
                                <h6 class="font-15 font-width-600">جذابترین های اپارات</h6>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="{{ url('user/img/v1.png') }}" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="{{ url('user/img/v2.png') }}" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="{{ url('user/img/v3.png') }}" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-danger">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Unverified"><i
                                                class="fas fa-frown text-danger"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="{{ url('user/img/v4.png') }}" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="{{ url('user/img/v5.png') }}" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="{{ url('user/img/v6.png') }}" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-danger">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Unverified"><i
                                                class="fas fa-frown text-danger"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="{{ url('user/img/v7.png') }}" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="{{ url('user/img/v8.png') }}" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-title">
                                <h6 class="font-15 font-width-600">جدیدترین های اپارات</h6>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="{{ url('user/img/v1.png') }}" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="{{ url('user/img/v2.png') }}" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="{{ url('user/img/v3.png') }}" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-danger">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Unverified"><i
                                                class="fas fa-frown text-danger"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="{{ url('user/img/v4.png') }}" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="{{ url('user/img/v5.png') }}" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="{{ url('user/img/v6.png') }}" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-danger">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Unverified"><i
                                                class="fas fa-frown text-danger"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="{{ url('user/img/v7.png') }}" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="{{ url('user/img/v8.png') }}" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-title">
                                <h6 class="font-15 font-width-600">کانال سوم</h6>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="{{ url('user/img/v5.png') }}" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="{{ url('user/img/v6.png') }}" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-danger">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Unverified"><i
                                                class="fas fa-frown text-danger"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="{{ url('user/img/v7.png') }}" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="{{ url('user/img/v8.png') }}" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-title">
                                <h6 class="font-15 font-width-600">کانال اول</h6>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="{{ url('user/img/v5.png') }}" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="{{ url('user/img/v6.png') }}" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-danger">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Unverified"><i
                                                class="fas fa-frown text-danger"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="{{ url('user/img/v7.png') }}" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="{{ url('user/img/v8.png') }}" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col-md-12">
                            <div class="main-title">
                                <h6 class="font-15 font-width-600">کانال دوم</h6>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="{{ url('user/img/v5.png') }}" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="{{ url('user/img/v6.png') }}" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-danger">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Unverified"><i
                                                class="fas fa-frown text-danger"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="{{ url('user/img/v7.png') }}" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-3 col-sm-6 mb-3">
                            <div class="video-card">
                                <div class="video-card-image">
                                    <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                    <a href="#"><img class="img-fluid" src="{{ url('user/img/v8.png') }}" alt=""></a>
                                    <div class="time">3:50</div>
                                </div>
                                <div class="video-card-body">
                                    <div class="video-title">
                                        <a href="#">There are many variations of passages of Lorem</a>
                                    </div>
                                    <div class="video-page text-success">
                                        Education <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
                                    </div>
                                    <div class="video-view">
                                        1.8M views &nbsp;<i class="fas fa-calendar-alt"></i> 11 Months ago
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--Footer -->
            {{-- @include('user.layouts.footer') --}}
        </div>
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
