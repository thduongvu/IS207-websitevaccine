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
        $vaccines_1 = VaccineCategory::where('idparent', '>', 0)->latest()->take(4)->get(); // new
        $vaccines_rcm = VaccineCategory::where('idparent', '>', 0)->latest('views_count', 'desc')->take(8)->get();
        //$news = New::where('idparent', 0)->get();
        //dd($vaccines_rcm);
        return view('home.home', compact('vaccines','vaccines_1','doctors','vaccines_rcm'));

    }

    public function test()
    {
        $vaccines = VaccineCategory::where('idparent', 0)->get();
        $vaccines_full = VaccineCategory::where('idparent', '>', 0)->latest('vaccine_name')->get();
        return view('test',compact('vaccines','vaccines_full'));
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
        $vaccines = VaccineCategory::where('idparent', 0)->get();
        $vaccines_full = VaccineCategory::where('idparent', '>', 0)->get();

        return view('vaccinelist.vaccinelist',compact('vaccines_full','vaccines'));
    }


}
