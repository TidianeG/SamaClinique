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
                    <div class=" tab-content border mb-2 p-2" style=" background-color:rgba(255, 255, 255, 0.5); border-left:5px solid #081f3e; height:auto;">
                        
                        <div id="home" class=" tab-pane active" ><br>
                            <h4 class="mb-2">Dossier Administratif</h4>
                            <div class="mb-2" style=" border:2px solid rgba(23, 111, 226, 0.87);background-color:white; border-radius:15px 15px;">
                                <div class=" d-flex justify-content-center" style="background-color:white;">
                                    <div class="d-flex justify-content-between" style="width:100%; ">
                                        <div class="col-4">
                                            <div class="card " style="border:none;">
                                                <div class="card-body fadein  container" >
                                                        <img class="card-img-top img-cercle" style="width:100px;height:100px;" src="{{asset('images/avatar-fem.png')}}" alt="Card image femel">                                                     
                                                </div>
                                                <div class="">
                                                    <div class=""> Numero patient : </div>
                                                    <input type="text" class="form-control" style="color:blue; border:none;" value="" disabled>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="col-4">
                                            <div class="">
                                                <div class=""> Prenom : </div>
                                                <input type="text" class="form-control" style="color:blue; border:none;" value="" disabled>
                                            </div>
                                            <div class="">
                                                <div class="">Nom : </div>
                                                <input type="text" class="form-control" style="color:blue; border:none;" value="" disabled>
                                            </div>
                                        
                                            <div class="">
                                                <div class=""> Née le : </div>
                                                <input type="date" class="form-control" style="color:blue; border:none;" value="" disabled>
                                            </div>  
                                        </div>
                                        <div class="col-4 ">
                                            <div class="">
                                                <div class="">Adresse : </div>
                                                <input class="form-control" type="text" style="color:blue; border:none;" value="" disabled>
                                            </div>
                                            <div class="">
                                                <div class="">Sexe : </div>
                                                <input type="text" class="form-control" style="color:blue; border:none;" value="" disabled>
                                            </div>
                                        
                                            <div class="">
                                                <div class="">Profession : </div>
                                                <input class="form-control" type="text" style="color:blue; border:none;" value="" disabled>
                                            </div>
                                        </div>
                                    </div>                          
                                </div>
                            </div>     
                            <h4 class="mb-2">Dossier Medical</h4>  
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