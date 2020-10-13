@extends('admin.layouts.dashboardlayout')
@section('content')
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ردیف</th>
                    <th>id</th>
                    <th>متن پیام</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($comments as $comment)
                        <td>{{ dd($loop) }}</td>
                        <td>{{ $comment->id }}</td>
                        <td>{{ $comment->discription }}</td>
                    @endforeach

                </tr>
            </tbody>
        </table>
    </div>
@endsection