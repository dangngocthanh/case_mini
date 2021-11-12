<?php

namespace App\Http\Controllers;

use App\Models\Customer;
use App\Models\Product;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redirect;
use function PHPUnit\Framework\isEmpty;

class CustomerController extends Controller
{
    function store(Request $request)
    {
        $product = new Customer();
        $product->name = $request->name;
        $product->account = $request->account;
        $product->password = $request->password;
        $product->gender = $request->gender;
        $product->dob = $request->dob;
        $product->email = $request->email;
        $product->phone = $request->phone;
        $product->address = $request->address;
        $product->role = $request->role;
        if ($request->hasFile('image')) {
            $path = $request->file('image')->store('userImgs', 'public');
            $product->image = $path;
        }
        $product->save();

    }

    function edit($id)
    {
        $customer = Customer::findOrFail($id);
        return view('customer/edit', compact('customer'));
    }

    function checkLogin(Request $request)
    {
        $customer = Customer::where('account', $request->account)->where('password', $request->password)->get();
        if (isEmpty($customer)) {
            session(['hasLogin' => true]);
            session(['role' => $customer[0]->role]);
        }
        return view('welcome');
    }

    function logout()
    {
        session()->flush();
        return view('welcome');
    }

}
