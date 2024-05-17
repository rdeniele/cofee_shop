<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\add_on;

class Add_onController extends Controller
{
    public function index(Request $req){
        $add_on = add_on::all();
        return  view('add_on.add_on')->with("addons", $add_on);
    }
    public function store(Request $req){
        $add_on = new add_on;
        $add_on -> add_on_name = $req -> AddOnName;
        $add_on -> add_on_price = $req -> AddOnPrice;

        $add_on->save(); 
        return redirect()->back();
    }
    public function delete(Request $req){
        $add_on = add_on::find($req->id);
        $add_on->delete();
        return redirect()->back();
    }
    public function edit(Request $req){
        $add_on = add_on::find($req->id);
        return view('add_on.edit')->with("addons",$add_on);
    }
    public function update(Request $req){
        $add_on = add_on::find($req->id);
        $add_on->update([
            'add_on_name' => $req->AddOnName,
            'add_on_price' => $req->AddOnPrice,
        ]);
        return redirect()->route('addons.index');
    }
}

 