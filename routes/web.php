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
Route::get('/Contributors', 'PagesController@institutesInfo');

Route::resource('exampapers', 'ExamPapersController');
Route::resource('questions', 'QuestionsController');
Route::resource('uanswer', 'StudentAnswersController');
Route::resource('result', 'StudentResultController');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
Route::get('/student/logout', 'Auth\LoginController@userLogout')->name('student.logout');      

Route::prefix('admin')->group(function() {
    Route::get('/login', 'Auth\AdminLoginController@showLoginForm')->name('admin.login');
    Route::post('/login', 'Auth\AdminLoginController@login')->name('admin.login.submit');
    Route::get('/', 'AdminController@index')->name('admin.dashboard'); 
    Route::get('/logout', 'Auth\AdminLoginController@logout')->name('admin.logout');
    
    //Password Reset Routes
    Route::post('/password/email', 'Auth\AdminForgotPasswordController@sendResetLinkEmail')->name('admin.password.email');    
    Route::get('/password/reset', 'Auth\AdminForgotPasswordController@showLinkRequestForm')->name('admin.password.request');
    Route::post('/password/reset', 'Auth\AdminResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\AdminResetPasswordController@showResetForm')->name('admin.password.reset');    
});

Route::prefix('lecturer')->group(function() {
    Route::get('/login', 'Auth\LecturerLoginController@showLoginForm')->name('lecturer.login');
    Route::post('/login', 'Auth\LecturerLoginController@login')->name('lecturer.login.submit');
    Route::get('/', 'LecturerController@index')->name('lecturer.dashboard'); 
    Route::get('/logout', 'Auth\LecturerLoginController@logout')->name('lecturer.logout');
    
    //Password Reset Routes
    Route::post('/password/email', 'Auth\LecturerForgotPasswordController@sendResetLinkEmail')->name('lecturer.password.email');    
    Route::get('/password/reset', 'Auth\LecturerForgotPasswordController@showLinkRequestForm')->name('lecturer.password.request');
    Route::post('/password/reset', 'Auth\LecturerResetPasswordController@reset');
    Route::get('/password/reset/{token}', 'Auth\LecturerResetPasswordController@showResetForm')->name('lecturer.password.reset');    
});
