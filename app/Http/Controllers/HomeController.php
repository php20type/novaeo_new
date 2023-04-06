<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\ContactEnquiry;
use App\Models\RecruterJob;
use App\Models\User;
use Illuminate\Http\Request;
use Storage;
use Auth;
use Hash;
use Mail;
use App\Models\JobQuestion;
use App\Models\CandidateQuestion;
use DB;

class HomeController extends Controller {
    /**
    * Show the application dashboard.
    *
    * @return \Illuminate\Contracts\Support\Renderable
    */

    public function index() {
        return view( 'home' );
    }

    public function contactEnquiry( Request $request ) {
        $request->validate( [
            'name' => 'required',
            'mobile' => 'required',
            'email' => 'required',
            'message' => 'required',
        ] );
        ContactEnquiry::create( [ 'name' => $request->name, 'email' => $request->email, 'mobile' => $request->mobile, 'message' => $request->message ] );
        $data[ 'name' ] = $request->name;
        $data[ 'email' ] = $request->email;
        $data[ 'mobile' ] = $request->mobile;
        $data[ 'messages' ] = $request->message;
        Mail::send( 'mail.enquiry', $data, function ( $message ) use ( $data ) {
            $message->to( 'crazycoder09@gmail.com', 'novaeo' );
            $message->subject( 'Enquiry' );
            $message->from( $data[ 'email' ] );
        }
    );
    return redirect()->back()->with( 'success', 'Contact Enquiry Sent Successfully !!!' );
}

public function candidateProfile( Request $request ) {
    $applications = Candidate::where( 'user_id', Auth::user()->id )->get();
    return view( 'candidate-profile', compact( 'applications' ) );
}

public function updateProfile( Request $request ) {
    $id = Auth::user()->id;
    User::whereId( $id )->update( [ 'name' => $request->name ] );
    if ( $request->has( 'profile' ) ) {
        $profilename = date( 'ymdhis' ) . '_' . $request->profile->getClientOriginalName();
        Storage::disk( 'uploads_profile' )->put( $profilename, file_get_contents( $request->profile->getRealPath() ) );
        User::whereId( $id )->update( [ 'profile' => $profilename ] );
    }

    return redirect()->back();
}

public function updatePassword( Request $request ) {
    # Validation
    $request->validate( [
        'old_password' => 'required',
        'new_password' => 'required|confirmed',
    ] );

    #Match The Old Password
    if ( !Hash::check( $request->old_password, auth()->user()->password ) ) {
        return back()->with( 'error', "Old Password Doesn't match!" );
    }

    #Update the new Password
    User::whereId( auth()->user()->id )->update( [
        'password' => Hash::make( $request->new_password )

    ] );

    return back()->with( 'status', 'Password changed successfully!' );
}

public function candidateJobProfile( Request $request ) {
    $applications   = Candidate::where( [ [ 'user_id', Auth::user()->id ], [ 'job_id', $request->job_id ] ] )->first();
    $questions      = JobQuestion::where( 'job_id', $request->job_id )->get();
    $answers        = CandidateQuestion::where( [ [ 'candidate_id', $applications->id ], [ 'job_id', $request->job_id ] ] )->get();
    $data[ 'applications' ]   = $applications;
    $data[ 'questions' ]      = $questions;
    $data[ 'answers' ]        = $answers;
    return $data;
}

public function storeCandidateJobProfile( Request $request ) {
    $request->validate( [
        'name' => 'required',
        'mobile' =>'required',
        'email' =>'required',
        'country'=>'required',
        'experience'=>'required',
    ] );
    $questions = JobQuestion::where( 'job_id', $request->job_id )->get();
    $candidate = Candidate::updateOrCreate(
        [
            'user_id'=>Auth::user()->id,
            'job_id'=>$request->job_id,
        ],
        [
            'name'=>$request->name,
            'mobile'=>$request->mobile,
            'email'=>$request->email,
            'country'=>$request->country,
            'experience'=>$request->experience,
        ] );
        foreach ( $questions as $post ) {
            $que = 'question_'.$post->id;
            if ( $request->$que != null || $request->$que != '' ) {
                CandidateQuestion::updateOrCreate(
                    [
                        'candidate_id'=>$candidate->id,
                        'job_id'=>$request->job_id,
                        'question_id'=>$post->id,
                    ],
                    [
                        'answer'=> $request->$que
                    ] );
                } else {
                    $whereArray = array( 'candidate_id'=>$candidate->id, 'job_id'=>$request->job_id, 'question_id'=>$post->id );

                    $query = DB::table( 'candidate_questions' );
                    foreach ( $whereArray as $field => $value ) {
                        $query->where( $field, $value );
                    }
                    $query->delete();
                }
            }
            return redirect()->back();
        }
    }