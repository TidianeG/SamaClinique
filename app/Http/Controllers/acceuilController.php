<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class acceuilController extends Controller
{
    public function acceuil(){
        return view('acceuil');
    }
}
