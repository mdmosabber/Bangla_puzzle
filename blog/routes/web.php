<?php

use App\Http\Controllers\CommentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\BlogController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\AdminController;

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

Route::get('/',[HomeController::class, 'index']);
Route::get('/post/{slug}/{id}',[HomeController::class,'show'])->name('user.view.post-details');

Route::post('/user/comment/save',[CommentController::class,'store'])->name('user.comment.store');



Route::middleware('admin:admin')->group(function (){
    Route::get('admin/login',[AdminController::class, 'loginForm']);
    Route::post('admin/login',[AdminController::class, 'store'])->name('admin.login');
});


Route::middleware(['auth:sanctum,admin', config('jetstream.auth_session'), 'verified'
])->group(function () {
    Route::get('admin/dashboard', function () {
        return view('admin/dashboard');
    })->name('dashboard')->middleware('auth:admin');


    Route::controller(DashboardController::class)->group(function(){
        Route::get('all-users', 'index')->name('all-users');
    });

});



Route::middleware(['auth:sanctum', config('jetstream.auth_session'), 'verified'
])->group(function () {

    Route::get('/dashboard',[DashboardController::class, 'dashboard'])->name('dashboard');

    Route::get('/blog-post',[BlogController::class,'index'])->name('user.post-box');
    Route::post('/blog-post/save',[BlogController::class,'store'])->name('user.blog-post.store');
    Route::get('/blog-post/show',[BlogController::class,'show'])->name('user.post-box.show');
    Route::get('/blog-post/edit/{id}',[BlogController::class,'edit'])->name('user.edit.blog-post');
    Route::delete('/blog-post/delete/{id}',[BlogController::class,'destroy'])->name('user.delete.blog-post');


});








