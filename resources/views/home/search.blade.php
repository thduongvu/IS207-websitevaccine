@extends('layouts.master')

@section('title')
    <title>Home | PV Vaccination</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('home/home.css')}}">
@endsection

@section('js')<!--/phan rieng-->
<link rel="stylesheet" href="{{asset('home/home.js')}}">
@endsection

@section('content')
    @extends('layouts.master')

@section('title')
    <title>Home | PV Vaccination</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('home/home.css')}}">
@endsection

@section('js')<!--/phan rieng-->
<link rel="stylesheet" href="{{asset('home/home.js')}}">
@endsection



@section('content')
    <!--/slider-->
    @include('home.components.slider')
    <!--/slider-->

    <section>
        <div class="container">
            <div class="container">
                <h2 class="title text-center">Tổng hợp các loại vắc xin</h2>
                @foreach($vaccines_full as $vaccine)
                    <a href="{{URL::to('/chi-tiet-vac-xin/'.$vaccine->id)}}">
                        <div class="col-sm-3">
                            <div class="product-image-wrapper">
                                <div class="single-products">
                                    <div class="productinfo text-center">
                                        <img width="203px" height="135px" object-fit="contain" src="{{$vaccine->image}}"
                                             alt=""/>
                                        <h5>{{$vaccine -> vaccine_name}}</h5>
                                        <p>{{$vaccine -> status}}</p>
                                        <a href="{{URL::to('/chi-tiet-vac-xin/'.$vaccine->id)}}" class="btn btn-default add-to-cart"><i class="fa" aria-hidden="true"></i>Chi tiết</a>
                                    </div>
                                    <div class="choose">
                                        <ul class="nav nav-pills nav-justified add-favo">
                                            <li>
                                                <a href="#"
                                                   data-url="{{route('addtofavo',['id'=>$vaccine->id])}}" ;>
                                                    <i class="fa fa-plus-square"></i>
                                                    Thêm vào danh sách yêu thích
                                                </a>
                                            </li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                @endforeach

            </div>



        </div>
    </section>

@endsection



<section>
        <div class="container">



        </div>
    </section>

@endsection

