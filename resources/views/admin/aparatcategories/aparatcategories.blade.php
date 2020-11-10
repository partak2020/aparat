@extends('admin.layouts.dashboardlayout')
@section('content')
    <div class="section-padding table-responsive">
        <div class="row">
            <div class="col-md-12">
                <div class="main-title float-right">
                    <h6>دسته‌بندی‌های آپارات</h6>
                </div>
            </div>
            <div class="col-xl-3 col-sm-6 mb-3">
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
                        @foreach ($categories as $category)
                            <tr>
                                <td>{{ $i }}</td>
                                <td>{{ $category->id }}</td>
                                <td>{{ $category->title }}</td>
                                <td>{{ $category->discription }}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    @endsection
