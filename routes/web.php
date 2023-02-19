<?php

use App\Http\Controllers\RegisterController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\MenuController;
use App\Http\Controllers\RecetasController;
use Illuminate\Routing\Route as RoutingRoute;
use Illuminate\Support\Facades\Route;
use Symfony\Component\Routing\Route as ComponentRoutingRoute;

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



Route::get('/Register', [App\Http\Controllers\RegisterController::class, 'show']);

Route::post('/Register', [App\Http\Controllers\RegisterController::class, 'register']);

Route::get('/login', [App\Http\Controllers\LoginController::class, 'show']);

Route::post('/login', [App\Http\Controllers\LoginController::class, 'login']);

Route::get('/home', [HomeController::class, 'index'])->name('home');


Route::get('/menu',[HomeController::class,'menu'])->name('menu');
Route::get('/opiniones',[HomeController::class,'opiniones'])->name('opiniones');
Route::get('/gost',[HomeController::class,'gost'])->name('productos');
Route::get('/recetas',[HomeController::class,'recetas'])->name('recetas');



