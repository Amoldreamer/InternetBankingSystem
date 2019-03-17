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
    return view('welcome');
});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/users/logout', 'Auth\LoginController@userLogout')->name('user.logout');

Route::get('/admin/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
Route::post('/admin/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
Route::get('/admin', 'AdminController@index')->name('admin.dashboard');
Route::get('/admin/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');

Route::get('/admin/update_users','UpdateUsersController@update');

Route::get('saving', 'SavingController@index');
Route::get('fixed', 'FixedController@index');
Route::get('current', 'CurrentController@index');
Route::resource('transfer', 'TrController');

Route::get('adminRegister', function () {
    return view('auth.adminRegister');
});

Route::post('adminRegister','AdminRegistrationController@insert');

Route::get('aboutusBank', function () {
    return view('aboutus');
});
Route::get('servicesBank', function () {
    return view('services');
});
Route::get('accountsBank', function () {
    return view('accounts');
});
Route::get('privacyBank', function () {
    return view('privacy');
});
Route::get('contactBank', function () {
    return view('contact');
});

