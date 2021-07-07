<?php

namespace App\Http\Controllers;

use App\Appoinment;
use App\Doctor;
use App\Immunizier;
use App\Report;
use App\Slider;
use App\Useraccount;
use App\VaccineCategory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Auth;
use Mail;
use DB;

class HomeController extends Controller
{
    private $result;

    public function index()
    {
        $sliders = Slider::latest()->take(7)->get();
        $vaccines = VaccineCategory::where('idparent', 0)->get();
        $doctors = Doctor::latest()->get();
        $vaccines_1 = VaccineCategory::where('idparent', '>', 0)->latest()->take(4)->get(); // new
        $vaccines_rcm = VaccineCategory::where('idparent', '>', 0)->latest('views_count', 'desc')->take(8)->get();
        //$news = New::where('idparent', 0)->get();
        //dd($vaccines_rcm);
        return view('home.home', compact('vaccines', 'vaccines_1', 'doctors', 'vaccines_rcm', 'sliders'));

    }

    public function dangky()
    {

        $immuniziers = DB::table('immuniziers')->where('username', $this->result['username'])->get();

        return view('home.dangky', compact('immuniziers'));
    }

    public function postdangky(Request $req)
    {
        $validatedData = $req->validate([
            'id' => 'required',
            'appoinment_date' => 'required',
            'appoinment_time' => 'required',
        ]);

        $ap = new Appoinment();

        $ap->immunizier_id = $req->id;
        $ap->appoinment_date = $req->appoinment_date;
        $ap->appoinment_time = $req->appoinment_time;
        $ap->save();

        return redirect()->back()->with('success', 'Da dang ky thanh cong');
    }

    public function truoc()
    {
        return view('home.truoc');
    }
    public function sau()
    {
        return view('home.sau');
    }
    public function covid()
    {
        return view('home.covid');
    }

    public function bs1()
    {
        return view('others.bs1');
    }
    public function bs2()
    {
        return view('others.bs2');
    }
    public function bs3()
    {
        return view('others.bs3');
    }
    public function bs6()
    {
        return view('others.bs6');
    }

    public function bb1()
    {
        return view('others.bb1');
    }
    public function bb2()
    {
        return view('others.bb2');
    }
    public function bb3()
    {
        return view('others.bb3');
    }
    public function bb4()
    {
        return view('others.bb4');
    }
    public function bb5()
    {
        return view('others.bb5');
    }
    public function bb6()
    {
        return view('others.bb6');
    }
    public function bb7()
    {
        return view('others.bb7');
    }

    public function test()
    {

        return view('test');
    }

    public function posttest(Request $req)
    {
        $validatedData = $req->validate([
            'mail' => 'nullable| email',
            'password' => 'required|min: 6|max: 20',
            'fullname' => 'required',
            //'username' => 'required|unique: immuniziers',
            'sex' => 'required',
            'dob' => 'required',
            'phone' => 'required| max: 10|min: 10',
            'permanent_address' => 'required',
            'ward' => 'required',
            'district' => 'required',
            'city' => 'required',
            //'retype' => 'required|same: password',
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
        $im->district = $req->district;
        $im->city = $req->city;
        $im->past_medical_history = $req->past_medical_history;
        $im->password = Hash::make($req->password);

        $im->save();

        return redirect()->back()->with('success', 'Tài khoản đã được tạo thành công');
    }



    public function postlogin(Request $req)
    {
        $usr = $req->username;
        $pass = $req->password;

        $this->result = DB::table('immuniziers')->where('username', $usr)->where('password', $pass)->first();
        if ($this->result) {
            return Redirect::to('');
        } else {
            return redirect()->back()->with(['flag' => 'warning', 'msg' => 'Đăng nhập thất bại']);
        }
    }
    public function test1()
    {
        return view('test1');
    }
    public function postreport(Request $req)
    {
        $validatedData = $req->validate([
            'email' => 'nullable| email',
            'name' => 'required',
            'contents' => 'required',
        ]);

        $rp = new Report();
        $rp->name = $req->name;
        $rp->email = $req->email;
        $rp->contents = $req->contents;

        $rp->save();

        return redirect()->back()->with('success', 'Báo cáo đã được gửi đến hệ thống thành công');
    }

    public function send_report()
    {
        //send mail
        $to_name = "PV Vaccination Sys.";
        $to_email = Immunizier::query()->where('id',2)->first()->mail;

        $data = array("name" => "PV Vaccination Sys.", "body" => "Lưu ý: Đây là email xác nhận tự động từ hệ thống. Vui lòng không trả lời email này."); //body of mail.blade.php

        Mail::send('report', $data, function ($message) use ($to_name, $to_email) {
            $message->to($to_email)->subject('[PV Vaccination] - Xác nhận báo cáo sốc phản vệ');//send this mail with subject
            $message->from($to_email, $to_name);//send from this mail
        });
        return redirect()->back()->with('success', 'Báo cáo đã được gửi đến hệ thống thành công');
        //--send mail

    }

    public function send_login()
    {
        //send mail
        $to_name = "PV Vaccination Sys.";
        $to_email = Immunizier::query()->where('id',2)->first()->mail;

        $data = array("name" => "PV Vaccination Sys.", "body" => "Lưu ý: Đây là email xác nhận tự động từ hệ thống. Vui lòng không trả lời email này."); //body of mail.blade.php

        Mail::send('logincf', $data, function ($message) use ($to_name, $to_email) {
            $message->to($to_email)->subject('[PV Vaccination] - Xác nhận tạo tài khoản thành công');//send this mail with subject
            $message->from($to_email, $to_name);//send from this mail
        });
        return redirect()->back()->with('success', 'Tài khoản đã được tạo thành công. Vui lòng kiểm tra email của bạn');
        //--send mail

    }

    public function send_mail()
    {
        //send mail
        $to_name = "PV Vaccination Sys.";
        $to_email = Immunizier::query()->where('id',2)->first()->mail;

        $data = array("name" => "PV Vaccination Sys.", "body" => "Lưu ý: Quý khách vui lòng kiểm tra tình trạng vắc-xin trước khi đến Viện."); //body of mail.blade.php

        Mail::send('mail', $data, function ($message) use ($to_name, $to_email) {
            $message->to($to_email)->subject('[PV Vaccination] - Đăng ký lịch tiêm chủng');//send this mail with subject
            $message->from($to_email, $to_name);//send from this mail
        });
        return redirect('/')->with('message','');
        //--send mail

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

        return view('vaccinelist.vaccinelist', compact('vaccines_full', 'vaccines'));
    }

    public function vaccinetype()
    {
        $vaccines = VaccineCategory::where('idparent', 0)->get();
        $vaccines_full = VaccineCategory::where('idparent', '>', 0)->latest('vaccine_name')->paginate(12);
        //->latest('vaccine_name')->get();
        return view('vaccinelist.vaccinetype', compact('vaccines', 'vaccines_full'));
    }

    public function vaccinefull()
    {
        $vaccines_full = VaccineCategory::where('idparent', '>', 0)->paginate(12);
        //->latest('vaccine_name')->get();
        return view('vaccinelist.components.vaccinefull', compact('vaccines_full'));
    }

    public function detailvaccine($id)
    {
        $full_item = VaccineCategory::where('idparent', '>', 0)->latest()->take(20)->get();
        $details = VaccineCategory::where('id', $id)->get();
        return view('vaccinelist.detailvaccine', compact('full_item', 'details'));

    }


    public function vaccinelist()
    {
        $vaccines = VaccineCategory::where('idparent', 0)->get();
        $vaccines_full = VaccineCategory::where('idparent', '>', 0)->get();

        return view('vaccinelist.vaccinelist', compact('vaccines_full', 'vaccines'));
    }

    public function addtofavo($id)
    {
        dd('add to favo------' . $id);
    }

    public function choose()
    {
        return view('choose.choose');
    }

    public function developing()
    {
        return view('error.developing');
    }

    public function search(Request $req)
    {
        $vaccines_full = VaccineCategory::where('idparent', '>', 0)->get();
        $vaccine = VaccineCategory::where('vaccine_name', 'like', '%' . $req->key . '%')
            ->orWhere('status', $req->key)
            ->get();
        return view('home.search', compact('vaccine', 'vaccines_full'));
    }







}
