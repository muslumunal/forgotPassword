<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\UserController;
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

/*
Route::get('/post/{id}',function ($id){
    return view('post.post',['data'=>'Müslüm','id'=>$id]);
})->name('post');
*/

/*
//Optional parameter
Route::get('/post/{id?}',function ($id = 0){
    return view('post.post',['data'=>'Müslüm','id'=>$id]);
});
*/

/*
//Route group
Route::prefix('/post')->name('post.')->group(function (){
    Route::get('/index/{id?}',function ($id = 0){
        return view('post.post',['data'=>'Müslüm','id'=>$id]);
    });
    Route::get('/404/{id}',function ($id){
        abort_if(!isset($id),404);
        return view('post.post',['data'=>'Müslüm','id'=>$id]);
    });
});

Route::get('/post',[HomeController::class,'home'])->name('post');
*/

Route::get('/forgotpassword',[UserController::class,'showForgotPassword'])->name('showForgotPassword');
Route::post('/forgotpassword',[UserController::class,'forgotPassword'])->name('forgotPassword');
