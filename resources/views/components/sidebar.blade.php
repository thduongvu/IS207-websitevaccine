        <div class="col-sm-5">
    <div class="left-sidebar">
        <h2>DANH mục CÁC LOẠI VẮC XIN</h2>
        <div class="panel-group category-products" id="accordian"><!--category-productsr-->

            @foreach($vaccines as $vaccine)
                <div class="panel panel-default">

                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordian" href="#typevaccine_{{$vaccine->id}}">
                                <span class="badge pull-right">
                                    @if($vaccine->vaccineChildrent->count())
                                        <i class="fa fa-plus"></i>
                                    @endif
                                </span>
                                {{ $vaccine -> vaccine_name }}
                            </a>
                        </h4>
                    </div>

                    <div id="typevaccine_{{$vaccine->id}}" class="panel-collapse collapse">
                        <div class="panel-body">
                            <ul>
                                @foreach($vaccine->vaccineChildrent as $vaccineChildrent)
                                    <li>
                                        <a href="#"> {{$vaccineChildrent->vaccine_name}}
                                        </a>
                                    </li>
                                @endforeach
                            </ul>
                        </div>
                    </div>
                </div>
            @endforeach

        </div><!--/category-products-->

        <!--/
                <div class="shipping text-center">
            <img src="/eshopper/images/home/IMG_5682-2.jpg" alt="" />
        </div>/shipping-->

    </div>
        </div>

