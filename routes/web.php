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
// Route vers les pages des utilisateurs

Route::get('/', 'cliniqueController@index');

Route::get('/medecin', 'cliniqueController@medecin');

Route::get('/secretaire', 'cliniqueController@secretaire');

Route::get('/admin', 'cliniqueController@admin');

Route::get('/home', 'HomeController@index')->name('home');

//Route::get('/secretaire/edit', 'PatientController@editer_patient')->name('edit_patient');

// Route sur les patients

Route::post('/secretaire/liste', 'PatientController@store')->name('ajouter_patient');

Route::get('/medecin/dossier', 'PatientController@dossier_patient')->name('dossier_patient');

Route::get('/secretaire/liste', 'PatientController@liste_patient')->name('liste_patient');

Route::get('/secretaire/liste/{id}/edit','PatientController@edit_patient')->name("editer_patient");

// Route sur les utilisateurs

Route::get('/admin/users', 'UserController@create_user')->name('create_user');

Route::post('/admin/users', 'UserController@store')->name('ajouter_user');

// Route vers l'authentification

Auth::routes();



