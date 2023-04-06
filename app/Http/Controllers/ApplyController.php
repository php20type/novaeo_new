<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\CandidateQuestion;
use App\Models\JobQuestion;
use App\Models\ProfileViewLog;
use App\Models\RecruterJob;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Validator;
use Auth;
use Storage;

class ApplyController extends Controller
{
    //
    public function index(Request $request)
    {
        $cities=RecruterJob::select('location')->groupBy('location')->get();

        $jobposts=RecruterJob::where('vacancy','>',0);
        if($request->job_title!=''){
            $jobposts->where('title','like','%'.$request->job_title.'%');
        }
        if($request->location!=''){
            $jobposts->where('location',$request->location);
        }
        $jobposts=$jobposts->get();
        $job_title=$request->job_title;
        $location=$request->location;
        $ipaddress=$request->getClientIp();
        ProfileViewLog::updateOrCreate(['ipaddress'=>$ipaddress],['ipaddress'=>$ipaddress]);
        return view('apply',compact('jobposts','cities','job_title','location'));
    }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'mobile' =>'required',
            'email' =>'required',
            'resume'=>'required',
            'country'=>'required',
            'experience'=>'required',
            'profile'=>'required'
        ]);

        $resumename='';
        $portfolioname='';
        $profilename='';
        if($request->has('resume')){
            $resumename =date('ymdhis').'_'. $request->resume->getClientOriginalName();
            Storage::disk('uploads_resume')->put($resumename, file_get_contents($request->resume->getRealPath()));
        }
        if($request->has('portfolio')){
            $portfolioname =date('ymdhis').'_'. $request->portfolio->getClientOriginalName();
            Storage::disk('uploads_portfolio')->put($portfolioname, file_get_contents($request->portfolio->getRealPath()));
        }
        if($request->has('profile')){
            $profilename =date('ymdhis').'_'. $request->profile->getClientOriginalName();
            Storage::disk('uploads_profile')->put($profilename, file_get_contents($request->profile->getRealPath()));
        }
        $questions=JobQuestion::where('job_id',$request->job_id)->get();
        $candidate=Candidate::create([
            'user_id'=>Auth::user()->id,
            'job_id'=>$request->job_id,
            'name'=>$request->name,
            'mobile'=>$request->mobile,
            'email'=>$request->email,
            'country'=>$request->country,
            'experience'=>$request->experience,
            'profile_link'=>$request->profile_link,
            'resume'=>$resumename,
            'portfolio'=>$portfolioname,
            'profile'=>$profilename,
        ]);

        foreach($questions as $post){
            $que='question_'.$post->id;
            if ( $request->$que != null || $request->$que != '' ) {
                CandidateQuestion::create([
                    'candidate_id'=>$candidate->id,
                    'job_id'=>$request->job_id,
                    'question_id'=>$post->id,
                    'answer'=> $request->$que
                ]);
            }    
        }
        
        return redirect()->back();
    }
    public function jobQuestions(Request $request)
    {
        $job_id=$request->job_id;
        $questions=JobQuestion::where('job_id',$job_id)->get();
        return response()->json($questions);
    }
}
