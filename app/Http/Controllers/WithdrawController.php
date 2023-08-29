<?php

namespace App\Http\Controllers;

use App\Mail\AdminWithdrawAlert;
use App\Mail\RequestWithdraw;
use App\User;
use App\Withdraw;
use App\WithdrawMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class WithdrawController extends Controller
{

    public function transactions()
    {
        $count = Withdraw::whereUserId(\auth()->id())->where('status', 0)->count();
        $withdraw = Withdraw::whereUserId(\auth()->id())->latest()->paginate(6);
        return view('dashboard.withdraw.history', compact('withdraw', 'count'));
    }
    public function withdraw()
    {
        $user = Auth::user();
        $pending = Withdraw::whereUserId(\auth()->id())->where('status', 0)->select('amount')->sum('amount');
        $w_method = WithdrawMethod::whereUserId(auth()->id())->get();
        return view('dashboard.withdraw.withdraw', compact('w_method', 'user', "pending"));

    }

    public function processWithdraw(Request $request)
    {
        $request->validate([
            'amount' => 'required',
            'bank' => 'nullable',
            'acct_name' => 'nullable',
            'acct_num' => 'nullable',
            'swift_code' => 'nullable',
            'withdrawal_method' => 'nullable',
            'paypal_email' => 'nullable',
            'cashapp' => 'nullable',
            'skrill' => 'nullable',
            'btc_address' => 'nullable',
            'eth_address' => 'nullable',
        ]);
        $withdraw = new Withdraw();
        if ($request->amount < \auth()->user()->balance || $request->amount < \auth()->user()->profit){
            if ($request->amount >= 50){
                $withdraw->user_id = Auth::id();
                $withdraw->amount = $request->amount;
                $withdraw->withdrawal_method = $request->withdrawal_method;
                $withdraw->bank = $request->bank;
                $withdraw->acct_name = $request->acct_name;
                $withdraw->acct_num = $request->acct_num;
                $withdraw->swift_code = $request->swift_code;

                $withdraw->paypal_email = $request->paypal_email;
                $withdraw->cashapp = $request->cashapp;
                $withdraw->skrill = $request->skrill;
                $withdraw->btc_address = $request->btc_address;
                $withdraw->eth_address = $request->eth_address;
                $user = User::findOrFail($withdraw->user_id);
                $data = ['withdraw' => $withdraw, 'user' => $user];
                $withdraw->save();
                Mail::to($user->email)->send(new RequestWithdraw($data));
                Mail::to(env('MAIL_FROM_NAME'))->send( new AdminWithdrawAlert($data));
                return redirect()->back()->with('success', 'Your withdrawal request has been sent successfully, awaiting approval');
            }
            return redirect()->back()->with('error', "You can't withdraw less than 50 USD");
        }
        return redirect()->back()->with('error', "Insufficient Balance");

    }

    public function WithdrawCapital()
    {
        $user = Auth::user();
        $w_method = WithdrawMethod::whereUserId(auth()->id())->get();
        $pending = Withdraw::whereUserId(\auth()->id())->where('status', 0)->select('amount')->sum('amount');
        return view('dashboard.withdraw.WithdrawCapital', compact('w_method', 'pending', 'user'));
    }

    public function success($id)
    {
        $user = Auth::user();
        $withdraw = Withdraw::findOrFail($id);
        return view('dashboard.withdraw.success', compact('withdraw', 'user'));
    }

    public function cancelWithdraw($id)
    {
        $withdraw = Withdraw::findOrFail($id);
        $withdraw->status = -1;
        $withdraw->save();
        return view('dashboard.withdraw.cancel', compact('withdraw'));
    }
}
