<?php

namespace App\Http\Controllers;

use App\Deposit;
use App\Trade;
use App\User;
use App\Withdraw;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class TradeController extends Controller
{
    public function trade()
    {
        $trades = Trade::whereUserId(\auth()->id())->where('status', 0)->latest()->paginate(20);
        $withdrawal = Withdraw::whereUserId(\auth()->id())->where('status', 1)->sum('amount');
        $deposits = Deposit::whereUserId(\auth()->id())->where('status', 1)->sum('amount');
        return view('dashboard.trades.trades', compact('trades', 'deposits', 'withdrawal'));
    }
    public function history()
    {
        $counts = Trade::whereUserId(\auth()->id())->where('status', 0)->count();
        $close_counts = Trade::whereUserId(\auth()->id())->where('status', 1)->count();
        $trades = Trade::whereUserId(\auth()->id())->where('status', 0)->latest()->paginate(12);
        return view('dashboard.trade.history', compact('trades', 'counts', 'close_counts'));
    }

    public function closeTrades()
    {
        $counts = Trade::whereUserId(\auth()->id())->where('status', 0)->count();
        $close_counts = Trade::whereUserId(\auth()->id())->where('status', 1)->count();
        $close_trades = Trade::whereUserId(\auth()->id())->where('status', 1)->latest()->paginate(10);
        return view('dashboard.trade.close-trades', compact('close_trades', 'close_counts', 'counts'));
    }


    public function placeTrade(Request $request)
    {
        if ($request->amount < auth()->user()->balance){
            $data = $this->getData($request);
            $data['status'] = 0;
            $data['user_id'] = Auth::id();
            $trade = Trade::create($data);
            $user = User::findOrFail($trade->user_id);
            $user->balance -= $trade->amount;
            $user->save();
            return redirect()->back()->with('success', "Your Order Has Been Created");
        }
        return redirect()->back()->with('declined', "Insufficient Balance");

    }

    protected function getData(Request $request)
    {
        $rules = [
          'type' => 'required',
          'trade_action' => 'required',
          'symbol' => 'required',
          'amount' => 'required',
          'sl' => 'nullable',
          'tp' => 'nullable',
          'leverage' => 'required',
          'execution_time' => 'required',
        ];
        return $request->validate($rules);
    }
}
