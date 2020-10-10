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
                    <th>وضعیت انتشار</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($videos as $video)
                        <td>{{ $i++ }}</td>
                        <td>{{ $video->id }}</td>
                        <td>{{ $video->name }}</td>
                        <td>{{ $video->discription }}</td>
                        <td>{{ $video->status }}</td>
                    @endforeach

                </tr>
            </tbody>
        </table>
    </div>
@endsection