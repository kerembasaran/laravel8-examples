<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HttpClientController;
use App\Http\Controllers\FluentStringController;
use App\Http\Controllers\HttpRequestsController;
use App\Http\Controllers\FormValidationController;
use App\Http\Controllers\HttpSessionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\JoinController;

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

Route::get('database-query-builder-list/posts', [PostController::class, 'getAllPost'])->name('database-query-builder-list.posts');
Route::view('database-query-builder-save/post', 'database.query-builder.save.post')->name('database-query-builder-save.post');
Route::post('database-query-builder-save/post', [PostController::class, 'addPostSubmit']);
Route::get('database-query-builder-detail/post/{id}', [PostController::class, 'getPostById'])->name('database-query-builder-detail.post');
Route::get('database-query-builder-delete/post/{id}', [PostController::class, 'deletePost'])->name('database-query-builder-delete.post');
Route::get('database-query-builder-update/post/{id}', [PostController::class, 'editPost'])->name('database-query-builder-update.post');
Route::post('database-query-builder-update/post-from-submit', [PostController::class, 'updatePost'])->name('database-query-builder-update.post-from-submit');

Route::get('inner-join', [JoinController::class, 'innerJoinClause'])->name('innerjoin');
Route::get('left-join', [JoinController::class, 'leftJoinClause'])->name('leftjoin');
Route::get('right-join', [JoinController::class, 'rightJoinClause'])->name('rightjoin');

Route::get('get-all-posts-using-model', [PostController::class, 'getAllPostsUsingModel'])->name('get.all.posts.using.model');
