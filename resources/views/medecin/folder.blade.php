@extends('layouts.appmedecin')
    @section('content') 
            <div class="h-100" id="folder" style="overflow-x:scroll;background-image:url({{asset('images/anesthesiology.jpg')}});background-size:100%;background-repeat:no-repeat;">                                  
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" style="background-color:rgb(51, 51, 51);">
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
                    <div class="container tab-content border mb-0 p-2 h-100" style="height:100%;">
                        <div id="home" class="tab-pane active" >
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
                                                            $civilite="Monsieur";
                                                    ?>
                                                        <img class="img-profile rounded-circle img-patient" style="width:100px;height:100px;" src="{{asset('images/avatar-mal.png')}}" alt="Card image mascul">                                                     
                                                    <?php    
                                                    }
                                                        elseif($patients->sexe_patient=="feminin"){
                                                            $civilite="Madame";
                                                    ?>
                                                        <img class="img-profile rounded-circle img-patient" style="width:100px;height:100px;" src="{{asset('images/avatar-fem.png')}}" alt="Card image femel">                                                     
                                                    <?php   
                                                        }
                                                    ?>   
                                                </div>
                                                <div class="col-12 col-sm-12 col-md-8">
                                                    <div class="d-flex justify-content-center"><h5 class="blue">{{$civilite}} {{$patients->prenom_patient}} {{$patients->nom_patient}}, née le {{date('d-m-Y',strtotime($patients->datenaisse_patient))}}, {{date('Y')-date('Y',strtotime($patients->datenaisse_patient))}}ans</h5></div>
                                                    <div class="d-flex justify-content-center"><span>Adresse : {{$patients->adresse_patient}}</span></div>
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
                                                    <a href="#"><i class="fas fa-bars"></i></a>
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
                                                                <th>Action</th>
                                                            </tr>
                                                        </thead>
                                                        <tbody class="table table-editable">
                                                           @foreach($folder->antecedent as $antecedent) 
                                                                <tr>
                                                                    <td>{{$antecedent->created_at}}</td>
                                                                    <td>{{$antecedent->category}}</td>
                                                                    <td>{{$antecedent->description}}</td>
                                                                    <td class="d-flex justify-content-between"><a href=""><i class="fas fa-pen"></i></a> <a href=""><i class="fas fa-backspace"></i></a></td>
                                                                </tr>
                                                            @endforeach  
                                                        </tbody>
                                                    </table>
                                                </div>  
                                                
                                            </div>
                                        </div>
                                        <!-- debut modal antecedant +---------->
                                        <div class="modal fade" id="myModal_antecedant">
                                            <div class="modal-dialog modal-md">
                                                <div class="modal-content">
                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                    <a class="navbar-brand d-none d-sm-inline-block form-inline mr-auto ml-md-3 mb-md-3 my-2 my-md-0 mw-100" href="index.html"><img src="{{asset('img/core-img/logo.png')}}" alt="Logo"></a>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>                        
                                                    <!-- Modal body -->
                                                    <div class="modal-body container">
                                                        <form action="{{route('ajout_antecedant')}}" method="post">
                                                        @csrf
                                                            <div class="">
                                                                <div class="form-group row col-12 col-sm-12 col-md-6 ">
                                                                    <label for="inputPassword" class="">Numero dossier</label>
                                                                    <div class="">
                                                                        <input type="text" name="num_folder" style="color:red;font-weight:bold;" class="form-control" value="{{$folder->num_folder}}" >
                                                                    </div>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <label for="inputPassword" class="">Categorie</label>
                                                                    <div class="mb-5">
                                                                        <select name="categorie" id="" class="form-control">
                                                                            <option value="medicaux">Medicaux</option>
                                                                            <option value="familiaux">Familiaux</option>
                                                                            <option value="personnel">Personnels</option>
                                                                        </select>
                                                                    </div>
                                                                </div>
                                                                <div class="form-group ">
                                                                    <label for="inputPassword" class=" ">Description</label>
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
                                                    <a href="" data-toggle="modal" data-target="#myModal_suivi"><i class="fas fa-plus-circle"></i></a>
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
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!-- debut modal suivi +---------->
                                    <div class="modal fade" id="myModal_suivi">
                                            <div class="modal-dialog modal-md">
                                                <div class="modal-content">
                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                    <a class="navbar-brand d-none d-sm-inline-block form-inline mr-auto ml-md-3 mb-md-3 my-2 my-md-0 mw-100" href="index.html"><img src="{{asset('img/core-img/logo.png')}}" alt="Logo"></a>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>                        
                                                    <!-- Modal body -->
                                                    <div class="modal-body container">
                                                        <form action="{{route('ajout_suivi')}}" method="post">
                                                        @csrf
                                                            <div class="">
                                                                    <div class="form-group ">
                                                                        <label for="inputPassword" class="">Numero dossier</label>
                                                                        <div class="">
                                                                            <input type="text" class="form-control" id="num" name="num_folder" style="color:red;" value="{{$folder->num_folder}}">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group ">
                                                                        <label for="inputPassword" class="">Date</label>
                                                                        <div class="">
                                                                            <input type="date" class="form-control" id="date" name="date_suivi">
                                                                        </div>
                                                                    </div>
                                                                
                                                                <div class="form-group ">
                                                                    <label for="inputPassword" class=" ">Titre</label>
                                                                    <div class="">
                                                                        <textarea name="titre" id="" cols="30" rows="10"></textarea>
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
                                        <!-- fin modal suivi +---------->
                                </div>
                                <div class="col-sm-12 col-md-6  mb-3  " >
                                    <div class="card h-100">
                                        <div class="card-header d-flex justify-content-between">
                                            <h5 class="blue">Alergies</h5>
                                            <div>
                                                    <a href="" data-toggle="modal" data-target="#myModal_alergie"><i class="fas fa-plus-circle"></i></a>
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
                                                            <th>Action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="table table-editable">
                                                        @foreach($folder->allergy as $allergy)
                                                            <tr>
                                                                <td>{{$allergy->date_debut}}</td>
                                                                <td>{{$allergy->substance}}</td>
                                                                <td>{{$allergy->type}}</td>
                                                                <td>{{$allergy->statut}}</td>
                                                                <td>{{$allergy->manifestation}}</td>
                                                                <td>{{$allergy->severite}}</td>
                                                                <td class="d-flex justify-content-between"><a href=""><i class="fas fa-pen"></i></a> <a href=""><i class="fas fa-backspace"></i></a></td>
                                                            </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <!-- debut modal alergie +---------->
                                <div class="modal fade" id="myModal_alergie">
                                            <div class="modal-dialog modal-md">
                                                <div class="modal-content">
                                                    <!-- Modal Header -->
                                                    <div class="modal-header">
                                                    <a class="navbar-brand d-none d-sm-inline-block form-inline mr-auto ml-md-3 mb-md-3 my-2 my-md-0 mw-100" href="index.html"><img src="{{asset('img/core-img/logo.png')}}" alt="Logo"></a>
                                                        <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                    </div>                        
                                                    <!-- Modal body -->
                                                    <div class="modal-body container">
                                                        <form action="{{route('ajout_allergy')}}" method="post">
                                                        @csrf
                                                                <div class="form-group row col-12 col-sm-12 col-md-6">
                                                                    <label for="inputPassword" class="">Numero dossier</label>
                                                                    <div class="">
                                                                        <input type="text" class="form-control" id="num_folder" style="color:red;font-weight:bold;" name="num_folder" value="{{$folder->num_folder}}" >
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                                                        <label for="inputPassword" class="">Date debut</label>
                                                                        <div class="">
                                                                            <input type="date" class="form-control" id="date_debut" name="date_debut">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                                                        <label for="inputPassword" class="">Date fin</label>
                                                                        <div class="">
                                                                            <input type="date" class="form-control" id="date_fin" name="date_fin">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="form-group col-12 col-sm-12 col-md-7">
                                                                        <label for="inputPassword" class="">Substance</label>
                                                                        <div class="">
                                                                            <input type="text" class="form-control" id="substance" name="substance">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-12 col-sm-12 col-md-5">
                                                                        <label for="inputPassword" class="">Statut</label>
                                                                        <div class="">
                                                                            <input type="text" class="form-control" id="statut" name="statut">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="form-group col-12 col-sm-12 col-md-7">
                                                                        <label for="inputPassword" class="">Type</label>
                                                                        <div class="">
                                                                            <input type="text" class="form-control" id="type" name="type">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group col-12 col-sm-12 col-md-5">
                                                                        <label for="inputPassword" class="">Sévérité</label>
                                                                        <div class="">
                                                                            <input type="text" class="form-control" id="severite" name="severite">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                <div class="row">
                                                                    <div class="form-group ol-12 col-sm-12 col-md-6">
                                                                        <label for="inputPassword" class="">Manifestation</label>
                                                                        <div class="">
                                                                            <input type="text" class="form-control" id="manifestation" name="manifestation">
                                                                        </div>
                                                                    </div>
                                                                    <div class="form-group ol-12 col-sm-12 col-md-6">
                                                                        <label for="inputPassword" class="">Desensibilisation</label>
                                                                        <div class="">
                                                                            <input type="text" class="form-control" id="desensibilisation" name="desensibilisation">
                                                                        </div>
                                                                    </div>
                                                                </div>
                                                                    <div class="form-group ">
                                                                        <label for="inputPassword" class="">Resultat analyse</label>
                                                                        <div class="">
                                                                            <input type="text" class="form-control" id="result_ana" name="result_ana">
                                                                        </div>
                                                                    </div>
                                                                <div class="form-group ">
                                                                    <label for="inputPassword" class=" ">Commentaire</label>
                                                                    <div class="">
                                                                        <textarea name="commentaire" id="" cols="30" rows="10"></textarea>
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
                                        <!-- fin modal suivi +---------->
                            </div> 
                            <div class="row section_dossier mb-2">
                                <div class="col-sm-12 col-md-6  mb-3">
                                    <div class="card h-100">
                                        <div class="card-header d-flex justify-content-between">
                                            <h5 class="blue">Consultations</h5>
                                            <nav class="navbar navbar-expand">
                                                <ul class="navbar-nav mr-auto">    
                                                    <li class="nav-item dropdown no-arrow">
                                                        <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fas fa-bars"></i>
                                                        </a>
                                                        <!-- Dropdown - User Information -->
                                                        
                                                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#myModal_consultation">
                                                                <i class="fas fa-plus-circle fa-sm fa-fw mr-2 "></i>
                                                                consultation
                                                            </a>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                                                traitement
                                                            </a> 
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="{{route('customer.printpdf')}}" >
                                                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                                afficher
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul>    
                                            </nav>
                                        </div>
                                    
                                        <div class="card-body">
                                            <div class="table-responsive">
                                                <table class="table table-bordered" width="100%" cellspacing="0">
                                                    <thead>
                                                        <tr>
                                                            <th>Date consultation</th>
                                                            <th>Motif consultation</th>
                                                            <th>Traitement</th>
                                                            <th>action</th>
                                                        </tr>
                                                    </thead>
                                                    <tbody class="tqble-borderless">
                                                        @foreach($consultations as $consultation)
                                                        <tr style="">
                                                            <td>{{date('d-m-Y',strtotime($consultation->date_consult)) ?? ''}} à {{date('H:i:s',strtotime($consultation->date_consult)) ?? ''}}</td>
                                                            <td>{{$consultation->motif ?? ''}}</td>
                                                            <td></td>
                                                            <td class="d-flex justify-content-between"><a href=""><i class="fas fa-pen"></i></a> <a href=""><i class="fas fa-backspace"></i></a></td>
                                                            
                                                        </tr>
                                                        @endforeach
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <!------------------------------------->
                                    <div class="modal fade" id="myModal_consultation">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                <a class="navbar-brand d-none d-sm-inline-block form-inline mr-auto ml-md-3 mb-md-3 my-2 my-md-0 mw-100" href="index.html"><img src="{{asset('img/core-img/logo.png')}}" alt="Logo"></a>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>                        
                                                <!-- Modal body -->
                                                <div class="modal-body container">
                                                    <form action="{{route('ajout_consultation')}}" method="post">
                                                        @csrf
                                                            <div class="form-group ">
                                                                <label for="inputEmail" class=" ">Numero dossier<span style="background-colol:red;">*</span></span></label>
                                                                <div class="row col-md-6">
                                                                    <input type="text" class="form-control" id="num_folder" name="num_folder"value="{{$folder->num_folder}}"  style="color:red;font-weight:bold;" >
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-12 col-sm-12 col-md-8">
                                                                    <label for="inputEmail" class=" ">Date prise<span style="background-colol:red;">*</span></span></label>
                                                                    <div class="">
                                                                        <input type="date" class="form-control" id="date" name="date_prise" >
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-12 col-sm-12 col-md-4">
                                                                    <label for="inputEmail" class=" ">Heure prise<span style="background-colol:red;">*</span></span></label>
                                                                    <div class="">
                                                                        <input type="time" class="form-control" id="heure_prise" name="heure_prise" >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-12 col-sm-12 col-md-7">
                                                                    <label for="inputPassword" class="">Poids</label>
                                                                    <div class="">
                                                                        <input type="double" class="form-control" id="nom" name="poid" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-12 col-sm-12 col-md-5">
                                                                    <label for="inputPassword" class="">Taille</label>
                                                                    <div class="">
                                                                        <input type="number" class="form-control" id="taille" name="taille" placeholder="taille en cm">
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="row">
                                                                <div class="form-group col-12 col-sm-12 col-md-5">
                                                                    <label for="inputPassword" class="">Tension</label>
                                                                    <div class="">
                                                                        <input type="text" class="form-control" id="tension" name="tension" placeholder="">
                                                                    </div>
                                                                </div>
                                                                <div class="form-group col-12 col-sm-12 col-md-7">
                                                                    <label for="inputPassword" class=" ">Temperature</label>
                                                                    <div class="">
                                                                        <input type="number" class="form-control" id="litemperatureeu" name="temperature" >
                                                                    </div>
                                                                </div>
                                                            </div>
                                                            <div class="form-group">
                                                                <label for="inputPassword" class="">Motif</label>
                                                                <div class="">
                                                                    <textarea name="motif" class="form-control" id="" cols="30" rows="8"></textarea>
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
                                </div>
                                <!-------------------------------->
                                <div class="col-sm-12 col-md-6  mb-3" >
                                    <div class="card h-100">
                                        <div class="card-header d-flex justify-content-between">
                                            <h5 class="blue">Bilans & Examens</h5>
                                            <div>
                                            <nav class="navbar navbar-expand">
                                                <ul class="navbar-nav mr-auto">    
                                                    <li class="nav-item dropdown no-arrow">
                                                        <a class="nav-link dropdown-toggle" href="#" id="userDropdownA" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                            <i class="fas fa-bars fa-md fa-fw mr-2"></i>
                                                        </a>
                                                        <!-- Dropdown - User Information -->
                                                        
                                                        <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdownA">
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#myModal_consultation">
                                                                <i class="fas fa-plus-circle fa-sm fa-fw mr-2 "></i>
                                                                consultation
                                                            </a>
                                                            <a class="dropdown-item" href="#">
                                                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                                                traitement
                                                            </a> 
                                                            <div class="dropdown-divider"></div>
                                                            <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                                                <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                                afficher
                                                            </a>
                                                        </div>
                                                    </li>
                                                </ul>    
                                            </nav>
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
                                                       
                                                    </tbody>
                                                </table>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="modal fade" id="myModal_exam">
                                        <div class="modal-dialog modal-md">
                                            <div class="modal-content">
                                                <!-- Modal Header -->
                                                <div class="modal-header">
                                                <a class="navbar-brand d-none d-sm-inline-block form-inline mr-auto ml-md-3 mb-md-3 my-2 my-md-0 mw-100" href="index.html"><img src="{{asset('img/core-img/logo.png')}}" alt="Logo"></a>
                                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                </div>                        
                                                <!-- Modal body -->
                                                <div class="modal-body container">
                                                    <form action="" method="post">
                                                        @csrf
                                                            <div class="form-group">
                                                                <label for="inputEmail" class=" ">Date<span style="background-colol:red;">*</span></span></label>
                                                                <div class="">
                                                                    <input type="date" class="form-control" id="date" name="date" >
                                                                </div>
                                                            </div>
                                                            <div class="form-group ">
                                                                <label for="inputPassword" class="">Type</label>
                                                                <div class="">
                                                                    <input type="number" class="form-control" id="nom" name="type" placeholder="">
                                                                </div>
                                                            </div>
                                                            <div class="form-group ">
                                                                <label for="inputPassword" class="">Categorie</label>
                                                                <div class="">
                                                                    <input type="number" class="form-control" id="categorie" name="categorie" placeholder="">
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
                                </div>
                                
                            </div> 
                        </div>
                        <div id="menu1" class="tab-pane fade" style="height:100%;">
                            <h3>Ordonnance</h3>                                                                       
                        </div>
                        <div id="menu2" class="tab-pane fade" style="height:100%;">
                                <h3>Certificats</h3>
                        </div>  
                        <div id="menu3" class="tab-pane fade" style="height:100%;">    
                            <h3>Lettre</h3>
                        </div>
                        <div id="menu4" class="tab-pane fade" style="height:100%;">    
                            <h3>Lettre</h3>
                        </div>
                    </div>
            </div> 
                                               
    @endsection