<?php

// use Spatie\Permission\Models\Role;
// use Spatie\Permission\Models\Permission;



Auth::routes();

Route::get('/', 'HomeController@index')->name('home');

// Route::get('/post', 'PostController@index')->name('home');

Route::resource('users', 'UserController');

Route::resource('roles', 'RoleController');

Route::resource('permissions', 'PermissionController');

Route::resource('posts', 'PostController');






// Route::get('/create_role_permission', function(){

//     $role = Role::create(['name' => 'Administer']);
//     $permission = Permission::create(['name' => 'Administer roles & permissions']);
//     auth()->user()->assignRole('Administer');
//     auth()->user()->givePermissionTo('Administer roles & permissions');
// });