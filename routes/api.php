<?php
// header('Access-Control-Allow-Origin: *');
header('Access-Control-Allow-Headers: Authorization');

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::middleware('auth:sanctum')->get('/me', function (Request $request) {
    return $request->user();
});

Route::group([ 'namespace' => 'App\Http\Controllers\Api'], function ($router) {
    Route::post('register', 'AuthController@register');
    Route::post('login', 'AuthController@login');
    Route::post('registerme', 'AuthController@register_admin');
});

Route::group([ 'namespace' => 'App\Http\Controllers\Api', 'middleware' => ['auth:sanctum']], function ($router) {
    Route::resource('project', 'ProjectController');
    Route::post('updateme', 'AuthController@updateme');
    Route::post('updatepwd', 'AuthController@updatepwd');
    Route::post('addnew', 'AuthController@registerNew');
    Route::get('allusers', 'AuthController@allusers');
    Route::post('deluser', 'AuthController@destroy');
    Route::get('agencyclient', 'AuthController@myusers');
    Route::get('myteam', 'AuthController@myteam');
});