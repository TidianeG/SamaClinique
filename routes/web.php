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

Route::get('/secretaire/liste', 'PatientController@liste_patient')->name('liste_patient');

Route::get('/secretaire/liste/{id}/edit','PatientController@edit_patient')->name("editer_patient");

Route::get('/medecin/patients/{id}/dossier','PatientController@afficher_dossier')->name("afficher_dossier");

Route::get('/medecin/patients', 'PatientController@patients')->name('patients');

Route::patch('/secretaire/liste/{id}/edit','PatientController@update')->name("update_patient");

Route::delete('/secretaire/liste/{id}', 'PatientController@destroy');

// Route sur les utilisateurs

Route::get('/admin/staff/{id}/edit_staff', 'UserController@edit_staff')->name('editer_staff');

Route::post('/admin/staff', 'UserController@store')->name('ajouter_user');

Route::get('/admin/staff', 'UserController@liste_staff')->name('liste_staff');

Route::delete('/admin/staff/{id}', 'UserController@destroy');

Route::get('/register', 'UserController@liste_register');

// Route vers l'authentification

Auth::routes();



