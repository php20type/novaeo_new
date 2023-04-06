<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Models\Candidate;
use App\Models\ProfileViewLog;
use App\Models\RecruterJob;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(Request $request){
        $applied_count=Candidate::count();
        $selected_count=Candidate::where('status',1)->count();
        $rejected_count=Candidate::where('status',2)->count();
        $schedule_count=Candidate::where('result',0)->where('interview_date','!=',null)->count();
        $profile_view=ProfileViewLog::count();
        if(isset($request->search)){
            $latest_jobs=RecruterJob::where('title','LIKE','%'.$request->search.'%')->orWhere('location','LIKE','%'.$request->search.'%')->orderBy('id','desc')->limit(5)->get();
            $latest_candidate=Candidate::where('status',0)->where(function($query) use ($request){
                $query->where('name','LIKE','%'.$request->search.'%')->orWhere('country','LIKE','%'.$request->search.'%')->orWhere('email','LIKE','%'.$request->search.'%');
            })->orderBy('id','desc')->limit(5)->get();
        }else{
            $latest_jobs=RecruterJob::orderBy('id','desc')->limit(5)->get();
            $latest_candidate=Candidate::where('status',0)->orderBy('id','desc')->limit(5)->get();
        }
        
        return view('admin.dashboard',compact('latest_jobs','applied_count','selected_count','rejected_count','latest_candidate','profile_view','schedule_count'));
    }
}
