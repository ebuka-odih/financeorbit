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
        $trades = CopyTrade::whereUserId(auth()->id())->get();
        return view('dashboard.copy-traders.copied-trades', compact('trades'));

    }
    public function create()
    {
        $traders = CopyTraders::all();
        return view('dashboard.copy-traders.copy-trade', compact('traders'));
    }

    public function store(Request $request)
    {
        $data = new CopyTrade();
        $data->copy_traders_id = $request->trader_id;
        $data->user_id = $request->user_id;
        $user = User::findOrFail($request->user_id);
        $user->balance -= 500;
        $user->save();
        $data->save();
        return redirect()->back()->with('success', "Trader Copied Successfully");
    }

    public function show($id)
    {
        $trader = CopyTraders::findOrFail($id);
        return view('dashboard.copy-traders.copyview', compact('trader'));
    }
}
