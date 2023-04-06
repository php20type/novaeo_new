<?php

namespace App\Http\Controllers\Auth;

use App\Http\Controllers\Controller;
use App\Models\Admin;
use App\Models\User;    
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Socialite;
use Session;


class CandidateGoogleController extends Controller
{
    //
    public function loginWithGoogle()
    {
        // config(['services.google.redirect' => 'https://novaeo.test.com/candidate-google/callback' ]);
        Session::put('user_type','candidate');
        return Socialite::driver('google')->with(['user_type'=>'candidate'])->redirect();
    }

    public function callbackFromGoogle(Request $request)
    {
        try {
            $user = Socialite::driver('google')->user();
        
            // Check Users Email If Already There
            $is_user = User::where('email', $user->getEmail())->first();
            if(!$is_user){

                $saveUser = User::updateOrCreate([
                    'google_id' => $user->getId(),
                ],[
                    'name' => $user->getName(),
                    'email' => $user->getEmail(),
                    'password' => Hash::make($user->getName().'@'.$user->getId())
                ]);
            }else{
                $saveUser = User::where('email',  $user->getEmail())->update([
                    'google_id' => $user->getId(),
                ]);
                $saveUser = User::where('email', $user->getEmail())->first();
            }

            User::loginUsingId($saveUser->id);

            return redirect()->route('dashboard');
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
