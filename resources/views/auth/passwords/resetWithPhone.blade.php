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
    
    <form method="POST" class="text-right" action="{{ route('password.update.withphone') }}">
        @csrf
        <div class="form-group ">
            <p>شما در حال تغییر رمز حساب کاربری با شماره موبایل <b class="text-black">{{ session('userPhone') }}</b> هستید.
            </p>
        </div>
        <input type="hidden" name="token" value="{{ session('token') }}">
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
