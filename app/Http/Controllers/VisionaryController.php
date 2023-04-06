<?php

namespace App\Http\Controllers;

use App\Models\Video;
use Illuminate\Http\Request;

class VisionaryController extends Controller
{
    //
    public function index()
    {
        $videos=Video::all();
        return view('visionary',compact('videos'));
    }
    public function videoCount(Request $request)
    {
        $video_id=$request->video_id;
        $video=Video::where('id',$video_id)->first();
        if($video!=''){
            Video::where('id',$video_id)->update(['view'=>$video->view+1]);
            return true;
        }
        return false;
    }
}
