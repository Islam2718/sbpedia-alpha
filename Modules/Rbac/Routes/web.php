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

Route::prefix('rbac')->group(function() {
    Route::get('/', 'RbacController@index');

    // user routes
    Route::get('/users', 'UserController@index')->name('users.index');
    Route::get('/users/create', 'UserController@create')->name('users.create');

    // profile routes
    Route::get('/profile/{userId}/edit', 'ProfileController@edit')->name('users.profile.edit');
    Route::post('/profile/{userId}/update', 'ProfileController@update')->name('users.profile.update');

    //roles routes
    Route::get('/roles',[\Modules\Rbac\Http\Controllers\RoleController::class, 'index'])->name('roles.index');
    Route::get('/roles/create',[\Modules\Rbac\Http\Controllers\RoleController::class, 'create'])->name('roles.create');
    Route::post('/roles/store',[\Modules\Rbac\Http\Controllers\RoleController::class, 'store'])->name('roles.store');



    //permission routes
    Route::get('/permissions',[\Modules\Rbac\Http\Controllers\PermissionController::class, 'index'])->name('permission.manage');




});
