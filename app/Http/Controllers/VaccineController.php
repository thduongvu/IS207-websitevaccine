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
}
