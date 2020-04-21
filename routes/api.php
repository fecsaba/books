<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

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
Route::post('/book', 'BookController@store');
Route::get('/book', 'BookController@index')->name('Lista');
Route::put('/book/{id}', 'BookController@update')->name('Update');
Route::delete('/book/{id}', 'BookController@destroy')->name('Delete');
Route::get('/book/{id}', 'BookController@show')->name('Show');
