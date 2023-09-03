<?php

namespace App\Http\Controllers\Admin;

use App\CopyTrade;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class InvestCopyTradeController extends Controller
{
    public function copiedTrades()
    {
        $trades = CopyTrade::all();
        return view('admin.copytrades.copied-trades', compact('trades'));
    }
    public function deleteTrade($id)
    {
        $trade = CopyTrade::findOrFail($id);
        $trade->delete();
        return redirect()->back()->with('success', 'Trade deleted');
    }
}
