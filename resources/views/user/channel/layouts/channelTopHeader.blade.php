<div class="container-fluid ">
    @if (session('successful'))
        {{ session('successful') }}
    @endif
    <div class="single-channel-image">
        <img class="img-fluid" alt="" src="{{ url('user/img/channel-banner.png') }}">
        <div class="channel-profile">
            <img class="channel-profile-img" alt="" src="{{ url('user/img/s2.png') }}">
            <div class="social hidden-xs">
                @if ($userInfo->websiteAddress != null)
                    <a class="gp" href="{{ $userInfo->websiteAddress }}">وبسایت</a>
                @endif
                @if ($userInfo->lenzorAddress != null)
                    <a class="tw" href="{{ $userInfo->lenzorAddress }}">لنزور</a>
                @endif
                @if ($userInfo->twitterAddress != null)
                    <a class="tw" href="{{ $userInfo->twitterAddress }}">توییتر</a>
                @endif
                @if ($userInfo->facebookAddress != null)
                    <a class="fb" href="{{ $userInfo->facebookAddress }}">فیس بوک</a>
                @endif
                @if ($userInfo->telegramAddress != null)
                    <a class="tw" href="{{ $userInfo->telegramAddress }}">تلگرام</a>
                @endif
                @if ($userInfo->instagramAddress != null)
                    <a class="tw" href="{{ $userInfo->instagramAddress }}">اینستاگرام</a>
                @endif

            </div>
        </div>
    </div>
    <div class="single-channel-nav">
        <nav class="navbar navbar-expand-lg navbar-light">
            <a class="channel-brand" href="#">{{$userInfo->name}} <span title="" data-placement="top"
                    data-toggle="tooltip" data-original-title="Verified"><i
                        class="fas fa-check-circle text-success"></i></span></a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item @hasSection('active_home') @yield('active_home')     
                        @endif
                        ">
                        <a class="nav-link" href="{{ route('channel') }}">خانه <span
                                class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item @hasSection('active_videos') @yield('active_videos') 
            @endif">
                        <a class="nav-link" href="{{ route('channel.videos') }}">همه ویدیو ها</a>
                    </li>
                    <li class="nav-item @hasSection('active_playlists') @yield('active_playlists') 
            @endif">
                        <a class="nav-link" href="{{ route('channel.playLists') }}">لیست پخش</a>
                    </li>
                    <li class="nav-item @hasSection('active_info') @yield('active_info')     
                        @endif
                        ">
                        <a class="nav-link" href="{{ route('channel.info') }}">درباره کانال</a>
                    </li>
                    <li class="nav-item @hasSection('active_setting') @yield('active_setting') 
 @endif">
                        <a class="nav-link" href="{{ route('channel.setting.edit') }}">تنظیمات حساب</a>
                    </li>
                </ul>
                <form class="form-inline my-2 my-lg-0">
                    <a href="#" class="btn btn-outline-danger btn-sm disabled">
                        دنبال کننده <strong>12.4k</strong>
                        {{-- دنبال کننده <strong>{{ $followers }}</strong>
                        --}}
                    </a>
                </form>
            </div>
        </nav>
    </div>
</div>
