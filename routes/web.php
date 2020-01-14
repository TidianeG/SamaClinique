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
Route::middleware(['can:admin'])->prefix('admin')->group(function(){
        Route::get('/', 'cliniqueController@admin')->name('admin');
        Route::get('/staff/{id}/affiche','UserController@afficher_staff')->name("afficher_staff");

        Route::get('/staff/{id}/edit_staff', 'UserController@edit_staff')->name('editer_staff');

        Route::post('/staff', 'UserController@store')->name('ajouter_user');

        Route::get('/staff', 'UserController@liste_staff')->name('liste_staff');

        Route::delete('/staff/{id}', 'UserController@destroy');
        Route::get('/listePatient', 'PatientController@liste_patientAdmin')->name('liste_patientAdmin');
        Route::get('/listePatient/{id}/affiche','PatientController@afficher_patientAdmin')->name("afficher_patientAdmin");
});
#Route::get('/user', 'HomeController@redirectTo');


//Route::get('/secretaire/edit', 'PatientController@editer_patient')->name('edit_patient');

//Secretaire
Route::middleware(['can:secretaire'])->prefix('secretaire')->group(function(){
        Route::get('/', 'cliniqueController@secretaire')->name('secretaire');
        Route::post('/liste', 'PatientController@store')->name('ajouter_patient');

        Route::get('/liste', 'PatientController@liste_patient')->name('liste_patient');

        Route::get('/pharmacie', 'OrderController@pharmacie')->name('pharmacie');

        Route::post('/pharmacie', 'OrderController@ajout_medoc')->name('ajout_medoc');

        Route::patch('/pharmacie/{id}/edit_medoc','OrderController@update_medoc')->name("update_medoc");

        Route::get('/pharmacie/{id}/edit_medoc', 'OrderController@edit_medicament')->name('edit_medicament');

        Route::get('/liste/{id}/edit','PatientController@edit_patient')->name("editer_patient");

        Route::get('/rv/{id}/edit', 'PatientController@edit_rv')->name('editer_rv');

        Route::patch('/rv/{id}/edit','PatientController@update_rv')->name("update_rv");

        Route::delete('/rv/{id}','PatientController@delete_rv')->name("delete_rv");

        Route::get('/profil', 'UserController@afficher_secretaire')->name('afficher_secretaire');
        
        Route::patch('/profil/{id}', 'UserController@update_password_secretaire')->name('update_password_secretaire');
        ///////////fin edit rv
        /////////////  edit consultation//////////////////////

        Route::get('/rv/{id}/edit_consult', 'PatientController@edit_consultation')->name('editer_consultation');

        Route::patch('/rv/{id}/edit_consult','PatientController@update_consultation')->name("update_consultation");

        Route::delete('/rvs/{id}','PatientController@delete_consultation')->name("delete_consultation");

        //////////// fin edit consultation/////////////////
        Route::patch('/liste/{id}/edit','PatientController@update')->name("update_patient");

        Route::get('/liste/{id}/affiche','PatientController@afficher_patient')->name("afficher_patient");

        Route::get('/rv', 'PatientController@newrv')->name('rendezvous');

        Route::post('/rv', 'PatientController@create_rv')->name('createrv');

        Route::post('/consult', 'PatientController@save_consult_payment')->name('createconsultation');

        Route::get('/new', 'PatientController@newrv')->name('newrv');

        Route::delete('/liste/{id}', 'PatientController@destroy');

});
//////////////////////  Medecinnnnn

Route::middleware(['can:medecin'])->prefix('medecin')->group(function(){
        Route::get('/', 'cliniqueController@medecin')->name('medecin');

        Route::get('/patients/{id}/dossier','PatientController@afficher_dossier')->name("afficher_dossier");

        Route::post('/patients/{id}/dossier','PatientController@create_folder')->name("create_folder");
        Route::post('/patients/{id}/dossierP','PatientController@create_analyse')->name("create_analyse");
        Route::post('/patients/{id}/dossierT','OrderController@create_traitement')->name("new_traitement");

        Route::post('/patients/dossier','PatientController@recherche_dossier')->name("recherche_dossier");

        Route::get('/patients', 'PatientController@patients')->name('patients');

        Route::get('/appointment', 'UserController@mes_rv')->name('mes_rv');

        Route::get('/new_folder', 'PatientController@new_folder')->name('new_folder');

        Route::get('/profil', 'UserController@afficher_medecin')->name('afficher_medecin');

        Route::patch('/profil/{id}', 'UserController@update_password_medecin')->name('update_password_medecin');
        /////////////// edit analyse ///////////////////////////

        Route::get('/analyse/{id}/edit','PatientController@edit_dossier')->name("editer_dossier");

        Route::patch('/analyse/{id}/edit','PatientController@update_analyse')->name("update_analyse");

        Route::delete('/patients/{id}/dossiers','PatientController@delete_analyse')->name("delete_analyse");

        Route::post('/patients/dossiers/order','OrderController@ajout_order')->name("ajout_order");
       
        //////////////// fin edit analyse//////////////////////
        /////////////////edit folderrrr////////////////////////////////

        Route::get('/folder/{id}/edit','PatientController@edit_folder')->name("editer_folder");

        Route::patch('/folder/{id}/edit','PatientController@update_folder')->name("update_folder");

        Route::delete('/patients/{id}/dossier','PatientController@delete_folder')->name("delete_folder");

});
//////////////////fin edit folder

///////////// editer rv
 


// Route sur les utilisateurs

Route::get('/medilife', 'acceuilController@medilife')->name('medilife');
Route::get('/register', 'UserController@liste_register');
Route::get('/acceuil', 'UserController@deconnect')->name('deconnect');
Route::get('/', 'acceuilController@index');

// Route vers l'authentification

Auth::routes();



