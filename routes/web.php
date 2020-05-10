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
Route::group(['https' => true], function () {    
    Auth::routes();
    Route::get('/', 'HomeController@index')->name('home');
    Route::get('programs/{slug}', 'HomeController@programs')->name('programs');
    //sh2on eltalaba
    Route::get('admin/home', 'HomeController@adminHome')->name('admin.home')->middleware('is_admin');
    Route::get('admin/register-student', 'HomeController@formRegisterStudent')->name('admin.formRegisterStudent')->middleware('is_admin');
    Route::post('admin/register-student', 'HomeController@registerStudent')->name('admin.registerStudent')->middleware('is_admin');
    Route::post('send/result', 'HomeController@sendReselt')->name('send.acceptation')->middleware('is_admin');
    Route::get('student/edit/{id}', 'HomeController@studentEdit')->name('student.edit')->middleware('is_admin');
    Route::post('student/update/{id}', 'HomeController@studentupdate')->name('admin.student.complete')->middleware('is_admin');
    Route::delete('student/{id}', 'HomeController@studentDelete')->name('student.delete')->middleware('is_admin');
    //student
    Route::get('student/login', 'LoginController@formLogin')->name('student.formLogin');
    Route::post('student/login', 'LoginController@Login')->name('student.login');
    Route::post('student/reset', 'LoginController@Reset')->name('student.reset');
    Route::get('student/complete', 'StudentController@formComplete')->name('student.completeform');
    Route::post('student/complete', 'StudentController@Complete')->name('student.complete');
    Route::post('help/contact', 'HomeController@contact')->name('contact');
});
