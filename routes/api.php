<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Deparment;

/*
|--------------------------------------------------------------------------
| API Routes
|--------------------------------------------------------------------------
|
| Here is where you can register API routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| is assigned the "api" middleware group. Enjoy building your API!
|
*/
Route::group(['prefix' => 'v1', 'https' => true], function(){
    Route::post('student/login', 'LoginController@LoginMobile')->name('student.login');
    Route::post('departments', function(){
        return response()->json(['departments' => Deparment::all()], 200);
    });
});

Route::group(['prefix' => 'v1', 'middleware' => 'auth:api', 'https' => true], function(){
    Route::post('student/complete', 'StudentController@CompleteMobile')->name('student.complete');
    Route::delete('student/logout', 'LoginController@logoutMobile')->name('student.logout');
});




