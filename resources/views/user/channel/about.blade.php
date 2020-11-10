@extends('user.channel.layouts.mainLayout')
@section('active_info' , 'active')    
@section('content')
    <div class="" id="content-wrapper">
        @include('user.channel.layouts.channelTopHeader')

        <div class="container-fluid">

            <div class="video-block section-padding">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-title">
                            <h6>اطلاعات کانال</h6>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="main-title">
                        <p>این کانال به درخواست  <b>{{$userInfo->name}}</b> ساخته شده است.</p>
                        </div>
                    </div>
<div class="col-md-12">
                        <div class="main-title">
                        <p>تاریخ شروع فعالیت : {{$userInfo->created_at}}</p>
                        </div>
                    </div>

                </div>
            </div>
        </div>
        <!-- /.container-fluid -->
        <!-- Sticky Footer -->
        <footer class="sticky-footer ">
            @include('user.layouts.footer')
        </footer>
    </div>
@endsection
