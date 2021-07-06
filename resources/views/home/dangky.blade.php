@extends('layouts.master')

@section('title')
    <title>Đăng Ký Lịch Hẹn | PV Vaccination</title>
@endsection

@section('content')
    <div class="container">
        <div class="col-sm-5">
            <div class="signup-form">
                <h2>Đăng ký lịch hẹn tiêm chủng</h2>
                <form action="{{route('postdangky')}}" method="post">
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
                    <select name="" id="">
                    @foreach($immuniziers as $immunizier)
                            <option value="">{{$immunizier->fullname}}</option>
                    @endforeach
                    </select>
                    <input placeholder="Ngày hẹn *" class="textbox-n" type="text" onfocus="(this.type='date')"
                           name="appoinment_date">
                    <select name="appoinment_time">
                        <option>Thời gian hẹn *</option>
                        <option>7:00 - 7:30</option>
                        <option>7:30 - 8:00</option>
                        <option>8:00 - 8:30</option>
                        <option>8:30 - 9:00</option>
                        <option>9:00 - 9:30</option>
                        <option>9:30 - 10:00</option>
                        <option>10:00 - 10:30</option>
                        <option>10:30 - 11:00</option>
                        <option>13:00 - 13:30</option>
                        <option>13:30 - 14:00</option>
                        <option>14:00 - 14:30</option>
                        <option>14:30 - 15:00</option>
                        <option>15:00 - 15:30</option>
                        <option>15:30 - 16:00</option>
                        <option>16:00 - 16:30</option>
                    </select>
                    <br><br>

                    <button type="submit" class="btn btn-default">Xác nhận đăng ký</button>
                </form>
            </div><!--/sign up form-->
        </div>
    </div>
@endsection

