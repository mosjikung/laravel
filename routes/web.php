<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AboutController;
use App\Http\Controllers\Usercontroller;
use App\Http\Controllers\Admincontroller;


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
})->name('home');

Route::get('/about',[AboutController::class,'index'])->name('about')->middleware('checkage');
Route::get('/member',[Usercontroller::class,'index'])->name('member');
Route::get('/admin',[Admincontroller::class,'index'])->name('admin')->middleware('check');


