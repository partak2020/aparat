<button class="btn btn-link btn-sm text-secondary mr-4 ml-2 order-sm-0" id="sidebarToggle">
    <i class="fas fa-bars"></i>
</button>
<a class="navbar-brand mr-1" href="{{ route('home') }}">
    <img class="img-fluid" alt="" src="{{ url('user/img/logo.png') }}">
</a>
<!-- Navbar Search -->
<form class="d-md-inline-block form-inline ml-auto mr-0 mr-md-5 my-2 my-md-0 partak-navbar-search">
    <div class="input-group overflow-hidden rounded-pill">
        <input type="text" class="form-control search-input" placeholder="جستجو ...">
        <div class="input-group-append">
            <button class="btn btn-light search-btn" type="button">
                <i class="fas fa-search"></i>
            </button>
        </div>
    </div>
</form>
@auth
    

<!-- Navbar -->
<ul class="navbar-nav mr-auto ml-md-1 pr-0 ml-sm-2 partak-right-navbar">
    <li class="nav-item mx-1">
<<<<<<< HEAD
    <a class="nav-link rounded-pill" id="upload-btn" href="{{route('upload')}}">
           
=======
        <a class="nav-link rounded-pill" id="upload-btn" href="{{ route('upload') }}">
            {{-- <i class="fas fa-plus-circle fa-fw"></i>
            --}}
>>>>>>> 5fcbf3d86479114232862686a6d60eda8b3264ae
            <i class="fas fa-plus"></i>
            بارگذاری ویدیو
        </a>
    </li>
<<<<<<< HEAD
  


    {{-- when user logged in show blow buttons --}}
    <li class="nav-item dropdown no-arrow mx-1">
        <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
            aria-haspopup="true" aria-expanded="false">
            <i class="far fa-bell font-20"></i>
            {{-- <span class="badge badge-danger">9+</span> --}}
        </a>
        <div class="dropdown-menu " aria-labelledby="alertsDropdown">
            <span class="text">اعلان ها</span>
            
    </li>

    <li class="nav-item dropdown no-arrow partak-right-navbar-user">
        <a class="nav-link dropdown-toggle user-dropdown-link" href="#" id="userDropdown" role="button"
            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <img alt="Avatar" src="{{ url('user/img/user.png') }}">
        </a>
        <div class="dropdown-menu text-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="{{route('channel')}}"><i class="fas fa-fw fa-user-circle"></i> پروفایل </a>
            <a class="dropdown-item" href="subscriptions.html"><i class="fas fa-fw fa-video"></i> &nbsp;
                ویدئو های من</a>
            <a class="dropdown-item" href="settings.html"><i class="fas fa-fw fa-cog"></i> &nbsp; تنظیمات</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal"><i
                    class="fas fa-fw fa-sign-out-alt"></i> &nbsp; خروج از حساب کاربری</a>
        </div>
    </li>
    @else
    {{-- end of the buttons --}}

  {{-- if user not logged in show login form link --}}
  <li class="nav-item mx-1">
    <a class="nav-link rounded-pill text-primary" href="{{route('login')}}">
            ورود/ثبت نام
        </a>
    </li>
    {{-- end of login link --}}
=======
    @auth
        {{-- when user logged in show blow buttons --}}
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="far fa-bell font-20"></i>
                <span class="badge badge-danger">9+</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-edit "></i> &nbsp; Action</a>
                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-headphones-alt "></i> &nbsp; Another
                    action</a>
                <div class="dropdown-divider"></div>
                <a class="dropdown-item" href="#"><i class="fas fa-fw fa-star "></i> &nbsp; Something else here</a>
            </div>
        </li>
        <li class="nav-item dropdown no-arrow partak-right-navbar-user">
            <a class="nav-link dropdown-toggle user-dropdown-link" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img alt="Avatar" src="{{ url('user/img/user.png') }}">
            </a>
            <div class="dropdown-menu text-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ route('channel') }}"><i class="fas fa-fw fa-user-circle"></i> پروفایل </a>
                <a class="dropdown-item" href="subscriptions.html"><i class="fas fa-fw fa-video"></i> &nbsp;
                    Subscriptions</a>
                <a class="dropdown-item" href="settings.html"><i class="fas fa-fw fa-cog"></i> &nbsp; Settings</a>
                <div class="dropdown-divider">

                </div>
                <form action="{{ route('logout') }}" method="POST">
                    @csrf
                    <button class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                        <i class="fas fa-fw fa-sign-out-alt"></i>
                        خروج از حساب
                    </button>
                </form>
            </div>
        </li>
        {{-- end of the buttons --}}
    @else
        {{-- if user not logged in show login form link --}}
        <li class="nav-item mx-1">
            <a class="nav-link rounded-pill text-primary" href="{{ route('login') }}">
                ورود/ثبت نام
            </a>
        </li>
        {{-- end of login link --}}
    @endauth
>>>>>>> 5fcbf3d86479114232862686a6d60eda8b3264ae
</ul>
@endauth
