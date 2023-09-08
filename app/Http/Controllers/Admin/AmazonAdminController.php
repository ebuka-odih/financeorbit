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

    }
}
