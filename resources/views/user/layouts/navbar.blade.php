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
    <a class="nav-link rounded-pill" id="upload-btn" href="{{route('upload')}}">
           
            <i class="fas fa-plus"></i>
            بارگذاری ویدیو
        </a>
    </li>
        {{-- when user logged in show blow buttons --}}
        <li class="nav-item dropdown no-arrow mx-1">
            <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                <i class="far fa-bell font-20"></i>
                <span class="badge badge-danger">9+</span>
            </a>
            <div class="dropdown-menu" aria-labelledby="alertsDropdown">
                <a  class="dropdown-item disabled" href="#">اعلانی ندارید</a>
                </div>
        </li>
        <li class="nav-item dropdown no-arrow partak-right-navbar-user">
            <a class="nav-link dropdown-toggle user-dropdown-link" href="#" id="userDropdown" role="button"
                data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                <img alt="Avatar" src="{{ url('user/img/user.png') }}">
            </a>
            <div class="dropdown-menu text-right" aria-labelledby="userDropdown">
                <a class="dropdown-item" href="{{ route('channel') }}"><i class="fas fa-fw fa-user-circle"></i> پروفایل </a>
                
            <a class="dropdown-item" href="{{route('channel.setting.edit')}}"><i class="fas fa-fw fa-cog"></i> تنظیمات حساب</a>
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
</ul>
