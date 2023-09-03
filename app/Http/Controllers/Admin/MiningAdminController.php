<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\InvestMining;
use App\Mining;
use Illuminate\Http\Request;

class MiningAdminController extends Controller
{

    public function index()
    {
        $mined = InvestMining::all();
        return view('admin.mining.mined', compact('mined'));
    }


    public function create()
    {
        $mining = Mining::all();
        return view('admin.mining.create', compact('mining'));
    }


    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'amount' => 'required',
            'hash_al' => 'required',
            'hash_rate' => 'required',
            'roi' => 'required',
            'interval' => 'required',
        ]);

        $mining = new Mining();
        $mining->name = $request->name;
        $mining->amount = $request->amount;
        $mining->hash_al = $request->hash_al;
        $mining->hash_rate = $request->hash_rate;
        $mining->roi = $request->roi;
        $mining->interval = $request->interval;
        $mining->save();
        return redirect()->back()->with('success', "Created Successfully");
    }


    public function show($id)
    {
        //
    }


    public function edit($id)
    {
        //
    }


    public function update(Request $request, $id)
    {
        //
    }


    public function destroy($id)
    {
        //
    }
}
