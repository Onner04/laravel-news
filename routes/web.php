<?php

use App\Http\Controllers\admin\AdminController;
use App\Http\Controllers\admin\banner\BannerController;
use App\Http\Controllers\admin\category\CategoryController;
use App\Http\Controllers\admin\comment\CommentController;
use App\Http\Controllers\admin\news\NewsController;
use App\Http\Controllers\admin\type\TypeController;
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


Route::get('admin',[AdminController::class,'home'])->name('admin.home');
Route::get('login-admin',[AdminController::class,'login'])->name('login.admin');


Route::prefix('admin')->group(function(){
    Route::get('/',[AdminController::class,'home'])->name('admin.home');

    // trang news
    Route::get('news',[NewsController::class,'index'])->name('news.index');
    // thêm news
    Route::get('add-news',[NewsController::class,'edit'])->name('news.add');
    // Sửa new
    Route::get('update-new',[NewsController::class,'update'])->name('news.update');


    // trang comment
    Route::get('comment',[CommentController::class,'index'])->name('comment.index');


    // trang slide
    Route::get('slide',[BannerController::class,'index'])->name('slide.index');
    // thêm slide
    Route::get('add-slide',[BannerController::class,'edit'])->name('slide.add');
    // sửa slide
    Route::get('update-slide',[BannerController::class,'update'])->name('slide.update');


    //Trang category
    Route::get('category',[CategoryController::class,'index'])->name('category.index');
    // thêm category
    Route::get('add-category',[CategoryController::class,'edit'])->name('category.add');
    // sửa category
    Route::get('update-category',[CategoryController::class,'update'])->name('category.update');


    // trang type
    Route::get('type',[TypeController::class,'index'])->name('type.index');
    // thêm type
    Route::get('add-type',[TypeController::class,'edit'])->name('type.add');
    // sửa type
    Route::get('update-type',[TypeController::class,'update'])->name('type.update');
});

Route::prefix('/')->group(function(){
    Route::get('/',[HomeController::class,'home'])->name('home');
});
