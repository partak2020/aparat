@extends('layouts.loginLayout')
@section('pageTitle', 'ثبت نام')
@section('form')
<form action="{{route('register')}}" method="POST" class="">
    @csrf
    <div class="form-group">
        <input type="text" name="name" class="form-control" placeholder="نام">
    </div>
    <div class="form-group">
        <input type="text" name="unique_field" class="form-control" placeholder="ایمیل / نام کاربری / شماره موبایل">
    </div>
    <div class="form-group">
        <input type="password" name="password" class="form-control" placeholder="رمز عبور">
    </div>
    <div class="mt-4">
        <div class="row">
            <div class="col-12">
                <button type="submit"
                    class="btn btn-outline-primary btn-block ">ورود</button>
            </div>
        </div>
    </div>
</form>
<div class="text-center mt-5">
<p class="light-gray">از قبل حساب کاربری دارین؟ <a href="{{route('login')}}">وارد شوید.</a></p>
</div>
@endsection