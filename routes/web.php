<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\IndexController;
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
})->name('index');

Route::get('services', fn () => view('services'))->name('services');

//Route::get('services', [IndexController::class, 'services'])->name('services');
//
//Route::get('/name',function (){
//    return view('name');
//});
