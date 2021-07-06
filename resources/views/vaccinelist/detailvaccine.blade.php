@php
    $baseUrl= 'http://localhost:8000'
@endphp

@extends('layouts.master')

@section('title')
    <title>Thông tin vắc xin | Thông tin chi tiết</title>
@endsection

@section('css')
@endsection

@section('js')<!--/phan rieng-->
@endsection

@section('content')
    <hr>
    <section>
        <div class="container">
            <div class="row">
                @php
                    $baseUrl= 'http://localhost:8000'
                @endphp
                <div class="col-sm-12 padding-right">
                    @foreach($details as $detail_key)
                        <div class="product-details"><!--product-details-->
                            <div class="col-sm-5">
                                <div class="view-product">
                                    <img width="203px" height="135px" object-fit="contain" src="{{$detail_key->image}}"
                                         alt=""/>
                                </div>

                            </div>
                            <div class="col-sm-7">
                                <div class="product-information"><!--/product-information-->
                                    <h2>{{$detail_key->vaccine_name}}</h2>
                                    <p>{{$detail_key->status}}</p>
                                    <span>
                                        <p><b>Giá:</b></p>
									<span>
                                        @if($detail_key->price == 0)
                                            Liên hệ
                                        @else
                                            {{$detail_key->price}}
                                        @endif
                                    </span>
								    </span>
                                    <p>
                                        <b>Tình trạng:</b>
                                        @if($detail_key->status == NULL)
                                            Đã hết
                                        @else
                                            Có
                                        @endif
                                    </p>
                                    <p><b>Lần cuối cập nhật:</b> {{$detail_key->updated_at}}</p>

                                </div><!--/product-information-->
                            </div>
                        </div><!--/product-details-->
                    @endforeach
                    <div class="category-tab shop-details-tab"><!--category-tab-->
                        <div class="col-sm-12">
                            <h2 class="title text-center">Thông tin chi tiết về vắc
                                xin {{$detail_key-> vaccine_name}}</h2>
                        </div>
                        <div class="tab-content">

                            <div class="tab-pane fade active in" id="reviews">
                                <div class="col-sm-12">
                                    <ul>
                                        <li><a href=""><i class="fa fa-user"></i>PV Vaccination</a></li>
                                        <li><a href=""><i
                                                    class="fa fa-clock-o"></i>{{$detail_key->updated_at->format("H:i:s")}}
                                            </a></li>
                                        <li><a href=""><i
                                                    class="fa fa-calendar-o"></i>{{$detail_key->updated_at->format('d/m/Y')}}
                                            </a></li>
                                    </ul>
                                    <p>
                                        {!! $detail_key->discription !!}
                                    </p>

                                </div>
                            </div>

                        </div>
                    </div><!--/category-tab-->

                    <!--full_items_vaccine-->
                    <div class="recommended_items"><!--full_item-->
                        <h2 class="title text-center">VẮC XIN MỚI CẬP NHẬT</h2>

                        <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
                            <div class="carousel-inner">

                                @foreach($full_item as $full_key => $vaccines_full_item)
                                    @if($full_key % 4 == 0)
                                        <div class="item {{$full_key == 0 ? 'active' : ''}}">
                                            @endif
                                            <div class="col-sm-3">
                                                <div class="product-image-wrapper">
                                                    <div class="single-products">
                                                        <div class="productinfo text-center">
                                                            <img width="203px" height="135px" object-fit="contain"
                                                                 src="{{$vaccines_full_item->image}}" alt=""/>
                                                            <h4>{{$vaccines_full_item -> vaccine_name}}</h4>
                                                            <p>{{$vaccines_full_item -> status}}</p>
                                                            <a href="{{URL::to('/chi-tiet-vac-xin/'.$vaccines_full_item->id)}}" class="btn btn-default add-to-cart"><i
                                                                    class="fa fa-info-circle"></i>Chi tiết</a>
                                                        </div>
                                                    </div>
                                                    <div class="choose">
                                                        <ul class="nav nav-pills nav-justified">
                                                            <li><a href="http://localhost:8000/developing"><i class="fa fa-plus-square"></i>Thêm
                                                                    vào danh sách yêu
                                                                    thích</a></li>
                                                        </ul>
                                                    </div>
                                                </div>
                                            </div>

                                            @if($full_key % 4 == 3)
                                        </div>
                                    @endif
                                @endforeach

                            </div>
                            <a class="left recommended-item-control" href="#recommended-item-carousel"
                               data-slide="prev">
                                <i class="fa fa-angle-left"></i>
                            </a>
                            <a class="right recommended-item-control" href="#recommended-item-carousel"
                               data-slide="next">
                                <i class="fa fa-angle-right"></i>
                            </a>
                        </div>
                    </div>
                    <!--full_items_vaccine-->
                </div>
            </div>
        </div>
    </section>

    <hr>
@endsection
