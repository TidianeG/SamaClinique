<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
class UserController extends Controller
{
    public function edit_staff($id){
        $staff = Staff::find($id);//on recupere le produit
        return view('admin.edit_staff', compact('staff'));
    }

    public function store(Request $request)
        {
           $staff = new Staff();
           $staff->nom_staff = $request->input('nom');
           $staff->prenom_staff = $request->input('prenom');
           $staff->sexe_staff = $request->input('genre');
           $staff->specialite_staff = $request->input('specialite');
           $staff->telephone_staff = $request->input('phone');
           $staff->adresse_staff = $request->input('adresse');
           $staff->cnipass_staff = $request->input('cni');
           $staff->poste_staff = $request->input('poste');
           $staff->emailprof_staff = $request->input('email');
           $staff->save();
           return redirect('/admin/staff')->with(['success' => "Utilisateur Enregistré"]);

        }
        public function liste_staff(){
            $staffs = Staff::all();
            return view('admin.liste_staff', compact('staffs'));
        }
}
