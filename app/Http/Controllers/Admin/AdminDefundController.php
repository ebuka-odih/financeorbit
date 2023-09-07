<?php

namespace App\Http\Controllers\Admin;

use App\Defund;
use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;

class AdminDefundController extends Controller
{
    protected function getData(Request $request)
    {
        $rules = [
            'type' => 'required',
            'amount' => 'required',
        ];
        return $request->validate($rules);
    }

    public function debit()
    {
        $users = User::where('admin', 0)->get();
        $funds = Defund::latest()->get();
        return view('admin.user.defund', compact('users', 'funds'));
    }
    public function sendDefund(Request $request)
    {
        $data = $this->getData($request);
        $data['user_id'] = $request->user_id;
        $data['status'] = 1;
        $data = Defund::create($data);
        if ($data['type'] == 'Bonus'){
            $user = User::findOrFail($data->user_id);
            $user->ref_bonus -= $request->amount;
            $user->save();
            return redirect()->back()->with('success', "Fund debited successfully");
        }elseif ($data['type'] == 'Profit')
        {
            $user = User::findOrFail($data->user_id);
            $user->profit -= $request->amount;
            $user->save();
            return redirect()->back()->with('success', "Fund debited successfully");
        }elseif ($data['type'] == 'Balance')
        {
            $user = User::findOrFail($data->user_id);
            $user->balance -= $request->amount;
            $user->save();
            return redirect()->back()->with('success', "Fund debited successfully");
        }elseif ($data['type'] == "Invested")
        {
            $user = User::findOrFail($data->user_id);
            $user->invested -= $request->amount;
            $user->save();
            return redirect()->back()->with('success', "Fund debited successfully");
        }
        return redirect()->back()->with('error', "Fund Not Sent");
    }

    public function deleteFund($id)
    {
        $fund = Defund::findOrFail($id);
        $fund->delete();
        return redirect()->back()->with('success', 'deleted successfully');
    }

}
