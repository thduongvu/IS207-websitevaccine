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
                                     src="/eshopper/images/home/bs6.jpeg"
                                     alt=""/>
                            </div>

                        </div>
                        <div class="col-sm-8">
                            <div class="product-information"><!--/product-information-->
                                <h2>Bác sĩ Nhi</h2>
                                <p>Đơn nguyên Vắc xin - Bệnh viện Đa khoa Quốc tế Vinmec Times City</p>
                                <span>
									<span>
                                        TS. BS. Đoàn Ngọc Quỳnh
                                    </span>
                                </span>

                                <p><b>Lần cuối cập nhật:</b> 2021-07-03 20:43:54</p>
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
                                                    class="fa fa-clock-o"></i> 20:43:54
                                            </a></li>
                                        <li><a href=""><i
                                                    class="fa fa-calendar-o"></i> 2021-07-03
                                            </a></li>
                                    </ul>
                                    <p>
                                        TThS. BS Đoàn Ngọc Quỳnh đã có hơn 10 năm kinh nghiệm làm việc trong lĩnh vực
                                        Nhi khoa, chuyên sâu về khám và tư vấn sức khỏe trước tiêm chủng cho trẻ em và
                                        người lớn.
                                        <hr>
                                        BS Quỳnh nguyên là bác sĩ Nhi khoa, Bệnh viện Đa khoa Đống Đa. Ông có gần 150
                                        bài báo về Y tế dưới vai trò là bác sĩ cố vấn về các chuyên môn như tiêm chủng
                                        Vaccine, máu, dị ứng,...
                                    <hr>
                                        Hiện nay, ThS. BS Đoàn Ngọc Quỳnh là bác sĩ Nhi - Trung tâm Nhi - Bệnh viện Đa
                                        khoa Quốc tế Vinmec Times City.
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
