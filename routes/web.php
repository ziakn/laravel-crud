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


Route::get('/', function(){
return view('welcome');
});

Route::resource('student', 'StudentController');

// Route::get('/','PagesController@home');
// Route::get('/about','PagesController@about');
// Route::get('/contact','PagesController@contact');




// //Route::resources('projects','ProjectsController');
// Route::get('/projects','ProjectsController@index');
// Route::post('/projects','ProjectsController@store');
// Route::get('/projects/create','ProjectsController@create');


Route::get('/studentdata/show','StudentDataController@show');


Route::get('/studentdata/create','StudentDataController@create');
Route::post('/studentdata/saveData','StudentDataController@saveData')->name('studentdatasave');


Route::get('/studentdata/edit/{id}','StudentDataController@edit');
Route::post('/studentdata/update','StudentDataController@update')->name('studentdataupdate');

Route::get('/studentdata/delete/{id}','StudentDataController@delete');