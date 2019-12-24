<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class acceuilController extends Controller
{
    public function index(){
        return view('acceuil');
    }
}
