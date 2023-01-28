<?php

use App\Http\Controllers\PagesController;
use App\Http\Controllers\PostController;
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use PhpParser\Node\Expr\PostInc;

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

Route::get('/', [PagesController::class, 'index']);
Auth::routes();

Route::get('/blog', [PostController::class, 'index']);
Route::get('/blog/create', [PostController::class, 'create']);
Route::post('/blog', [PostController::class, 'store']);
Route::get('/blog/{slug}', [PostController::class, 'show']);
Route::get('/blog/{slug}/edit', [PostController::class, 'edit']);
Route::put('/blog/{slug}', [PostController::class, 'update']);
Route::get('/blog/{slug}/delete', [PostController::class, 'destroy']);

Route::get('/home', [\App\Http\Controllers\HomeController::class, 'index'])->name('home');

