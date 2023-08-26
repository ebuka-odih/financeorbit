<?php

namespace App\Http\Controllers\Admin;

use App\CopyTrade;
use App\CopyTraders;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AdminCopyTraderController extends Controller
{
    public function index()
    {
        $trades = CopyTrade::all();
        return view('admin.copytrades.copied-trades', compact('trades'));
    }
    public function create()
    {
        $traders = CopyTraders::all();
        return view('admin.copytrades.list', compact('traders'));
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

    public function edit($id)
    {
        $trade = CopyTraders::findOrFail($id);
        return view('admin.copytrades.edit', compact('trade'));
    }

    public function update(Request $request, $id)
    {
        $trade = CopyTraders::findOrFail($id);
        $data = $this->getData($request);
        if ($request->hasFile('pro_image')) {
            $image = $request->file('pro_image');
            $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/files');
            $image->move($destinationPath, $input['imagename']);

            $trade->update(['pro_image' => $input['imagename']]);
            $trade->update($data);
            return redirect()->back()->with('success', 'Updated Successfully');
        }
        $trade->update($data);
        return redirect()->back()->with('success', 'Updated Successfully');
    }
    public function destroy($id)
    {
        $data = CopyTraders::findOrFail($id);
        $data->delete();
        return redirect()->back();
    }

    protected function getData(Request $request)
    {
        $rules = [
            'username' => 'required',
            'accuracy' => 'required',
            'won_trades' => 'required',
            'lost_trades' => 'required',
            'total_pec' => 'required',
            'pro_trade' => 'required',

        ];
        return $request->validate($rules);
    }

}
