<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Http\Request;

class AdminSearchController extends Controller
{
    public function searchUser()
    {
      return view('admin_search_user_page');
    }
    public function searchUserEmail(Request $request)
    {
        $user = User::where('email',$request->email)->first();
        return view('admin_user_item_detail',compact('user'));

    }
    public function searchUserId(Request $request)
    {
        $user = User::where('id',$request->userid)->first();
        return view('admin_user_item_detail',compact('user'));


    }
    public function searchUserCellphone(Request $request)
    {
        $user = User::where('cellphone',$request->cellphone)->first();
        return view('admin_user_item_detail',compact('user'));


    }
}
