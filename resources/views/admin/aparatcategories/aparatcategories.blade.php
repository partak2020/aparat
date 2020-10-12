@extends('admin.layouts.dashboardlayout')
@section('content')
    <div class="table-responsive">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>ردیف</th>
                    <th>id</th>
                    <th>عنوان</th>
                    <th>توضیحات</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    @foreach ($categories as $category)
                        <td>{{ $i }}</td>
                        <td>{{ $category->id }}</td>
                        <td>{{ $category->title }}</td>
                        <td>{{ $category->discription }}</td>
                    @endforeach

                </tr>
            </tbody>
        </table>
    </div>
@endsection