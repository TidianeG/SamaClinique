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
                        <div id="home" class=" tab-pane active" >
                            <div class="row ">
                                <div class="col-sm-12 col-md-6  mb-3 mb-md-0">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="blue">Patient</h5>
                                            <i class="fas fa-bars"></i>
                                        </div>
                                    
                                        <div class="card-body">
                                            <span class="blue">Mosieur Cheikh Gaye, nee le 03/09/1996, 23ans</span>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6  mb-3 mb-md-0" >
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="blue">Correspondant</h5>
                                            <i class="fas fa-bars"></i>
                                        </div>
                                        <div class="card-body">
                                            <span class="blue">Mosieur Cheikh Gaye, nee le 03/09/1996, 23ans</span>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row ">
                            <div class="col-sm-12 col-md-6  mb-3 mb-md-0">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="blue">Antécédant</h5>
                                            <i class="fas fa-bars"></i>
                                        </div>
                                    
                                        <div class="card-body">
                                            <span class="blue">Mosieur Cheikh Gaye, nee le 03/09/1996, 23ans</span>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6  mb-3 mb-md-0" >
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="blue">Pense-Bete</h5>
                                            <i class="fas fa-bars"></i>
                                        </div>
                                        <div class="card-body">
                                            <span class="blue">Mosieur Cheikh Gaye, nee le 03/09/1996, 23ans</span>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                            <div class="col-sm-12 col-md-6  mb-3 mb-md-0">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="blue">Suivis</h5>
                                            <i class="fas fa-bars"></i>
                                        </div>
                                    
                                        <div class="card-body">
                                            <span class="blue">Mosieur Cheikh Gaye, nee le 03/09/1996, 23ans</span>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6  mb-3 mb-md-0" >
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="blue">Alergies</h5>
                                            <i class="fas fa-bars"></i>
                                        </div>
                                        <div class="card-body">
                                            <span class="blue">Mosieur Cheikh Gaye, nee le 03/09/1996, 23ans</span>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="row">
                            <div class="col-sm-12 col-md-6  mb-3 mb-md-0">
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="blue">Consultations</h5>
                                            <i class="fas fa-bars"></i>
                                        </div>
                                    
                                        <div class="card-body">
                                            <span class="blue">Mosieur Cheikh Gaye, nee le 03/09/1996, 23ans</span>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6  mb-3 mb-md-0" >
                                    <div class="card">
                                        <div class="card-header">
                                            <h5 class="blue">Bilans & Examens</h5>
                                            <i class="fas fa-bars"></i>
                                        </div>
                                        <div class="card-body">
                                            <span class="blue">Mosieur Cheikh Gaye, nee le 03/09/1996, 23ans</span>
                                            
                                        </div>
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