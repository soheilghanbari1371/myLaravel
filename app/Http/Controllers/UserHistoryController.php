<?php

namespace App\Http\Controllers;

use App\Advertisement;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use function PHPSTORM_META\type;

class UserHistoryController extends Controller
{

    public function buyHistory()
    {


        $buy_history = Auth::user()->requests()->where('status', 'finished')->get();
        return view('user_history_buy',compact('buy_history'));

    }

    public function sellHistory()
    {
        $sell_advertisements = Advertisement::where('user_id', Auth::id())
            ->where('status', 'finished')
            ->with(['requests' => function ($query) {
                $query->where('status', 'finished');
            }])->get();

        return view('user_history_sell',compact('sell_advertisements'));
        // var_dump($sell_advertisements->request->id);


    }

    public function depositeHistory(Request $request)
    {

    }

    public function whitdrawHistory(Request $request)
    {

    }
    //
}
