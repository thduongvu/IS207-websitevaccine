<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Admin;
use App\Immunizier;
use App\Appoinment;
use App\Vaccine;
use App\Slider;
use App\News;



class AdminHomeController extends Controller
{
    public function index(){
        $admin_count = Admin::count();
        $immu_count = Immunizier::count();
        $vaccine_count = Vaccine::count();
        $ap_count = Appoinment::count();
        $slider_count = Slider::count();
        $news_count = News::count();
        return view('admin.home',compact('admin_count','immu_count','vaccine_count','ap_count','slider_count','news_count'));
    }
}
