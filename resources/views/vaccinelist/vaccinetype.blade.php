@extends('layouts.master')

@section('title')
    <title>Thông tin vắc xin | Danh sách</title>
@endsection



@section('content')
    <hr>

    <div class="container">
        <div class="row">

        <!--features_items_vaccine-->
        @include('vaccinelist.components.vaccinefull')
        <!--features_items_vaccine-->

        </div>
    </div>
    <hr>
@endsection


