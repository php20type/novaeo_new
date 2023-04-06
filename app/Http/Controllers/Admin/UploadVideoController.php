<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Video;
use Illuminate\Http\Request;
use Storage;

class UploadVideoController extends Controller
{
    //
    public function index()
    {
        $videos=Video::all();
        return view('admin.upload-video.index',compact('videos'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'category' =>'required',
            'fileUpload'=> 'required'
        ]);
        $filename='';
        if($request->has('fileUpload')){
            $filename =date('ymdhis').'_'. $request->fileUpload->getClientOriginalName();
            Storage::disk('uploads_video')->put($filename, file_get_contents($request->fileUpload->getRealPath()));
        }
        Video::create(['name'=>$request->title,'category'=>$request->category,'video'=>$filename,'view'=>0]);

        return redirect('admin/upload-video');
    }
}
