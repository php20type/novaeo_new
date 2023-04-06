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


class GoogleController extends Controller
{
    //
    public function loginWithGoogle()
    {
        // config(['services.google.redirect' => 'https://novaeo.test.com/google/callback' ]);
        Session::put('user_type','candidate');
        return Socialite::driver('google')->with(['user_type'=>'admin'])->redirect();
    }

    public function callbackFromGoogle(Request $request)
    {
        try {
            $user_type=Session::get('user_type');
            if($user_type=='admin'){
                $user = Socialite::driver('google')->user();
                // Check Users Email If Already There
                $is_user = Admin::where('email', $user->getEmail())->first();
                if(!$is_user){
    
                    $saveUser = Admin::updateOrCreate([
                        'google_id' => $user->getId(),
                    ],[
                        'name' => $user->getName(),
                        'email' => $user->getEmail(),
                        'password' => Hash::make($user->getName().'@'.$user->getId())
                    ]);
                }else{
                    $saveUser = Admin::where('email',  $user->getEmail())->update([
                        'google_id' => $user->getId(),
                    ]);
                    $saveUser = Admin::where('email', $user->getEmail())->first();
                }
    
                Auth::guard('admin')->loginUsingId($saveUser->id);
    
                return redirect()->route('dashboard');
            }
            else{
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
                Auth::loginUsingId($saveUser->id);
    
                return redirect()->route('home');
            }
            
        } catch (\Throwable $th) {
            throw $th;
        }
    }
}
