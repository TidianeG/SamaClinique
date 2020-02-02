<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <!-- Title  -->
    <title>Medilife - Secretaire</title>
    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">
    <!-- Style CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

  
    
</head>

<body>
    <!-- Preloader -->
    <header>
    <div class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area">
        <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="h-100 d-md-flex justify-content-between ">
                            <p>Bienvenu à <span>Medilife</span></p>
                            <p>jours ouvrable : du Lundi au Samedi - 8h à 23h Contact : <span>+221 33 899 99 99</span></p>
                             
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader" style="height:auto;">
            <div class=" h-100">
                <div class="row h-100 justify-content-between">
                    <div class="col-12 h-100">
                        <div class="main-menu h-100">
                            <nav class="navbar h-100 navbar-expand-lg row justify-content-between align-items-center">
                                <!-- Logo Area  -->
                                <a class="navbar-brand ml-25" href="index.html"><img src="{{asset('img/core-img/logo.png')}}" alt="Logo"></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#medilifeMenu" aria-controls="medilifeMenu" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                                <div class="collapse navbar-collapse" id="medilifeMenu">
                                    <!-- Menu Area -->
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link style-bar" href="{{route('secretaire')}}">
                                                <i class="fas fa-home fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>
                                                Accueuil <span class="sr-only">(current)</span>
                                            </a>
                                        </li>
                                        <div class="topbar-divider d-none d-sm-block"></div>
                                        
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle style-bar" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fab fa-accessible-icon fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>
                                                Gestion Patients
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{route('liste_patient')}}">Liste Patients</a>
                                                <a class="dropdown-item" href="" data-toggle="modal" data-target="#myModal">Nouveau Patient</a>
                                                <div class="dropdown-divider"></div>
                                            
                                            </div>
                                        </li>
                                        <div class="topbar-divider d-none d-sm-block"></div>
                                        <li class="nav-item">
                                            <a class="nav-link style-bar" href="{{route('rendezvous')}}">
                                                <i class="fas fa-calendar fa-md fa-fw mr-2 text-gray-400"></i>
                                                Gestio Rendez-Vous
                                            </a>
                                        </li>
                                        
                                        <div class="topbar-divider d-none d-sm-block"></div>
                                        <li class="nav-item">
                                            <a class="nav-link style-bar" href="{{route('pharmacie')}}">
                                                <i class="fas fa-tablets"></i>
                                                Gestion Medicaments</a>
                                        </li>
                                        <div class="topbar-divider d-none d-sm-block"></div>
                                        <li class="nav-item">
                                            <a class="nav-link" href="blog.html">
                                                <i class="fas fa-money-check"></i>
                                                Gestion Caisse
                                            </a>
                                        </li>
                                    
                                            <div class="topbar-divider d-none d-sm-block"></div>

                                            <!-- Nav Item - User Information -->
                                            <li class="nav-item">
                                                <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                    Moi
                                                </a>
                                        
                                                <!-- Dropdown - User Information -->
                                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                                    <a class="dropdown-item" href="{{route('afficher_secretaire')}}">
                                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                    Profil
                                                    </a>
                                                    <div class="dropdown-divider"></div>
                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                                    <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                                    Deconnexion
                                                    </a>
                                                </div>
                                            </li>
                                    </ul>
                                    <!-- Appointment Button -->
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document" >
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel" style="color:white;">Vous etes sùr?</h5>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true" style="color;white;">×</span>
                    </button>
                </div>
                <div class="modal-body" style="background-color:white;">
                    Selectionner Deconnecter si tu es pret à quitter la session. <br>
                    Et Cancel pour annuler.
                    </div>
                <div class="modal-footer">
                    <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                    <a class="btn btn-primary" href="{{route('deconnect')}}">Deconnecter</a>
                </div>
            </div>
        </div>
    </div>
    </header>
    

    <!-- ***** Header Area Start ***** -->
    <main class="content-div" style="">
        
            <div id="page-top" style="height:100%;">
                <div id="wrapper" style="height:100%;">

                <!-- Sidebar -->
                    <div class="" style="">
                        <ul class="navbar-nav w-100 sidebar sidebar-dark accordion nav-bord" id="accordionSidebar" >

                                <!-- Sidebar - Brand -->
                                <a class="navbar-brand align-items-center justify-content-center" href="index.html"></a>
                                <!-- Divider -->
                                <hr class="sidebar-divider my-0">

                                <!-- Nav Item - Dashboard -->
                                
                                <!-- Divider -->
                                <hr class="sidebar-divider">

                                <!-- Heading -->
                                <div class="sidebar-heading">
                                Patient et Rv
                                </div>

                                <!-- Nav Item - Pages Collapse Menu -->
                                <li class="nav-item">
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                <i class="fab fa-accessible-icon fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>
                                    <span>Patients</span>
                                </a>
                                <div id="collapseTwo" class="collapse" aria-labelledby="headingTwo" data-parent="#accordionSidebar">
                                    <div class="bg-white py-2 collapse-inner rounded">
                                    <h6 class="collapse-header">Gestion patients</h6>
                                    <a class="collapse-item" href="" data-toggle="modal" data-target="#myModal">Nouveau</a>
                                    <a class="collapse-item" href="{{route('liste_patient')}}">Liste</a>
                                    </div>
                                </div>
                                </li>

                                <!-- Nav Item - Utilities Collapse Menu -->
                                <li class="nav-item">
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseUtilities" aria-expanded="true" aria-controls="collapseUtilities">
                                <i class="fas fa-calendar fa-md fa-fw mr-2 text-gray-400"></i>
                                    <span>Rendez-Vous</span>
                                </a>
                                <div id="collapseUtilities" class="collapse" aria-labelledby="headingUtilities" data-parent="#accordionSidebar">
                                    <div class="bg-white py-2 collapse-inner rounded">
                                    <h6 class="collapse-header">Gestion rendez-vous</h6>
                                    
                                    <a class="collapse-item" href="{{route('rv_avenir')}}">RV a venir</a>
                                    <a class="collapse-item" href="{{route('rv_passe')}}">RV passee</a>
                                    
                                    </div>
                                </div>
                                </li>

                                <!-- Divider -->
                                <hr class="sidebar-divider">

                                <!-- Heading -->
                                <div class="sidebar-heading">
                                caisse et medocs
                                </div>

                                <!-- Nav Item - Pages Collapse Menu -->
                                <li class="nav-item">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                                        <i class="fas fa-money-check"></i>
                                        <span>Caisse</span>
                                    </a>
                                    <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                                        <div class="bg-white py-2 collapse-inner rounded">
                                            <h6 class="collapse-header">Gestion Caisse</h6>
                                            <a class="collapse-item" href="login.html">Recette</a>
                                            <a class="collapse-item" href="register.html">Depense</a>
                                            
                                        </div>
                                    </div>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapseMedoc" aria-expanded="true" aria-controls="collapsePages">
                                        <i class="fas fa-tablets"></i>
                                        <span>Medicaments</span>
                                    </a>
                                    <div id="collapseMedoc" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                                        <div class="bg-white py-2 collapse-inner rounded">
                                            <h6 class="collapse-header">Gestion medocs</h6>
                                            <a class="collapse-item" href="login.html">Liste des Medocs</a>
                                           
                                            <a class="collapse-item" href="register.html">Medocs a retourner</a>
                                        </div>
                                    </div>
                                </li>
                            
                            <hr class="sidebar-divider d-none d-md-block">

                            <!-- Sidebar Toggler (Sidebar) -->
                            <div class="text-center d-none d-md-inline">
                                <button class="rounded-circle border-0" id="sidebarToggle"></button>
                            </div>

                        </ul>
                    </div>
            <!-- End of Sidebar -->

            <!-- Content Wrapper -->
            
                    <div id="content-wrapper" class="d-flex flex-column h-100 w-100 m-0 p-0">
                        <!-- Main Content -->
                        <div id="content" class="h-100" style="overflow-x:scroll;">

                        <!-- Topbar -->
                            <nav class="navbar navbar-expand navbar-light bg-white topbar  static-top shadow">

                                <!-- Sidebar Toggle (Topbar) -->
                                <button id="sidebarToggleTop" class="btn btn-link d-md-none rounded-circle mr-3">
                                <i class="fa fa-bars"></i>
                                </button>

                                <!-- Topbar Search -->
                                <form class="d-none d-sm-inline-block form-inline mr-auto ml-md-3 my-2 my-md-0 mw-100 navbar-search">
                                <div class="input-group">
                                    <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                    
                                </div>
                                </form>

                                <!-- Topbar Navbar -->
                            <ul class="navbar-nav ml-auto">

                                <!-- Nav Item - Search Dropdown (Visible Only XS) -->
                                <li class="nav-item dropdown no-arrow d-sm-none">
                                    <a class="nav-link dropdown-toggle" href="#" id="searchDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-search fa-fw"></i>
                                    </a>
                                    <!-- Dropdown - Messages -->
                                    <div class="dropdown-menu dropdown-menu-right p-3 shadow animated--grow-in" aria-labelledby="searchDropdown">
                                    <form class="form-inline mr-auto w-100 navbar-search">
                                        <div class="input-group">
                                        <input type="text" class="form-control bg-light border-0 small" placeholder="Search for..." aria-label="Search" aria-describedby="basic-addon2">
                                        <div class="input-group-append">
                                            <button class="btn btn-primary" type="button">
                                            <i class="fas fa-search fa-sm"></i>
                                            </button>
                                        </div>
                                        </div>
                                    </form>
                                    </div>
                                </li>

                                <!-- Nav Item - Alerts -->
                                <li class="nav-item dropdown no-arrow mx-1">
                                    <a class="nav-link dropdown-toggle" href="#" id="alertsDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-bell fa-fw"></i>
                                    <!-- Counter - Alerts -->
                                    <span class="badge badge-danger badge-counter">3+</span>
                                    </a>
                                    <!-- Dropdown - Alerts -->
                                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="alertsDropdown">
                                    <h6 class="dropdown-header">
                                        Alerts Center
                                    </h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                        <div class="icon-circle bg-primary">
                                            <i class="fas fa-file-alt text-white"></i>
                                        </div>
                                        </div>
                                        <div>
                                        <div class="small text-gray-500">December 12, 2019</div>
                                        <span class="font-weight-bold">A new monthly report is ready to download!</span>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                        <div class="icon-circle bg-success">
                                            <i class="fas fa-donate text-white"></i>
                                        </div>
                                        </div>
                                        <div>
                                        <div class="small text-gray-500">December 7, 2019</div>
                                        $290.29 has been deposited into your account!
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="mr-3">
                                        <div class="icon-circle bg-warning">
                                            <i class="fas fa-exclamation-triangle text-white"></i>
                                        </div>
                                        </div>
                                        <div>
                                        <div class="small text-gray-500">December 2, 2019</div>
                                        Spending Alert: We've noticed unusually high spending for your account.
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Show All Alerts</a>
                                    </div>
                                </li>

                                <!-- Nav Item - Messages -->
                                <li class="nav-item dropdown no-arrow mx-1">
                                    <a class="nav-link dropdown-toggle" href="#" id="messagesDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <i class="fas fa-envelope fa-fw"></i>
                                    <!-- Counter - Messages -->
                                    <span class="badge badge-danger badge-counter">7</span>
                                    </a>
                                    <!-- Dropdown - Messages -->
                                    <div class="dropdown-list dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="messagesDropdown">
                                    <h6 class="dropdown-header">
                                        Message Center
                                    </h6>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/fn_BT9fwg_E/60x60" alt="">
                                        <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div class="font-weight-bold">
                                        <div class="text-truncate">Hi there! I am wondering if you can help me with a problem I've been having.</div>
                                        <div class="small text-gray-500">Emily Fowler · 58m</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/AU4VPcFN4LE/60x60" alt="">
                                        <div class="status-indicator"></div>
                                        </div>
                                        <div>
                                        <div class="text-truncate">I have the photos that you ordered last month, how would you like them sent to you?</div>
                                        <div class="small text-gray-500">Jae Chun · 1d</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/CS2uCrpNzJY/60x60" alt="">
                                        <div class="status-indicator bg-warning"></div>
                                        </div>
                                        <div>
                                        <div class="text-truncate">Last month's report looks great, I am very happy with the progress so far, keep up the good work!</div>
                                        <div class="small text-gray-500">Morgan Alvarez · 2d</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item d-flex align-items-center" href="#">
                                        <div class="dropdown-list-image mr-3">
                                        <img class="rounded-circle" src="https://source.unsplash.com/Mv9hjnEUHR4/60x60" alt="">
                                        <div class="status-indicator bg-success"></div>
                                        </div>
                                        <div>
                                        <div class="text-truncate">Am I a good boy? The reason I ask is because someone told me that people say this to all dogs, even if they aren't good...</div>
                                        <div class="small text-gray-500">Chicken the Dog · 2w</div>
                                        </div>
                                    </a>
                                    <a class="dropdown-item text-center small text-gray-500" href="#">Read More Messages</a>
                                    </div>
                                </li>

                                <div class="topbar-divider d-none d-sm-block"></div>

                                <!-- Nav Item - User Information -->
                                <li class="nav-item dropdown no-arrow">
                                    <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    <span class="mr-2 d-none d-lg-inline text-gray-600 small">{{Auth::user()->staff->prenom_staff}} {{Auth::user()->staff->nom_staff}}</span>
                                    <img class="img-profile rounded-circle" src="https://source.unsplash.com/QAB-WJcbgJk/60x60">
                                    </a>
                                    <!-- Dropdown - User Information -->
                                    <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Profile
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Settings
                                    </a>
                                    <a class="dropdown-item" href="#">
                                        <i class="fas fa-list fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Activity Log
                                    </a>
                                    <div class="dropdown-divider"></div>
                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#logoutModal">
                                        <i class="fas fa-sign-out-alt fa-sm fa-fw mr-2 text-gray-400"></i>
                                        Logout
                                    </a>
                                    </div>
                                </li>

                                </ul>

                            </nav>
                    
                <!-- End of Topbar --> 
                            <div class=" content-yield " style="height:100%;background:rgba(255,255,255,0.2);" >
                                @yield('content')
                            </div>
                        </div>
                    </div>
                </div>
            </div>
    </main>
    <footer>
      <div class="">

        <div class="row row-no-gutters" id="bottom-footer" >
        
          <div class="col-xs-12 col-md-5 text-center" >
              <ul class="vertical-links small">
                <li><a href="#"><i class="fas fa-map-marker-alt"></i> Dakar Ngor-Almadies</a></li>
                <li><a href="#"><i class="fas fa-phone"></i>+221 33 899 99 99</a></li>
                <li><a href="#"><i class="far fa-envelope"></i> medilife@gmail.com</a></li>
                <li><a href="#">site web : www.medilife.sn</a></li>
              </ul>
          </div>
          <div class="col-xs-12 col-md-2 text-center" >
            <p><i class="fa fa-heart-o" aria-hidden="true"></i></p>
          </div>
          <div class="col-xs-12 col-md-5 text-center" >
            <ul>
              <li class="small">© Copyright 2019 Developpeur web/mobile<a href="#" style="color:white;font-weight:500;">Galima Academy</a>. Tous droits reserves.</li>
            </ul>
          </div>
        </div> <!--  end row  -->

      </div> <!--  end container-fluid  -->
    </footer>
    <!--Debut Modal-->
    <div class="modal fade" id="myModal">
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
                           
                                <div class="row">
                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                        <label for="inputEmail" class="col-sm-2 ">Prenom<span style="background-colol:red;">*</span></span></label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrer Prenom">
                                        </div>
                                    </div>
                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                        <label for="inputPassword" class="col-sm-2 ">Nom</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrer Nom">
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                        <label for="inputPassword" class="col-sm-2 ">Date Naissance</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" id="date" name="date" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                        <label for="inputPassword" class="col-sm-2 ">Lieu Naissance</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="lieu" name="lieu" placeholder="Entrer Lieu">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="form-group col-12 col-sm-12 col-md-6">
                                            <label for="inputPassword" class="col-sm-2 ">Adresse</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Entrer Adresse">
                                            </div>
                                        </div>
                                       
                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                        <label for="inputPassword" class="col-sm-2 ">Telephone</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Entrer Telephone"">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                        <label for="inputPassword" class="col-sm-2 ">Profession</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="profession" name="profession" placeholder="Entrer Profession">
                                        </div>
                                    </div>
                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                        <label for="sexe" class="col-sm-4 ">Sexe</label>
                                        <div class="col-sm-10">
                                            <select name="genre" id="genre" class="form-control">
                                                <option value="masculin">Masculin</option>
                                                <option value="feminin">Feminin</option>
                                            </select>
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
        <script>
        // Script from W3 Schools  
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};
        function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("to-top").style.display = "block";
        } else {
            document.getElementById("to-top").style.display = "none";
        }
        }
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        }
        </script>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
  integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo"
  crossorigin="anonymous">
</script>
<script
  src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
  integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1"
  crossorigin="anonymous"></script>
  
    <script src="{{asset('js/app.js')}}"></script>  
    <script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    <script src="{{asset('js/popper.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('js/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('js/active.js')}}"></script>
    <script src="{{asset('js/footer.js')}}"></script>
    <script src="{{asset('js/jquery.dataTables.min.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="{{asset('js/jquery.easing.min.js')}}"></script>
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>
    <script src="{{asset('js/dataTables.bootstrap4.min.js')}}"></script>
    <script src="{{asset('js/datatables-demo.js')}}"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>

    <script>
        $(document).ready( function () {
        $('#myTable').DataTable();
        });
        jQuery(document).ready(function($) {
                $(".clickable-row").click(function() {
                    window.location = $(this).data("href");
                });
           
        } );
    </script>
    <script>
        // Script from W3 Schools  
        // When the user scrolls down 20px from the top of the document, show the button
        window.onscroll = function() {scrollFunction()};
        function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
            document.getElementById("to-top").style.display = "block";
        } else {
            document.getElementById("to-top").style.display = "none";
        }
        }
        // When the user clicks on the button, scroll to the top of the document
        function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
        }
        
           
        </script>
    <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
    <script>
        tinymce.init({
            selector:'textarea.description',
            width: 900,
            height: 300
        });
    </script>
</body>

</html>