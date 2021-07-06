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
            <form id="main-contact-form" name="contact-form" method="post" action="mail.blade.php">
                <div class="form-group">
                    <input type="text" name="name" class="form-control" required="required" placeholder="Name">
                </div>
                <div class="form-group">
                    <input type="email" name="email" class="form-control" required="required" placeholder="Email Id">
                </div>
                <div class="form-group">
                    <textarea name="message" id="message" required="required" class="form-control" rows="8"
                              placeholder="Your text here"></textarea>
                </div>
                <div class="form-group">
                    <input type="submit" name="submit" class="btn btn{-warning" value="Xác nhận">
                </div>
            </form>
        </div>
    </div>
    </div>
    <hr>
@endsection
