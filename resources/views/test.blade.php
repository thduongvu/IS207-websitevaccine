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
                <div class="col-sm-3">
                    <div class="product-image-wrapper">
                        <div class="single-products">
                            <div class="productinfo text-center">
                                <img src="{{$vaccine->image}}" alt=""/>
                                <h5>{{$vaccine -> vaccine_name}}</h5>
                                <p>{{$vaccine -> status}}</p>
                                <a href="#" class="btn btn-default add-to-cart"><i class="fa" aria-hidden="true"></i>Chi tiết</a>
                            </div>
                            <div class="choose">
                                <ul class="nav nav-pills nav-justified">
                                    <li><a href="#"><i class="fa fa-plus-square"></i>Thêm vào danh sách yêu thích</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            @endforeach

        </div>

        {{$vaccines_full->links()}}

    </div>
    </div>

    <hr>
@endsection
