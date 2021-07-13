<?php


use App\Http\Controllers\dashboard\CategoriaController;
use App\Http\Controllers\dashboard\PostController;
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

Route::get('/', function () {
    return view('dashboard.master');
})->name('home');

// Route::get('/aqui',[PostController::class, 'index']);

Route::resource('dashboard/posts', PostController::class);
Route::post('dashboard/posts/{post}/image','App\Http\Controllers\dashboard\PostController@image')->name('posts.image');
Route::resource('dashboard/categorias', CategoriaController::class);
