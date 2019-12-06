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

Route::get('/secretaire/create', 'PatientController@create_patient')->name('create_patient');

Route::post('secretaire/create', 'PatientController@store')->name('ajouter_patient');


Route::get('/secretaire/liste', 'PatientController@liste_patient')->name('liste_patient');

Route::get('/medecin/dossier', 'PatientController@dossier_patient')->name('dossier_patient');

Route::get('/secretaire/{id}/liste','PatientController@edit_patient')->name("editer_patient");


Auth::routes();

Route::get('/home', 'HomeController@index')->name('home');
