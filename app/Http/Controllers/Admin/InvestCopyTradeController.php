<?php

namespace App\Http\Controllers\Admin;

use App\CopyTrade;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvestCopyTradeController extends Controller
{
    public function copiedTraders()
    {
        $trades = CopyTrade::all();
        return view('admin.copytrades.copied-trades', compact('trades'));
    }
}
