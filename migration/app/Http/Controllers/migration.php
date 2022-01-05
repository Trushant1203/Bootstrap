<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class migration extends Controller
{
    function show()
    {
        DB::insert('insert into stu2 (vote,name) values(?,?)',[90,'Naman']);
        return view('welcome');
    }
}
