<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
class UserController extends Controller
{
    public function create_user(){
        return view('admin.personnel');
    }

    public function store(Request $request)
        {
           $staff = new Staff();
           $staff->nom_staff = $request->input('nom');
           $staff->prenom_staff = $request->input('prenom');
           $staff->sexe_staff = $request->input('genre');
           $staff->profil_staff = $request->input('profil');
           $staff->specialite_staff = $request->input('specialite');
           $staff->telephone_staff = $request->input('phone');
           $staff->adresse_staff = $request->input('adresse');
           $staff->cnipass_staff = $request->input('cni');
           $staff->poste_staff = $request->input('poste');
           $staff->emailprof_staff = $request->input('email');
           $staff->save();
           return redirect('/admin/personnel')->with(['success' => "Patient Enregistré"]);

        }
}
