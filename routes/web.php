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

Route::get('/medilife', 'acceuilController@medilife')->name('medilife');

Route::get('/medecin', 'cliniqueController@medecin')->name('medecin');

Route::get('/secretaire', 'cliniqueController@secretaire')->name('secretaire');

Route::get('/admin', 'cliniqueController@admin')->name('admin');

Route::get('/', 'acceuilController@index');


#Route::get('/user', 'HomeController@redirectTo');


//Route::get('/secretaire/edit', 'PatientController@editer_patient')->name('edit_patient');

// Route sur les patients

Route::post('/secretaire/liste', 'PatientController@store')->name('ajouter_patient');

Route::get('/secretaire/liste', 'PatientController@liste_patient')->name('liste_patient');

Route::get('/secretaire/liste/{id}/edit','PatientController@edit_patient')->name("editer_patient");

Route::get('/medecin/patients/{id}/dossier','PatientController@afficher_dossier')->name("afficher_dossier");

Route::post('/medecin/patients/{id}/dossier','PatientController@create_folder')->name("create_folder");

Route::post('/medecin/patients/{id}/dossierP','PatientController@create_analyse')->name("create_analyse");

Route::post('/medecin/patients/dossier','PatientController@recherche_dossier')->name("recherche_dossier");

Route::get('/medecin/patients', 'PatientController@patients')->name('patients');

Route::get('/medecin/appointment', 'UserController@mes_rv')->name('mes_rv');

Route::get('/medecin/new_folder', 'PatientController@new_folder')->name('new_folder');

Route::get('/medecin/analyse/{id}/edit','PatientController@edit_dossier')->name("editer_dossier");

Route::patch('/medecin/analyse/{id}/edit','PatientController@update_analyse')->name("update_analyse");

/////////////////edit folderrrr

Route::get('/medecin/folder/{id}/edit','PatientController@edit_folder')->name("editer_folder");

Route::patch('/medecin/folder/{id}/edit','PatientController@update_folder')->name("update_folder");

//////////////////fin edit folder

Route::patch('/secretaire/liste/{id}/edit','PatientController@update')->name("update_patient");

Route::get('/secretaire/liste/{id}/affiche','PatientController@afficher_patient')->name("afficher_patient");

Route::get('secretaire/rv', 'PatientController@newrv')->name('rendezvous');

Route::post('secretaire/rv', 'PatientController@create_rv')->name('createrv');

Route::post('secretaire/consult', 'PatientController@save_consult_payment')->name('createconsultation');

Route::get('secretaire/new', 'PatientController@newrv')->name('newrv');

Route::delete('/secretaire/liste/{id}', 'PatientController@destroy');

// Route sur les utilisateurs
Route::get('/admin/staff/{id}/affiche','UserController@afficher_staff')->name("afficher_staff");

Route::get('/admin/staff/{id}/edit_staff', 'UserController@edit_staff')->name('editer_staff');

Route::post('/admin/staff', 'UserController@store')->name('ajouter_user');

Route::get('/admin/staff', 'UserController@liste_staff')->name('liste_staff');

Route::delete('/admin/staff/{id}', 'UserController@destroy');

Route::get('/register', 'UserController@liste_register');

Route::get('/acceuil', 'UserController@deconnect')->name('deconnect');

// Route vers l'authentification

Auth::routes();



