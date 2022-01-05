<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Pcv extends Controller
{
    function show($name){
        return view('pcv',['nm'=>$name]);
    }
}
