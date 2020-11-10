@extends('user.channel.layouts.mainLayout')
@section('pageTitle', 'صفحه شخصی')
@section('active_home' ,'active')    
@section('content')
    <div class="" id="content-wrapper">
        @include('user.channel.layouts.channelTopHeader')
        <div class="container-fluid">

            <div class="video-block section-padding">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-title">
                            
                            <h6>خانه</h6>
                        </div>
                    </div>
                   <p class="col text-center"> صفحه خانه شما خالی می باشد. </p>
                </div>
            </div>
            <!-- /.container-fluid -->
            <!-- Sticky Footer -->
            <footer class="sticky-footer ml-0">
                @include('user.layouts.footer')
            </footer>
        </div>
    </div>
@endsection
