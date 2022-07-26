<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\CategoryController;
use App\Http\Controllers\PruductController;

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

Route::get('/', [DashboardController::class,'index'])->name('dashboard');
Route::get('/dashboard', [DashboardController::class,'viewDashboard'])->name('dashboard1');
//category_List
Route::get('/category/list',[CategoryController::class,'list'])->name('list.category');
Route::get('/category/add',[CategoryController::class,'add'])->name('add.category');
Route::post('/category/store',[CategoryController::class,'store'])->name('category.store');

//Product_List
Route::get('/product/list',[PruductController::class,'list'])->name('list.product');
Route::get('/product/add',[PruductController::class,'add'])->name('add.product');
Route::post('/product/store',[PruductController::class, 'store'])->name('product.store');
