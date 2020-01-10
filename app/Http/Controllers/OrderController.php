<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function ajout_order(Request $request)
        { $data = $request->validate([
            'nom' => 'required | min:4',
            'date' => 'required'
        ]);
        $order = new Order();
        $nom = $request->input('nom');
        $date = $request->input('date');
        if($saved = \App\Order::updateOrCreate(['nom_order'=>$nom,'date_order' => $date]))
            return response()->json([
                'message'   => 'ordonnance créé',
                'data'   => ['id'=>$saved->id,'nom_order'=>$nom,'date_order' => $date],
                'errors'    => []
            ],
                200);
        else
            return response()->json(['message' => 'Erreur lors de la creation', 'status' => 401,'errors'=>$data->errors()->all()],200);
     
        }
}
