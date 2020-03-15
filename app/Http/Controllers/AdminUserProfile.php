<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminUserProfile extends Controller
{
    public function authRequests()
    {
        $auth_list_requests = User::where('state','waiting')->get();
        return view('admin_auth_requests',compact('auth_list_requests'));

    }

    public function authRequestsDetail($user_id)
    {
        $user = User::where('id',$user_id)->first();
        return view('admin_auth_request_detail',compact('user'));

    }

    public function approveUser($user_id)
    {
        $user = User::where('id',$user_id)->first();
        $user->state = 'approved';
        $user->save();
        return back();

    }
}
