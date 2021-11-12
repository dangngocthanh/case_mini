<?php

namespace App\Http\Controllers;

use App\Models\Category;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    function index()
    {
        $categories = Category::all();
        return view('category.list',compact('categories'));
    }

    function create()
    {
        return view('category.create');
    }

    function store(Request $request)
    {
        $category = new Category;
        $category->name = $request->name;
        $category->save();
        return redirect()->route('categories.list');
    }
}
