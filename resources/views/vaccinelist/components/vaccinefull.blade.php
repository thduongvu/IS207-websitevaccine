@php
    $baseUrl= 'http://localhost:8000'
@endphp

@extends('layouts.master')

@section('title')
    <title>test page</title>
@endsection

@section('content')
    <hr>

    <div class="container">
        <div class="col-sm-12 padding-right">

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

            {{$vaccines_full->links()}}

        </div>
    </div>

    <hr>
@endsection

@section('js')
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js"></script>
    <script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.4.4/jquery.min.js"></script>


@endsection
