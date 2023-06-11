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

Route::prefix('settings')->group(function() {
    Route::get('/', 'SettingsController@index');

    // language route 
    Route::get('/language', 'LanguageController@index')->name('settings.language');
    Route::get('/language-create', 'LanguageController@create')->name('settings.language.create');
    Route::post('/language-store', 'LanguageController@store')->name('settings.language.store');
    Route::get('/language/{id}/delete', 'LanguageController@destroy')->name('settings.language.delete'); //delete
    Route::get('/language/{id}/edit', 'LanguageController@edit')->name('settings.language.edit'); 
    Route::post('/language/{id}/update', 'LanguageController@update')->name('settings.language.update');
});
