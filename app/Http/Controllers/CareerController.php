<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\ProfileViewLog;
use App\Models\RecruterJob;
use Illuminate\Http\Request;
use Auth;
use Storage;
use DB;


class CareerController extends Controller
{
    //
    public function index(Request $request)
    {
        $cities = RecruterJob::select('location')->groupBy('location')->get();
        $user_id = 0;
        $id = '';
        $candidatejob = array();
        if (isset(Auth::user()->id)) {
            $user_id = Auth::user()->id;
        }
        if (isset($request->id) && $request->id != '') {
            $id = decrypt($request->id);
            $candidatejob = RecruterJob::where('id', $id)->first();
        }
        $candidatejob = json_encode($candidatejob);
        $jobposts = RecruterJob::select('recruter_job.*', DB::raw('(select id from candidates where job_id=recruter_job.id AND user_id=' . $user_id . ') as candidate_id'))->where('status', 1)->where('recruter_job.vacancy', '>', 0);
        if ($request->job_title != '') {
            $jobposts->where('recruter_job.title', 'like', '%' . $request->job_title . '%');
        }
        if ($request->location != '') {
            $jobposts->where('recruter_job.location', $request->location);
        }
        $jobposts = $jobposts->get();
        $job_title = $request->job_title;
        $location = $request->location;
        $ipaddress = $request->getClientIp();
        ProfileViewLog::updateOrCreate(['ipaddress' => $ipaddress], ['ipaddress' => $ipaddress]);

        return view('career', compact('jobposts', 'cities', 'job_title', 'location', 'id', 'candidatejob'));
    }
}
