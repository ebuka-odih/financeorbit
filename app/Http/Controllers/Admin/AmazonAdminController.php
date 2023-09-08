<?php

namespace App\Http\Controllers\Admin;

use App\Amazon;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class AmazonAdminController extends Controller
{
    public function index()
    {
        $books = Amazon::all();
        return view('admin.amazon.create', compact('books'));
    }

    public function create()
    {
        $books = Amazon::all();
        return view('admin.amazon.create', compact('books'));
    }

    public function store(Request $request)
    {
        $request->validate([
           'name' => 'required',
           'price' => 'required',
           'reviews' => 'nullable',
           'description' => 'nullable',
            'image' => 'required|image|mimes:jpeg,png,jpg,gif,svg|max:4048',

        ]);
        if ($request->hasFile('image')){
            $image = $request->file('image');
            $input['imagename'] = time().'.'.$image->getClientOriginalExtension();
            $destinationPath = public_path('/files');
            $image->move($destinationPath, $input['imagename']);

            $book = new Amazon();
            $book->name = $request->name;
            $book->price = $request->price;
            $book->reviews = $request->reviews;
            $book->description = $request->description;
            $book->status = 1;
            $book->image = $input['imagename'];
            $book->save();
            return redirect()->back()->with('success', 'Book added successfully');
        }
            $book = new Amazon();
            $book->name = $request->name;
            $book->price = $request->price;
            $book->reviews = $request->reviews;
            $book->description = $request->description;
            $book->status = 1;
            $book->save();
            return redirect()->back()->with('success', 'Book added successfully');
    }
}
