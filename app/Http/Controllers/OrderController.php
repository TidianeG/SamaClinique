<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Order;
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
}
