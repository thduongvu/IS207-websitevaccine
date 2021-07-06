<?php

namespace App\Http\Controllers;

use App\News;
use App\Traits\StorageImageTrait;
use Illuminate\Http\Request;

class AdminNewsController extends Controller
{
    use StorageImageTrait;
    private $news;
    public function __construct(News $news)
    {
        $this->news = $news;
    }

    public function index(){
        $newss = $this->news->paginate(5);
        return view('admin.news.index',compact('newss'));
    }

    public function create(){
        return view('admin.news.add');
    }

    public function store(Request $request){
        $dataInsert = [
            'title' => $request->title,
            'content' => $request->description,
            'notes' => $request->notes
        ];
        $dataImageSlider = $this->storageTraitUpload($request, 'image', 'news');

        if(!empty($dataImageSlider)){
            $dataInsert['image'] = $dataImageSlider['file_path'];
        }
        $this->news->create($dataInsert);
        return redirect()->route('news.index');
    }
    public function edit($id){
        $news = $this->news->find($id);
        return view('admin.news.edit', compact('news'));
    }
    public function update($id, Request $request)
    {
        $dataUpdate = [
            'title' => $request->title,
            'content' => $request->description,
            'notes' => $request->notes
        ];
        $dataImageSlider = $this->storageTraitUpload($request, 'image', 'news');

        if(!empty($dataImageSlider)){
            $dataUpdate['image'] = $dataImageSlider['file_path'];
        }
        $this->news->find($id)->update($dataUpdate);
        return redirect()->route('news.index');
    }
}
