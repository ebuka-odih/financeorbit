<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Staking;
use Illuminate\Http\Request;

class AdminStakingController extends Controller
{
    public function index()
    {
        $plans = Staking::all();
        return view('admin.staking.list', compact('plans'));
    }

    public function create()
    {

    }

    public function store(Request $request)
    {
        $request->validate([
           'name' => 'required',
           'price' => 'required',
           'return' => 'required',
        ]);
        $staking = new Staking();
        $staking->name = $request->name;
        $staking->price = $request->price;
        $staking->return = $request->return;
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
