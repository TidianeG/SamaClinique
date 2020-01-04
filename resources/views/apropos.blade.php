@extends('layouts.app')
    @section('content')
        <div style="background-color:rgba(255,255,255, 0.6);height:100%; margin-bottom:2px;">
            <div>

            </div>
            <div class="container m-5 p-5">
                <h2>A propos de Medilife</h2>
                <p style="text-align:center;font-size:20px">
                    La clinique Médical Medilife est un centre moderne agréable et accueillant destine a tous patients.
                    Medilife se donne pour vocation la prévention et le curatif. Par ailleurs nous accompagnons nos patients dans toutes les  Démarches médicales en mettant à leur disposition des ambulances modernes.
                </p>
            </div>
            <div class="container d-flex justify-content-between">
                <div>
                    <img src="{{asset('images/personnel.png')}}" alt="" style="height:150px;width:150px;">
                </div>
            </div>
        </div>
    @endsection