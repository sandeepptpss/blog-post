<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
Route::get('/create',[PostController::class, 'create']);
Route::post('post', [PostController::class, 'Post']);
Route::get('/index', [PostController::class, 'show']);
Route::get('view/{id}',[PostController::class,'viewPost'])->name('view');

Route::get('edit/{id}',[PostController::class,'editPost']);
Route::post('/edit',[PostController::class,'updatePost']);
Route::get('delete/{id}',[PostController::class,'deletePost']);
