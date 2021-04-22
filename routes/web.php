<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AddController;
use App\Http\Controllers\PostController;
use App\Models\User;
use App\Models\Phone;
use App\Models\Category;
use App\Models\Post;
use App\Models\Category_post;

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
    $post= Post::with('categories')->findOrFail(6);
    $post->categories()->attach(2);
});
Route::resource('post', PostController::class);
