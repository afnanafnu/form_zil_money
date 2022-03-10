<?php

use App\Http\Controllers\formcontroller;
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


Route::get('/form', function () {
    return view('form');
});
// Route::get('/', function () {
//     return view('form');
// });
Route::get('/view', function () {
    return view('crud.view');
});

Route::post('/user',[formcontroller::class,'store']);
Route::get('view', [formcontroller::class, 'index']);
Route::get('/show/{id}',[afnans::class,'show']);
Route::resource('/crud',formcontroller::class);