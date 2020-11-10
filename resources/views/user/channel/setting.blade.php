@extends('user.channel.layouts.mainLayout')
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
                                                <label for="e1">عنوان ویدیو</label>
                                                <input type="text" placeholder="عنوان ویدیو" id="e1" name="title"
                                                    class="form-control">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-group">
                                                <label for="e2">توضیحات ویدیو</label>
                                                <textarea rows="3" id="e2" name="discription"
                                                    class="form-control"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="e3">دسته‌بندی‌های آپارات</label>
                                                <select id="e3" class="custom-select" name="aparatcategory"
                                                    data-placeholder="انتخاب کنید">
                                                    <option value="">ieh;awi </option>
                                                    <option value="">ieh;awi </option>
                                                    <option value="">ieh;awi </option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="e4">انتشار ویدیو</label>
                                                <select id="e4" class="custom-select" name="status">
                                                    <option value="0">ذخیره، بعدا منتشر میکنم.</option>
                                                    <option value="1">منتشر شود.</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label for="e5">ارسال دیدگاه</label>
                                                <select id="e5" class="custom-select" name="commentStatus">
                                                    <option value="0">امکان نظردهی برای همه غیرفعال باشد.</option>
                                                    <option value="1">امکان نظردهی برای همه آزاد باشد.</option>
                                                </select>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="partak-area text-center mt-3">
                                        <button class="btn btn-outline-primary">ثبت تغییرات</button>
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
