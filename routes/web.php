<?php

use Illuminate\Support\Facades\Route;
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

Route::get('/admin/dashboard',function(){
    return view('admin.dashboard');
});


Route::get('/lms',function(){
    return view('LMS.index');
});
Route::get('/admin/create',[AdminController::class,'create'])->name('create');
// Route::get('/create', [AdminController::class,'create'])->name('create');
// Route::get('/admin',[AdminController::class, 'admin'])->name('admin');
Route::get('/signup',[AdminController::class,'signup'])->name('signup');
Route::get('/login/dashboard',[AdminController::class,'dashboard'])->name('dashboard');
Route::get('/login/dashboard/about',[AdminController::class,'about'])->name('about');
Route::get('/',[AdminController::class,'login']);
