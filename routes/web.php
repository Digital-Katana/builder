<?php

use App\Http\Controllers\BuildingsController;
use App\Http\Controllers\ProjectsController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\FloorsController;
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
    return inertia('Welcome');
//    return view('welcome');
});

Route::get('/services', function () {
    return inertia('Services');
//    return view('Services');
});

Route::get('/projects', [ProjectsController::class, 'index']);

Route::get('/projects/{projectID}', [ProjectsController::class, 'single']);

Route::get('/projects/{projectID}/buildings', [BuildingsController::class, 'index']);

Route::get('/projects/{projectID}/buildings/{buildingID}', [BuildingsController::class, 'single']);

Route::get('/projects/{projectID}/buildings/{buildingID}/floors/{floorID}', [FloorsController::class, 'single']);



Route::get('/news', function () {
    return inertia('News');
//    return view('News');
});

Route::get('/contact', function () {
    return inertia('Contact');
//    return view('Contact');
});

Route::get('/about-company', function () {
    return inertia('About-company');
//    return view('company');
});

Route::get('/certificates', function () {
    return inertia('Certificates');
//    return view('Certificates');
});

Route::get('/core-values', function () {
    return inertia('Core-values');
//    return view('values');
});

Route::get('/leadership', function () {
    return inertia('Leadership');
//    return view('Leadership');
});

Route::get('/news-single', function () {
    return inertia('News-single');
//    return view('single');
});

Route::get('/offices', function () {
    return inertia('Offices');
//    return view('Offices');
});

Route::get('/our-history', function () {
    return inertia('Our-history');
//    return view('Our-history');
});
