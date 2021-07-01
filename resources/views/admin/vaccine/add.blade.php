
@extends('admin.layouts.admin')

@section('title')
    <title>Trang chủ</title>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
        @include('admin.partials.content-header', ['name' => 'Category', 'key' => 'Add'] )
        <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <form action="{{route('vaccines.store')}}" method="post">
                        @csrf
                        <div class="form-group">
                            <label >Tên danh mục</label>
                            <input type="text" class="form-control"
                                   name="name"
                                   placeholder="Nhập tên danh mục">
                        </div>
                        <div class="form-group">
                            <label >Chọn danh mục cha</label>
                            <select class="form-control" name="parent_id">
                                <option value="0">Chọn danh mục cha</option>
                                {!! $htmlOption !!}
                            </select>
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



