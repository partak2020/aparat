@extends('user.channel.layouts.mainLayout')
@section('pageTitle', 'صفحه شخصی')
@section('active_videos', 'active')
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
                    @if ($videos->all())
                        @foreach ($video->all() as $video)
                            <div class="col-xl-3 col-sm-6 mb-3">
                                <div class="video-card">
                                    <div class="video-card-image">
                                        <a class="play-icon" href="#"><i class="fas fa-play-circle"></i></a>
                                        <a href="#"><img class="img-fluid" src="{{ url('user/img/v1.png') }}" alt=""></a>
                                        <div class="time">7:47</div>
                                    </div>
                                    <div class="video-card-body">
                                        <div class="video-title">
                                            <a href="#">{{$video->title}}</a>
                                        </div>
                                        <div class="video-page text-success">
                                            <a title="" data-placement="top" data-toggle="tooltip" href="#"
                                                data-original-title="Verified">
                                                {{$video->user_name}}
                                                <i class="fas fa-check-circle text-success"></i>
                                            </a>
                                        </div>
                                        <div class="video-view">
                                            9.4 هزار بازدید &nbsp;<i class="fas fa-calendar-alt"></i> 24 ساعت قبل
                                        </div>
                                    </div>
                                </div>
                            </div>
                        @endforeach


                    @else
                        <div class="col-md-12">
                            <div class="main-title text-center">
                                <h6>شما هیچ ویدیویی ندارید.</h6>
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
