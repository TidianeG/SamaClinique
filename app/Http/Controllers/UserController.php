<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Staff;
use App\User;
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

           $user= new User();
           $user->name= $staff->prenom_staff;
           $user->email= "$staff->nom_staff.$staff->prenom_staff@medifile.sn";
           $user->password="medifile2020";
           $user->staff_id=$staff->id;
           $user->profil="utilisateur";
           $user->save();

           return redirect('/admin/staff')->with(['success' => "Personnel Enregistré"]);

        }
        public function liste_staff(){
            $staffs = Staff::all();
            return view('admin.liste_staff', compact('staffs'));
        }
        public function destroy($id)
        {
            $staff = Staff::find($id);
            if($staff){
                $staff->delete();
                return redirect('/admin/staff')->with(['success' => "Personnel Supprimé"]);
            }
        }

        public function update(Request $request, $id)
        {
            $staff = Staff::find($id);
            if($staff){
                $staff->update([
                    'nom_staff' => $request->input('nom'),
                    'prenom_staff' => $request->input('prenom'),
                    'specialite_staff' => $request->input('specialite'),
                    'profession_staff' => $request->input('profession'),
                    'telephone_staff' => $request->input('phone'),
                    'adresse_staff' => $request->input('adresse'),
                    'cnipass_staff' => $patient->input('cni'),
                    'poste_staff' => $request->input('poste'),
                    'emailprof_staff' => $patient->input('email'),
                ]);
            }
            return redirect('/secretaire/liste')->with(['success' => "Patient Modifié"]);
        }
}
