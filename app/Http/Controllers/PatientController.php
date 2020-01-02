<?php

namespace App\Http\Controllers;
use App\Patient;
use App\Staff;
use App\Appointment;
use App\Consultation;
use App\Folder;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

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
            //on recupere le produit
            $consultations= Consultation::where('patient_id',$id)->get();
            $rendezvous= Appointment::where('patient_id',$id)->get();
            $patients = Patient::find($id);
            //dd($rendezvous);
            return view('secretaire.afficher_patient', compact('patients','rendezvous','consultations'));
        }

        public function afficher_dossier($id){
            $patients = Patient::find($id);//on recupere le produit
            return view('medecin.dossier', compact('patients'));
        }
        public function folder_patient(Request $request){
            $id=$request->input('numfolder');
            $folder = Folder::find($id);//on recupere le produit
            return view('medecin.dossier', compact('folder'));
        }
        public function new_folder(){
            return view('medecin.new_folder');
        }
      
        public function newrv(){           
            $medecin = \App\Staff::where('poste_staff','medecin')->get();
            $rv= Appointment::all();
            $consults= Consultation::all();
            return view('secretaire.rendez-vous', compact('medecin','rv','consults'));
        }
        public function create_rv(Request $request){
            $rv=new Appointment();
            $id=$request->input('numero');
            $patient=Patient::find($id);
            $date=$request->input('daterv')." ".$request->input('heure');
            $mondate = date('Y-m-d H:i:s', strtotime($date));
            if($patient){
                $rv->daterendez_appointment = $mondate;
                $rv->description_appointment = $request->input('descrv');
                $rv->staff_id = $request->input('medecin');
                $rv->patient_id= $id;  
                $rv->save();
                return redirect('/secretaire/rv')->with(['success' => "Rendez-vous creer"]); 
            }
           else{
            return redirect('/secretaire/rv')->with(['danger' => "Le patient ajouter n'existe pas"]); 
           }
        }
        
        public function save_consult_payment(Request $request){
            $consult= new Consultation();
           
            $datec=$request->input('datec')." ".$request->input('heurec');
            $mondatec = date('Y-m-d H:i:s', strtotime($datec));
            $id=$request->input('numerop');
            $patient=Patient::find($id);
            if($patient){
                $consult->date_consultation= $mondatec;
                $consult->description_consultation= $request->input('descc');
                $consult->patient_id= $id;
                $consult->staff_id= $request->input('medecinc');
                $consult->type_payment= $request->input('typep');
                $consult->montant_payment= $request->input('montantp');
                $consult->save();
                return redirect('/secretaire/rv')->with(['success' => "Consultation creer avec succes"]); 
            }
            else{
                return redirect('/secretaire/rv')->with(['danger' => "Le patient ajouter n'existe pas"]); 
               }
        }

        public function create_folder(Request $request){
           $id=$request->input('numpatient');
           $patient=Patient::find($id);
           $folder =new Folder();
           if($patient){
                $folder->tension_folder=$request->input('tension');
                $folder->taille_folder=$request->input('taille');
                $folder->temperature_folder=$request->input('temperature');
                $folder->poids_folder=$request->input('poid');
                $folder->antecedant_folder=$request->input('antecedant');
                $folder->typeentec_folder=$request->input('typeantecedant');
                $folder->groupesang_folder=$request->input('groupesanguin');
           }

        }

}
?>