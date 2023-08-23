<?php

namespace App\Http\Controllers\Admin;

use App\CopyTraders;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCopyTraderController extends Controller
{
    public function index()
    {
        $traders = CopyTraders::all();
        return view('admin.copytrades.list', compact('traders'));
    }
    public function create()
    {

    }

    public function store(Request $request)
    {
        $request->validate([
            'username' => 'required',
            'accuracy' => 'required',
            'won_trades' => 'required',
            'lost_trades' => 'required',
            'total_pec' => 'required',
            'pro_trade' => 'required',
            'pro_image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048',

        ]);
        $data = new CopyTraders();
        if ($request->hasFile('pro_image')) {
            $image = $request->file('pro_image');
            $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/files');
            $image->move($destinationPath, $input['imagename']);

            $data->username = $request->username;
            $data->accuracy = $request->accuracy;
            $data->won_trades = $request->won_trades;
            $data->lost_trades = $request->lost_trades;
            $data->total_pec = $request->total_pec;
            $data->pro_trade = $request->pro_trade;
            $data->pro_image = $input['imagename'];
            $data->save();
            return redirect()->back()->with('success', 'Created Successfully');
        }
        $data->username = $request->username;
        $data->accuracy = $request->accuracy;
        $data->won_trades = $request->won_trades;
        $data->lost_trades = $request->lost_trades;
        $data->total_pec = $request->total_pec;
        $data->pro_trade = $request->pro_trade;
        $data->save();
        return redirect()->back()->with('success', 'Created Successfully');
    }

    public function destroy($id)
    {
        $data = CopyTraders::findOrFail($id);
        $data->delete();
        return redirect()->back();
    }

}
