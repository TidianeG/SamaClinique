@extends('layouts.appsecretaire')
    @section('content')
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h2>Iformations personnelles</h2>
                </div>
                <div class="card-body ">
                    <div class="row">
                        <div class="card col-4" style="border:none;">
                            <div class="card-body container" >
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
                    <div class="container" style="margin-top:25px; border:2px solid #081f3e;border-radius:5px 5px;">
                        <div class="row" style="border-left:3px solid #081f3e;"><span class="col-4">Date de naissance: </span><label class="col-4" for="" style="color:#081f3e;">{{$patients->datenaisse_patient}}</label></div>
                        <br><div class="row" style="border-left:3px solid #081f3e;"><span class="col-4">Lieu de naissance: </span><label class="col-4" for="" style="color:#081f3e;">{{$patients->lieu_patient}}</label></div>
                        <br><div class="row" style="border-left:3px solid #081f3e;"><span class="col-4">Sexe du patient: </span><label class="col-4" for="" style="color:#081f3e;">{{$patients->sexe_patient}}</label></div>
                        <br><div class="row" style="border-left:3px solid #081f3e;"><span class="col-4">Adresse du patiet: </span><label class="col-4" for="" style="color:#081f3e;">{{$patients->adresse_patient}}</label></div>
                        <br><div class="row" style="border-left:3px solid #081f3e;"><span class="col-4">Numéro de telephone: </span><label class="col-4" for="" style="color:#081f3e;">{{$patients->telephone_patient}}</label></div>
                        <br><div class="row" style="border-left:3px solid #081f3e;"><span class="col-4">Profession du patient: </span><label class="col-4" for="" style="color:#081f3e;">{{$patients->profession_patient}}</label></div>
                    </div><hr>
                    <div class="row container">
                        <div class="card col-6">
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
                                        <tr>
                                            <td>2</td>
                                            <td>85sscs6553</td>
                                            <td>Dr Moussa Gaye</td>
                                            <td>Fracture du bras</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                        <div class="card col-6">
                            <div class="card-header">
                                <h3>Consultation</h3>
                            </div>
                            <div class="card-body">

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection