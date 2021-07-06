<?php

namespace App\Http\Controllers;

use DB;
use Session;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
session_start();
class AdminController extends Controller
{
    public function loginAdmin()
    {
        return view('admin.login');
    }

    public function postloginAdmin(Request $request)
    {
        $admin_username = $request->username;
        $admin_password = $request->password;

        $result = DB::table('admins')->where('username', $admin_username)->where('password', $admin_password)->first();

        if($result) {
            return Redirect::to('adminhome');
        }else
        {
            Session::put('message', 'Tài khoản hoặc mật khẩu không đúng');
            return Redirect::to('login');
        }
    }
}
