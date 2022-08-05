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

Route::get('/righturl', function () {
    return view('right-view');
});

Route::get('/', function () {
    return view('welcome');
})->name('home');

Route::resource('users', \App\Http\Controllers\UserController::class);
