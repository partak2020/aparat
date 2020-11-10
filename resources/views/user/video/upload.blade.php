@extends('user.layouts.mainLayout')
@section('pageTitle', 'بارگذاری ویدیو')
@section('content')
    <div>
        @if ($errors->any())
            @foreach ($errors->all() as $error)
                {{ $error }}
            @endforeach
        @endif
        <form method="POST" action="{{ route('store.video') }}" enctype="multipart/form-data">
            @csrf
            <div id="waitForUploading" class="row pb-5">
                <div class="col-md-8 mx-auto text-center upload-video pt-5 pb-5">
                    <h1><i class="fas fa-file-upload text-primary"></i></h1>
                    <h5 class="mt-5">ویدیوی آپلودی خود را انتخاب کنید.</h5>
                    <div class="mt-4">
                        <input type="file" class="custom-file-input" id="inputFile" onchange="UploadingView()"
                            name="inputFile"
                            accept=".mp4,.mv,.mov,.qt,.ts,.3gp,.3gpp,.3g2,.3gp2,.mpg,.mpeg,.mp1,.mp2,.m1v,.m1a,.m2a,.mpa,.mpv,.mpv2,.mpe,.m4a,.m4p,.m4b,.m4r,.m4v,.avi,.flv,.f4v,.f4p,.f4a,.f4b,.vob,.lsf,.lsx,.asf,.asr,.asx,.webm,.mkv,.wmv,.y4m" />
                        <label class="btn btn-primary rounded-pill" for="inputFile">
                            انتخاب فایل
                        </label>
                    </div>
                </div>
            </div>
            <div id="Uploading" class="container-fluid upload-details pr-0" style="display:none">
                <div class="row">
                    <div class="col-lg-12">
                        <div class="main-title">
                            <h6>جزئیات آپلود</h6>
                        </div>
                    </div>
                    <div class="col-lg-2">
                        <div class="imgplace"></div>
                    </div>
                    <div class="col-lg-10">
                        <ul>
                            <li id="fileName"></li>
                            <li id="fileSize"></li>
                        </ul>
                    </div>
                </div>
                <hr>
                <div class="row">
                    <div class="col-lg-12">
                        <div class="partak-form">
                            <div class="row">
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="e1">عنوان ویدیو (الزامی)</label>
                                        <input type="text" placeholder="عنوان ویدیو" id="e1" name="title"
                                            class="form-control">
                                    </div>
                                </div>
                                <div class="col-lg-12">
                                    <div class="form-group">
                                        <label for="e2">توضیحات ویدیو (الزامی)</label>
                                        <textarea rows="3" id="e2" name="discription" class="form-control"></textarea>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="col-lg-4">
                                    <div class="form-group">
                                        <label for="e3">دسته‌بندی‌های آپارات</label>
                                        <select id="e3" class="custom-select" name="aparatcategory" style="width:400px">
                                            @foreach ($categories as $category)
                                                <option value="{{ $category->id }}">{{ $category->title }}</option>
                                            @endforeach
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
                            <div class="row">
                                <div class="col-lg-6">
                                    <div class="form-group" style="width: 100%">
                                        <label class="col-form-label pr-0" for="e6">افزودن به لیست پخش (الزامی)</label>
                                        <div id="output"></div>
                                        <select class="chosen-select" id="e6" name="playlistVideo[]" multiple="multiple"
                                            data-placeholder="انتخاب کنید" style="width:400px">
                                            @foreach ($playlists as $playlist)
                                                <option value="{{ $playlist->id }}">{{ $playlist->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="form-group" style="width: 100%">
                                        <label class=" col-form-label pr-0" for="e7">برچسب‌های ویدیو (الزامی)</label>
                                        <div id="output"></div>
                                        <select class="chosen-select" id="e7" name="tags[]" multiple="multiple"
                                            data-placeholder="انتخاب کنید" style="width:400px">
                                            @foreach ($tags as $tag)
                                                <option value="{{ $tag->id }}">{{ $tag->name }}</option>
                                            @endforeach
                                        </select>
                                    </div>
                                </div>
                            </div>
                            <div class="partak-area text-center mt-3">
                                <button class="btn btn-outline-primary">ثبت تغییرات</button>
                            </div>
                            <hr>
                            <div class="terms text-center">
                                <p class="mb-0">ویدیو بارگذاری شده باید از
                                    <a href="#">قوانین سایت </a>پیروی کند.
                                </p>
                            </div>
                        </div>
                    </div>

                </div>
        </form>
    </div>
    <script>
        function UploadingView() {
            document.getElementById("waitForUploading").style.display = "none";
            document.getElementById("Uploading").style.display = "block";

            var x = document.getElementById("inputFile");
            var name = "";
            var size = "";
            name += "نام: " + x.files[0].name;
            size += "اندازه: " + x.files[0].size;

            document.getElementById("fileName").innerHTML = name;
            document.getElementById("fileSize").innerHTML = size;
        }

    </script>
@endsection
