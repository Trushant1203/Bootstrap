<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Session extends Controller
{
    public function show(Request $request)
    {
        //$request->session()->put('name','Sonam');
        // $name=$request->session()->get('name');
        // $data=['name'=>$name];

        return view('welcome',$data);
    }
}
