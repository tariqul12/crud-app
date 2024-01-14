<?php

namespace App\Http\Controllers;

use App\Models\Product;
use Illuminate\Http\Request;

class ProductContaoller extends Controller
{
    public function index()
    {
        return view('product.index');
    }
    public function manage()
    {
        return view('product.manage',[
            'products'=>Product::all(),
        ]);
    }
    public function store(Request $request)
    {
        Product::newProduct($request);
        return back()->with('message','product update successfully');
    }
}
