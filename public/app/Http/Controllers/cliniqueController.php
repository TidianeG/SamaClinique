<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class cliniqueController extends Controller
{
 
    /*
         public function redirect(){
        $user=Auth::user();
       
        if($user->staff->poste_staff=="medecin"){
            $redirectTo= view('medecin/medecin');
        }
        else if($user->staff->poste_staff=="secretaire"){
            $redirectTo= view('secretaire/secretaire');
        }
        //recuperation de la variable $redirectTo pour lesredirections
        return $redirectTo;
    }
    */
    public function medecin(){
        return view('medecin/medecin');
    }

    public function secretaire(){
        return view('secretaire/secretaire');
    }

    public function admin(){
        return view('admin/admin');
    }
}
