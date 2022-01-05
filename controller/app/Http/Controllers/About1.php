<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class About1 extends Controller
{
function show($name)
 {
     return "About Page is: ".$name;
 }
}
