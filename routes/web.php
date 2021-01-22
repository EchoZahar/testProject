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
// только администратор
Route::middleware(['auth','role:administrator'])->namespace('App\Http\Controllers\Admin')->group(function() {
    Route::get('/administrator', 'DashboardController@staticData')->name('administrator');
    Route::resource('/administrator/role', 'RoleController')->names('administrator.role');
});
// административные пользователи (admin панели)
Route::middleware(['auth','role:administrator','role:web-developer','role:project-manager'])->namespace('App\Http\Controllers\Admin')->group(function() {

});
// только авторизирование пользователи
Route::group(['middleware' => ['auth'],['administrator']], function() {
    Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
});


