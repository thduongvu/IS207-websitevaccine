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
                    <div class="product-details"><!--product-details-->
                        <div class="col-sm-4">
                            <div class="view-product">
                                <img object-fit="cover"
                                     src="/eshopper/images/home/bs3.jpeg"
                                     alt=""/>
                            </div>

                        </div>
                        <div class="col-sm-8">
                            <div class="product-information"><!--/product-information-->
                                <h2>Trưởng Đơn nguyên vắc xin – Khoa Ngoại trú nhi</h2>
                                <p> Trưởng đơn nguyên vắc xin, Bệnh viện Đa khoa Quốc tế Vinmec Times City</p>
                                <span>
									<span>
                                        TS. BS. Nguyễn Hải Hà
                                    </span>
                                </span>

                                <p><b>Lần cuối cập nhật:</b> 2021-07-03 20:43:51</p>
                            </div><!--/product-information-->
                        </div>
                    </div><!--/product-details-->
                    <div class="category-tab shop-details-tab"><!--category-tab-->
                        <div class="col-sm-12">
                            <h2 class="title text-center">Giới thiệu</h2>
                        </div>
                        <div class="tab-content">

                            <div class="tab-pane fade active in" id="reviews">
                                <div class="col-sm-12">
                                    <ul>
                                        <li><a href=""><i class="fa fa-user"></i>PV Vaccination</a></li>
                                        <li><a href=""><i
                                                    class="fa fa-clock-o"></i> 20:43:51
                                            </a></li>
                                        <li><a href=""><i
                                                    class="fa fa-calendar-o"></i> 2021-07-03
                                            </a></li>
                                    </ul>
                                    <p>
                                        ThS. BS Nguyễn Hải Hà là người có kinh nghiệm 15 năm trong lĩnh vực Nhi khoa,
                                        đặc biệt điều trị các bệnh lý liên quan đến dinh dưỡng, hồi sức, tiêm chủng
                                        vắc xin trẻ sơ sinh và trẻ em.
                                        <hr>
                                        ThS. BS Nguyễn Hải Hà hiện là Trưởng đơn nguyên vắc xin - Bệnh viện Đa khoa
                                        Quốc tế Vinmec Times City.
                                    </p>

                                </div>
                            </div>

                        </div>
                    </div><!--/category-tab-->
                </div>
            </div>
        </div>
    </section>

    <hr>
@endsection
