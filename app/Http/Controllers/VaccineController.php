<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class VaccineController extends Controller
{
    public function index()
    {
        dc('list category');
    }
}
