<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ProductContaoller;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/',[HomeController::class,'index'])->name('home');

Route::get('/product/add',[ProductContaoller::class,'index'])->name('product.add');
Route::get('/product/manage',[ProductContaoller::class,'manage'])->name('product.manage');
Route::post('/product/store',[ProductContaoller::class,'store'])->name('product.store');
