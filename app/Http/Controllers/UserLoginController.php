<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;


class UserLoginController extends Controller
{
    public function login(Request $request)
    {
        $remember_me = $request->has('remember_me') ? true : false;
        if (Auth::attempt(['email' => $request->email, 'password' => $request->password],$remember_me)) {
            $user = Auth::user();
            if($user->role){
                Auth::login($user);
                return redirect('/admin/dashboard');
            }else{
                Auth::login($user);
                return redirect('/user_dashboard');
            }

        } else {
            return back()->with('error','your username and password are wrong.');
        }


    }

    public function logout()
    {
        Auth::logout();
        return redirect('/login');
    }
}
