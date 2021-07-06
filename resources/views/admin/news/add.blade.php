
@extends('admin.layouts.admin')

@section('title')
    <title>Edit Vaccine</title>
@endsection

@section('css')
    <strong><script src="https://cloud.tinymce.com/stable/tinymce.min.js"></script></strong>
    <script>

        tinymce.init({
            selector: "#mytextarea"
        });
    </script>
@endsection

@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('admin.partials.content-header', ['name' => 'News', 'key' => 'Edit'] )
    <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-md-12">
                    <form action="{{route('news.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group" >
                            <label >Tên danh mục</label>
                            <input type="text" class="form-control"
                                   name="title"
                                   placeholder="Nhập tên bài báo">
                        </div>
                        <div class="form-group">
                            <label >Ghi chú</label>
                            <textarea name="notes" rows="3" class="form-control"></textarea>
                        </div>
                        <div class="form-group">
                            <label >Hình ảnh</label>
                            <input type="file" class="form-control-file"
                                   name="image">

                        </div>
                        <div class="form-group">
                            <label >Nội dung</label>
                            <textarea name="description" class="form-control" id="mytextarea" rows="3"></textarea>
                        </div>

                        <button type="submit" class="btn btn-primary">Submit</button>

                    </form>
                    </div>

                </div>
                <!-- /.row -->
            </div><!-- /.container-fluid -->
        </div>
        <!-- /.content -->
    </div>
    <!-- /.content-wrapper -->


@endsection

@section('js')


@endsection


