<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consultation;
use App\Folder;
use App\Antecedent;
use App\Allergy;
use App\Followed;
use PDF;
class FolderController extends Controller
{
    
    public function ajout_consultation(Request $request){
        $consultation=new Consultation();
        $num_folder=$request->input('num_folder');
        $folder=Folder::where('num_folder',$num_folder)->first();
        if(isset($folder)){
            
            $date=$request->input('date_prise')." ".$request->input('heure_prise');       
            $mondate = date('Y-m-d H:i:s', strtotime($date));
            $consultation->poids=$request->input('poid');
            $consultation->motif=$request->input('motif');
            $consultation->tension=$request->input('tension');
            $consultation->temperature=$request->input('temperature');
            $consultation->taille=$request->input('taille');
            $consultation->date_consult=$mondate;
            $consultation->imc=number_format($request->input('poid')/sqrt($request->input('taille')/100),2);
            
            $consultation->folder_id=$folder->id;
            $consultation->save();
            return redirect()->route('lister_folder',$folder->patient_id);
        }
        else{
            return redirect()->route('lister_folder',$folder->patient_id);
        }
    }
    public function ajout_antecedant(Request $request){
        $antecedent=new Antecedent();
        $num_folder=$request->input('num_folder');
        $folder=Folder::where('num_folder',$num_folder)->first();
        if(isset($folder)){
            $antecedent->category=$request->input('categorie');
            $antecedent->description=$request->input('description');
            
            $antecedent->save();
            $antecedent->folder()->attach($folder->id);
            return redirect()->route('lister_folder',$folder->patient_id);
        }
        else{
            return redirect()->route('lister_folder',$folder->patient_id);
        }
    }
    public function ajout_allergy(Request $request){
        $allergy=new Allergy();
        $num_folder=$request->input('num_folder');
        //dd($num_folder);
        $folder=Folder::where('num_folder',$num_folder)->first();
        if(isset($folder)){
            $allergy->date_debut=$request->input('date_debut');
            $allergy->date_fin=$request->input('date_fin');
            $allergy->substance=$request->input('substance');
            $allergy->severite=$request->input('severite');
            $allergy->statut=$request->input('statut');
            $allergy->type=$request->input('type');
            $allergy->manifestation=$request->input('manifestation');
            $allergy->desensibilisation=$request->input('desensibilisation');
            $allergy->resultat=$request->input('result_ana');
            $allergy->commentaire=$request->input('commentaire');
            $allergy->save();
            $allergy->folder()->attach($folder->id);
            return redirect()->route('lister_folder',$folder->patient_id);
        }
        else{
            return redirect()->route('lister_folder',$folder->patient_id);
        }
    }

    public function ajout_suivi(Request $request){
        $followed=new Followed();
        $num_folder=$request->input('num_folder');
        $folder=Folder::where('num_folder',$num_folder)->first();
        if(isset($folder)){
            $followed->date_suivi=$request->input('date_suivi');
            $followed->titre=$request->input('titre');
            $followed->folder_id=$folder->id;
            $followed->save();
            return redirect()->route('lister_folder',$folder->patient_id);
        }
        else{
            return redirect()->route('lister_folder',$folder->patient_id);
        }
    }

    public function printPDF(){
        $data = [          
                'title' => 'First PDF for Medium', 
                'heading' => "",
                'content' => 'Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry',
            ];
        
        $pdf = PDF::loadView('medecin.conver_order', $data); 
        return $pdf->download('ordonnance.pdf');
        return view('medecin.conver_order',$data);
    }

    public function afficher_consultation($id){
        $consultation=Consultation::find($id);
        return view('medecin.afficher_consultation',compact('consultation'));
    }
}
