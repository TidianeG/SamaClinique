@extends('layouts.appmedecin')
    @section('content') 
            <div class="" id="folder" style="">                                  
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" style="height:auto;">
                        <li class="nav-item">
                            <a class="nav-link active" href="#home">Dossier Patient</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#menu1">Ordonnance</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#menu2">Certificats</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#menu3">Lettre</a>
                        </li>
                    </ul>
                <!-- Tab panes -->
                    <div class=" tab-content border mb-0 p-2" style="height:auto;">
                        <div id="home" class="container tab-pane active" >
                            <div class="row justify-content-around mb-5 ">
                                <div class="col-5 border-doc">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="blue">Patient</h5>
                                        <i class="fas fa-bars"></i>
                                    </div>
                                    <hr>
                                    <div class="patient">
                                        <h4 class="blue">Mosieur Cheikh Gaye, nee le 03/09/1996, 23ans</h4>
                                        
                                    </div>
                                </div>
                                <div class="col-5 border-doc" >
                                    <div class="d-flex justify-content-between">
                                        <h5 class="blue">Correspondant</h5>
                                        <i class="fas fa-bars"></i>
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-around mb-5">
                                <div class="col-5 border-doc" >
                                    <div class="d-flex justify-content-between">
                                        <h5 class="blue">Antécédant</h5>
                                        <i class="fas fa-bars"></i>
                                    </div><hr>
                                    <div class="d-flex ">
                                        
                                    </div>
                                </div>
                                <div class="col-5 border-doc" >
                                    <div class="d-flex justify-content-between">
                                        <h5 class="blue">Pense-bete</h5>
                                        <i class="fas fa-bars"></i>
                                    </div>
                                    <div class="d-flex">
                                        
                                    </div>
                                </div>
                            </div>
                            <div class="row justify-content-around mb-5">
                                <div class="col-5 border-doc" >
                                    <div class="d-flex justify-content-between">
                                        <h5 class="blue">Suivis</h5>
                                        <i class="fas fa-bars"></i>
                                    </div><hr>
                                    <div class="d-flex ">
                                        
                                    </div>
                                </div>
                                <div class="col-5 border-doc">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="blue">Alergies</h5>
                                        <i class="fas fa-bars"></i>
                                    </div>
                                    <div class="d-flex">
                                        
                                    </div>
                                </div>
                            </div> 
                            <div class="row justify-content-around">
                                <div class="col-5 border-doc" >
                                    <div class="d-flex justify-content-between">
                                        <h5 class="blue">Consultations</h5>
                                        <i class="fas fa-bars"></i>
                                    </div><hr>
                                    <div class="d-flex ">
                                        
                                    </div>
                                </div>
                                <div class="col-5 border-doc">
                                    <div class="d-flex justify-content-between">
                                        <h5 class="blue">Bilans & Examens</h5>
                                        <i class="fas fa-bars"></i>
                                    </div>
                                    <div class="d-flex">
                                        
                                    </div>
                                </div>
                            </div> 
                        </div>
                        <div id="menu1" class=" tab-pane fade " style="height:100%;">
                            <h3>Ordonnance</h3>                                                                       
                        </div>
                        <div id="menu2" class=" tab-pane fade" style="height:100%;background-color:white;">
                                <h3>Certificats</h3>
                        </div>  
                        <div id="menu3" class=" tab-pane fade" style="height:100%; background:white;"><br>     
                            <h3>Lettre</h3>
                        </div>
                    </div>
            </div>                                                 
    @endsection