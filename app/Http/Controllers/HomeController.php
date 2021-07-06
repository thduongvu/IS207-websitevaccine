<?php

namespace App\Http\Controllers;

use App\Doctor;
use App\Immunizier;
use App\Useraccount;
use App\VaccineCategory;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

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

        return view('test');
    }

    public function posttest(Request $req)
    {
        $this->validate($req,
            [
                'mail' => 'nullable| email',
               // 'password' => 'required|min: 6|max: 20',
                'fullname' => 'required',
                //'username' => 'required|unique: immuniziers, username',
                'sex' => 'required',
                'dob' => 'required',
                'phone' => 'required| max: 10|min: 10',
                'permanent_address' => 'required',
                'ward'=> 'required',
                'district'=> 'required',
                'city'=> 'required',
                //'retype' => 'required|same: password'
            ],[
                'mail.email' => 'Vui lòng nhập địa chỉ email có chữ @ và tên miền đầy đủ (ví dụ: phanvu.fw@gmail.com)',
                'password.required' => 'Vui lòng nhập mật khẩu từ 6 - 20 kí tự.',
                'password.min' => 'Vui lòng nhập mật khẩu từ 6 - 20 kí tự.',
                'password.max' => 'Vui lòng nhập mật khẩu từ 6 - 20 kí tự.',
                'fullname.required' => 'Vui lòng nhập đầy đủ họ tên của bạn',

                'username.required' => 'Vui lòng nhập tên người dùng',
                //'username.unique' => 'Vui lòng nhập tên người dùng khác, tên này đã được sử dụng',
                'sex.required' => 'Vui lòng chọn giới tính',
                'dob.required' => 'Vui lòng chọn ngày sinh',
                'phone.required' => 'Vui lòng nhập số điện thoại',
                'phone.min' => 'Vui lòng nhập đúng định dạng số điện thoại. Ví dụ: 0366866701',
                'phone.max' => 'Vui lòng nhập đúng định dạng số điện thoại. Ví dụ: 0366866701',
                'permanent_address.required' => 'Vui lòng nhập đầy đủ địa chỉ thường trú',
                'ward.required'=> 'Vui lòng nhập tên phường',
                'district.required'=> 'Vui lòng nhập tên quận',
                'city.required'=> 'Vui lòng nhập tên tên thành phố',
                //'retype.required' => 'Vui lòng nhập lại mật khẩu',
               // 'retype.same' => 'Mật khẩu không khớp với mật khẩu đã nhập'
            ]);
        $im = new Immunizier();
        $im->fullname = $req->fullname;
        $im->username = $req->username;
        $im->sex = $req->sex;
        $im->dob = $req->dob;
        $im->identify_card = $req->identify_card;
        $im->phone = $req->phone;
        $im->mail = $req->mail;
        $im->permanent_address = $req->permanent_address;
        $im->ward = $req->ward;
        $im->district=$req->district;
        $im->city=$req->city;
        $im->past_medical_history=$req->past_medical_history;
        $im->save();

        //$uc = new User_accounts();
        //$uc->username=$req->username;
        //$uc->password=Hash::make($req->password);
        //$uc->save();

        return redirect()->back()->with('success', 'Tài khoản đã được tạo thành công');
    }

    public function test1()
    {
        $vaccines = VaccineCategory::where('idparent', 0)->get();
        $vaccines_full = VaccineCategory::where('idparent', '>', 0)->paginate(12);
        //->latest('vaccine_name')->get();
        return view('test1',compact('vaccines','vaccines_full'));
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
    public function vaccinelist1()
    {
        $vaccines = VaccineCategory::where('idparent', 0)->get();
        $vaccines_full = VaccineCategory::where('idparent', '>', 0)->get();

        return view('vaccinelist.vaccinelist',compact('vaccines_full','vaccines'));
    }

    public function vaccinetype()
    {
        $vaccines = VaccineCategory::where('idparent', 0)->get();
        $vaccines_full = VaccineCategory::where('idparent', '>', 0)->latest('vaccine_name')->paginate(12);
        //->latest('vaccine_name')->get();
        return view('vaccinelist.vaccinetype',compact('vaccines','vaccines_full'));
    }

    public function vaccinefull()
    {
        $vaccines_full = VaccineCategory::where('idparent', '>', 0)->paginate(12);
        //->latest('vaccine_name')->get();
        return view('vaccinelist.components.vaccinefull',compact('vaccines_full'));
    }

    public function detailvaccine($id)
    {
        $full_item = VaccineCategory::where('idparent', '>', 0)->latest()->take(20)->get();
        $details = VaccineCategory::where('id', $id)->get();
        return view('vaccinelist.detailvaccine',compact('full_item','details'));

    }

    public function vaccinelist()
    {
        $vaccines = VaccineCategory::where('idparent', 0)->get();
        $vaccines_full = VaccineCategory::where('idparent', '>', 0)->get();

        return view('vaccinelist.vaccinelist',compact('vaccines_full','vaccines'));
    }

    public function addtofavo($id)
    {
       dd('add to favo------'.$id);
    }

    public function choose()
    {
        return view('choose.choose');
    }

    public function developing()
    {
        return view('error.developing');
    }

}
