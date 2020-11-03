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
    {{-- give user username form sesion and use in routes --}}
    {{-- @php $username = session('username') @endphp --}}
    {{-- :D --}}

    <div class="form-group text-right">
        <p>روش تغییر رمز خود را انتخاب کنید.</p>
    </div>
    @if (session('email'))
        <form
            action="{{ route('password.reset.with.email') }}"
            method="POST">
            @csrf
            <input type="hidden" name="email" value="{{ session('email') }}">
            <div class="mt-4">
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-outline-primary btn-block ">ایمیل</button>
                    </div>
                </div>
            </div>
        </form>
    @endif
    @if (session('phoneNo'))
        <form action=" {{ route('password.reset.with.phone') }}" method="POST">
            @csrf
            <input type="hidden" name="phoneNo" value="{{ session('phoneNo') }}">
            <div class="mt-4">
                <div class="row">
                    <div class="col-12">
                        <button type="submit" class="btn btn-outline-primary btn-block ">شماره موبایل</button>
                    </div>
                </div>
            </div>
        </form>
    @endif

@endsection
