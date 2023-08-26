<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Staking;
use Illuminate\Http\Request;

class AdminStakingController extends Controller
{
    public function index()
    {
        $staking = Staking::all();
        return view('admin.staking.list', compact('staking'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $request->validate([
           'name' => 'required',
           'amount' => 'required',
           'token' => 'nullable',
           'roi' => 'required',
           'roi_rate' => 'nullable',
        ]);
        $staking = new Staking();
        $staking->name = $request->name;
        $staking->amount = $request->amount;
        $staking->token = $request->token;
        $staking->roi = $request->roi;
        $staking->roi_rate = $request->roi_rate;
        $staking->save();
        return redirect()->back()->with('success', 'Created Successfully');
    }

    public function edit($id)
    {
        $staking = Staking::findOrFail($id);
        return view('admin.staking.edit', compact('staking'));
    }

    public function update(Request $request, $id)
    {

    }

    protected function data(Request $request)
    {

    }

}
