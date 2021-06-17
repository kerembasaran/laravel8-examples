<?php

use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HttpClientController;
use App\Http\Controllers\FluentStringController;
use App\Http\Controllers\HttpRequestsController;
use App\Http\Controllers\FormValidationController;
use App\Http\Controllers\HttpSessionController;
use App\Http\Controllers\PostController;
use App\Http\Controllers\JoinController;
use App\Http\Controllers\FileUploadController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\OneToOneController;
use App\Http\Controllers\OneToManyController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\FlashSessionController;
use App\Http\Controllers\MemberController;

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
Route::get('http-client/example1', [HttpClientController::class, 'example1'])->name('http-client.example1');
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

Route::view('file-upload/example1', 'file-upload.example1')->name('file-upload.example1');
Route::post('file-upload/example1', [FileUploadController::class, 'example1']);

Route::get('students', [StudentController::class, 'fetchStudents'])->name('students');
Route::get('database-eloquent-list/posts', [PostController::class, 'getAllPostEloquent'])->name('database-eloquent-list.posts');
Route::view('database-eloquent-save/post', 'database.eloquent.save.post')->name('database-eloquent-save.post');
Route::post('database-eloquent-save/post', [PostController::class, 'addPostSubmitEloquent']);
Route::get('database-eloquent-detail/post/{id}', [PostController::class, 'getPostByIdEloquent'])->name('database-eloquent-detail.post');
Route::get('database-eloquent-delete/post/{id}', [PostController::class, 'deletePostEloquent'])->name('database-eloquent-delete.post');
Route::get('database-eloquent-update/post/{id}', [PostController::class, 'editPostEloquent'])->name('database-eloquent-update.post');
Route::post('database-eloquent-update/post-from-submit', [PostController::class, 'updatePostEloquent'])->name('database-eloquent-update.post-from-submit');

Route::get('one-to-one/insert-record', [OneToOneController::class, 'insertRecord'])->name('one-to-one.insert-record');
Route::get('one-to-one/fetch-phone-by-user/{id}', [OneToOneController::class, 'fetchPhoneByUser'])->name('one-to-one.fetch-phone-by-user');

Route::get('one-to-many/add-post', [OneToManyController::class, 'addPost'])->name('one-to-many.add-post');
Route::get('one-to-many/add-comment/{id}', [OneToManyController::class, 'addComment'])->name('one-to-many.add-comment');
Route::get('one-to-many/get-comment-by-post/{id}', [OneToManyController::class, 'getCommentByPost'])->name('one-to-many.get-comment-by-post');

Route::get('many-to-many/add-role', [RoleController::class, 'addRole'])->name('many-to-many.add-role');
Route::get('many-to-many/add-user', [RoleController::class, 'addUser'])->name('many-to-many.add-user');
Route::get('many-to-many/get-all-roles-by-user/{id}', [RoleController::class, 'getAllRolesByUser'])->name('many-to-many.get-all-roles-by-user');
Route::get('many-to-many/get-all-users-by-role/{id}', [RoleController::class, 'getAllUsersByRole'])->name('many-to-many.get-all-users-by-role');

Route::view('flash-session/example1', 'flash-session/example1')->name('flash-session.example1');
Route::post('flash-session/example1', [FlashSessionController::class, 'example1']);

Route::get('/localization/example1/{locale?}', function ($locale = 'en') {
    if (!in_array($locale, ['en', 'tr', 'ko'])) {
        abort(400);
    }
    App::setLocale($locale);
    return view('localization.example1');
})->name('localization.example1');

Route::get('accessors/index', [MemberController::class, 'index'])->name('accessors.index');
