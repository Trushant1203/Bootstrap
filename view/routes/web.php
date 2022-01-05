<?php

use Illuminate\Support\Facades\Route;

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

Route::get('admin/view', function () {
    return view('admin.welcome');
});

// Route::get('contact', function () {
//     return view('contact',['name'=>'Trushant']);
// });

Route::get('contact', function () {
    return view('contact',['name'=>'Trushant','roll'=>'190433116020']);
});

Route::view('login','mylogin');
Route::view('register','myregister');

Route::redirect('login','register');

Route::fallback(function(){
    return view('mydefault');
});