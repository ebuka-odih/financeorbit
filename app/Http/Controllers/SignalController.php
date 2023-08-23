<?php

namespace App\Http\Controllers;

use App\Signal;
use Illuminate\Http\Request;

class SignalController extends Controller
{
    public function index()
    {
        $signals = Signal::all();
        return view('dashboard.signals', compact('signals'));
    }
}
