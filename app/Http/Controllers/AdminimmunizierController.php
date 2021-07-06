<?php

namespace App\Http\Controllers;

use App\immunizier;
use Illuminate\Http\Request;
use DB;

class AdminimmunizierController extends Controller
{
    private $immunizier;
    public function __construct(immunizier $immunizier)
    {
        $this->immunizier = $immunizier;
    }
    public function index(){
        $immuniziers = $this->immunizier->all();
        return view('admin.Immunizier.index', compact('immuniziers'));
    }
    public function search(Request $request)
    {
        $immuniziers = DB::table('immuniziers')->where('fullname','like', '%'.$request->key.'%')->get();
        return view('admin.immunizier.index', compact('immuniziers'));
    }
}
