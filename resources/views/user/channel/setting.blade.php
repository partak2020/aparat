@extends('user.channel.layouts.mainLayout')
@section('pageTitle', 'صفحه شخصی')
@section('active_setting', 'active')
@section('content')
    <div class="" id="content-wrapper">
        @include('user.channel.layouts.channelTopHeader')

        <div class="container-fluid">

            <div class="video-block section-padding">
                <div class="row">
                    <div class="col-md-12">
                        <div class="main-title">
                            <h6>تنظیمات حساب کاربری</h6>
                            <p>هم اکنون امکان تغییر اطلاعات حساب را ندرید.</p>
                        </div>
                    </div>
                    <form method="POST" action="{{ route('store.video') }}" enctype="multipart/form-data">
                        @csrf
                        <div class="col">
                            <div class="col-lg-12">
                                <div class="partak-form">
                                    <div class="row">
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="e1">نام</label>
                                                <input disabled type="text" placeholder="نام"  name="name"
                                                value="@if($userInfo->name) {{$userInfo->name}} @endif"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="e2">ایمیل</label>
                                                <input disabled type="email" placeholder="ایمیل" name="email"
                                                value="@if($userInfo->email) {{$userInfo->email}} @endif"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="e2">شماره موبایل</label>
                                                <input disabled type="number" placeholder="شماره موبایل" name="phoneNo"
                                                value="@if($userInfo->phoneNo) {{$userInfo->phoneNo}} @endif"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="e2">نام کاربری</label>
                                                <input disabled type="text" placeholder="نام کاربری" name="username"
                                                value="@if($userInfo->username) {{$userInfo->username}} @endif"
                                                    class="form-control">
                                            </div>
                                        </div>
                                    </div>
                                    
                                    <div class="partak-area text-center mt-3">
                                        <button disabled class="btn btn-outline-primary mb-3">ثبت تغییرات</button>
                                    </div>
                                </div>
                            </div>

                    </form>
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
