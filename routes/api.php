<?php

use Illuminate\Http\Request;

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
Route::post('/add_newsapi', 'newsController@api');

Route::post('/bb', 'exam@bb');
Route::get('/editOne/{id}' , 'exam@editOne')->middleware('Cors');
Route::get('/book/{id}' , 'bookController@api_book')->middleware('Cors');
Route::get('/book_all/{id}' , 'bookController@api_book_all')->middleware('Cors');



