<?php

namespace App\Http\Controllers;

use App\Immunizer;
use Illuminate\Http\Request;
use DB;

class AdminImmunizerController extends Controller
{
    private $immunizer;
    public function __construct(Immunizer $immunizer)
    {
        $this->immunizer = $immunizer;
    }
    public function index(){
        $immunizers = $this->immunizer->all();
        return view('admin.Immunizer.index', compact('immunizers'));
    }
    public function search(Request $request)
    {
        $immunizers = DB::table('immunizers')->where('fullname','like', '%'.$request->key.'%')->get();
        return view('admin.Immunizer.index', compact('immunizers'));
    }
}
