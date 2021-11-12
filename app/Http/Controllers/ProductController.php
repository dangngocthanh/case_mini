<?php

namespace App\Http\Controllers;

use App\Models\Category;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class ProductController extends Controller
{
    function index(){
        $products = Product::all();
        return view('product.List',compact('products'));
    }

    function create(){
        $categories = Category::all();
        return view('product.create',compact('categories'));
    }

    function store(Request $request){
        $product = new Product;
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->category_id = $request->category_id;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('productImgs', 'public');
            $product->image = $path;
        }
        $product->save();
        return redirect()->route('product.list');
    }

    function edit($id){
        $product = Product::findOrFail($id);
        $categories = Category::all();
        return view('product.edit',compact('product','categories'));
    }

    function update(Request $request,$id)
    {
        $product = Product::findOrFail($id);
        $product->name = $request->name;
        $product->price = $request->price;
        $product->quantity = $request->quantity;
        $product->category_id = $request->category_id;
        if ($request->hasFile('image')) {
            // xoa anh cu
            Storage::delete('public/' . $product->image);
            //cap nhat anh moi
            $path = $request->file('image')->store('productImgs', 'public');
            $product->image = $path;
        }
        $product->save();
        return redirect()->route('product.list');
    }
}
