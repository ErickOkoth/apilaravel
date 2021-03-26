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
Route::post('/products','ProductController@createProduct');
Route::get('/products/edit/{id}','ProductController@getProduct');
Route::get('/products','ProductController@AllProduct');
Route::put('/products/update/{id}','ProductController@updateProduct');
Route::delete('/products/delete/{id}','ProductController@deleteProduct');


Route::group(['prefix'=>'auth'], function(){
    Route::post('register','API/RegisterController@register');
    
});