<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HttpClientController;
use App\Http\Controllers\FluentStringController;
use App\Http\Controllers\HttpRequestsController;

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

/*Route::get('/', function () {
    return view('welcome');
});*/
Route::view('/', 'home')->name('home');
Route::view('route/index', 'route.index')->name('route.index');
Route::get('http-client/get-all-post', [HttpClientController::class, 'getAllPost'])->name('http-client.get-all-post');
Route::get('http-client/get-post-by-id/{id}', [HttpClientController::class, 'getPostById'])->name('http-client.get-post-by-id');
Route::get('http-client/add-post', [HttpClientController::class, 'addPost'])->name('http-client.add-post');
Route::get('http-client/update-post', [HttpClientController::class, 'updatePost'])->name('http-client.update-post');
Route::get('http-client/delete-post/{id}', [HttpClientController::class, 'deletePost'])->name('http-client.delete-post');
Route::get('fluent-string/example1', [FluentStringController::class, 'example1'])->name('fluent-string.example1');
Route::get('http-requests/example1', [HttpRequestsController::class, 'example1'])->name('http-requests.example1');
