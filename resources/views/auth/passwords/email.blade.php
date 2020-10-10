@extends('layouts.loginLayout')
@section('form')
    <form method="POST" action="{{ route('password.email') }}">
        @csrf
        <div class="text-center mt-5">
            <p class="light-gray">ایمیل خود را جهت دریافت لینک فراموشی رمز وارد نمایید.</p>
        </div>
        <div class="form-group">
            <input id="email" type="email" class="form-control" placeholder="ایمیل" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus>
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
