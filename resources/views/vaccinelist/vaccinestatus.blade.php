@extends('layouts.master')

@section('title')
    <title>Thông tin vắc xin | Danh sách</title>
@endsection

@section('content')
    <hr>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <form action="{{route('vaccine.search')}}" method="get">
                    @csrf
                    <div class="form-group">
                        <label >Tên Vắc-xin</label>
                        <select class="form-control" name="id">
                            <option value="0">Vắc-xin</option>
                            {!! $htmlSelect !!}
                        </select>
                    </div>

                    <button type="submit" class="btn btn-primary">Tìm kiếm</button>
                </form>
                <table class="table table-bordered">
                    <thead>
                    <tr>
                        <th scope="col">STT</th>
                        <th scope="col">VẮC XIN PHÒNG BỆNH</th>
                        <th scope="col">TÊN VẮC XIN</th>
                        <th scope="col">TÌNH TRẠNG </th>
                    </tr>
                    </thead>
                    <tbody>

                    {!! $htmlTable !!}
                    </tbody>
                </table>

            </div>
        </div>
    </div>
        <hr>
@endsection


