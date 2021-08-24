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
    return view('auth.login');
});

Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Route::view('/tree','auth.register')->name('tree');

Route::view('/reset', 'auth.passwords.reset')->name('/reset');

Route::view('/index', 'index')->name('index');

Route::view('/login2', 'auth.login2')->name('/login2');

Route::view('/test','test');