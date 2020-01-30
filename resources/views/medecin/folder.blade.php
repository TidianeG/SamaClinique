@extends('layouts.appmedecin')
    @section('content') 
        <div class="row ml-3" style="height:100%;overflow-x:scroll;">
            <div class="col-xl-2 col-md-2 ml-0 mb-0 mt-3" style="height:100%; background-color:#081f3e;">
            <ul class="navbar-nav bg-gradient-primary sidebar sidebar-dark accordion" id="accordionSidebar">
                
                <hr class="sidebar-divider my-0">

                <!-- Nav Item - Dashboard -->
                <li class="nav-item active">
                <a class="nav-link" href="index.html">
                    
                    <span style="color:white;font-size:18px;">Dossier Medical</span></a>
                </li>

                    <!-- Divider -->
                    <hr class="sidebar-divider">
                    <!-- Nav Item - Pages Collapse Menu -->
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                            <i class="fas fa-fw fa-cog"></i>
                            <span style="color:white;font-size:18px;">Consultation</span>
                        </a>
                        <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                            
                            <a class="collapse-item" href="">liste</a><br>
                            <a class="collapse-item" href="">ajouter</a>
                            </div>
                        </div>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo2" aria-expanded="true" aria-controls="collapseTwo">
                            <i class="fas fa-fw fa-cog"></i>
                            <span style="color:white;font-size:18px;">Antecedant</span>
                        </a>
                        <div id="collapseTwo2" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                            <div class="bg-white py-2 collapse-inner rounded">
                            
                            <a class="collapse-item" href="">liste</a><br>
                            <a class="collapse-item" href="">ajouter</a>
                            </div>
                        </div>
                    </li>

                    <!-- Nav Item - Utilities Collapse Menu -->
                    <li class="nav-item">
                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                        <i class="fas fa-fw fa-wrench"></i>
                        <span style="color:white;font-size:20px;">Examens</span>
                    </a>
                    <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                        <div class="bg-white py-2 collapse-inner rounded">
                        
                        <a class="collapse-item" href="utilities-color.html">Liste</a><br>
                        <a class="collapse-item" href="utilities-border.html">Nouveau</a>
                        
                        </div>
                    </div>
                    </li>
                    <div class="text-center d-none d-md-inline">
                        <button class="rounded-circle border-2" id="sidebarToggle">reduire</button>
                    </div>
                </ul>
            </div>
            <div class="col-xl-10 col-sm-12 col-md-10 mt-3 mb-0 afficherv" id="folder" style="height:100%;background-color:white;overflow-x:scroll;">                                  
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
                    <div class=" tab-content border mb-0 p-2" style="background:rgba(0, 80, 255, 0.5); height:auto;">
                        
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
        </div>                                                  
    @endsection