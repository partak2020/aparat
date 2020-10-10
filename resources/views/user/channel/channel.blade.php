@extends('user.channel.layouts.mainLayout')
@section('content')
    <div class="" id="content-wrapper">
        <div class="container-fluid ">
            <div class="single-channel-image">
                <img class="img-fluid" alt="" src="{{ url('user/img/channel-banner.png') }}">
                <div class="channel-profile">
                    <img class="channel-profile-img" alt="" src="{{ url('user/img/s2.png') }}">
                    <div class="social hidden-xs">
                        <a class="fb" href="#">Facebook</a>
                        <a class="tw" href="#">Twitter</a>
                        <a class="gp" href="#">Google</a>
                    </div>
                </div>
            </div>
            <div class="single-channel-nav">
                <nav class="navbar navbar-expand-lg navbar-light">
                    <a class="channel-brand" href="#">گروه توسعه نرم افزار پارتاک <span title="" data-placement="top"
                            data-toggle="tooltip" data-original-title="Verified"><i
                                class="fas fa-check-circle text-success"></i></span></a>
                    <button class="navbar-toggler" type="button" data-toggle="collapse"
                        data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                        aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                    </button>
                    <div class="collapse navbar-collapse" id="navbarSupportedContent">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="#">خانه <span class="sr-only">(current)</span></a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">همه ویدیو ها</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">لیست پخش</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">دسته بندی های</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="#">درباره کانال</a>
                            </li>
                        </ul>
                        <form class="form-inline my-2 my-lg-0">
                            <button class="btn btn-outline-danger btn-sm" type="button">
                                دنبال کردن <strong>1.4M</strong>
                            </button>
                        </form>
                    </div>
                </nav>
            </div>
        </div>
        <div class="container-fluid">

            <div class="video-block section-padding">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-title">
                            <div class="btn-group float-left right-action">
                                <a href="#" class="right-action-link text-gray" data-toggle="dropdown" aria-haspopup="true"
                                    aria-expanded="false">
                                    مرتب سازی بر اساس <i class="fa fa-caret-down" aria-hidden="true"></i>
                                </a>
                                <div class="dropdown-menu dropdown-menu-right">
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star"></i> &nbsp; Top Rated</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-signal"></i> &nbsp; Viewed</a>
                                    <a class="dropdown-item" href="#"><i class="fas fa-fw fa-times-circle"></i> &nbsp;
                                        Close</a>
                                </div>
                            </div>
                            <h6>ویدیو ها</h6>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="video-card">
                            <div class="video-card-image">
                                <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                <a href="#"><img class="img-fluid" src="{{ url('user/img/v1.png') }}" alt=""></a>
                                <div class="time">7:47</div>
                            </div>
                            <div class="video-card-body">
                                <div class="video-title">
                                    <a href="#">فیلم بررسی هیوندای آزرا کرمان موتور در تهران</a>
                                </div>
                                <div class="video-page text-success">
                                    خودرو بانک <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                        data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                </div>
                                <div class="video-view">
                                    9.4 هزار بازدید &nbsp;<i class="fas fa-calendar-alt"></i> 24 ساعت قبل
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="video-card">
                            <div class="video-card-image">
                                <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                <a href="#"><img class="img-fluid" src="{{ url('user/img/v2.png') }}" alt=""></a>
                                <div class="time">12:27</div>
                            </div>
                            <div class="video-card-body">
                                <div class="video-title">
                                    <a href="#">مرغ سحر پر کشید؛ به یاد استاد شجریان</a>
                                </div>
                                <div class="video-page text-danger">
                                    محمد <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                        data-original-title="Unverified"><i class="fas fa-frown text-danger"></i></a>
                                </div>
                                <div class="video-view">
                                    10 بازدید &nbsp;<i class="fas fa-calendar-alt"></i> 11 ماه پیش
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="video-card">
                            <div class="video-card-image">
                                <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                <a href="#"><img class="img-fluid" src="{{ url('user/img/v1.png') }}" alt=""></a>
                                <div class="time">7:47</div>
                            </div>
                            <div class="video-card-body">
                                <div class="video-title">
                                    <a href="#">فیلم بررسی هیوندای آزرا کرمان موتور در تهران</a>
                                </div>
                                <div class="video-page text-success">
                                    خودرو بانک <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                        data-original-title="Verified"><i class="fas fa-check-circle text-success"></i></a>
                                </div>
                                <div class="video-view">
                                    9.4 هزار بازدید &nbsp;<i class="fas fa-calendar-alt"></i> 24 ساعت قبل
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-3 col-sm-6 mb-3">
                        <div class="video-card">
                            <div class="video-card-image">
                                <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                <a href="#"><img class="img-fluid" src="{{ url('user/img/v2.png') }}" alt=""></a>
                                <div class="time">12:27</div>
                            </div>
                            <div class="video-card-body">
                                <div class="video-title">
                                    <a href="#">مرغ سحر پر کشید؛ به یاد استاد شجریان</a>
                                </div>
                                <div class="video-page text-danger">
                                    محمد <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                        data-original-title="Unverified"><i class="fas fa-frown text-danger"></i></a>
                                </div>
                                <div class="video-view">
                                    10 بازدید &nbsp;<i class="fas fa-calendar-alt"></i> 11 ماه پیش
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <nav aria-label="Page navigation example">
                    <ul class="pagination justify-content-center pagination-sm mb-0">
                        <li class="page-item disabled">
                            <a tabindex="-1" href="#" class="page-link">قبلی</a>
                        </li>
                        <li class="page-item active"><a href="#" class="page-link">1</a></li>
                        <li class="page-item"><a href="#" class="page-link">2</a></li>
                        <li class="page-item"><a href="#" class="page-link">3</a></li>
                        <li class="page-item">
                            <a href="#" class="page-link">بعدی</a>
                        </li>
                    </ul>
                </nav>
            </div>
        </div>
        <!-- /.container-fluid -->
        <!-- Sticky Footer -->
        <footer class="sticky-footer ml-0">
            @include('user.layouts.footer')
        </footer>
    </div>
@endsection
