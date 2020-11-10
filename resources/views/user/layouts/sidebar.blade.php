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
    <a class="nav-link" href="#">
        <i class="fas fa-fw fa-users"></i>
        <span>سریال و فیلم های سینمایی</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="#">
        <i class="fas fa-fw fa-users"></i>
        <span>گیم</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="#">
        <i class="fas fa-fw fa-users"></i>
        <span>ورزشی</span>
    </a>
</li>
<li class="nav-item">
    <a class="nav-link" href="#">
        <i class="fas fa-fw fa-users"></i>
        <span>کارتون</span>
    </a>
</li>
<div id="other-categories" class="collapse">
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-users"></i>
            <span>طنز</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-users"></i>
            <span>آموزشی</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-users"></i>
            <span>تفریحی</span>
        </a>
    </li>
    <li class="nav-item">
        <a class="nav-link" href="#">
            <i class="fas fa-fw fa-users"></i>
            <span>فیلم</span>
        </a>
    </li>

</div>
<li class="nav-item">
    <a class="nav-link" href="#" data-toggle="collapse" data-target="#other-categories">
        <i class="fas fa-fw fa-users"></i>
        <span>دیگر دسته بندی ها</span>
    </a>
</li>

{{-- end categories --}}
<li class="nav-item sidebar-part">
    <h6 class="sidebar-part-title">دنبال شدگان</h6>
</li>
<li class="nav-item">
    <a class="nav-link" href="{{route('channel')}}">
        <i class="fas fa-fw fa-user-alt"></i>
        <span>حساب کاربری</span>
    </a>
</li>
<li class="nav-item sidebar-part">
    <h6 class="sidebar-part-title">دیگر صفحات آپارات</h6>
</li>
<li class="nav-item">
    <a class="nav-link" href="#">
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
                <a class="nav-link" href="#">
                    <span>تماس با ما </span>
                </a>
            </li>
</li>