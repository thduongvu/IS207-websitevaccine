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
    <section id="form"><!--form-->
        <div class="container">
            <div class="row">
                <div class="col-sm-4 col-sm-offset-1">
                    <div class="login-form"><!--login form-->
                        <h2>Đăng nhập</h2>
                        <form action="{{route('postlogin')}}" method="post">

                            @csrf

                            <input type="text" name="username" placeholder="Tên người dùng"/>
                            <input type="password" name="password" placeholder="Mật khẩu"/>
                            <span>
								<input type="checkbox" class="checkbox">
								Giữ trạng thái đăng nhập
							</span>
                            <button type="submit" class="btn btn-default">Đăng nhập</button>
                        </form>
                    </div><!--/login form-->
                </div>

                <div class="col-sm-1">
                    <h2 class="or"><></h2>
                </div>

                <div class="col-sm-5">
                    <div class="signup-form"><!--sign up form-->
                        <h2>Đăng ký tài khoản mới</h2>
                        <form action="{{route('posttest')}}" method="post">
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

                            <input type="text" name="fullname" placeholder="Họ và tên *">
                            <input type="text" name="username" placeholder="Tên đăng nhập *">
                            <input placeholder="Ngày sinh *" class="textbox-n" type="text" onfocus="(this.type='date')"
                                   name="dob">
                            <input type="text" name="identify_card" placeholder="CMND/ CCCD">
                            <select name="sex">
                                <option>Giới tính *</option>
                                <option>Nam</option>
                                <option>Nữ</option>
                            </select>
                            <br><br>
                            <input type="text" name="phone" placeholder="Số điện thoại *">
                            <input type="email" name="mail" placeholder="Đia chỉ email">
                            <input type="text" name="permanent_address" placeholder="Địa chỉ thường trú *">
                            <input type="text" name="ward" placeholder="Phường/ Thôn/ Xã *">
                            <input type="text" name="district" placeholder="Quận/ Huyện *">
                            <input type="text" name="city" placeholder="Thành phố/ Tỉnh *">
                            <input type="text" name="past_medical_history" placeholder="Tiền sử bệnh tật">

                            <input type="password" name="password" placeholder="Mật khẩu"/>
                            <input type="password" name="retype" placeholder="Nhập lại mật khẩu"/>

                            <button type="submit" class="btn btn-default">Đăng ký</button>
                        </form>
                    </div><!--/sign up form-->
                </div>

            </div>
        </div>
    </section><!--/form-->
    <hr>
@endsection
