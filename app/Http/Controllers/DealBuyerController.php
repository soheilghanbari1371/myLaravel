<?php

namespace App\Http\Controllers;

use App\Advertisement;
use App\Rules\RequestRangeCheck;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Gate;

class DealBuyerController extends Controller
{
    public function set_request(Request $request , $advertisement)
    {

        $messages =[
            'amount.required' => 'تعداد ارز مورد تقاضا را وارد کنید.',
            'amount.numeric' => 'تعداد درخواست باید عددی باشد.',
        ];
//
        $request->validate([
            'amount' => ['required', 'numeric', new RequestRangeCheck($request->adid)],
        ],$messages);



        $item = new \App\Request();
        $item->user_id = Auth::id();
        $item->amount = $request->amount;
        $item->price = 1000;
        $ad = Advertisement::where('id',$advertisement)->first();
        $item->coin = $ad->coin;
        $ad->requests()->save($item);
        return back();
    }
    public function set_warranty($request_id)
    {/// middleware needed to chech owner request - to chech set warranty redundancy
        $user = Auth::user();
        $balance = $user->balance;
        $request =\App\Request::where('id',$request_id)->first();
        if(Gate::allows('request-owner',$request_id)){
            $new_balance = $balance - $request->price;
            $user->balance = $new_balance;
            $user->blockedmoney = $request->price;
            $user->save();
            $request->warranty = true;
            $request->save();
            $advertisement  = $request->advertisement()->first();
            return back();
        }else{

            return "errror";

        }

    }

    public function set_release(Request $requested_user , $request_id)
    {
        if(Gate::allows('set-release',$request_id)){
            $user_buyer = Auth::user();
            $request = $user_buyer->requests->where('id',$request_id)->first();
            $request->status = 'approved';

            $user_ad_owner = $request->advertisement->user;
            $newBlockeMoney = ($requested_user->user()->blockedmoney)-($request->price);

            $user_buyer->blockedmoney = $newBlockeMoney;

            $user_ad_owner->balance = $user_ad_owner->balance +($request->price);

            $request->save();
            $user_ad_owner->save();
            $user_buyer->save();

            return back();
        }else{
            return Redirect::back()->withErrors(['error', 'release error']);
        }




    }

    public function set_cancel($request)
    {

    }

    public function getMyRequests()
    {
        $user = Auth::user();
        $user_request = $user->requests;
        return view('user_requests_list',compact('user_request'));
    }

    public function buyAdvertisement($id)
    {
        $user = Auth::user();
        $request = $user->requests->where('id',$id)->first();
        if (is_null($request)){

        }else{
            $advertisement = $request->advertisement;
            return view('user_buy_item',compact('advertisement','request')) ;

        }

    }


}
