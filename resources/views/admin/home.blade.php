@extends('admin.layouts.admin')

@section('title')
    <title>Trang chủ</title>
@endsection


@section('content')
    <!-- Content Wrapper. Contains page content -->
    <div class="content-wrapper">
        <!-- Content Header (Page header) -->
    @include('admin.partials.content-header', ['name' => 'Home', 'key' => 'Report'])
    <!-- /.content-header -->
        <!-- /.content -->
        <div class="row mb-2">
            <div class="col-sm-12">
                <div class="col-lg-12 col-6">
                    <!-- small box -->
                    <div class="small-box bg-gradient-warning">
                        <div class="inner">
                            <h3>{{$admin_count}}</h3>

                            <p>Admins</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                    </div>
                </div>
                <div class="col-lg-12 col-6">
                    <!-- small box -->
                    <div class="small-box bg-gradient-success">
                        <div class="inner">
                            <h3>{{$vaccine_count}}</h3>

                            <p>Vaccines</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="http://localhost:8000/vaccines" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-12 col-6">
                    <!-- small box -->
                    <div class="small-box bg-gradient-danger">
                        <div class="inner">
                            <h3>{{$immu_count}}</h3>

                            <p>Immuniziers</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="http://localhost:8000/immunizier" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-12 col-6">
                    <!-- small box -->
                    <div class="small-box bg-gradient-blue">
                        <div class="inner">
                            <h3>{{$ap_count}}</h3>

                            <p>Appointments</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="http://localhost:8000/appointment" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-12 col-6">
                    <!-- small box -->
                    <div class="small-box bg-gradient-pink">
                        <div class="inner">
                            <h3>{{$slider_count}}</h3>

                            <p>Sliders</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="http://localhost:8000/slider" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>
                <div class="col-lg-12 col-6">
                    <!-- small box -->
                    <div class="small-box bg-gradient-dark">
                        <div class="inner">
                            <h3>{{$news_count}}</h3>

                            <p>News</p>
                        </div>
                        <div class="icon">
                            <i class="ion ion-person-add"></i>
                        </div>
                        <a href="http://localhost:8000/news" class="small-box-footer">More info <i class="fas fa-arrow-circle-right"></i></a>
                    </div>
                </div>

                <div class=" card bg-gradient-light">
                    <div class="card-header border-0 ui-sortable-handle" style="cursor: move;">

                        <h3 class="card-title">
                            <i class="far fa-calendar-alt"></i>
                            Calendar
                        </h3>
                        <!-- tools card -->

                        <!-- /. tools -->
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body pt-0">
                        <!--The calendar -->
                        <div id="calendar" style="width: 100%">
                            <div class="bootstrap-datetimepicker-widget usetwentyfour">
                                <ul class="list-unstyled">
                                    <li class="show">
                                        <div class="datepicker">
                                            <div class="datepicker-days" style="">
                                                <table class="table table-sm">
                                                    <thead>
                                                    <tr>
                                                        <th class="prev" data-action="previous"><span
                                                                class="fa fa-chevron-left"
                                                                title="Previous Month"></span></th>
                                                        <th class="picker-switch" data-action="pickerSwitch" colspan="5"
                                                            title="Select Month">July 2021
                                                        </th>
                                                        <th class="next" data-action="next"><span
                                                                class="fa fa-chevron-right" title="Next Month"></span>
                                                        </th>
                                                    </tr>
                                                    <tr>
                                                        <th class="dow">Su</th>
                                                        <th class="dow">Mo</th>
                                                        <th class="dow">Tu</th>
                                                        <th class="dow">We</th>
                                                        <th class="dow">Th</th>
                                                        <th class="dow">Fr</th>
                                                        <th class="dow">Sa</th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td data-action="selectDay" data-day="06/27/2021"
                                                            class="day old weekend">27
                                                        </td>
                                                        <td data-action="selectDay" data-day="06/28/2021"
                                                            class="day old">28
                                                        </td>
                                                        <td data-action="selectDay" data-day="06/29/2021"
                                                            class="day old">29
                                                        </td>
                                                        <td data-action="selectDay" data-day="06/30/2021"
                                                            class="day old">30
                                                        </td>
                                                        <td data-action="selectDay" data-day="07/01/2021" class="day">
                                                            1
                                                        </td>
                                                        <td data-action="selectDay" data-day="07/02/2021" class="day">
                                                            2
                                                        </td>
                                                        <td data-action="selectDay" data-day="07/03/2021"
                                                            class="day weekend">3
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td data-action="selectDay" data-day="07/04/2021"
                                                            class="day weekend">4
                                                        </td>
                                                        <td data-action="selectDay" data-day="07/05/2021" class="day">
                                                            5
                                                        </td>
                                                        <td data-action="selectDay" data-day="07/06/2021" class="day">
                                                            6
                                                        </td>
                                                        <td data-action="selectDay" data-day="07/07/2021"
                                                            class="day today">7
                                                        </td>
                                                        <td data-action="selectDay" data-day="07/08/2021" class="day">
                                                            8
                                                        </td>
                                                        <td data-action="selectDay" data-day="07/09/2021" class="day">
                                                            9
                                                        </td>
                                                        <td data-action="selectDay" data-day="07/10/2021"
                                                            class="day weekend">10
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td data-action="selectDay" data-day="07/11/2021"
                                                            class="day weekend">11
                                                        </td>
                                                        <td data-action="selectDay" data-day="07/12/2021" class="day">
                                                            12
                                                        </td>
                                                        <td data-action="selectDay" data-day="07/13/2021" class="day">
                                                            13
                                                        </td>
                                                        <td data-action="selectDay" data-day="07/14/2021" class="day">
                                                            14
                                                        </td>
                                                        <td data-action="selectDay" data-day="07/15/2021" class="day">
                                                            15
                                                        </td>
                                                        <td data-action="selectDay" data-day="07/16/2021"
                                                            class="day active">16
                                                        </td>
                                                        <td data-action="selectDay" data-day="07/17/2021"
                                                            class="day weekend">17
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td data-action="selectDay" data-day="07/18/2021"
                                                            class="day weekend">18
                                                        </td>
                                                        <td data-action="selectDay" data-day="07/19/2021" class="day">
                                                            19
                                                        </td>
                                                        <td data-action="selectDay" data-day="07/20/2021" class="day">
                                                            20
                                                        </td>
                                                        <td data-action="selectDay" data-day="07/21/2021" class="day">
                                                            21
                                                        </td>
                                                        <td data-action="selectDay" data-day="07/22/2021" class="day">
                                                            22
                                                        </td>
                                                        <td data-action="selectDay" data-day="07/23/2021" class="day">
                                                            23
                                                        </td>
                                                        <td data-action="selectDay" data-day="07/24/2021"
                                                            class="day weekend">24
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td data-action="selectDay" data-day="07/25/2021"
                                                            class="day weekend">25
                                                        </td>
                                                        <td data-action="selectDay" data-day="07/26/2021" class="day">
                                                            26
                                                        </td>
                                                        <td data-action="selectDay" data-day="07/27/2021" class="day">
                                                            27
                                                        </td>
                                                        <td data-action="selectDay" data-day="07/28/2021" class="day">
                                                            28
                                                        </td>
                                                        <td data-action="selectDay" data-day="07/29/2021" class="day">
                                                            29
                                                        </td>
                                                        <td data-action="selectDay" data-day="07/30/2021" class="day">
                                                            30
                                                        </td>
                                                        <td data-action="selectDay" data-day="07/31/2021"
                                                            class="day weekend">31
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td data-action="selectDay" data-day="08/01/2021"
                                                            class="day new weekend">1
                                                        </td>
                                                        <td data-action="selectDay" data-day="08/02/2021"
                                                            class="day new">2
                                                        </td>
                                                        <td data-action="selectDay" data-day="08/03/2021"
                                                            class="day new">3
                                                        </td>
                                                        <td data-action="selectDay" data-day="08/04/2021"
                                                            class="day new">4
                                                        </td>
                                                        <td data-action="selectDay" data-day="08/05/2021"
                                                            class="day new">5
                                                        </td>
                                                        <td data-action="selectDay" data-day="08/06/2021"
                                                            class="day new">6
                                                        </td>
                                                        <td data-action="selectDay" data-day="08/07/2021"
                                                            class="day new weekend">7
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="datepicker-months" style="display: none;">
                                                <table class="table-condensed">
                                                    <thead>
                                                    <tr>
                                                        <th class="prev" data-action="previous"><span
                                                                class="fa fa-chevron-left" title="Previous Year"></span>
                                                        </th>
                                                        <th class="picker-switch" data-action="pickerSwitch" colspan="5"
                                                            title="Select Year">2021
                                                        </th>
                                                        <th class="next" data-action="next"><span
                                                                class="fa fa-chevron-right" title="Next Year"></span>
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td colspan="7"><span data-action="selectMonth" class="month">Jan</span><span
                                                                data-action="selectMonth" class="month">Feb</span><span
                                                                data-action="selectMonth" class="month">Mar</span><span
                                                                data-action="selectMonth" class="month">Apr</span><span
                                                                data-action="selectMonth" class="month">May</span><span
                                                                data-action="selectMonth" class="month">Jun</span><span
                                                                data-action="selectMonth"
                                                                class="month active">Jul</span><span
                                                                data-action="selectMonth" class="month">Aug</span><span
                                                                data-action="selectMonth" class="month">Sep</span><span
                                                                data-action="selectMonth" class="month">Oct</span><span
                                                                data-action="selectMonth" class="month">Nov</span><span
                                                                data-action="selectMonth" class="month">Dec</span></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="datepicker-years" style="display: none;">
                                                <table class="table-condensed">
                                                    <thead>
                                                    <tr>
                                                        <th class="prev" data-action="previous"><span
                                                                class="fa fa-chevron-left"
                                                                title="Previous Decade"></span></th>
                                                        <th class="picker-switch" data-action="pickerSwitch" colspan="5"
                                                            title="Select Decade">2020-2029
                                                        </th>
                                                        <th class="next" data-action="next"><span
                                                                class="fa fa-chevron-right" title="Next Decade"></span>
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td colspan="7"><span data-action="selectYear" class="year old">2019</span><span
                                                                data-action="selectYear" class="year">2020</span><span
                                                                data-action="selectYear" class="year active">2021</span><span
                                                                data-action="selectYear" class="year">2022</span><span
                                                                data-action="selectYear" class="year">2023</span><span
                                                                data-action="selectYear" class="year">2024</span><span
                                                                data-action="selectYear" class="year">2025</span><span
                                                                data-action="selectYear" class="year">2026</span><span
                                                                data-action="selectYear" class="year">2027</span><span
                                                                data-action="selectYear" class="year">2028</span><span
                                                                data-action="selectYear" class="year">2029</span><span
                                                                data-action="selectYear" class="year old">2030</span>
                                                        </td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                            <div class="datepicker-decades" style="display: none;">
                                                <table class="table-condensed">
                                                    <thead>
                                                    <tr>
                                                        <th class="prev" data-action="previous"><span
                                                                class="fa fa-chevron-left"
                                                                title="Previous Century"></span></th>
                                                        <th class="picker-switch" data-action="pickerSwitch"
                                                            colspan="5">2000-2090
                                                        </th>
                                                        <th class="next" data-action="next"><span
                                                                class="fa fa-chevron-right" title="Next Century"></span>
                                                        </th>
                                                    </tr>
                                                    </thead>
                                                    <tbody>
                                                    <tr>
                                                        <td colspan="7"><span data-action="selectDecade"
                                                                              class="decade old" data-selection="2006">1990</span><span
                                                                data-action="selectDecade" class="decade"
                                                                data-selection="2006">2000</span><span
                                                                data-action="selectDecade" class="decade active"
                                                                data-selection="2016">2010</span><span
                                                                data-action="selectDecade" class="decade active"
                                                                data-selection="2026">2020</span><span
                                                                data-action="selectDecade" class="decade"
                                                                data-selection="2036">2030</span><span
                                                                data-action="selectDecade" class="decade"
                                                                data-selection="2046">2040</span><span
                                                                data-action="selectDecade" class="decade"
                                                                data-selection="2056">2050</span><span
                                                                data-action="selectDecade" class="decade"
                                                                data-selection="2066">2060</span><span
                                                                data-action="selectDecade" class="decade"
                                                                data-selection="2076">2070</span><span
                                                                data-action="selectDecade" class="decade"
                                                                data-selection="2086">2080</span><span
                                                                data-action="selectDecade" class="decade"
                                                                data-selection="2096">2090</span><span
                                                                data-action="selectDecade" class="decade old"
                                                                data-selection="2106">2100</span></td>
                                                    </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </li>
                                    <li class="picker-switch accordion-toggle"></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <!-- /.card-body -->
                </div>
            </div>
        </div>
    </div>
    <!-- /.content-wrapper -->

    <!-- /.content-wrapper -->


@endsection



