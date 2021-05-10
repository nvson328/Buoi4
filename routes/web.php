<?php

use App\Http\Controllers\ForgotPassword;
use App\Http\Controllers\homeController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;
use App\Http\Controllers\LoginController;
use App\Models\User;
use App\Models\Phone;
use App\Models\Category;
use App\Models\Post;

use Illuminate\Support\Facades\Mail;
use App\Notifications\VerifyEmail;
use Illuminate\Support\Facades\Notification;

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

Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
Route::post('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
// Route::get('verify-email',function(){
//      $data = new stdClass();
//  $data->name = 'Sonbodoiwa';

// 	 Mail::to('nvson328@gmail.com')->send(new VerifyEmail($data));
//     Notification::route('mail','nvson328@gmail.com')->notify(new VerifyEmail());
// });
Route::get('/verify',[ForgotPassword::class,'verified'])->name('verified');
Route::get('/email',[ForgotPassword::class,'email'])->name('formemail');
Route::post('/email',[ForgotPassword::class,'sendemail'])->name('sendemail');

Route::get('/reset/{id}',[ForgotPassword::class,'form'])->name('formreset');
Route::post('/reset/{id}',[ForgotPassword::class,'resetsuccess'])->name('act.reset');

Route::resource('posts', PostController::class)->middleware('auth');
// Route::get('/login', [LoginController::class, 'index'])->middleware('guest');
// Route::post('/login', [LoginController::class, 'show'])->middleware('guest')->name('login');
Route::get('/logout', [homeController::class, 'logout'])->middleware('auth')->name('logout');


