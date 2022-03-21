<?php

use Illuminate\Support\Facades\Route;
use \Illuminate\Support\Facades\Auth;

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
    return view('auth.login');
});

Route::get('/logout', 'Auth\LoginController@logout')->name('logout');
Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');

Route::prefix('admin')->group(function () {
    Route::group(['middleware' => ['auth', 'role:admin']], function () {
        Route::get('/', 'Admin\AdminController@index')->name('dashboard');
        Route::resource('permissions', 'Admin\PermissionController');
        Route::resource('roles', 'Admin\RoleController');
        Route::resource('users', 'Admin\UserController');
        Route::resource('internet_home', 'orange\InternetHomeController');
        Route::resource('mobile_phone', 'orange\MobilePhoneController');
        Route::resource('number_porting', 'orange\NumberPortingController');
    });
});
