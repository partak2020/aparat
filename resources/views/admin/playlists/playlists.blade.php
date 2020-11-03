@extends('admin.layouts.dashboardlayout')
@section('content')
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ردیف</th>
                    <th>id</th>
                    <th>نام</th>
                    <th>توضیحات</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($playlists as $playlist)
                        <td>{{ dd($loop) }}</td>
                        <td>{{ $playlist->id }}</td>
                        <td>{{ $playlist->name }}</td>
                        <td>{{ $playlist->discription }}</td>
                    @endforeach

                </tr>
            </tbody>
        </table>
    </div>
@endsection