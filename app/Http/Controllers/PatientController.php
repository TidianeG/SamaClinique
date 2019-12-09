<?php

namespace App\Http\Controllers;
use App\Patient;
use Illuminate\Http\Request;

class PatientController extends Controller
{
        public function editer_patient(){
            return view('secretaire.edit');
        }
        public function liste_patient(){
            $patients = Patient::all();
            return view('secretaire.liste', compact('patients'));
        }
        public function dossier_patient(){
            return view('medecin.dossier');
        }
        public function store(Request $request)
        {
           $patient = new Patient();
           $patient->nom_patient = $request->input('nom');
           $patient->prenom_patient = $request->input('prenom');
           $patient->sexe_patient = $request->input('genre');
           $patient->datenaisse_patient = $request->input('date');
           $patient->profession_patient = $request->input('profession');
           $patient->telephone_patient = $request->input('phone');
           $patient->adresse_patient = $request->input('adresse');
           $patient->save();
           return redirect('/secretaire/liste')->with(['success' => "Patient Enregistré"]);

        }

        public function edit_patient($id){
            $patients = Patient::find($id);//on recupere le produit
            return view('secretaire.edit', compact('patients'));
        }
}
?>
