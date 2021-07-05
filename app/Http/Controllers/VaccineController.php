<?php

namespace App\Http\Controllers;
use App\Vaccine;
use App\Components\Recusive;
use Illuminate\Http\Request;

class VaccineController extends Controller
{
    private $vaccine;
    public function __construct(Vaccine $vaccine)
    {
        $this->vaccine = $vaccine;
    }
    public function tablevaccine()
    {
        $vaccines = $this->vaccine->all();
        $recusive = new Recusive($vaccines);
        $htmlTable = $recusive->categoryTable();
        return view('vaccinelist.vaccinestatus', compact('htmlTable'));
    }
}
