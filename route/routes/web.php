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

Route::get('about/{id}/contact/{c_id}', function ($id,$c_id) {
    return 'About: '.$id.' Contact: '.$c_id;
});

Route::get('about1/{id}/contact1/{c_id}', function ($id,$c_id) {
    return 'About: '.$id.' Contact: '.$c_id;
})->where(['id'=>'[0-9]+','c_id'=>'[a-z]+']);

Route::get('about2/{id}/contact2/{c_id}', function ($id,$c_id) {
    return 'About: '.$id.' Contact: '.$c_id;
})->whereNumber('id')->whereAlpha('c_id');

Route::redirect('about','about1');

Route::fallback(function(){
    return "This is Fallback";
});