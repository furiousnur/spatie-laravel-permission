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

Route::get('/', function () {
    return view('index');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('logout', 'Auth\LoginController@logout');
Route::get('user-manage', 'UserManageController@user_manage')->name('user-manage');
Route::get('roles-permission', 'UserManageController@roles_permission')->name('roles-permission');
Route::post('role-submit', 'UserManageController@role_submit')->name('role-submit');
Route::post('permission-to-role', 'UserManageController@permission_to_role')->name('permission-to-role');
