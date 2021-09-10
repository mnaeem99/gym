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

Route::get('/', 'HomeController@index');
Route::get('about', function () {
    return view('about');
});
Route::get('classes', function () {
    return view('classes');
});
Route::get('trainers', function () {
    return view('trainers');
});
Route::get('blog', function () {
    return view('blog');
});
Route::get('contact', function () {
    return view('contact');
});
Route::get('blog-details', function () {
    return view('blog-details');
});
Route::get('admin', function () {
    return view('admin.dashboard');
});

Route::post('register', 'CustomerController@create');
Route::get('addCustomer', 'CustomerController@addCustomer');
Route::get('listcustomer', 'CustomerController@index');
Route::get('editcustomer/{id}', 'CustomerController@edit');
Route::get('deletecustomer/{id}', 'CustomerController@destroy');
Route::post('updatecustomer/{id}', 'CustomerController@update');

Route::post('contact', 'ContactController@create');
Route::get('listcontact', 'ContactController@index');
Route::get('editcontact/{id}', 'ContactController@edit');
Route::get('deletecontact/{id}', 'ContactController@destroy');
Route::post('updatecontact/{id}', 'ContactController@update');

Route::get('addcourse', 'CoursesController@addcourse');
Route::post('addcourse', 'CoursesController@create');
Route::get('listcourse', 'CoursesController@index');
Route::get('editcourse/{id}', 'CoursesController@edit');
Route::post('updatecourse/{id}', 'CoursesController@update');
Route::get('deletecourse/{id}', 'CoursesController@destroy');


Route::get('addtrainer', 'TrainersController@addtrainer');
Route::post('addtrainer', 'TrainersController@create');
Route::get('listtrainer', 'TrainersController@index');
Route::get('edittrainer/{id}', 'TrainersController@edit');
Route::post('updatetrainer/{id}', 'TrainersController@update');
Route::get('deletetrainer/{id}', 'TrainersController@destroy');

