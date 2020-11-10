@extends('user.channel.layouts.mainLayout')
@section('active_videos' ,'active')    
@section('content')
    <div class="" id="content-wrapper">
        @include('user.channel.layouts.channelTopHeader')

        <div class="container-fluid">

            <div class="video-block section-padding">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-title">
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
