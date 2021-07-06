<?php

namespace App\Http\Controllers;

use App\Traits\StorageImageTrait;
use App\Vaccine;
use Illuminate\Http\Request;
use App\Components\Recusive;
use Storage;

class VaccineController extends Controller
{
    use StorageImageTrait;
    private $vaccine;

    public function __construct(Vaccine $vaccine)
    {
        $this->vaccine = $vaccine;
    }

    public function create()
    {
        $htmlOption = $this->getCategory($parent_id = '');
        return view('admin.vaccine.add', compact('htmlOption'));
    }

    public function index(){
        $vaccines = $this->vaccine->all();
        $recusive = new Recusive($vaccines);
        $htmlTable = $recusive->categoryTable();
        return view('admin.vaccine.index', compact('htmlTable'));
    }

    public function store(Request $request){
        $this->vaccine->create([
            'vaccine_name' => $request->name,
            'idparent' => $request->parent_id,
        ]);
        return redirect() -> route('vaccines.index');
    }

    public function getCategory($parent_id)
    {
        $data = $this->vaccine->all();
        $recusive = new Recusive($data);
        $htmlOption = $recusive->categoryRecusive($parent_id);
        return $htmlOption;
    }

    public function edit($id)
    {
        $vaccine = $this->vaccine->find($id);
        $htmlOption = $this->getCategory($vaccine->idparent);
        return view('admin.vaccine.edit', compact('vaccine', 'htmlOption'));
    }

    public function update($id, Request $request)
    {
        $dataVaccine = [
            'vaccine_name' => $request->name,
            'idparent' => $request->parent_id,
            'status' => $request->status,
            'amount' => $request->amount,
            'important_note' => $request->important_note,
            'discription' => $request->discription
        ];

        $dataUpload = $this->storageTraitUpload($request, 'image', 'vaccine_photo');
        if(!empty($dataUpload)){
            $dataVaccine['image'] = $dataUpload['file_path'];
        }
        $this->vaccine->find($id)->update($dataVaccine);
        return redirect() -> route('vaccines.index');
    }

    public function delete($id)
    {
        $this->vaccine->find($id)->delete();
        return redirect() -> route('vaccines.index');
    }
    public function tablevaccine()
    {
        $htmlSelect = '';
        $data = $this->vaccine->all();
        foreach ($data as $value){
            if($value['idparent']!= 0){
                $htmlSelect .= "<option value='" . $value['id'] . "'>" . $value['vaccine_name'] . "</option>";
            }
        }
        $vaccines = $this->vaccine->all();
        $recusive = new Recusive($vaccines);
        $htmlTable = $recusive->categoryTableHome();
        return view('vaccinelist.vaccinestatus', compact('htmlTable', 'htmlSelect'));

    }

    public function search(Request $request){
        $htmlSelect = '';
        $data = $this->vaccine->all();
        foreach ($data as $value){
            if($value['idparent']!= 0){
                $htmlSelect .= "<option value='" . $value['id'] . "'>" . $value['vaccine_name'] . "</option>";
            }
        }
        $htmlTable='';
        $id = $request->id;
        $parent_id = $request->parent_id;
        if($id != 0){
                $data = $this->vaccine->find($id);
                $dataparent = $this->vaccine->find($data['idparent']);
                $htmlTable .= "<tr><td class='text-center' style='vertical-align: middle'>". $data['idparent'] ."</td>
                                        <td class='text-center' style='vertical-align: middle'>". $dataparent['vaccine_name'] ."</td>
                                        <td class='text-center' style='vertical-align: middle'>".$data['vaccine_name']."</td>";
            if($data['amount'] == ''){
                $htmlTable .= "<td style='color: red'> "."Hết"."</td></tr>";
            }else
            {$htmlTable .= "<td style='color: green'> "."Còn"."</td></tr>";}

        }
        return view('vaccinelist.vaccinestatus', compact('htmlTable', 'htmlSelect'));
    }
}
