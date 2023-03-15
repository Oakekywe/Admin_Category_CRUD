<?php

use App\Http\Controllers\AuthContoller;
use App\Http\Controllers\PageContoller;
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
Route::middleware('auth')->group(function(){
    
    Route::get('/',[PageContoller::class,'index'])->name('index')->middleware('auth');
    Route::get('/userProfile',[PageContoller::class,'userProfile'])->name('userProfile');
    Route::post('/post_update_profile',[PageContoller::class,'post_update_profile'])->name('post_update_profile');
    Route::get('/addCategory',[PageContoller::class,'addCategory'])->name('addCategory');
    Route::get('/categoryList',[PageContoller::class,'categoryList'])->name('categoryList');
    Route::post('/post_addCategory',[PageContoller::class,'post_addCategory'])->name('post_addCategory');
    Route::get('/cat_delete/{id}',[PageContoller::class,'cat_delete'])->name('cat_delete');
    Route::get('/cat_edit/{id}',[PageContoller::class,'cat_edit'])->name('cat_edit');
    Route::post('/cat_update/{id}',[PageContoller::class,'cat_update'])->name('cat_update');
    Route::get('/logout',[AuthContoller::class,'logout'])->name('logout');
});

//Auth
Route::middleware('notauth')->group(function(){
    Route::get('/login',[AuthContoller::class,'login'])->name('login');
    Route::post('/post_login',[AuthContoller::class,'post_login'])->name('post_login');
    Route::get('/register',[AuthContoller::class,'register'])->name('register');
    Route::post('/post_register',[AuthContoller::class,'post_register'])->name('post_register');    
});




