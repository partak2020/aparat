@extends('admin.layouts.dashboardlayout')
@section('content')
    <div class="section-padding table-responsive">
        <div class="row">
            <div class="col-md-12">
                <div class="main-title float-right">
                    <h6>نظرات</h6>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
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
        </div>
    @endsection
