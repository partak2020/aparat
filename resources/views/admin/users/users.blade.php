@extends('admin.layouts.dashboardlayout')
@section('content')
    <div class="table-responsive">
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
@endsection
