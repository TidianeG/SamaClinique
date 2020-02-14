<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class FolderController extends Controller
{
    public function ajout_consultation(Request $request){
        $consultation=new Consultation();
        $folder=Folder::where('num_folder',$num_folder)->get();
        if(isset($folder)){
            $consultation->date=$request->input('date_prise');
            $consultation->poid=$request->input('poid');
            $consultation->tension=$request->input('tension');
            $consultation->temperature=$request->input('temperature');
            $consultation->date=$request->input('taille');
            $consultation->imc=;
            $consultation->date=$request->input('date_prise');
        }
    }
}
