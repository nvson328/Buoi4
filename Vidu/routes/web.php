<?php

use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
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
    // $user = DB::table('users')->get();
    // dd($user);
    return view('welcome');
});
Route::get('/list',[UserController::class,'ListUsers'])->name('list_users');
Route::get('/search',[UserController::class,'SearchUser']);
Route::post('/search',[UserController::class,'info'])->name('search');
