<?php

namespace App\Http\Controllers;
use App\Patient;
use App\Staff;
use App\Appointment;
use Illuminate\Http\Request;

class PatientController extends Controller
{
        public function __construct()
        {
            $this->middleware('auth');
        }
    
        public function editer_patient(){
            return view('secretaire.edit');
        }
        public function liste_patient(){
            $patients = Patient::all();
            return view('secretaire.liste', compact('patients'));
        }

        public function patients(){
            $patients = Patient::all();
            return view('medecin.liste_patient', compact('patients'));
        }

        public function store(Request $request)
        {   
           $patient = new Patient();
           $patient->nom_patient = $request->input('nom');
           $patient->prenom_patient = $request->input('prenom');
           $patient->sexe_patient = $request->input('genre');
           $patient->datenaisse_patient = $request->input('date');
           $patient->lieu_patient = $request->input('lieu');           
           $patient->profession_patient = $request->input('profession');
           $patient->telephone_patient = $request->input('phone');
           $patient->adresse_patient = $request->input('adresse');
           $patient->save();
           return redirect('/secretaire/liste')->with(['success' => "Patient Enregistré"]);
        }

        public function update(Request $request, $id)
        {
            $patient = \App\Patient::find($id);
            if($patient){
                $patient->update([
                    'nom_patient' => $request->input('nom'),
                    'prenom_patient' => $request->input('prenom'),
                    'datenaisse_patient' => $request->input('date'),
                    'profession_patient' => $request->input('profession'),
                    'telephone_patient' => $request->input('phone'),
                    'adresse_patient' => $request->input('adresse')
                ]);
            }
            return redirect('/secretaire/liste')->with(['success' => "Patient Modifié"]);
        }

        public function destroy($id)
        {
            $patient = Patient::find($id);
            if($patient){
                $patient->delete();
              return redirect('/secretaire/liste')->with(['success' => "Patient Supprimé"]);
            }
            
        }



        public function edit_patient($id){
            $patients = Patient::find($id);//on recupere le produit
            return view('secretaire.edit', compact('patients'));
        }

        public function afficher_patient($id){
            $patients = Patient::find($id);//on recupere le produit
            //dd($patients);
            return view('secretaire.afficher_patient', compact('patients'));
        }

        public function afficher_dossier($id){
            $patients = Patient::find($id);//on recupere le produit
            return view('medecin.dossier', compact('patients'));
        }
        public function new_folder(){
            return view('medecin.new_folder');
        }
        public function rendezvous(){
            return view('secretaire.rendez-vous');
        }
        public function newrv(){
           
            $medecin = \App\Staff::where('poste_staff','medecin')->get();
            return view('secretaire.new-rv', compact('medecin'));
        }
        public function create_rv(Request $request){
            $rv=new Appointment();
            $rv->daterendez_appointment = $request->input('daterv');
            $rv->description_appointment = $request->input('daterv');
            $rv->staff_id = $request->input('daterv');

        }
}
?>
