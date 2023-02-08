<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
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

Route::get('/Register', [App\Http\Controllers\RegisterController::class, 'show']);

Route::post('/Register', [App\Http\Controllers\RegisterController::class, 'register']);

Route::get('/login', [App\Http\Controllers\LoginController::class, 'show']);

Route::post('/login', [App\Http\Controllers\LoginController::class, 'login']);

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index']);


    

