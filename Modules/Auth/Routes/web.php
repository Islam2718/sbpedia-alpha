<?php

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

Route::prefix('auth')->group(function() {
    Route::get('/', 'AuthController@index');
});

//google auth routes
Route::get('login/google', [\Modules\Auth\Http\Controllers\GoogleController::class, 'redirectToGoogle']);
Route::get('login/google/callback', [\Modules\Auth\Http\Controllers\GoogleController::class, 'handleGoogleCallback']);
Route::post('login/google/callback/post', [\Modules\Auth\Http\Controllers\GoogleController::class, 'handleGoogleCallbackPost'])
->name('register.google.register');


//facebook auth routes
Route::get('login/facebook', [\Modules\Auth\Http\Controllers\FacebookController::class, 'redirectToFacebook']);
Route::get('login/facebook/callback', [\Modules\Auth\Http\Controllers\FacebookController::class, 'handleFacebookCallback']);
Route::post('login/facebook/callback/post', [\Modules\Auth\Http\Controllers\FacebookController::class, 'handleFacebookCallbackPost'])
    ->name('register.facebook.register');
