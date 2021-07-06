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
            ->join('immuniziers', 'immuniziers.id', '=', 'appoinments.immunizier_id')
            ->select('appoinments.*', 'immuniziers.fullname')
            ->get();
        return view('admin.appointment.index',compact('appoinments'));
    }
}
