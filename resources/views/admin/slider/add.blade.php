
@extends('admin.layouts.admin')

@section('title')
    <title>Trang chủ</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('admin.partials.content-header', ['name' => 'Slider', 'key' => 'Add'] )
    <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <form action="{{route('slider.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label >Tên slider</label>
                            <input type="text" class="form-control @error('name') is-invalid @enderror"
                                   name="name"
                                   placeholder="Nhập tên ">
                            @error('name')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>

                        <div class="form-group">
                            <label >Mô tả slider</label>
                            <input type="text" class="form-control @error('description') is-invalid @enderror"
                                   name="description"
                                   placeholder="Nhập mô tả">
                            @error('description')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>
                        <div class="form-group">
                            <label >Hình ảnh</label>
                            <input type="file" class="form-control-file @error('image_path') is-invalid @enderror"
                                   name="image_path">
                            @error('image_path')
                            <div class="alert alert-danger">{{$message}}</div>
                            @enderror
                        </div>


                        <button type="submit" class="btn btn-primary">Submit</button>
                    </form>



                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->
@endsection



