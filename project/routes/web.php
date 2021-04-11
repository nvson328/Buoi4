<?php

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


Route::get('/',[HomeController::class,'trangchu']);
Route::get('/home',[HomeController::class,'home']);
Route::get('/collection',[HomeController::class,'collection']);
Route::get('/shoes',[HomeController::class,'shoes']);
Route::get('/racingboots',[HomeController::class,'racingboots']);
Route::get('/contact',[HomeController::class,'contact']);