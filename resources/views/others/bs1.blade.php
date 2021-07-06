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
                                     src="/eshopper/images/home/bs1.jpeg"
                                     alt=""/>
                            </div>

                        </div>
                        <div class="col-sm-8">
                            <div class="product-information"><!--/product-information-->
                                <h2>Trưởng khoa Dinh dưỡng - Tiết chế</h2>
                                <p>Khoa Nhi - Sơ sinh, Bệnh viện Đa khoa Quốc tế Vinmec Central Park</p>
                                <span>
									<span>
                                        TS. BS. Phan Nguyễn Thanh Bình
                                    </span>
                                </span>

                                <p><b>Lần cuối cập nhật:</b> 2021-07-03 20:42:51</p>
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
                                                    class="fa fa-clock-o"></i> 20:42:51
                                            </a></li>
                                        <li><a href=""><i
                                                    class="fa fa-calendar-o"></i> 2021-07-03
                                            </a></li>
                                    </ul>
                                    <p>
                                        TS. BS Phan Nguyễn Thanh Bình đã có 22 năm cống hiến trong lĩnh vực Điều trị,
                                        can thiệp dinh dưỡng, là người có thế mạnh ở tư vấn chế độ dinh dưỡng theo vòng
                                        đời (phụ nữ mang thai, phụ nữ cho con bú, trẻ em, tiền dậy thì, người cao
                                        tuổi…); khám và điều trị suy dinh dưỡng, thừa cân béo phì, biếng ăn, thiếu vi
                                        chất…; xây dựng thực đơn và tư vấn chế độ ăn bệnh lý đái tháo đường, tăng huyết
                                        áp, rối loạn mỡ máu, gout, suy chức năng gan, thận…; khám và tư vấn tiêm chủng.
                                    <hr>
                                    Bác sĩ Bình nhận bằng Tiến sĩ về Dinh dưỡng tại trường Đại học Nihon Joshi, Tokyo,
                                    Nhật Bản năm 2011. Bà cũng tham gia các khóa đào tạo liên tục về dinh dưỡng lâm sàng
                                    do Trung tâm Dinh dưỡng TP. HCM, Viện Dinh dưỡng Quốc gia, Hiệp hội Dinh dưỡng Lâm
                                    sàng châu Âu (ESPEN) tổ chức từ 2010 đến nay.
                                    <hr>
                                    Trong sự nghiệp cống hiến cho nền y học nước nhà, Tiến sĩ Bình đã đóng góp cả gia
                                    tài tri thức đồ sộ với sự tham gia biên soạn 5 cuốn sách, 22 bài báo tạp chí khoa
                                    học, 14 báo cáo hội nghị khoa học với tính thực tiễn cao về các chủ đề dinh dưỡng
                                    học. Bà từng được tin tưởng đảm nhiệm chức vụ quan trọng như Trưởng phòng Kế hoạch
                                    tổng hợp, Trưởng khoa Dinh dưỡng cộng đồng tại Trung tâm Dinh dưỡng TP. Hồ Chí Minh.
                                    Bên cạnh đó, bà cũng là thành viên kì cựu có đóng góp tích cực cho Hội Dinh dưỡng và
                                    Thực phẩm TP. Hồ Chí Minh.
                                    <hr>
                                    Với những đóng góp to lớn trong lĩnh vực dinh dưỡng học, Tiến sĩ Bình vinh dự nhận
                                    nhiều bằng khen như: Chiến sĩ thi đua cấp cơ sở nhiều năm liền 2012 - 2015, Giấy
                                    khen của Giám đốc Sở Y tế TP. HCM năm 2011 về Thành tích xuất sắc trong thực hiện
                                    Chiến lược Quốc gia về dinh dưỡng”, đặc biệt là Bằng khen của Bộ trưởng Bộ Y tế năm
                                    2014 về Thành tích trong công tác chuyên môn.
                                    <hr>
                                    Hiện nay, TS. BS Phan Nguyễn Thanh Bình giữ chức vụ Trưởng khoa Dinh dưỡng - Tiết
                                    chế, Khoa Nhi - Sơ sinh - Bệnh viện Đa khoa Quốc tế Vinmec Central Park.
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
