@extends('layouts.loginLayout')
@section('form')
@if ($errors->any())
    @foreach ($errors->all() as $error)
        {{$error}}
    @endforeach
@endif
    <form action="/password/checkCode" method="POST">
        @csrf
        <input id="phoneNo" type="hidden" class="form-control" value="{{  session('phoneNo') }}" name="phoneNo" >

        <div class="form-group">
            <input id="token" type="text" class="form-control" placeholder=" '_'کد تایید" name="token" required>
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
