@php
    $baseUrl= 'http://localhost:8000'
@endphp
<div class="features_items">
    <h2 class="title text-center">Danh sách vắc xin mới cập nhật</h2>
    @foreach($vaccines_1 as $vaccine)
        <div class="col-sm-3">
            <div class="product-image-wrapper">
                <div class="single-products">
                    <div class="productinfo text-center">
                        <img width="203px" height="135px" object-fit="contain" src="{{$vaccine->image}}" alt="" />
                        <h4>{{$vaccine -> vaccine_name}}</h4>
                        <p>{{$vaccine -> status}}</p>
                        <a href="{{URL::to('/chi-tiet-vac-xin/'.$vaccine->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-info-circle"></i>Chi tiết</a>
                    </div>
                    <div class="product-overlay">
                        <div class="overlay-content">
                            <h4>{{$vaccine -> vaccine_name}}</h4>
                            <p>{{$vaccine -> status}}</p>
                            <a href="{{URL::to('/chi-tiet-vac-xin/'.$vaccine->id)}}" class="btn btn-default add-to-cart"><i class="fa fa-info-circle"></i>Chi tiết</a>
                        </div>
                    </div>
                    <img src="/eshopper/images/home/new_4.png" class="new" alt="" />

                </div>
                <div class="choose">
                    <ul class="nav nav-pills nav-justified">
                        <li><a href="http://localhost:8000/developing"><i class="fa fa-plus-square"></i>Thêm vào danh sách yêu thích</a></li>
                    </ul>
                </div>
            </div>
        </div>
    @endforeach


</div>
