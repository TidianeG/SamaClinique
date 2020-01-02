@extends('layouts.appsecretaire')
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
                                    if($patients->sexe_patient=="masculin"){
                                ?>
                                    <img class="card-img-top" style="width:150px;height:150px;" src="{{asset('images/avatar-mal.png')}}" alt="Card image mascul">                                                     
                                <?php    
                                }
                                    elseif($patients->sexe_patient=="feminin"){
                                ?>
                                    <img class="card-img-top" style="width:150px;height:150px;" src="{{asset('images/avatar-fem.png')}}" alt="Card image femel">                                                     
                                <?php   
                                    }
                                ?>
                                <hr>
                                <h3>{{$patients->prenom_patient}} {{$patients->nom_patient}}</h3>
                            </div>
                        </div>
                    </div><hr>
                    <div class="container " style="margin-top:25px; ">
                        <div class="d-flex justify-content-around m-0 p-5" >
                            <div class="card" style="border-bottom:4px solid rgba(23, 111, 226, 0.87);  width:auto;">
                                <div class="card-header" style="background-color:rgba(23, 111, 226, 0.87);text-align:center; color:white; font-size:18px; font-weight:bold;">Date de naissance: </div>
                                <div class="card-body" style="color:#081f3e; text-align:center;font-size:16px;">
                                    {{$patients->datenaisse_patient}}
                                </div>
                            </div>
                            <div class="card" style="border-bottom:4px solid rgba(23, 111, 226, 0.87); width:auto;">
                                <div class="card-header" style="background-color:rgba(23, 111, 226, 0.87);text-align:center; color:white; font-size:18px; font-weight:bold;">Lieu de naissance: </div>
                                <div class="card-body" style="color:#081f3e;text-align:center;font-size:16px;">
                                    {{$patients->lieu_patient}}
                                </div>
                            </div>
                            <div class="card" style="border-bottom:4px solid rgba(23, 111, 226, 0.87); width:auto;">
                                <div class="card-header" style="background-color:rgba(23, 111, 226, 0.87);text-align:center; color:white; font-size:18px; font-weight:bold;">Sexe du patient: </div>
                                <div class="card-body"  style="color:#081f3e;text-align:center;font-size:16px;">
                                    {{$patients->sexe_patient}}
                                </div>
                            </div>
                        </div>
                        <div class="d-flex justify-content-around m-0 p-5">
                            <div class="card" style="border-bottom:4px solid rgba(23, 111, 226, 0.87); width:auto;">
                                <div class="card-header" style="background-color:rgba(23, 111, 226, 0.87); color:white; font-size:18px; font-weight:bold;">Adresse du patient: </div>
                                <div class="card-body"  style="color:#081f3e;text-align:center;font-size:16px;">
                                    {{$patients->adresse_patient}}
                                </div>
                            </div>
                            <div class="card" style="border-bottom:4px solid rgba(23, 111, 226, 0.87); width:auto;">
                                <div class="card-header" style="background-color:rgba(23, 111, 226, 0.87);text-align:center; color:white; font-size:18px; font-weight:bold;">Numéro de telephone: </div>
                                <div class="card-body"  style="color:#081f3e;text-align:center;font-size:16px;">
                                    {{$patients->telephone_patient}}
                                </div>
                            </div>
                            <div class="card" style="border-bottom:4px solid rgba(23, 111, 226, 0.87); width:auto;">
                                <div class="card-header" style="background-color:rgba(23, 111, 226, 0.87);text-align:center; color:white; font-size:18px; font-weight:bold;">Profession du patient: </div>
                                <div class="card-body"  style="color:#081f3e;text-align:center;font-size:16px;">
                                    {{$patients->profession_patient}}
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
                                            <th>Medecin</th>
                                            <th>Description</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($rendezvous as $appoint)
                                            <tr>
                                                <td>{{$appoint->id}}</td>
                                                <td>{{$appoint->daterendez_appointment}}</td>
                                                <td>{{$appoint->staff->prenom_staff}} {{$appoint->staff->nom_staff}}</td>
                                                <td>{{$appoint->description_appointment}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card col-xl-6 col-sm-12 col-md-12">
                            <div class="card-header">
                                <h3>Consultation</h3>
                            </div>
                            <div class="card-body">
                                <table class="table " id="myTable1"> 
                                    <thead class="table-dark">
                                        <tr>
                                            <th>Date</th>
                                            <th>Description</th>
                                            <th>Medecin</th>
                                            <th>Type paiement</th>
                                            <th>Montant</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        @foreach($consultations as $consultation)
                                            <tr>
                                                <td>{{$consultation->date_consultation}}</td>
                                                <td>{{$consultation->description_consultation}}</td>
                                                <td>{{$consultation->staff->prenom_staff}} {{$appoint->staff->nom_staff}}</td>        
                                                <td>{{$consultation->type_payment}}</td>
                                                <td>{{$consultation->montant_payment}}</td>
                                            </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection