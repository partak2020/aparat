@extends('layouts.loginLayout')
@section('form')
    <form method="POST" action="{{ route('password.update') }}">
        @csrf
        <input type="hidden" name="token" value="{{ $token }}">
        <div class="form-group">
            <input id="email" type="email" class="form-control" placeholder="ایمیل" name="email"
                value="{{ $email ?? old('email') }}" required autocomplete="email" autofocus>
        </div>
        <div class="form-group ">
            <input id="password" type="password" placeholder="رمز عبور جدید" class="form-control" name="password">
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
