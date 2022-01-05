<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\About;
use App\Http\Controllers\Pcv;
use App\Http\Controllers\About1;
use App\Http\Controllers\About2;
use App\Http\Controllers\profile;
use App\Http\Controllers\Mf;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    return view('welcome');
});

    Route::get('about',[About::class,'show']);

Route::get('about1/{name}',[About1::class,'show']);

Route::get('about2',[About2::class,'show']);
Route::get('admin/profile',[Profile::class,'show']);

Route::get('pcv/{name}',[Pcv::class,'show']);

Route::get('t',[Mf::class,'show']);
Route::get('j',[Mf::class,'show1']);
Route::get('s',[Mf::class,'show2']);