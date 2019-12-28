@extends('layouts.appsecretaire')
    @section('content')
        <div class="container">
            <div class="card">
                <div class="card-header">
                    <h2>Iformations personnelles</h2>
                </div>
                <div class="card-body">
                    <div class="row justify-content-between">
                        <div class="card" >
                            <div class="card-body container" >
                                <?php
                                    if($patients->sexe_patient=="masculin"){
                                ?>
                                    <img class="card-img-top" style="width:150px;height:150px;" src="{{asset('images/avatar-mal2.jpg')}}" alt="Card image mascul">                                                     
                                <?php    
                                }
                                    elseif($patients->sexe_patient=="feminin"){
                                ?>
                                    <img class="card-img-top" style="width:150px;height:150px;" src="{{asset('images/avatar-fem2.jpeg')}}" alt="Card image femel">                                                     
                                <?php   
                                    }
                                ?>
                                <hr>
                                <h3>{{$patients->prenom_patient}} {{$patients->nom_patient}}</h3>
                            </div>
                        </div>
                        <div>
                            
                        </div>
                    </div>
                </div>
            </div>
        </div>
    @endsection