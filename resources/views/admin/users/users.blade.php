@extends('admin.layouts.dashboardlayout')
@section('content')
    <div class="section-padding">
        <div class="row">
            <div class="col-md-12">
                <div class="main-title float-right">
                    <h6>کاربران</h6>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
                <table class="table table-bordered text-right">
                    <thead>
                        <tr>
                            <th nowrap>ردیف</th>
                            <th nowrap>نام</th>
                            <th nowrap>نام‌کاربری</th>
                            <th nowrap>ایمیل</th>
                            <th nowrap>شماره موبایل</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach ($users as $user)
                            <tr>
                                <td nowrap>{{ $loop->iteration }}</td>
                                <td nowrap>{{ $user->name }}</td>
                                <td nowrap>{{ $user->username }}</td>
                                <td nowrap>{{ $user->email }}</td>
                                <td nowrap>{{ $user->phoneNo }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
