<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\InvestStock;
use App\Stock;
use Illuminate\Http\Request;

class StocksAdminController extends Controller
{
   public function index()
   {
       $invested = InvestStock::all();
       return view('admin.stock.invested', compact('invested'));
   }

   public function create()
   {
       $stocks = Stock::all();
       return view('admin.stock.create', compact('stocks'));
   }
    public function store(Request $request)
    {
        $request->validate([
            'name' => 'required',
            'amount' => 'required',
            'description' => 'nullable',
            'image' => 'nullable|image|mimes:jpeg,png,jpg,gif,svg|max:5048',
        ]);
        $data = new Stock();
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/files');
            $image->move($destinationPath, $input['imagename']);

            $data->name = $request->name;
            $data->amount = $request->amount;
            $data->description = $request->description;
            $data->imgae = $input['imagename'];
            $data->save();
            return redirect()->back()->with('success', 'Created Successfully');
        }
        $data->name = $request->name;
        $data->amount = $request->amount;
        $data->description = $request->description;
        $data->save();
        return redirect()->back()->with('success', 'Created Successfully');
    }

    public function edit($id)
    {
        $stock = Stock::findOrFail($id);
        return view('admin.stock.edit', compact('stock'));
    }

    public function update(Request $request, $id)
    {
        $stock = Stock::findOrFail($id);
        $data = $this->getData($request);
        if ($request->hasFile('image')) {
            $image = $request->file('image');
            $input['imagename'] = time() . '.' . $image->getClientOriginalExtension();
            $destinationPath = public_path('/files');
            $image->move($destinationPath, $input['imagename']);

            $stock->update(['image' => $input['imagename']]);
            $stock->update($data);
            return redirect()->back()->with('success', 'Updated Successfully');
        }
        $stock->update($data);
        return redirect()->back()->with('success', 'Updated Successfully');
    }

    public function destroy($id)
    {
        $stock = Stock::findOrFail($id);
        $stock->delete();
        return redirect()->back()->with('success', 'Deleted Successfully');
    }

    protected function getData(Request $request)
    {
        $rules = [
            'name' => 'required',
            'description' => 'nullable',
        ];
        return $request->validate($rules);
    }

}
