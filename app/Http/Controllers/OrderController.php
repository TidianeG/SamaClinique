<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
use App\Drug;
use App\Treatment;
use App\Patient;
use Illuminate\Support\Facades\Auth;
class OrderController extends Controller
{
    public function ajout_order(Request $request)
        { 
            $data = $request->validate([
                'nom' => 'required | min:4',
                'date' => 'required'
            ]);
        $order = new Order();
        $nom = $request->input('nom');
        $date = $request->input('date');
    }
    public function pharmacie(){
        $medocs=Drug::all();
        return view('secretaire.pharmacie',compact('medocs'));
    }
    public function medoc_retour(){
        $medocs=Drug::where("date_peremtion-date('yy-m-d')", '<=', 'date_retour');
        return view('secretaire.medicament_retour',compact('medocs'));
    }
    public function ajout_medoc(Request $request){
        $data = $request->validate([
            'nom' => 'required',
            'labo' => 'required',
            'forme' => 'required',
            'dosage' => 'required',
            'expire' => 'required',
            'fabrique' => 'required'
        ]);
        $drug=new Drug();
        $drug->nom=$request->input('nom');
        $drug->labo=$request->input('labo');
        $drug->forme=$request->input('forme');
        $drug->dosage_drug=$request->input('dosage');
        $drug->date_peremtion=$request->input('expire');
        $drug->date_fabrication=$request->input('fabrique');
        $drug->save();
        return redirect('/secretaire/pharmacie')->with(['success' => "Médicament ajouté"]);
    }

    public function create_traitement(Request $request, $id){
        $data = $request->validate([
            'date' => 'required',
            'medoc' => 'required',
            'forme' => 'required',
            'dosage' => 'required',
            'quantite' => 'required',
            'posologie' => 'required',
            'dure' => 'required'
        ]);
        $navig=$id;
        $patient=Patient::find($id);
       
        if($patient){
            $traitement=new Treatment(); 
            $medoc=$request->input('medoc');
            $medicament=Drug::where('nom',$medoc)->first(); 
            $traitement->medoc=$request->input('medoc');          
            $traitement->date=$request->input('date');
            $traitement->forme=$request->input('forme');
            $traitement->dosage=$request->input('dosage');
            $traitement->quantite=$request->input('quantite');
            $traitement->posologie=$request->input('posologie');
            $traitement->duree=$request->input('dure');
            $traitement->staff_id=Auth::user()->staff_id;
            $traitement->patient_id=$id;
            $traitement->save();
            $traitement->drug()->attach($medicament);
            return redirect()->route('afficher_dossier', [$navig])->with(['success'=>"Traitement ajouté"]); 
        }
        
    }

    public function edit_medicament($id){
        $medoc = Drug::find($id);//on recupere le produit
        return view('secretaire.edit_medicament', compact('medoc'));
    }
   
        public function update_medoc(Request $request, $id)
        {
            $medoc = \App\Drug::find($id);
            if($medoc){
                $medoc->update([
                    'nom' => $request->input('nom'),
                    'labo' => $request->input('labo'),
                    'forme' => $request->input('forme'),
                    'dosage_drug' => $request->input('dosage'),
                    'date_fabrication' => $request->input('fabrique'),
                    'date_peremtion' => $request->input('expire')
                ]);
            }
            return redirect('/secretaire/pharmacie')->with(['success' => "Médicament Modifié"]);
        }
}
