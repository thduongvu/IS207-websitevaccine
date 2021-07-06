
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
    @include('admin.partials.content-header', ['name' => 'Vaccines', 'key' => 'Edit'] )
    <!-- /.content-header -->

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
                <div class="row">
                    <form action="{{route('vaccines.update', ['id' => $vaccine->id])}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group" >
                            <label >Tên danh mục</label>
                            <input type="text" class="form-control"
                                   name="name"
                                   value="{{$vaccine->vaccine_name}}"
                                   placeholder="Nhập tên Vắc-xin">
                        </div>
                        <img src="{{$vaccine->image}}" style="position: absolute;left: 50rem" alt="">
                        <div class="form-group">
                            <label >Chọn danh mục cha</label>
                            <select class="form-control" name="parent_id">
                                <option value="0">Chọn danh mục cha</option>
                                {!! $htmlOption !!}
                            </select>
                        </div>
                        <div class="form-group">
                            <label >Trạng thái</label>
                            <input type="text" class="form-control"
                                   name="status"
                                   value="{{$vaccine->status}}"
                                   placeholder="Thay đổi trạng thái">
                        </div>
                        <div class="form-group">
                            <label >Số lượng</label>
                            <input type="text" class="form-control"
                                   name="amount"
                                   value="{{$vaccine->amount}}"
                                   placeholder="Số lượng">
                        </div>
                        <div class="form-group">
                            <label >Hình ảnh</label>
                            <input type="file" class="form-control-file"
                                   name="image"
                                   value="{{$vaccine->image}}">

                        </div>
                        <div class="form-group">
                            <label >Ghi chú</label>
                            <textarea name="important_note" class="form-control"  rows="3"></textarea>
                        </div>
                        <div class="form-group">
                            <label >Mô tả</label>
                            <textarea name="discription" class="form-control" id="mytextarea" rows="3">{{$vaccine->discription}}</textarea>
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

@section('js')


@endsection


