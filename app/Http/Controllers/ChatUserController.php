<?php

namespace App\Http\Controllers;

use App\Chat;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ChatUserController extends Controller
{
    //
    public function setBuyerDealMessage(Request $request)
    {
       // return "11111";

        $user  = Auth::user();
        if($user->requests->where('id',$request->request_id)->count()>0){
            $chat = new Chat();
            $chat->text = $request->message;
            $chat->request_id = $request->request_id;
            $user->chats()->save($chat);
            return "ok";
        }
        return "error";
    }


    public function setSellerDealMessage(Request $request_data)
    {

        $request = \App\Request::where('id',$request_data->request_id)->first();
        $ad_id = $request->advertisement->id;
        $user = Auth::user();
        if($user->advertisements->where('id',$ad_id)->count()>0){
            $chat = new Chat();
            $chat->text = $request_data->message;
            $chat->request_id = $request_data->request_id;
            $user->chats()->save($chat);
            return "ok";
        }else{
            return "noooo";
        }
    }
}
