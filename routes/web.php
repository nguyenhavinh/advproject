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

Route::get('/', 'PagesController@index');

Route::get('/about', 'PagesController@about');

Route::get('/careers', 'PagesController@careers');

Route::get('/mycustomers', 'PagesController@mycustomers');

Route::get('/home', 'HomeController@index')->name('home');



Auth::routes();

Route::resource('customerorders', 'CustomerOrdersController');

Route::resource('userorders', 'UserOrdersController');

Auth::routes();
Route::prefix('admin')->group(function(){
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/register', 'Auth\AdminRegisterController@showRegisterForm')->name('admin.register');
    Route::post('/register', 'Auth\AdminRegisterController@register')->name('admin.register.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard');
});

Route::prefix('user')->group(function(){
    Route::get('/', 'UserController@index')->name('user.dashboard');    
});

Route::prefix('driver')->group(function(){
    Route::get('/login', 'Auth\DriverLoginController@showLoginForm')->name('driver.login');
    Route::post('/login', 'Auth\DriverLoginController@login')->name('driver.login.submit');
    Route::get('/register', 'Auth\DriverRegisterController@showRegisterForm')->name('driver.register');
    Route::post('/register', 'Auth\DriverRegisterController@register')->name('driver.register.submit');
    Route::get('/', 'DriverController@index')->name('driver.dashboard');
});

Route::prefix('customer')->group(function(){
    Route::get('/login', 'Auth\CustomerLoginController@showLoginForm')->name('customer.login');
    Route::post('/login', 'Auth\CustomerLoginController@login')->name('customer.login.submit');
    Route::get('/register', 'Auth\CustomerRegisterController@showRegisterForm')->name('customer.register');
    Route::post('/register', 'Auth\CustomerRegisterController@register')->name('customer.register.submit');
    Route::get('/', 'CustomerController@index')->name('customer.dashboard');
});
