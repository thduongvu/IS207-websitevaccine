@extends('admin.layouts.admin')

@section('title')
    <title>Trang chủ</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('backend/immunizier/add.css')}}">
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('admin.partials.content-header', ['name' => 'immunizier', 'key' => 'List'])
    <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- SEARCH FORM -->
                    <div class="col-md-12">
                    <form action="{{route('immunizier.search')}}" method="get" class="form-search float-right m-2">
                        @csrf
                        <div class="form-group">
                            <input type="text" class="form-control"
                                   name="key"
                                   placeholder="Nhập tên cần tìm">
                        </div>
                        <button type="submit" class="btn btn-primary btn-search">Search</button>
                    </form>
                    </div>

                    <div class="col-md-12">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th scope="col">STT</th>
                                <th scope="col">Họ và tên</th>
                                <th scope="col">Ngày sinh</th>
                                <th scope="col">Giới tính</th>
                                <th scope="col">Số điện thoại</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($immuniziers as $immunizier)
                                <tr>
                                    <th scope="row">{{$immunizier->id}}</th>
                                    <td>{{$immunizier->fullname}}</td>
                                    <td>{{$immunizier->dob}}</td>
                                    <td>{{$immunizier->sex}}</td>
                                    <td>{{$immunizier->phone}}</td>
                                </tr>
                            @endforeach

                            </tbody>
                        </table>

                    </div>
                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection



