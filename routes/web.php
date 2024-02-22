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
    return view('home');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::get('/exercise', function () {
    return view('exercise');
});

Route::get('/exercise', [App\Http\Controllers\ExerciseController::class, 'index'])->name('exercise');

Route::get('/nutrisi', function () {
    return view('nutrisi');
});

Route::get('/nutrisi', 'App\Http\Controllers\NutrisiController')->name('nutrisi');

Route::post('/nutrisi', 'NutrisiController@invoke')->name('nutrisi');


Route::get('/bmi', function () {
    return view('bmi');
});

Route::get('/profile', function () {
    return view('profile');
});

Route::get('/detailex', function () {
    return view('detailex');
});