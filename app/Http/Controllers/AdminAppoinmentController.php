<?php

namespace App\Http\Controllers;

use App\Appoinment;
use Illuminate\Http\Request;
use DB;

class AdminAppoinmentController extends Controller
{
    private $appoinment;
    public function __construct(Appoinment $appoinment)
    {
        $this->appoinment = $appoinment;
    }

    public function index()
    {
        $appoinments = DB::table('appoinments')
            ->join('immunizers', 'immunizers.id', '=', 'appoinments.immunizer_id')
            ->select('appoinments.*', 'immunizers.fullname')
            ->get();
        return view('admin.appointment.index',compact('appoinments'));
    }
}
