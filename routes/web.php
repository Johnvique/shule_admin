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

Route::group(['middleware' => ['auth']], function () {
    Route::get('/dashboard/index', 'DashboardController@index');
    Route::get('/dashboard/bog', 'BogController@index');
    Route::get('/dashboard/classes', 'ClassesController@index');
    Route::get('/dashboard/fee', 'FeeController@index');
    Route::get('/dashboard/non_teaching', 'NonteachingController@index');
    Route::get('/dashboard/subject', 'SubjectController@index');
    Route::get('/dashboard/teacher', 'TeacherController@index');
    Route::get('/dashboard/student', 'StudentController@index');

});

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::resource('bog', 'BogController');
Route::resource('classes', 'ClassesController');
Route::resource('fee', 'FeeController');
Route::resource('non_teaching', 'NonteachingController');
Route::resource('subject', 'SubjectController');
Route::resource('teacher', 'TeacherController');
Route::resource('student', 'StudentController');
