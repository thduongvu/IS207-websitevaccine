@php
    $baseUrl= 'http://localhost:8000'
@endphp

@extends('layouts.master')

@section('title')
    <title>test page</title>
@endsection

@section('css')
@endsection

@section('js')<!--/phan rieng-->
@endsection

@section('content')
    <hr>
    <div class="container">
        <div class="col-sm-12">
            <div class="contact-form bottom">
                <h2 class="title text-center">Gửi báo cáo tình trạng sau tiêm chủng</h2>
                <form id="main-contact-form" name="contact-form" method="post" action="{{route('postreport')}}">
                    <input type="hidden" name="_token" value="{{csrf_token()}}">
                    @if(count($errors)>0)
                        <div class="alert alert-warning">
                            @foreach($errors->all() as $error)
                                {{$error}}
                            @endforeach
                        </div>
                    @endif()
                    @if(Session::has('success'))
                        <div class="alert alert-success">

                            {{Session::get('success')}}
                        </div>
                    @endif
                    <div class="form-group">
                        <input type="text" name="name" class="form-control" required="required"
                               placeholder="Phan Thuỳ Đan">
                    </div>
                    <div class="form-group">
                        <input type="email" name="email" class="form-control" required="required"
                               placeholder="thuydan@gmail.com">
                    </div>
                    <div class="form-group">
                    <textarea name="contents" id="contents" required="required" class="form-control" rows="8"
                              placeholder="Người được tiêm: Nguyễn Văn A, xuất hiện các biểu hiện: ... sau khi tiêm chủng vào ngày: 01/01/2021"></textarea>
                    </div>
                    <span>
                <span class="text-danger">
                    Hãy đảm bảo thông tin trên bạn cung cấp là đúng sự thật. Đây là những thông tin liên quan đến các vấn đề pháp lý y tế.
                    <a class="text-warning" href="https://kcb.vn/vanban/luat-kham-benh-chua-benh-2"> Luật khám bệnh, chữa bệnh </a>
                </span>
                </span>
                    <br>
                    <br>
                    <button type="submit"  class="btn btn-default"><a href="http://localhost:8000/send-report">Xác nhận</a> </button>

                </form>
            </div>
        </div>
    </div>
    <hr>
@endsection
