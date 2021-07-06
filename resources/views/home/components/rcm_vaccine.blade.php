@php
    $baseUrl= 'http://localhost:8000'
@endphp
<div class="recommended_items"><!--recommended_items-->
    <h2 class="title text-center">Vắc xin có lượt xem nhiều nhất</h2>

    <div id="recommended-item-carousel" class="carousel slide" data-ride="carousel">
        <div class="carousel-inner">

            @foreach($vaccines_rcm as $rcm_key => $vaccines_rcm_item)
                    @if($rcm_key % 4 == 0)
                        <div class="item {{$rcm_key == 0 ? 'active' : ''}}">
                            @endif
                            <div class="col-sm-3">
                                <div class="product-image-wrapper">
                                    <div class="single-products">
                                        <div class="productinfo text-center">
                                            <img width="203px" height="135px" object-fit="contain"
                                                 src="{{$vaccines_rcm_item->image}}" alt=""/>
                                            <h4>{{$vaccines_rcm_item -> vaccine_name}}</h4>
                                            <p>{{$vaccines_rcm_item -> status}}</p>
                                            <a href="{{URL::to('/chi-tiet-vac-xin/'.$vaccines_rcm_item->id)}}" class="btn btn-default add-to-cart"><i
                                                    class="fa fa-info-circle"></i>Chi tiết</a>
                                        </div>
                                    </div>
                                    <img src="/eshopper/images/home/hot.png" class="new" alt=""/>
                                    <div class="choose">
                                        <ul class="nav nav-pills nav-justified">
                                            <li><a href="#"><i class="fa fa-plus-square"></i>Thêm vào danh sách yêu
                                                    thích</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>

                            @if($rcm_key % 4 == 3)
                        </div>
                    @endif
            @endforeach

        </div>
        <a class="left recommended-item-control" href="#recommended-item-carousel" data-slide="prev">
            <i class="fa fa-angle-left"></i>
        </a>
        <a class="right recommended-item-control" href="#recommended-item-carousel" data-slide="next">
            <i class="fa fa-angle-right"></i>
        </a>
    </div>
</div>
