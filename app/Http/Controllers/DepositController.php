<?php

namespace App\Http\Controllers;

use App\Deposit;
use App\Mail\AdminDepositAlert;
use App\Mail\DepositAlert;
use App\PaymentMethod;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Mail;

class DepositController extends Controller
{
    public function deposit()
    {
        $wallets = PaymentMethod::all();
        $deposits = Deposit::whereUserId(\auth()->id())->latest()->paginate(6);
        return view('dashboard.deposit.deposit', compact('wallets', 'deposits'));
    }
    public function transactions()
    {
        $count = Deposit::whereUserId(\auth()->id())->where('status', 0)->count();
        $deposits = Deposit::whereUserId(\auth()->id())->latest()->paginate(6);
        return view('dashboard.deposit.deposit-history', compact('deposits', 'count'));
    }

    public function processDeposit(Request $request)
    {
        $request->validate([
           'amount' => 'required',
           'payment_method_id' => 'required',
        ]);

        $deposit = new Deposit();
        $deposit->user_id = Auth::id();
        $deposit->amount = $request->amount;
        $deposit->payment_method_id = $request->payment_method_id;
        $deposit->save();
        Mail::to($deposit->user->email)->send(new DepositAlert($deposit));
        return redirect()->route('user.payment', $deposit->id);
    }

    public function payment($id)
    {
        $deposit = Deposit::findOrFail($id);
        return view('dashboard.deposit.payment', compact('deposit'));
    }

    public function processPayment(Request $request)
    {
        $request->validate([
                'reference' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:7048',
            ]
        );
        if ($request->hasFile('reference')){
            $image = $request->file('reference');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/proof');
            $image->move($destinationPath, $input['imagename']);

            $id = $request->deposit_id;
            $deposit = Deposit::findOrFail($id);
            $deposit->update(['reference' => $input['imagename'] ]);
            Mail::to(env('MAIL_FROM_ADDRESS'))->send(new AdminDepositAlert($deposit));
            return redirect()->back()->with('success', "Transaction Sent, Awaiting Approval ");
        }
        return redirect()->back()->with('declined', "Please Upload Your Payment Screenshot ");

    }


    public function depositDetail($id)
    {
        $deposit = Deposit::findOrFail($id);
        return view('dashboard.deposit.details', compact('deposit'));
    }

}
