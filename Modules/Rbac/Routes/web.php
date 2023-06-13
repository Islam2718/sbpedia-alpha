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
    Route::get('/users/{userId}/assign', 'UserController@assign')->name('users.assign-role');
    Route::post('/roles/{userId}/roles/assign','UserController@assignRoles')->name('user.assign.roles');




    // profile routes
    Route::get('/profile/{userId}/edit', 'ProfileController@edit')->name('users.profile.edit');
    Route::post('/profile/{userId}/update', 'ProfileController@update')->name('users.profile.update');

    //roles routes
    Route::get('/roles',[\Modules\Rbac\Http\Controllers\RoleController::class, 'index'])->name('roles.index');
    Route::get('/roles/create',[\Modules\Rbac\Http\Controllers\RoleController::class, 'create'])->name('roles.create');
    Route::post('/roles/store',[\Modules\Rbac\Http\Controllers\RoleController::class, 'store'])->name('roles.store');
    Route::get('/roles/{roleId}/assign',[\Modules\Rbac\Http\Controllers\RoleController::class, 'assign'])->name('roles.assign');
    Route::get('/roles/{roleId}/edit',[\Modules\Rbac\Http\Controllers\RoleController::class, 'edit'])->name('roles.edit');
    Route::post('/roles/{roleId}/update',[\Modules\Rbac\Http\Controllers\RoleController::class, 'update'])->name('roles.update');
    Route::post('/roles/{roleId}/permissions/assign',[\Modules\Rbac\Http\Controllers\RoleController::class, 'assignPermissions'])->name('roles.assign.permissions');




    //permission routes
    Route::get('/permissions',[\Modules\Rbac\Http\Controllers\PermissionController::class, 'index'])->name('permissions.index');
    Route::get('/permissions/create',[\Modules\Rbac\Http\Controllers\PermissionController::class, 'create'])->name('permissions.create');
    Route::post('/permissions/store',[\Modules\Rbac\Http\Controllers\PermissionController::class, 'store'])->name('permissions.store');
    Route::get('/permissions/{id}/edit',[\Modules\Rbac\Http\Controllers\PermissionController::class, 'edit'])->name('permissions.edit');
    Route::post('/permissions/{id}/update',[\Modules\Rbac\Http\Controllers\PermissionController::class, 'update'])->name('permissions.update');








});
