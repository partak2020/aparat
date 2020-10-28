@extends('layouts.loginLayout')
@section('form')
    @if ($errors->any())
        @foreach ($errors->all() as $error)
            {{ $error }}
        @endforeach
    @endif
    @if (session('status'))
        <div class="alert alert-success" role="alert">
            {{ session('status') }}
        </div>
    @endif
    @if (session('message'))
        <div class="alert alert-success" role="alert">
            {{ session('message') }}
        </div>
    @endif
    @if (session('phoneNo'))
        <div class="alert alert-success" role="alert">
            {{ session('phoneNo') }}
        </div>
    @endif
    <form class="text-right" dir="rtl" method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="text-center mt-5">
            <p class="light-gray">یکی از روش های زیر را برای تغییر رمز خود انتخاب کنید.</p>
        </div>
        <div class="mt-4">
            <div class="accordion" id="accordionExample">
                <div class="col text-black pr-0">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-circle-fill" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="8" cy="8" r="8" />
                    </svg>
                    <a class="btn text-right collapsed" type="button" data-toggle="collapse" data-target="#collapseOne"
                        aria-expanded="true" aria-controls="collapseOne">
                        ایمیل
                    </a>
                </div>
                <div id="collapseOne" class="collapse" aria-labelledby="headingOne" data-parent="#accordionExample">
                    <div class="form-group">
                        <input id="email" type="email" class="form-control" placeholder="ادرس ایمیل خود را وارد نمایید."
                            name="email" value="{{ $email ?? old('email') }}">
                    </div>
                </div>
                <div class="col text-black pr-0">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-circle-fill" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="8" cy="8" r="8" />
                    </svg>
                    <a class="btn text-right collapsed" type="button" data-toggle="collapse" data-target="#collapseTwo"
                        aria-expanded="false" aria-controls="collapseTwo">موبایل</a>
                </div>
                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionExample">
                    <div class="form-group">
                        <input id="phoneNo" type="text" class="form-control" placeholder="شماره موبایل خود را وارد نمایید."
                            name="phoneNo" value="{{ $phoneNo ?? old('phoneNo') }}">
                    </div>
                </div>
                <div class="col text-black pr-0">
                    <svg width="1em" height="1em" viewBox="0 0 16 16" class="bi bi-circle-fill" fill="currentColor"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="8" cy="8" r="8" />
                    </svg>
                    <a class="btn text-right collapsed" type="button" data-toggle="collapse" data-target="#collapseThree"
                        aria-expanded="false" aria-controls="collapseThree">نام کاربری</a>
                </div>
                <div id="collapseThree" class="collapse" aria-labelledby="headingThree" data-parent="#accordionExample">
                    <div class="form-group">
                        <input id="username" type="text" class="form-control"
                            placeholder="نام کاربری خود را وارد نمایید." name="username"
                            value="{{ $username ?? old('username') }}">
                    </div>
                </div>
            </div>
        </div>
        <div class="mt-4">
            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-outline-primary btn-block ">ارسال</button>
                </div>
            </div>
        </div>
    </form>
@endsection
