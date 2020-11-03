@extends('admin.layouts.dashboardlayout')
@section('content')
    <div class="section-padding table-responsive">
        <div class="row">
            <div class="col-md-12">
                <div class="main-title float-right">
                    <h6>کاربران</h6>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <table class="table table-bordered">
                    <thead>
                        <tr>
                            <th>ردیف</th>
                            <th>id</th>
                            <th>نام‌کاربری</th>
                            <th>ایمیل</th>
                            <th>شماره موبایل</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            @foreach ($users as $user)
                                <td>{{ dd($loop) }}</td>
                                <td>{{ $user->id }}</td>
                                <td>{{ $user->username }}</td>
                                <td>{{ $user->email }}</td>
                                <td>{{ $user->phoneNo }}</td>
                            @endforeach

                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
