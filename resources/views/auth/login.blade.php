@extends('layouts.loginLayout')
@section('form')
    <form action="{{ route('login') }}" method="POST" class="">
        @csrf
        <div class="form-group">
            <input type="text" name="unique_field" class="form-control" placeholder="ایمیل / نام کاربری / شماره موبایل">
        </div>
        <div class="form-group">
            <input type="password" name="password" class="form-control" placeholder="رمز عبور">
        </div>
        <div class="mt-4">
            <div class="row">
                <div class="col-12">
                    <button type="submit" class="btn btn-outline-primary btn-block ">ورود</button>
                </div>
            </div>
        </div>
    </form>
    <div class="text-center mt-5">
        <p class="light-gray">هنوز حساب کاربری ندارین؟ <a href="{{ route('register') }}">ثبت نام کنید.</a></p>
        @if (Route::has('password.request'))
            <p class="light-gray">
                <a href="{{ route('password.request') }}">
                    رمز خود را فراموش کرده اید؟
                </a>
            </p>
        @endif
    </div>
@endsection
