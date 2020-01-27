<?php

namespace App\Http\Controllers;
use App\Patient;
use App\Staff;
use App\Appointment;
use App\Consultation;
use App\Analysis;
use App\Folder;
use App\Treatment;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;

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

        public function liste_patientAdmin(){
            $patients = Patient::all();
            return view('admin.listePatient', compact('patients'));
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

        public function afficher_patientAdmin($id){
            //on recupere le produit
            $consultations= Consultation::where('patient_id',$id)->get();
            $rendezvous= Appointment::where('patient_id',$id)->get();
            $patients = Patient::find($id);
            //dd($rendezvous);
            return view('admin.afficherPatient', compact('patients','rendezvous','consultations'));
        }

        public function afficher_dossier(){
            //$folders = Folder::where('patient_id',$id)->first();
            //$patients= Patient::find($id);
            //$analyse= Analysis::where('patient_id',$id)->get();
            //$traitement= Treatment::where('patient_id',$id)->get();
            
            return view('medecin.folder');
        }
        public function recherche_dossier(Request $request){
            $id=$request->input('numfolder');
            $folders = Folder::find($id);
            if($folders){
                $patients=Patient::where('id',$folders->patient_id)->first();
                $analyse=Analysis::where('patient_id',$folders->patient_id)->get();
                //on recupere le produit
                //dd($folders,$patients,$analyse);
                return view('medecin.dossier', compact('folders','patients','analyse'));
            }
            else{
                return redirect()->route('patients')->with(['danger' => "Le dossier demandé n'existe pas"]);
            }
            
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

        public function create_folder(Request $request,$id){
            $user=Auth::user();
           $patient=Patient::find($id);
           $folder =new Folder();
           if($patient && $user->profil=="medecin"){
                $folder->tension_folder=$request->input('tension');
                $folder->taille_folder=$request->input('taille');
                $folder->temperature_folder=$request->input('temperature');
                $folder->poids_folder=$request->input('poid');
                $folder->antecedant_folder=$request->input('antecedant');
                $folder->typeentec_folder=$request->input('type');
                $folder->groupesang_folder=$request->input('groupe');
                $folder->patient_id=$id;
                $folder->staff_id=$user->staff_id;
                $folder->save();
                return redirect()->route('afficher_dossier', [$id])->with(['success' => "Dossier creer avec succes"]);             
           }
           else{
            return redirect()->route('afficher_dossier', [$id])->with(['success' => "Vous ne pouvez pas creer de dossier"]);
           }
        }

        public function create_analyse(Request $request,$id){
            $patient=Patient::find($id);
            $analyse =new Analysis();
            $user=Auth::user();

            //dd($request->input('descriptionresultat'));
            if($patient && $user->profil=="medecin"){
                $analyse->date_analysis=$request->input('dateanalyse');
                $analyse->designation_analysis=$request->input('designation');
                $analyse->nom_analysis=$request->input('nomanalyse');
                $analyse->dateresult_analysis=$request->input('dateresultat');
                $analyse->descriptresult_analysis=$request->input('descriptionresultat');
                $analyse->staff_id=$user->staff_id;
                $analyse->patient_id=$id;
                $analyse->save();
                return redirect()->route('afficher_dossier', [$id])->with(['success' => "Analyse creer avec succes"]);              
           }
           else{
            return redirect()->route('afficher_dossier', [$id])->with(['success' => "Vous ne pouvez pas creer une nouvelle analyse"]);
           }
        }

        public function edit_dossier($id){
            $analyse = Analysis::find($id);//on recupere le produit
            return view('medecin.edit_dossier', compact('analyse'));
        }
//////////////////// edit analyse///////////////////////
        public function update_analyse(Request $request, $id)
        {
            $analyse = \App\Analysis::find($id);
            if($analyse){
                $analyse->update([
                    'nom_analysis' => $request->input('nomanalyse'),
                    'date_analysis' => $request->input('dateanalyse'),
                    'designation_analysis' => $request->input('designation'),
                    'dateresult_analysis' => $request->input('dateresultat'),
                    'descriptresult_analysis' => $request->input('description')
                ]);
            }
            return redirect()->route('afficher_dossier', [$analyse->patient_id])->with(['success' => "Analyse modifiee avec succes"]);              
        }
        public function delete_analyse($id)
        {
            $analyse = Analysis::find($id);
            $id_pat=$analyse->patient_id;
            if($analyse){
                $analyse->delete();
                return redirect()->route('afficher_dossier', [$id_pat])->with(['success'=>"Analyse supprime"]); 
            }
            
        }

        //////////////////////  fin edit analyse //////////////
///////////////////////////// edit dossier
        public function edit_folder($id){
            $folders = Folder::find($id);//on recupere le produit
            return view('medecin.edit_folder', compact('folders'));
        }

        public function update_folder(Request $request, $id)
        {
            $folder = \App\Folder::find($id);
            if($folder){
                $folder->update([
                    'tension_folder' => $request->input('tension'),
                    'taille_folder' => $request->input('taille'),
                    'temperature_folder' => $request->input('temperature'),
                    
                    'poids_folder' => $request->input('poid'),
                    'antecedant_folder' => $request->input('antecedant'),
                    'typeentec_folder' => $request->input('type')
                    
                ]);
            }
            return redirect()->route('afficher_dossier', [$folder->patient_id])->with(['success' => "Analyse modifiee avec succes"]);              
        }

        ///////////////delete dossier
        public function delete_folder($id)
        {
            $folder = Folder::find($id);
            $id_pat=$folder->patient_id;
            if($folder){
                $folder->delete();
                return redirect()->route('afficher_dossier', [$id_pat])->with(['success'=>"Dossier supprime"]); 
            }
            
        }

        /////////////////// fin edit dossier

        ///////////////partie traitement//////////////////
        public function edit_traitement($id){
            $traitement = Treatment::find($id);//on recupere le produit
            return view('medecin.edit_traitement', compact('traitement'));
        }

        public function update_traitement(Request $request, $id)
        {
            $traitement = \App\Treatment::find($id);
            if($traitement){
                $traitement->update([
                    'date' => $request->input('date'),
                    'dosage' => $request->input('dosage'),
                    'forme' => $request->input('forme'),
                    
                    'quantite' => $request->input('quantite'),
                    'posologie' => $request->input('posologie'),
                    'duree' => $request->input('dure')
                    
                ]);
            }
            return redirect()->route('afficher_dossier', [$traitement->patient_id])->with(['success' => "Analyse modifiee avec succes"]);              
        }

        public function delete_traitement($id)
        {
            $traitement = Treatment::find($id);
            $id_pat=$traitement->patient_id;
            if($traitement){
                $traitement->delete();
                return redirect()->route('afficher_dossier', [$id_pat])->with(['success'=>"Traitement supprime"]); 
            }
            
        }
        ////////////////fin traitement/////////////////////
        ///////////////// edit rv

        public function edit_rv($id){
            $rv = Appointment::find($id);//on recupere le produit
            $medecin=Staff::where('poste_staff','medecin')->get();
            return view('secretaire.edit_rv', compact('rv','medecin'));
        }

        public function update_rv(Request $request, $id)
        {
            $rv = \App\Appointment::find($id);
            $patient=Patient::find($request->input('numero'));
            if($rv && $patient){
                
                $mondate = date('Y-m-d H:i:s', strtotime($request->input('daterv')));
                //dd($mondate);
                $rv->update([
                    'daterendez_appointment' => $mondate,
                    'description_appointment' => $request->input('descrv'),
                    'staff_id' => $request->input('medecin'),
                    'patient_id' => $request->input('numero')
                    
                ]);
            }
            return redirect()->route('rendezvous')->with(['success' => "Rendez-vous modifiee avec succes"]);              
        }

        public function delete_rv($id)
        {
            $appoint = Appointment::find($id);
            $id_pat=$appoint->patient_id;
            if($appoint){
                $appoint->delete();
                return redirect()->route('rendezvous', [$id_pat])->with(['success'=>"Rendez-vous supprime"]); 
            }
            
        }
        ///////fin edit rv

        //////////  edit consultation
        public function edit_consultation($id){
            $consult = Consultation::find($id);//on recupere le produit
            $medecin=Staff::where('poste_staff','medecin')->get();
            return view('secretaire.edit_consultation', compact('consult','medecin'));
        }

        public function update_consultation(Request $request, $id)
        {
            $consult = \App\Consultation::find($id);
            $patient=Patient::find($request->input('numero'));
            if($consult && $patient){
                
                $mondate = date('Y-m-d H:i:s', strtotime($request->input('datec')));
                //dd($mondate);
                $consult->update([
                    'date_consultation' => $mondate,
                    'description_consultation' => $request->input('description'),
                    'type_payment' => $request->input('typepayment'),
                    'montant_payment' => $request->input('montantpayment'),
                    'staff_id' => $request->input('medecin'),
                    'patient_id' => $request->input('numero')
                    
                ]);
            }
            return redirect()->route('rendezvous')->with(['success' => "Consultation modifiee avec succes"]);              
        }

        public function delete_consultation($id)
        {
            $consult = Consultation::find($id);
            $id_pat=$consult->patient_id;
            if($consul){
                $consul->delete();
                return redirect()->route('rendezvous', [$id_pat])->with(['success'=>"Consultation supprime"]); 
            }
            
        }
        //////////// fin edit concultation ////////////////
        public function create_traitement(Request $request,$id){
            
            
        }
}
?>