@extends('layouts.app')
    @section('content')
        <div style="background-color:rgba(255,255,255, 0.6);height:100%; margin-bottom:2px;">
            
            <div class="mmplayer mmplayer-stopped">
                <video preload="auto">
                    <source src="https://www.youtube.com/watch?v=KhVvn7H442s"></source>
                </video>
            </div>
            
            <div class="container m-5 p-5">
                <h2>A propos de Medilife</h2>
                <p style="text-align:justify;font-size:20px">
                    La clinique Médical Medilife est un centre moderne agréable et accueillant destine a tous patients.
                    Medilife se donne pour vocation la prévention et le curatif. Par ailleurs nous accompagnons nos patients dans toutes les  Démarches médicales en mettant à leur disposition des ambulances modernes.
                </p>
            </div>
           <div class="container d-flex justify-content-between">
                <div class="card" style="width:auto">
                    <img style="width:75px; height:75px;" class="card-img-top" src="{{asset('images/personnel2.png')}}" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Personnels</h4>
                        <p class="card-text">150</p>
                       
                    </div>
                </div>
                <div class="card" style="width:auto">
                    <img class="card-img-top" src="{{asset('images/avatar.png')}}" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Services</h4>
                        <p class="card-text">150</p>
                       
                    </div>
                </div>
                <div class="card" style="width:auto">
                    <img class="card-img-top" src="{{asset('images/avatar.png')}}" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Patients</h4>
                        <p class="card-text">150</p>
                      
                    </div>
                </div>
                <div class="card" style="width:auto">
                    <img class="card-img-top" src="{{asset('images/avatar.png')}}" alt="Card image">
                    <div class="card-body">
                        <h4 class="card-title">Specialiste</h4>
                        <p class="card-text">150</p>
                        
                    </div>
                </div>
           </div>
        </div>
    @endsection