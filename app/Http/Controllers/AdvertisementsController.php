<?php

namespace App\Http\Controllers;

use App\Advertisement;
use App\Http\Requests\InsertAd;
use App\Http\Requests\SearchAd;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class AdvertisementsController extends Controller
{
    //
    public function insert(InsertAd $request)
    {

        
        $advertisements = new Advertisement();
        $advertisements->coin = $request->coin;
        $advertisements->min = $request->min;
        $advertisements->max = $request->max;
        $advertisements->percent = $request->percent;
        $user = Auth::user();
        $user->advertisements()->save($advertisements);
     return redirect('/user_ads_detail/'.$advertisements->id);

    }

    public function getAd($id)
    {
        $advertisement = Advertisement::where('id',$id)->first();
        return view('user_ads_detail',compact('advertisement')) ;
    }
    public function searchFilteredList(SearchAd $request){
        $advertisement = Advertisement::where('min','<=',$request->max)
            ->where('max','>=',$request->min)
            ->where('status','active')
            ->where('coin',$request->coin)->get();
        return view('user_search_crypto',compact('advertisement')) ;
    }

    public function searchItem($id)
    {
        $advertisement = Advertisement::where('id',$id)->first();
        $request = $advertisement->requests()->where('user_id',Auth::id())->first();
        return view('user_buy_item',compact('advertisement','request')) ;
    }

    public function getMyAdvertisements()
    {
        $user = Auth::user();
        $ads = $user->advertisements;
        return view('user_advertisements_list',compact('ads'));

    }

    public function getMyAdvertisementItem($id)
    {
        $user = Auth::user();
        $advertisement = $user->advertisements->where('id',$id)->first();
        if(is_null($advertisement)){

        }else{
            return view('user_advertisement_item',compact('advertisement'));

        }
    }

    public function sellAdvertisement($id)
    {
        $user_request = \App\Request::where('id',$id)->first();
        return view('user_sell_item',compact('user_request'));
    }

    public function setAccept($id)
    {
        $request = \App\Request::where('id',$id)->first();
        $request->status = 'in-process';
        $request->save();
        return back();
    }
}
