@extends('user.channel.layouts.mainLayout')
@section('pageTitle', 'صفحه شخصی')
@section('active_playlists', 'active')
@section('content')
    <div class="" id="content-wrapper">
        @include('user.channel.layouts.channelTopHeader')

        <div class="container-fluid">

            <div class="video-block section-padding">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-title">
                            <h6>لیست های پخش</h6>
                        </div>
                    </div>
                    @if ($playLists->all())

                        {{-- <div class="col-xl-3 col-sm-6 mb-3">
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
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
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
                                            data-original-title="Verified"><i
                                                class="fas fa-check-circle text-success"></i></a>
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
                        </div> --}}
                    @else
                    <div class="col-md-12">
                        <div class="main-title text-center">
                            <h6>شما هیچ لیست پخشی ندارید.</h6>
                        </div>
                    </div>
                    @endif

                </div>

            </div>
        </div>
        <!-- /.container-fluid -->
        <!-- Sticky Footer -->
        <footer class="sticky-footer ml-0">
            @include('user.layouts.footer')
        </footer>
    </div>
@endsection
