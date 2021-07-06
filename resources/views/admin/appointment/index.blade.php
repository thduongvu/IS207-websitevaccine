@extends('admin.layouts.admin')

@section('title')
    <title>Trang chủ</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('backend/Immunizer/add.css')}}">
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('admin.partials.content-header', ['name' => 'Appointment', 'key' => 'List'])
    <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <!-- SEARCH FORM -->
                    <div class="col-md-12">
                        <form action="" method="get" class="form-search float-right m-2">
                            @csrf
                            <input type="datetime-local" name="datetime" class="form-control">
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
                                <th scope="col">Ngày hẹn</th>
                                <th scope="col">Khung giờ hẹn</th>
                            </tr>
                            </thead>
                            <tbody>
                            @foreach($appoinments as $appoinment)
                                <tr>
                                    <th scope="row">{{$appoinment->id}}</th>
                                    <td>{{$appoinment->fullname}}</td>
                                    <td>{{$appoinment->appoinment_date}}</td>
                                    <td>{{$appoinment->appoinment_time}}</td>
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



