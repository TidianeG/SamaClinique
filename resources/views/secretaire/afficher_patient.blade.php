@extends('layouts.appsecretaire')
    @section('content')
        <div class="container">  
                <a href="{{route('liste_patient')}}" class="btn btn-primary m-2"><i class="fas fa-long-arrow-alt-left"></i></a>
                <div class="row mb-3 border ">
                    <div class=" col-12 col-sm-12 col-md-2 ">
                        <div class="card " style="border:none;">
                            <div class="card-body" >
                                <?php
                                    if($patients->sexe_patient=="masculin"){
                                ?>
                                    <img class="img-profile rounded-circle img-patient" style="width:100px;height:100px;" src="{{asset('images/avatar-mal.png')}}" alt="Card image mascul">                                                     
                                <?php    
                                }
                                    elseif($patients->sexe_patient=="feminin"){
                                ?>
                                    <img class="img-profile rounded-circle img-patient" style="width:100px;height:100px;" src="{{asset('images/avatar-fem.png')}}" alt="Card image femel">                                                     
                                <?php   
                                    }
                                ?>   
                            </div>
                        </div>
                    </div>
                    <div class="col-12 col-sm-12 col-md-10 border " style="">
                            <div class="" >
                                <div class="d-flex justify-content-around" style="">
                                    <span style="font-weight:bold;">Nom complet :</span>   {{$patients->prenom_patient}} {{$patients->nom_patient}}
                                </div><hr>
                                <div class="d-flex justify-content-around" style="">
                                    <span style="font-weight:bold;">Date de naissance : </span>   {{$patients->datenaisse_patient}}
                                </div><hr>
                                <div class="d-flex justify-content-around" style="">
                                    <span style="font-weight:bold;">Lieu de naissance : </span>   {{$patients->lieu_patient}}
                                </div><hr>
                                <div class="d-flex justify-content-around" style="">
                                    <span style="font-weight:bold;">Sexe du patient : </span>   {{$patients->sexe_patient}}
                                </div><hr>
                                <div class="d-flex justify-content-around" style="">
                                    <span style="font-weight:bold;">Adresse du Patient : </span>   {{$patients->adresse_patient}}
                                </div><hr>
                                <div class="d-flex justify-content-around" style="">
                                    <span style="font-weight:bold;">Telephone du patient : </span>   {{$patients->telephone_patient}}
                                </div><hr>
                                <div class="d-flex justify-content-around" style="">
                                    <span style="font-weight:bold;">Profession du patient : </span>   {{$patients->profession_patient}}
                                </div><hr>
                            </div>
                    </div>
                </div>
                    <div class="row ">
                        <div class="card col-12 col-xl-12 col-sm-12 col-md-12 mb-3">
                            <div class="card-header">
                                <h3>Rendez-vous</h3>
                            </div>
                            <div class="card-body table-responsive">
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
                        <div class="card col-12 col-xl-12 col-sm-12 col-md-12">
                            <div class="card-header">
                                <h3>Consultation</h3>
                            </div>
                            <div class="card-body table-responsive">
                                <table class="table" id="myTable"> 
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
    @endsection