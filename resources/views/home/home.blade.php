@extends('layouts.master')

@section('title')
    <title>Home | PV Vaccination</title>
@endsection

@section('css')
    <link rel="stylesheet" href="{{asset('home/home.css')}}">
@endsection

@section('js')<!--/phan rieng-->
    <link rel="stylesheet" href="{{asset('home/home.js')}}">
@endsection



@section('content')
    <!--/slider-->
    @include('home.components.slider')
    <!--/slider-->

    <section>
        <div class="container">
            <!--features_items_vaccine-->
            @include('home.components.features_vaccine')
            <!--features_items_vaccine-->

            <!--features_items_doctor-->
            @include('home.components.features_doctor')
            <!--features_items_doctor-->

            <!--/category-tab-->
            @include('home.components.category_vaccine')
            <!--/category-tab-->

            <!--recommended_items_vaccine-->
            @include('home.components.rcm_vaccine')
            <!--/recommended_items_vaccine-->

        </div>
    </section>

@endsection

