<li class="nav-item active">
<a class="nav-link" href="{{route('home')}}">
        <i class="fas fa-fw fa-home"></i>
        <span>صفحه نخست</span>
    </a>
</li>
@auth
<li class="nav-item">
    <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-home"></i>
        <span>ویدیوهای دنبال شدگان</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="index.html">
        <i class="fas fa-fw fa-home"></i>
        <span>ویدیوهای پسند شده</span>
    </a>
</li>
@endauth
{{-- start categories --}}
<li class="nav-item sidebar-part">
    <h6 class="sidebar-part-title">دسته‌بندی‌ها</h6>
</li>
<li class="nav-item">
    <a class="nav-link" href="channels.html">
        <i class="fas fa-fw fa-users"></i>
        <span>سریال و فیلم های سینمایی</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="channels.html">
        <i class="fas fa-fw fa-users"></i>
        <span>گیم</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="channels.html">
        <i class="fas fa-fw fa-users"></i>
        <span>ورزشی</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="channels.html">
        <i class="fas fa-fw fa-users"></i>
        <span>کارتون</span>
    </a>
</li>
<div id="other-categories" class="collapse">
    <li class="nav-item">
        <a class="nav-link" href="channels.html">
            <i class="fas fa-fw fa-users"></i>
            <span>طنز</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="channels.html">
            <i class="fas fa-fw fa-users"></i>
            <span>آموزشی</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="channels.html">
            <i class="fas fa-fw fa-users"></i>
            <span>تفریحی</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="channels.html">
            <i class="fas fa-fw fa-users"></i>
            <span>فیلم</span>
        </a>
    </li>

</div>
<li class="nav-item">
    <a class="nav-link" href="channels.html" data-toggle="collapse" data-target="#other-categories">
        <i class="fas fa-fw fa-users"></i>
        <span>دیگر دسته بندی ها</span>
    </a>
</li>

{{-- end categories --}}
<li class="nav-item sidebar-part">
    <h6 class="sidebar-part-title">دنبال شدگان</h6>
</li>
<li class="nav-item">
    <a class="nav-link" href="single-channel.html">
        <i class="fas fa-fw fa-user-alt"></i>
        <span>حساب کاربری</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="video-page.html">
        <i class="fas fa-fw fa-video"></i>
        <span>Video Page</span>
    </a>
</li>
<li class="nav-item sidebar-part">
    <h6 class="sidebar-part-title">دیگر صفحات آپارات</h6>
</li>
<li class="nav-item">
    <a class="nav-link" href="#">
        {{-- <i class="fas fa-fw fa-cloud-upload-alt"></i> --}}
        <span>تبلیغات</span>
    </a>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <span>قوانین</span>
        </a>
        </li>
         <li class="nav-item">
            <a class="nav-link" href="#">
                <span>سوالات متداول</span>
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="history-page.html">
                    {{-- <i class="fas fa-fw fa-history"></i> --}}
                    <span>تماس با ما </span>
                </a>
            </li>
</li>
{{-- <li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true"
        aria-expanded="false">
        <i class="fas fa-fw fa-folder"></i>
        <span>Pages</span>
    </a>
    <div class="dropdown-menu">
        <h6 class="dropdown-header">Login Screens:</h6>
        <a class="dropdown-item" href="login.html">Login</a>
        <a class="dropdown-item" href="register.html">Register</a>
        <a class="dropdown-item" href="forgot-password.html">Forgot Password</a>
        <div class="dropdown-divider"></div>
        <h6 class="dropdown-header">Other Pages:</h6>
        <a class="dropdown-item" href="blog.html">Blog</a>
        <a class="dropdown-item" href="blog-detail.html">Blog Detail</a>
        <a class="dropdown-item" href="blank.html">Blank Page</a>
        <a class="dropdown-item" href="404.html">404 Page</a>
        <a class="dropdown-item" href="contact.html">Contact</a>
    </div>
</li>

<li class="nav-item dropdown">
    <a class="nav-link dropdown-toggle" href="categories.html" role="button" data-toggle="dropdown"
        aria-haspopup="true" aria-expanded="false">
        <i class="fas fa-fw fa-list-alt"></i>
        <span>Categories</span>
    </a>
    <div class="dropdown-menu">
        <a class="dropdown-item" href="categories.html">Movie</a>
        <a class="dropdown-item" href="categories.html">Music</a>
        <a class="dropdown-item" href="categories.html">Television</a>
    </div>
</li> --}}
