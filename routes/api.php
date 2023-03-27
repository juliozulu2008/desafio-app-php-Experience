<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "api" middleware group. Make something great!
|
*/
/* Route::get('hello/{name}', function($name){
    return "Olá $name";
});

Route::post('hello-post/{name}', 'App\Http\Controllers\HelloWorldController@hello');
*/
Route::get('bands','App\Http\Controllers\BandController@getAll');
Route::post('bands/store', 'BandController@store');
Route::get('bands/gender/{gender}', 'BandController@getBandsByGender');
Route::get('bands/{id}', 'BandController@getById');



Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});
