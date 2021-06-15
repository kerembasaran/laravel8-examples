<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HttpClientController;
use App\Http\Controllers\FluentStringController;
use App\Http\Controllers\HttpRequestsController;
use App\Http\Controllers\FormValidationController;
use App\Http\Controllers\HttpSessionController;
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

Route::view('form-validation/example1', 'form-validation.example1')->name('form-validation.example1');
Route::post('form-validation/example1', [FormValidationController::class, 'formValidation']);

Route::view('form-validation/example2', 'form-validation.example2')->name('form-validation.example2');
Route::post('form-validation/example2', [FormValidationController::class, 'formValidation']);

Route::view('form-validation/example3', 'form-validation.example3')->name('form-validation.example3');
Route::post('form-validation/example3', [FormValidationController::class, 'formValidation']);

Route::view('form-validation/example4', 'form-validation.example4')->name('form-validation.example4');
Route::post('form-validation/example4', [FormValidationController::class, 'formValidation']);

Route::get('get-session-data', [HttpSessionController::class, 'getSessionData'])->name('get.session.data');
Route::get('store-session-data', [HttpSessionController::class, 'storeSessionData'])->name('store.session.data');
Route::get('delete-session-data', [HttpSessionController::class, 'deleteSessionData'])->name('delete.session.data');

Route::get('database-raw-query-list/posts', [PostController::class, 'getAllPost'])->name('database-raw-query-list.posts');
Route::view('database-raw-query-save/post', 'database.raw-query.save.post')->name('database-raw-query-save.post');
Route::post('database-raw-query-save/post', [PostController::class, 'addPostSubmit']);
