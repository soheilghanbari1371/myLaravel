<?php

namespace App\Http\Controllers;

use App\Jobs\PasswordRecoveryJob;
use App\Passwordtoken;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;

class PasswordRecoveryController extends Controller
{
    public function userPasswordRecoveryPage()
    {

        return view('user_password_recovery');

    }
    public function userSendPasswordRecovery(Request $request)
    {
        $user = User::where('email',$request->email)->first();

        if($user !== null){
            $token = Hash::make(time());
            $item = new Passwordtoken();
            $item->email = $request->email;
            $item->token = $token;
            $item->save();
        }
        PasswordRecoveryJob::dispatch($request->email,$token);

    }

    public function userPasswordRecoveryRegisterToken(Request $request){
        if(Passwordtoken::where('token',$request->token)->exists()){
            $token = $request->token;
            return view('user_change_password_recovery',compact('token'));
        }else{
            return "invalid_token";
        }


    }


    public function PasswordRecoverySubmit(Request $request){
       $item =  Passwordtoken::where('token',$request->token)->first();
       if($item->count()>0){
           $user = User::where('email',$item->email)->first();
           $user->password = Hash::make($request->password);
           $user->save();
           if(Auth::check()){
               Auth::logout();
           }
           $item->delete();
           return redirect('login');

       }

    }
}
