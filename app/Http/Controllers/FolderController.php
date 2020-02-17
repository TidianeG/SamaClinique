<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Consultation;
use App\Folder;
class FolderController extends Controller
{
    
    public function ajout_consultation(Request $request){
        $consultation=new Consultation();
        $num_folder=$request->input('num_folder');
        $folder=Folder::where('num_folder',$num_folder)->first();
        if(isset($folder)){
           
            $consultation->poids=$request->input('poid');
            $consultation->tension=$request->input('tension');
            $consultation->temperature=$request->input('temperature');
            $consultation->taille=$request->input('taille');
            $consultation->imc=number_format($request->input('poid')/sqrt($request->input('taille')/100),2);
            $consultation->date_consult=$request->input('date_prise');
            $consultation->folder_id=$folder->id;
            $consultation->save();
            return redirect()->back();
        }
    }
}
