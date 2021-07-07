<header id="header"><!--header-->
    <div class="header_top"><!--header_top-->
        <div class="container">
            <div class="row">
                <div class="col-sm-6">
                    <div class="contactinfo">
                        <ul class="nav nav-pills">
                            <li><a href="tel:0366866701"><i class="fa fa-phone"></i> 0366866701</a></li>
                            <li><a href="mailto:phanvu.fw@gmail.com"><i class="fa fa-envelope"></i> phanvu.fw@gmail.com</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-sm-6">
                    <div class="social-icons pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="https://www.facebook.com/thduongvu1809/"><i class="fa fa-facebook"></i></a></li>
                            <li><a href="https://www.facebook.com/thaitamphan123"><i class="fa fa-facebook"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header_top-->

    <div class="header-middle"><!--header-middle-->
        <div class="container">
            <div class="row">
                <div class="col-md-4 clearfix">
                    <div class="logo pull-left">
                        <a href="http://localhost:8000"><img src="/eshopper/images/home/pv_gray.png" alt="" /></a>
                    </div>
                </div>
                <div class="col-md-8 clearfix">
                    <div class="shop-menu clearfix pull-right">
                        <ul class="nav navbar-nav">
                            <li><a href="http://localhost:8000/vaccinestatus"><i class="fa fa-crosshairs"></i> Kiểm tra tình trạng vắc xin</a></li>
                            <li><a href="http://localhost:8000/dangky"><i class="fa fa-star"></i> Đăng ký lịch hẹn</a></li>
                            <li><a href="http://localhost:8000/test"><i class="fa fa-lock"></i> Đăng nhập / Đăng ký tài khoản</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div><!--/header-middle-->

    <div class="header-bottom"><!--header-bottom-->
        <div class="container">
            <div class="row">
                <div class="col-sm-9">
                    <div class="navbar-header">
                        <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                            <span class="sr-only">Toggle navigation</span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                            <span class="icon-bar"></span>
                        </button>
                    </div>
                    <div class="mainmenu pull-left">
                        <ul class="nav navbar-nav collapse navbar-collapse">
                            <li><a href="http://localhost:8000" class="active">Trang chủ</a></li>
                            <li class="dropdown"><a href="#">Truy cập<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="{{route('vaccinelist')}}">Danh mục vắc xin</a></li>
                                    <li><a href="http://localhost:8000/vaccinestatus">Tình trạng vắc xin</a></li>
                                    <li><a href="http://localhost:8000/vaccinetype">Thông tin vắc xin</a></li>
                                    <li><a href="http://localhost:8000/childcalendar">Lịch tiêm chủng trẻ em</a></li>
                                    <li><a href="http://localhost:8000/adultcalendar">Lịch tiêm chủng người lớn</a></li>
                                    <li><a href="http://localhost:8000/dangky">Đăng ký lịch hẹn tiêm chủng</a></li>
                                </ul>
                            </li>
                            <li class="dropdown"><a href="#">Tin tức<i class="fa fa-angle-down"></i></a>
                                <ul role="menu" class="sub-menu">
                                    <li><a href="http://localhost:8000/truoc">Những điều cần biết trước khi tiêm</a></li>
                                    <li><a href="http://localhost:8000/sau">Những điều cần biết sau khi tiêm</a></li>
                                    <li><a href="http://localhost:8000/covid">Thông tin về vắc xin COVID-19</a></li>
                                    <li><a href="http://localhost:8000/extension">Video tin tức</a></li>
                                </ul>
                            </li>
                            <li><a href="http://localhost:8000/test1">Báo cáo sau tiêm</a></li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>
    </div><!--/header-bottom-->
</header><!--/header-->
