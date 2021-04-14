<?php

use App\Http\Controllers\PostsController;
use App\Models\posts;
use App\Models\Test;
use App\Models\User;
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
    // $user= User::query()->where('email','donal_trum@gmail.com')->first();//Trả về object,->get(): trả về 1 array
    // dd($user);  

    // =================Thêm=================
    // $user = new User();
    // $user->name='aaaa';
    // $user->email='bhashd@gmail.com';
    // $user->password='123';
    // $user->save();

    // ==================Sửa====================

//    $user= User::query()->whereIn('id',[1,2,3])->update([
//        'name'=>'bsdfe'
//        ]);
//   

// ===============Xoá=======
// $user=User::query()->find(1);//Xoá theo id
// $user->delete();

//$user=User::query()->where('name','bsdfe')->delete();//Xoá theo tên
//Cách 2:
// User::destroy([1,2,3]); xoá 3 bản ghi có id :1,2,3
//Muốn thay đổi bảng để xoá thì đổi bảng model, User::<--- là tên model


//Lấy ra dữ liệu khi dùng cả 2 bảng

// User::query()->find(4)->delete();
// $user=User::query()->emailVerify()->toSql();//Khi gọi đến làm local thì chuyển chữ cái đầu thành chữ thường
// dd($user);

//================BTVN====================
//========Thêm=========
        // $posts = new posts();
        // $posts->title = 'đã sửa đổi';
        // $posts->slug = 'vừa mới sửa xong';
        // $posts->save();
//=======Sửa===========
        // $posts = posts::query()->find(1)->update(['slug'=>'Chức năng sửa']);
//========Xoá===========
        // $posts = posts::query()->find(2);
        // $posts->delete();

//========Liệt kê========

    
});
Route::get('/list',[PostsController::class,'list']);

