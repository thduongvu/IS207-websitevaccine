<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\VaccineCategory;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        $vaccines = VaccineCategory::where('idparent', 0)->get();
        $doctors = Doctor::latest()->get();
        $vaccines_1 = VaccineCategory::where('idparent', '>', 0)->latest()->take(4)->get();
        return view('home.home', compact('vaccines','vaccines_1','doctors'));

    }

    public function test()
    {
        return view('test');
    }

    public function extension()
    {
        return view('extension');
    }

    public function childcalendar()
    {
        return view('childcalendar');
    }

    public function adultcalendar()
    {
        return view('adultcalendar');
    }
    public function vaccinelist()
    {
        return view('vaccinelist');
    }

}
