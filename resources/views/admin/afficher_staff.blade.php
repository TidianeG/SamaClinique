@extends('layouts.appadmin')
    @section('content')
        <div class="container">
            <div class="card ">
                <div class="card-header">
                    <h2>Iformations personnelles</h2>
                </div>
                <div class="card-body ">
                    <div class="d-flex  justify-content-center">
                        <div class="card " style="border:none;">
                            <div class="card-body fadein  container" >
                                <?php
                                    if($staffs->poste_staff=="medecin" && $staffs->sexe_staff=="masculin"){
                                ?>
                                    <img class="card-img-top" style="width:150px;height:150px;" src="{{asset('images/medecinmal.jpg')}}" alt="Card image mascul">                                                     
                                <?php    
                                    }
                                    elseif($staffs->sexe_staff=="feminin" && $staffs->poste_staff=="medecin"){
                                ?>
                                        <img class="card-img-top" style="width:150px;height:150px;" src="{{asset('images/medecinfem.jpeg')}}" alt="Card image mascul">                                                     
                                <?php    
                                }
                                
                                    elseif($staffs->sexe_staff=="masculin"){
                                ?>
                                    <img class="card-img-top" style="width:150px;height:150px;" src="{{asset('images/avatar-mal.png')}}" alt="Card image mascul">                                                     
                                <?php    
                                }
                                    elseif($staffs->sexe_staff=="feminin"){
                                ?>
                                    <img class="card-img-top" style="width:150px;height:150px;" src="{{asset('images/avatar-fem.png')}}" alt="Card image femel">                                                     
                                <?php   
                                    }
                                ?>
                                <hr>
                                <h3>{{$staffs->prenom_staff}} {{$staffs->nom_staff}}</h3>
                            </div>
                        </div>
                    </div><hr>
                    <div class="container " style="margin-top:25px; ">
                        <div class="d-flex justify-content-around m-0 p-5" >
                            <div class="card" style="border-bottom:4px solid rgba(23, 111, 226, 0.87);  width:auto;">
                                <div class="card-header" style="background-color:rgba(23, 111, 226, 0.87);text-align:center; color:white; font-size:18px; font-weight:bold;">Email: </div>
                                <div class="card-body" style="color:#081f3e; text-align:center;font-size:16px;">
                                    {{$staffs->email_staff}}
                                </div>
                            </div>
                            <div class="card" style="border-bottom:4px solid rgba(23, 111, 226, 0.87); width:auto;">
                                <div class="card-header" style="background-color:rgba(23, 111, 226, 0.87);text-align:center; color:white; font-size:18px; font-weight:bold;">Poste occupe: </div>
                                <div class="card-body" style="color:#081f3e;text-align:center;font-size:16px;">
                                    {{$staffs->poste_staff}}
                                </div>
                            </div>
                            <div class="card" style="border-bottom:4px solid rgba(23, 111, 226, 0.87); width:auto;">
                                <div class="card-header" style="background-color:rgba(23, 111, 226, 0.87);text-align:center; color:white; font-size:18px; font-weight:bold;">Sexe du Medecin: </div>
                                <div class="card-body"  style="color:#081f3e;text-align:center;font-size:16px;">
                                    {{$staffs->sexe_staff}}
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-around m-0 p-5">
                            <div class="card" style="border-bottom:4px solid rgba(23, 111, 226, 0.87); width:auto;">
                                <div class="card-header" style="background-color:rgba(23, 111, 226, 0.87); color:white; font-size:18px; font-weight:bold;">Adresse du Medecin: </div>
                                <div class="card-body"  style="color:#081f3e;text-align:center;font-size:16px;">
                                    {{$staffs->adresse_staff}}
                                </div>
                            </div>
                            <div class="card" style="border-bottom:4px solid rgba(23, 111, 226, 0.87); width:auto;">
                                <div class="card-header" style="background-color:rgba(23, 111, 226, 0.87);text-align:center; color:white; font-size:18px; font-weight:bold;">Numéro de telephone: </div>
                                <div class="card-body"  style="color:#081f3e;text-align:center;font-size:16px;">
                                    {{$staffs->telephone_staff}}
                                </div>
                            </div>
                            <div class="card" style="border-bottom:4px solid rgba(23, 111, 226, 0.87); width:auto;">
                                <div class="card-header" style="background-color:rgba(23, 111, 226, 0.87);text-align:center; color:white; font-size:18px; font-weight:bold;">Specialite: </div>
                                <div class="card-body"  style="color:#081f3e;text-align:center;font-size:16px;">
                                    {{$staffs->specialite_staff}}
                                </div>
                            </div>
                            <div class="card" style="border-bottom:4px solid rgba(23, 111, 226, 0.87); width:auto;">
                                <div class="card-header" style="background-color:rgba(23, 111, 226, 0.87);text-align:center; color:white; font-size:18px; font-weight:bold;">Numero CNI: </div>
                                <div class="card-body"  style="color:#081f3e;text-align:center;font-size:16px;">
                                    {{$staffs->cnipass_staff}}
                                </div>
                            </div>
                        </div>
                    </div><hr>
                    <div class="row container">
                        <div class="card col-xl-6 col-sm-12 col-md-12">
                            <div class="card-header">
                                <h3>Rendez-vous</h3>
                            </div>
                            <div class="card-body">
                                <table class="table " id="myTable"> 
                                    <thead class="table-dark">
                                        <tr>
                                            <th>Rang</th>
                                            <th>Date Rv</th>
                                            <th>Patient</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($rendezvous as $appoint)
                                            <tr>
                                                <td>{{$appoint->id}}</td>
                                                <td>{{$appoint->daterendez_appointment}}</td>
                                                <td>{{$appoint->patient->prenom_patient}} {{$appoint->patient->nom_patient}}</td>
                                                <td>{{$appoint->description_appointment}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card col-xl-6 col-sm-12 col-md-12">
                            <div class="card-header">
                                <h3>Consultation effectuer</h3>
                            </div>
                            <div class="card-body">
                                <table class="table " id="myTable1"> 
                                    <thead class="table-dark">
                                        <tr>
                                            <th>Date</th>
                                            <th>Description</th>
                                            <th>Patient</th>
                                            <th>Type paiement</th>
                                            <th>Montant</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($consultations as $consultation)
                                            <tr>
                                                <td>{{$consultation->date_consultation}}</td> 
                                                <td>{{$consultation->description_consultation}}</td>
                                                <td>{{$consultation->patient->prenom_patient}} {{$appoint->patient->nom_patient}}</td>        
                                                <td>{{$consultation->type_payment}}</td>
                                                <td>{{$consultation->montant_payment}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                    <div class="">
                        <div class="d-flex justify-content-center">Infomation du compte</div>
                        <div class="row">
                            
                        </div>    
                    </div>
                </div>
            </div>
        </div>
    @endsection