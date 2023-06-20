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



Route::group(['prefix'=>'news','middleware' => 'auth'], function() {
    Route::get('/', 'NewsController@index');


    // news admin routes
    Route::get('/news-dashboard', 'NewsController@index')->name('news.news.index');
    Route::get('/news-list', 'NewsController@allNews')->name('news.news.list');
    Route::get('/news-create', 'NewsController@create')->name('news.news.create');
    Route::post('/news-store', 'NewsController@store')->name('news.news.store');

    // news category 
    Route::get('/category-list', 'NewsCategoryController@index')->name('news.category.list');
    Route::get('/category-create', 'NewsCategoryController@create')->name('news.category.create');
    Route::post('/category-store', 'NewsCategoryController@store')->name('news.category.store');
    Route::get('/category/{id}/edit', 'NewsCategoryController@edit')->name('news.category.edit');
    Route::post('/category/{id}/update', 'NewsCategoryController@update')->name('news.category.update');
    Route::get('/category/{id}/delete', 'NewsCategoryController@destroy')->name('news.category.delete');
});
