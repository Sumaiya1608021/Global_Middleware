<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\reportController;
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


Route::get('/', function () {
    return view('home');
});

Route::get('dashboard', function () {
    return view('dashboard');

});
Route::get('/stock', function () {
    return view('stock');
});

Route::get('report', function () {
    return view('report');

});


Route::get('report',[reportController::class,'show']);

















Route::get('stock', function () {
    return view('stock');
});

Route::get('report', function () {
    return view('report');
});



















