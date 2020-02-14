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
                                                    <div class="d-flex justify-content-center"><h5 class="blue">Mosieur {{$patients->prenom_patient}} {{$patients->nom_patient}}, nee le {{date('d-m-Y',strtotime($patients->datenaisse_patient))}}</h5></div>
                                                    <div class="d-flex justify-content-center"><span>{{$patients->adresse_patient}}</span></div>
                                                    <div class="d-flex justify-content-center"><span>Telephone : {{$patients->telephone_patient}} - {{$patients->profession_patient}}</span></div>
                                                    <div class="d-flex justify-content-center"><span> Dossier n° <span style="color:red;font-wight:bold;">{{$folder->num_folder ?? ''}}</span> créé par Dr. {{$folder->staff->prenom_staff ?? ''}} {{$folder->staff->nom_staff ?? ''}}</span></div>
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
                                                <div>
                                                    <a href="" data-toggle="modal" data-target="#myModal_antecedant"><i class="fas fa-plus-circle"></i></a>
                                                    <a href=""><i class="fas fa-bars"></i></a>
                                                </div>
                                            </div>
                                        
                                            <div class="card-body">
                                                <div class="table-responsive">
                                                    <table class="table table-bordered">
                                                        <thead>
                                                            <tr>
                                                                <th>Date</th>
                                                                <th>Catégorie</th>
                                                                <th>Description</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="table table-editable">
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
                                        <!-- debut modal antecedant +---------->
                                        <div class="modal fade" id="myModal_antecedant">
                                            <div class="modal-dialog modal-lg">
                                                <div class="modal-content">
                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                    <a class="navbar-brand d-none d-sm-inline-block form-inline mr-auto ml-md-3 mb-md-3 my-2 my-md-0 mw-100" href="index.html"><img src="{{asset('img/core-img/logo.png')}}" alt="Logo"></a>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>                        
                                                    <!-- Modal body -->
                                                    <div class="modal-body container">
                                                        <form action="{{route('ajouter_patient')}}" method="post">
                                                        @csrf
                                                            <div class="">
                                                                    <div class="form-group ">
                                                                        <label for="inputPassword" class="">Date</label>
                                                                        <div class="">
                                                                            <input type="date" class="form-control" id="dte" name="date">
                                                                        </div>
                                                                    </div>
                                                                
                                                                <div class="form-group ">
                                                                    <label for="inputPassword" class="">Categorie</label>
                                                                    <div class="">
                                                                        <select name="categorie" id="">
                                                                            <option value="">Fammiliaux</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <label for="inputPassword" class="col-sm-2 ">Description</label>
                                                                    <div class="">
                                                                        <textarea name="description" id="" cols="30" rows="10"></textarea>
                                                                    </div>
                                                                </div>
                                                            
                                                            </div>
                                                            <div class="">         
                                                                <button type="submit" class="btn btn-success">Enregistrer</button>
                                                                <button type="reset" class="btn btn-danger" data-dismiss="modal">Close</button>
                                                            </div>
                                                        </form>
                                                    </div>      
                                                    <!-- Modal footer -->                
                                                </div>
                                            </div>
                                        </div>
                                        <!-- fin modal antecedant +---------->
                                    </div>
                                    <div class="col-sm-12 col-md-6 mb-3" >
                                        <div class="card h-100">
                                            <div class="card-header d-flex justify-content-between">
                                                <h5 class="blue">Pense-Bete</h5>
                                                <div>
                                                    <a href=""><i class="fas fa-plus-circle"></i></a>
                                                    <a href=""><i class="fas fa-bars"></i></a>
                                                </div>
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
                                            <div>
                                                    <a href=""><i class="fas fa-plus-circle"></i></a>
                                                    <a href=""><i class="fas fa-bars"></i></a>
                                            </div>
                                        </div>
                                    
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>
                                                            <th>Date</th>
                                                            <th>Titre</th>
                                                            
                                                        </tr>
                                                    </thead>
                                                    <tbody class="table table-editable">
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            
                                                        </tr>
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-sm-12 col-md-6  mb-3  " >
                                    <div class="card h-100">
                                        <div class="card-header d-flex justify-content-between">
                                            <h5 class="blue">Alergies</h5>
                                            <div>
                                                    <a href=""><i class="fas fa-plus-circle"></i></a>
                                                    <a href=""><i class="fas fa-bars"></i></a>
                                            </div>
                                        </div>
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered">
                                                    <thead>
                                                        <tr>

                                                            <th>Date_debut</th>
                                                            <th>Substance</th>
                                                            <th>Type</th>
                                                            <th>Statut</th>
                                                            <th>Manifestation</th>
                                                            <th>Sévérité</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="table table-editable">
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
                                                        </tr>
                                                        <tr>
                                                            <td></td>
                                                            <td></td>
                                                            <td></td>
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
                            <div class="row section_dossier mb-2">
                                <div class="col-sm-12 col-md-6  mb-3">
                                    <div class="card h-100">
                                        <div class="card-header d-flex justify-content-between">
                                            <h5 class="blue">Consultations</h5>
                                            <div>
                                                    <a href=""><i class="fas fa-plus-circle"></i></a>
                                                    <a href=""><i class="fas fa-bars"></i></a>
                                            </div>
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
                                            <div>
                                                    <a href=""><i class="fas fa-plus-circle"></i></a>
                                                    <a href=""><i class="fas fa-bars"></i></a>
                                            </div>
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