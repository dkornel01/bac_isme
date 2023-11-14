<?php

use App\Http\Controllers\ProductController;
use App\Models\Product;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});
Route::get('/api/Products', [ProductController::class,'index']);
Route::get('/api/Products/{id}',[ProductController::class,'show']);
Route::post('/api/Products', [ProductController::class,'store']);
Route::put('/api/Products/{id}',[ProductController::class,'update']);
Route::delete('/api/Products/{id}', [ProductController::class,'destroy']);
Route::get('/api/Products',[ProductController::class,'index']);

Route::get('/api/Products_Type', [ProductController::class,'index']);
Route::get('/api/Products/{id}',[ProductController::class,'show']);
Route::post('/api/Products', [ProductController::class,'store']);
Route::put('/api/Products/{id}',[ProductController::class,'update']);
Route::delete('/api/Products/{id}', [ProductController::class,'destroy']);
Route::get('/api/Products',[ProductController::class,'index']);

Route::get('/api/Products', [ProductController::class,'index']);
Route::get('/api/Products/{id}',[ProductController::class,'show']);
Route::post('/api/Products', [ProductController::class,'store']);
Route::put('/api/Products/{id}',[ProductController::class,'update']);
Route::delete('/api/Products/{id}', [ProductController::class,'destroy']);
Route::get('/api/Products',[ProductController::class,'index']);

