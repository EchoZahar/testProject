<?php

use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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
// авторизированные пользователи
Route::group(['namespace'=>'App\Http\Controllers'], function() {
    Route::get('/home', 'HomeController@index')->name('home');
});

// администратор
Route::group(['prefix'=>'a','namespace'=>'App\Http\Controllers\Admin',], function() {
    Route::get('/', 'DashboardController@staticData')->name('a');
    Route::resource('/role', 'RoleController')->names('a.role');
    Route::resource('/permission', 'PermissionController')->names('a.permission');
});
