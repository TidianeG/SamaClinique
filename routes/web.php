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

Route::get('/', 'cliniqueController@index');

Route::get('/medecin', 'cliniqueController@medecin');

Route::get('/secretaire', 'cliniqueController@secretaire');

Route::get('/secretaire/createPatient','PatientController@patient')->name('create_patient');

Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
