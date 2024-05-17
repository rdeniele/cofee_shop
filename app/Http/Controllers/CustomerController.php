<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Customer;

class CustomerController extends Controller
{
    public function index(Request $req){
        $customer = Customer::all();
        return  view('customer.customer')->with("customer", $customer);
    }
    public function store(Request $req){
        $customer = new Customer;
        $customer -> customer_name = $req -> customer_name;
        $customer -> email = $req -> email;
        $customer -> phone_number = $req -> phone_number;

        $customer->save();
        return redirect()->back();
    }
    public function delete(Request $req){
        $customer = Customer::find($req->id);
        $customer->delete();
        return redirect()->back();
    }
    public function edit(Request $req){
        $customer = Customer::find($req->id);
        return view('customer.edit')->with("customer",$customer);
    }
    public function update(Request $req){
        $customer = Customer::find($req->id);
        $customer->update([
            'customer_name' => $req->customer_name,
            'email' => $req->email,
            'phone_number' => $req->phone_number,
        ]);
        return redirect()->route('customer.index');
    }
}
