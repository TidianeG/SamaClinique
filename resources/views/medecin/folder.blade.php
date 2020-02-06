@extends('layouts.appmedecin')
    @section('content') 
            <div class="" id="folder" style="">                                  
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" style="height:auto;">
                        <li class="nav-item">
                            <a class="nav-link active" href="#home">Données Généraux</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#menu1">Consultations</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#menu2">Ordonnances</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#menu3">Lettre</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#menu4">Certificats</a>
                        </li>
                    </ul>
                <!-- Tab panes -->
                    <div class=" tab-content border mb-0 p-2" style="height:auto;">
                        <div id="home" class=" tab-pane active" >
                            <div class="row section_dossier mb-2">
                                <div class="col-sm-12 col-md-8  mb-3 ">
                                    <div class="card h-100">
                                        <div class="card-header d-flex justify-content-between">
                                            <h5 class="blue">Patient</h5>
                                            <ul>
                                                <li class="nav-item dropdown no-arrow">
                                                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                        <span class="mr-2 d-none"><i class="fas fa-bars"></i></span>
                                                    
                                                    </a>
                                                    <!-- Dropdown - User Information -->
                                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                                        <a class="dropdown-item" href="{{route('afficher_secretaire')}}">
                                                            <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                            Profil
                                                        </a>
                                                        <a class="dropdown-item" href="#">
                                                            <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                                            Parametres
                                                        </a> 
                                                        <div class="dropdown-divider"></div>
                                                    
                                                    </div>
                                                </li>
                                            </ul> 
                                        </div>
                                    
                                        <div class="card-body ">
                                            <div class="row ">
                                                <div class="col-12 col-sm-12 col-md-3">
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
                                                <div class="col-12 col-sm-12 col-md-8">
                                                    <div class="d-flex justify-content-center"><h5 class="blue">Mosieur {{$patients->prenom_patient}} {{$patients->nom_patient}}, nee le {{$patients->datenaisse_patient}}</h5></div>
                                                    <div class="d-flex justify-content-center"><span>{{$patients->adresse_patient}}</span></div>
                                                    <div class="d-flex justify-content-center"><span>Telephone : {{$patients->telephone_patient}} - {{$patients->profession_patient}}</span></div>
                                                    <div class="d-flex justify-content-center"><span>Dossier n° {{$folders->id ?? ''}} créé par Dr. {{$folders->staff->prenom_staff ?? ''}}</span></div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-4  mb-3  " >
                                    <div class="card h-100" style="">
                                        <div class="card-header d-flex justify-content-between">
                                            <h5 class="blue">Correspondant</h5>
                                            <i class="fas fa-bars"></i>
                                        </div>
                                        <div class="card-body">
                                            <span class="blue">Mosieur Cheikh Gaye, nee le 03/09/1996, 23ans</span>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="row section_dossier mb-2">
                                    <div class="col-sm-12 col-md-6 mb-3">
                                        <div class="card h-100">
                                            <div class="card-header d-flex justify-content-between">
                                                <h5 class="blue">Antécédant</h5>
                                                <i class="fas fa-bars"></i>
                                            </div>
                                        
                                            <div class="card-body">
                                                <a href="#demo" class="btn btn-primary" data-toggle="collapse">Antécédant Medicaux</a>
                                                <div id="demo" class="collapse">
                                                    Lorem ipsum dolor text....
                                                    dslkfjewrofiewr
                                                    wlekfjewirof
                                                </div>   
                                            </div>
                                        </div>
                                    </div>
                                    <div class="col-sm-12 col-md-6 mb-3" >
                                        <div class="card h-100">
                                            <div class="card-header d-flex justify-content-between">
                                                <h5 class="blue">Pense-Bete</h5>
                                                <i class="fas fa-bars"></i>
                                            </div>
                                            <div class="card-body">
                                                <span class="blue">Mosieur Cheikh Gaye, nee le 03/09/1996, 23ans</span>
                                                
                                            </div>
                                        </div>
                                    </div>
                            </div>
                            <div class="row section_dossier mb-2">
                                <div class="col-sm-12 col-md-6 mb-3">
                                    <div class="card h-100">
                                        <div class="card-header d-flex justify-content-between">
                                            <h5 class="blue">Suivis</h5>
                                            <i class="fas fa-bars"></i>
                                        </div>
                                    
                                        <div class="card-body">
                                            <span class="blue">Mosieur Cheikh Gaye, nee le 03/09/1996, 23ans</span>
                                            
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6  mb-3  " >
                                    <div class="card h-100">
                                        <div class="card-header d-flex justify-content-between">
                                            <h5 class="blue">Alergies</h5>
                                            <i class="fas fa-bars"></i>
                                        </div>
                                        <div class="card-body">
                                            <span class="blue">Mosieur Cheikh Gaye, nee le 03/09/1996, 23ans</span>
                                            
                                        </div>
                                    </div>
                                </div>
                            </div> 
                            <div class="row section_dossier mb-2">
                                <div class="col-sm-12 col-md-6  mb-3">
                                    <div class="card h-100">
                                        <div class="card-header d-flex justify-content-between">
                                            <h5 class="blue">Consultations</h5>
                                            <i class="fas fa-bars"></i>
                                        </div>
                                    
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Motif</th>
                                                            <th>Traitement</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="table table-editable">
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6  mb-3" >
                                    <div class="card h-100">
                                        <div class="card-header d-flex justify-content-between">
                                            <h5 class="blue">Bilans & Examens</h5>
                                            <i class="fas fa-bars"></i>
                                        </div>
                                        <div class="card-body">
                                        <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Type</th>
                                                            <th>Description</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
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