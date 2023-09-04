<?php

namespace App\Http\Controllers;

use App\InvestMining;
use App\Mining;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class InvestMiningController extends Controller
{
    public function plans()
    {
        $miner = Mining::all();
        return view('dashboard.mining.mining-plans', compact('miner'));
    }
    public function processMiner(Request $request)
    {
        $request->validate([
            'amount' => 'required',
        ]);
        $miner_id = $request->miner_id;
        $miner = Mining::findOrFail($miner_id);
        if ($request->amount < $miner->amount){
            return redirect()->back()->with('error', 'Please enter min amount or higher');
        }
        $mining = new InvestMining();
        $mining->mining_id = $request->miner_id;
        $mining->user_id = Auth::id();
        $mining->amount = $request->amount;
        $mining->status = 1;
        $mining->save();
        return redirect()->back()->with('success', "miner started successfully");
    }
}
