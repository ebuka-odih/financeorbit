<?php

namespace App\Http\Controllers;

use App\CopyTrade;
use App\CopyTraders;
use App\User;
use Illuminate\Http\Request;

class CopyTradeController extends Controller
{
    public function index()
    {
        $copy_trades = CopyTrade::whereUserId(auth()->id())->get();
        return view('dashboard.copy-traders.copied-trades', compact('copy_trades'));

    }
    public function create()
    {
        $traders = CopyTraders::all();
        return view('dashboard.copy-traders.copy-trade', compact('traders'));
    }

    public function store(Request $request)
    {
        $data = new CopyTrade();
        if (auth()->user()->balance > 500)
        {
            $data->copy_traders_id = $request->trader_id;
            $data->amount = 500;
            $data->user_id = auth()->id();
            $data->save();
            $user = User::findOrFail($data->user_id);
            $user->balance -= 500;
            $user->save();
            return redirect()->back()->with('success', "Trader Copied Successfully");
        }

        return redirect()->back()->with('error', "Insufficient Balance");
    }

    public function show($id)
    {
        $trader = CopyTraders::findOrFail($id);
        return view('dashboard.copy-traders.copyview', compact('trader'));
    }
}
