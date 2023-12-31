<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\Signal;
use Illuminate\Http\Request;

class AdminSignalController extends Controller
{
    public function index()
    {

    }
    public function create()
    {
        $signals = Signal::all();
        return view('admin.signal.create', compact('signals'));
    }

    public function store(Request $request)
    {
        $request->validate([
            'type' => 'required',
            'pair' => 'required',
            'tp' => 'required',
            'sl' => 'required',
            'ta' => 'required',
            'lot' => 'nullable',
            'time' => 'required',
        ]);

        $data = new Signal();
        $data->type = $request->type;
        $data->pair = $request->pair;
        $data->tp = $request->tp;
        $data->sl = $request->sl;
        $data->ta = $request->ta;
        $data->lot = $request->lot;
        $data->time = $request->time;
        $data->save();
        return redirect()->back()->with('success', 'Created Successfully');
    }

    public function show($id)
    {

    }
}
