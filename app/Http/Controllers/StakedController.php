<?php

namespace App\Http\Controllers;

use App\CopyTrade;
use App\Staked;
use App\Staking;
use App\User;
use Illuminate\Http\Request;

class StakedController extends Controller
{
    public function index()
    {

    }
    public function create()
    {
        $plans = Staking::all();
        return view('dashboard.staking.plans', compact('plans'));
    }

    public function store(Request $request)
    {
        $data = new Staked();
        $data->staking_id = $request->staking_id;
        $data->amount = $request->amount;
        $data->user_id = auth()->id();
        $data->save();
        $user = User::findOrFail($data->user_id);
        $user->balance -= $request->amount;
        $user->save();
        return redirect()->route('user.staked.show', $data->id)->with('success', "Trader Copied Successfully");

    }

    public function show($id)
    {
        $staked = Staked::findOrFail($id);
        return view('dashboard.staking.details', compact('staked'));
    }


}
