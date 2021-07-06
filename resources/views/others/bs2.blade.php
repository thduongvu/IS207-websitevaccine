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
                                     src="/eshopper/images/home/bs2.jpeg"
                                     alt=""/>
                            </div>

                        </div>
                        <div class="col-sm-8">
                            <div class="product-information"><!--/product-information-->
                                <h2>Bác sĩ chuyên khoa I</h2>
                                <p>Phó trưởng khoa truyền nhiễm Bệnh viện Nhi Trung Ương</p>
                                <span>
									<span>
                                        BS. Phạm Thị Sửu
                                    </span>
                                </span>

                                <p><b>Lần cuối cập nhật:</b> 2021-07-03 20:45:51</p>
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
                                                    class="fa fa-clock-o"></i> 20:45:51
                                            </a></li>
                                        <li><a href=""><i
                                                    class="fa fa-calendar-o"></i> 2021-07-03
                                            </a></li>
                                    </ul>
                                    <p>
                                        Bác sĩ chuyên khoa I Phạm Thị Sửu đã có hơn 45 kinh nghiệm làm việc trong lĩnh
                                        vực Nhi khoa, đặc biệt có thế mạnh trong điều trị các bệnh nhiễm trùng trẻ em
                                        như: Viêm phổi, tiêu chảy, ho gà, uốn ván, bạch hầu, sởi, quai bị,viêm não, màng
                                        não, nhiễm trùng huyết, sốt xuất huyết, bệnh cúm,...
                                        <hr>
                                        Bác sĩ Sửu lấy bằng Bác sĩ chuyên khoa I chuyên ngành truyền nhiễm trường Đại
                                        học Y Hà Nội vào năm 1985 và tốt nghiệp Chuyên ngành tiếng anh - Đại học Ngoại
                                        Ngữ Hà Nội vào năm 1987.
                                    <hr>
                                        Bác sĩ Sửu từng là Trưởng khoa truyền nhiễm - Bệnh viện Nhi Trung Ương.
                                        Bác sĩ Sửu là Thành viên Tiểu ban HIV/AIDS Nhi Bộ Y Tế; Thành viên hội các bệnh
                                        truyền nhiễm Việt Nam; Thành viên chương trình tiêm chủng Quốc gia viện Vệ sinh
                                        Dich Tễ Trung ương; Thành viên Hội Nhi khoa Việt Nam.
                                    <hr>
                                        Bác sĩ đã có nhiều công trình nghiên cứu được đăng tải trên các tạp chí về Y
                                        khoa lớn của Anh và Mỹ.
                                    <hr>
                                        Hiện nay, bác sĩ Sửu đang công tác tại Phòng khám Quốc tế Vinmec Royal City.

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
