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



Route::get('/about', 'PagesController@about')->name('home');
Route::get('/careers', 'PagesController@careers');
Route::get('/mycustomers', 'PagesController@mycustomers');
Route::get('/developerinfo', 'PagesController@developerinfo');
Route::get('/sitemap', 'PagesController@sitemap');
Route::get('/contact', 'PagesController@contact');
Route::get('/charities', 'PagesController@charities');

Route::post('/email','PagesController@email');

Route::get('/', 'PagesController@index')->name('home');

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
    Route::delete('/destroyUser/{id}', 'AdminController@destroyUser');
    Route::get('/editUser/{id}', 'AdminController@showUser');
    Route::put('/editUser/{id}', 'AdminController@updateUser');
    Route::delete('/destroyCustomer/{id}', 'AdminController@destroyCustomer');
    Route::get('/editCustomer/{id}', 'AdminController@showCustomer');
    Route::put('/editCustomer/{id}', 'AdminController@updateCustomer');
    Route::delete('/destroyDriver/{id}', 'AdminController@destroyDriver');
    Route::get('/editDriver/{id}', 'AdminController@showDriver');
    Route::put('/editDrivers/{id}', 'AdminController@updateDriver');
});

Route::prefix('user')->group(function(){
       
});

Route::prefix('driver')->group(function(){
    Route::get('/login', 'Auth\DriverLoginController@showLoginForm')->name('driver.login');
    Route::post('/login', 'Auth\DriverLoginController@login')->name('driver.login.submit');
    Route::get('/register', 'Auth\DriverRegisterController@showRegisterForm')->name('driver.register');
    Route::post('/register', 'Auth\DriverRegisterController@register')->name('driver.register.submit');
    Route::get('/', 'DriverController@index')->name('driver.dashboard');
    Route::get('/showCusOrder/{id}', 'DriverController@showCus');
    Route::get('/showUseOrder/{id}', 'DriverController@showUse');
});

Route::prefix('customer')->group(function(){
    Route::get('/login', 'Auth\CustomerLoginController@showLoginForm')->name('customer.login');
    Route::post('/login', 'Auth\CustomerLoginController@login')->name('customer.login.submit');
    Route::get('/register', 'Auth\CustomerRegisterController@showRegisterForm')->name('customer.register');
    Route::post('/register', 'Auth\CustomerRegisterController@register')->name('customer.register.submit');
    Route::get('/', 'CustomerOrdersController@index');
});
Route::get('/userorders','UserOrdersController@index')->name('user.dashboard');
Route::get('/customerorders','CustomerOrdersController@index')->name('customer.dashboard');