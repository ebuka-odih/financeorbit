<?php

namespace App\Http\Controllers;

use App\CopyTrade;
use App\Subscribe;
use App\Trade;
use Illuminate\Http\Request;

class HistoryController extends Controller
{
    public function tradeHistory()
    {
        $counts = Trade::whereUserId(\auth()->id())->where('status', 0)->count();
        $close_counts = Trade::whereUserId(\auth()->id())->where('status', 1)->count();
        $trades = Trade::whereUserId(\auth()->id())->where('status', 0)->latest()->paginate(12);
        return view('dashboard.history.trade-history', compact('trades', 'counts', 'close_counts'));
    }

    public function copiedTrades()
    {
        $copy_trades = CopyTrade::whereUserId(auth()->id())->get();
        return view('dashboard.history.copied-trades', compact('copy_trades'));
    }

    public function subscribeHistory()
    {
        $sub = Subscribe::whereUserId(\auth()->id())->get();
        return view('dashboard.history.sub-history', compact('sub'));
    }

    public function miningHistory()
    {
        $mining = Subscribe::whereUserId(\auth()->id())->get();
        return view('dashboard.history.mining-history', compact('mining'));
    }

}
