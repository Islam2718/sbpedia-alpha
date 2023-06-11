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

Route::prefix('news')->group(function() {
    Route::get('/', 'NewsController@index');


    // news admin routes
    Route::get('/news/list', 'NewsController@allNews')->name('news.news-list');
    Route::get('/news/create', 'NewsController@create')->name('news.create');

    //news category 
    Route::get('/category/list', 'NewsCategoryController@index')->name('news.category-list');

    // //news category contents
    // Route::get('/category/list', 'NewsCategoryController@index')->name('news.category-list');

    // //news category language
    // Route::get('/category/list', 'NewsCategoryLanguageController@index')->name('news.category-language-list');
});
