<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;


Route::apiResource('/class','App\Http\Controllers\Api\SclassController');
Route::apiResource('/subject','App\Http\Controllers\Api\SubjectController');
Route::apiResource('/section','App\Http\Controllers\Api\SectionController');
Route::apiResource('/student','App\Http\Controllers\Api\StudentController');


Route::group([

    'prefix' => 'auth'

], function () {

    Route::post('login', 'App\Http\Controllers\AuthController@login');
    Route::post('signup', 'App\Http\Controllers\AuthController@signup');
    Route::post('logout', 'App\Http\Controllers\AuthController@logout');
    Route::post('refresh', 'App\Http\Controllers\AuthController@refresh');
    Route::post('me', 'App\Http\Controllers\AuthController@me');


});
