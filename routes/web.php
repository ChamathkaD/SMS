<?php

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

Route::get('/home', 'HomeController@index')->name('home');

Route::post('user/store','StudentController@store')->name('student.store');
Route::get('addStudent','StudentController@addStudent')->name('addStudent');
/*Route::get('addStudent', 'StudentController@addNewStudent')->name('addNewStudent');*/
Route::get('student','StudentController@students')->name('students');

Route::get('profile','UserController@ViewProfile')->name('profile');
Route::get('profile/edit','UserController@editProfile')->name('profile.edit');
Route::post('profile/edit','UserController@updateProfile')->name('profile.update');
Route::get('password/change','UserController@changePasswordForm')->name('password.change');
Route::post('password/update','UserController@updatePassword')->name('update.password');


