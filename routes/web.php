<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Http\Request;
use App\Http\Controllers\ProductController;


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


Route::get('/',function(){
    return view('loginpage');
});
Route::post('/logged',[ProductController::class,'authentification']);
Route::get('/create',[ProductController::class,'create']);
Route::post('/store',[ProductController::class,'store']);
Route::get('/products',[ProductController::class,'index']);
Route::get('/{RefPdt}/edit',[ProductController::class,'edit']);
Route::put('/{RefPdt}/update',[ProductController::class,'update']);
Route::get('/{RefPdt}/show',[ProductController::class,'show']);
Route::delete('/products/{RefPdt}', [ProductController::class, 'destroy']);

