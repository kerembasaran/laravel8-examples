<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ApiController;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/

Route::middleware('auth:api')->get('/user', function (Request $request) {
    return $request->user();
});

Route::get('make-first-simplest-api', [ApiController::class, 'makeFirstSimplestApi'])->name('make.first.simplest.api');
//Postman => http://laravel8examples.test/api/make-first-simplest-api

Route::get('get-data-api/example1', [ApiController::class, 'getDataApiExample1'])->name('get.data.api.example1');
//Postman => http://laravel8examples.test/api/get-data-api/example1

Route::post('database-save-post-method-api/example1', [ApiController::class, 'databaseSavePostMethodApiExample1']);
//Postman => http://laravel8examples.test/api/database-save-post-method-api/example1

Route::put('database-update-put-method-api/example1', [ApiController::class, 'databaseUpdatePutMethodApiExample1']);
//Postman => http://laravel8examples.test/api/database-update-put-method-api/example1

Route::delete('database-delete-api/example1/{id}', [ApiController::class, 'databaseDeleteApiExample1']);
//Postman => http://laravel8examples.test/api/database-delete-api/example1/9

Route::get('search-api/example1/{name}', [ApiController::class, 'searchApiExample1']);
//Postman => http://laravel8examples.test/api/search-api/example1/b
