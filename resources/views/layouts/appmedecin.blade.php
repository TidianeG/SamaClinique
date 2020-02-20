<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Medilife - Medecin</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css">

</head>

<body >
    <style>
        .card-header{
        background-color: #ffffff;
      }
    </style>
    <header>
    <div class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="h-100 d-md-flex justify-content-between ">
                            <p>Bienvenu à <span>Medifile</span></p>
                            <p>jours ouvrable : du Lundi au Samedi - 8h à 23h Contact : <span>+221 33 899 99 99</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader" style="height:auto;">
            <div class="container h-100">
                <div class="row h-100 justify-content-between">
                    <div class="col-12 h-100">
                        <div class="main-menu h-100">
                            <nav class="navbar h-100 navbar-expand-lg row justify-content-between align-items-center">
                                <!-- Logo Area  -->
                                <a class="navbar-brand" href="index.html"><img src="{{asset('img/core-img/logo.png')}}" alt="Logo"></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#medilifeMenu" aria-controls="medilifeMenu" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                                <div class="collapse navbar-collapse" id="medilifeMenu">
                                    <!-- Menu Area -->
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link style-bar" href="{{route('medecin')}}">
                                                <i class="fas fa-home fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>
                                                Acceuil <span class="sr-only">(current)</span>
                                            </a>
                                        </li>
                                        <div class="topbar-divider d-none d-sm-block"></div>
                                        <li class="nav-item">
                                            <a class="nav-link style-bar" href="{{route('mes_rv')}}">
                                                <i class="fas fa-calendar fa-md fa-fw mr-2 text-gray-400"></i>
                                               Clinique
                                            </a>
                                        </li>
                                        <div class="topbar-divider d-none d-sm-block"></div>
                                        
                                        <li class="nav-item dropdown">
                                            <a class="nav-link style-bar" href="{{route('patients')}}">
                                                <i class="fas fa-wheelchair fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>
                                                Patient
                                            </a>
                                            
                                        </li>
                                        <div class="topbar-divider d-none d-sm-block"></div>
                                        <li class="nav-item">
                                            <a class="nav-link style-bar" href="#">
                                                <i class="fas fa-calendar fa-md fa-fw mr-2 text-gray-400"></i>
                                                Confrères
                                            </a>
                                        </li>
                                        <div class="topbar-divider d-none d-sm-block"></div>
                                        <li class="nav-item">
                                            <a class="nav-link style-bar" href="{{route('mes_rv')}}">
                                                <i class="fas fa-calendar fa-md fa-fw mr-2 text-gray-400"></i>
                                                Rendez-Vous
                                            </a>
                                        </li>
                                        <div class="topbar-divider d-none d-sm-block"></div>
                                        
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
    <main class="content-div" style="">
        
        <div id="page-top" style="height:100%;">
            <div id="wrapper" style="height:100%;">

            <!-- Sidebar -->
                <div class="bord" style="">
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
                                <h6 class="collapse-header">Patients</h6>
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
                                <h6 class="collapse-header">Rendez-vous</h6>
                                
                                <a class="collapse-item" href="{{route('rv_avenir')}}">RV a venir</a>
                                <a class="collapse-item" href="{{route('rv_passe')}}">RV passee</a>
                                
                                </div>
                            </div>
                            </li>

                            <!-- Divider -->
                            <hr class="sidebar-divider">

                            <!-- Heading -->
                            <div class="sidebar-heading">
                            
                            </div>

                            <!-- Nav Item - Pages Collapse Menu -->
                            <li class="nav-item">
                                <a class="nav-link collapsed" href="#" data-toggle="collapse" data-target="#collapsePages" aria-expanded="true" aria-controls="collapsePages">
                                    <i class="fas fa-money-check"></i>
                                    <span>Calendrier</span>
                                </a>
                                <div id="collapsePages" class="collapse" aria-labelledby="headingPages" data-parent="#accordionSidebar">
                                    <div class="bg-white py-2 collapse-inner rounded">
                                        <h6 class="collapse-header">Caisse</h6>
                                        <a class="collapse-item" href="login.html">Recette</a>
                                        <a class="collapse-item" href="register.html">Depense</a>
                                        
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
                    <div id="content" class="h-100" >

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
                            

                            <div class="topbar-divider d-none d-sm-block"></div>

                            <!-- Nav Item - User Information -->
                            
                            <li class="nav-item dropdown no-arrow">
                                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                            <span class="mr-2 d-none d-lg-inline text-gray-600 small">Dr. {{Auth::user()->staff->prenom_staff}} {{Auth::user()->staff->nom_staff}}</span>
                                            <?php
                                                if(Auth::user()->staff->sexe_staff=="masculin"){
                                                    
                                            ?>
                                                    <img class="img-profile rounded-circle" src="{{asset('images/avatar-medecin2.png')}}">                                                     
                                            <?php    
                                                }
                                                elseif(Auth::user()->staff->sexe_staff=="feminin"){
                                                
                                            ?>
                                            <img class="img-profile rounded-circle" src="{{asset('images/avatar-medecinF.png')}}">                                                     
                                            <?php   
                                                }
                                            ?> 
                                            </a>
                                            <!-- Dropdown - User Information -->
                                            <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                            <a class="dropdown-item" href="{{route('afficher_medecin')}}">
                                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Profil
                                            </a>
                                            <a class="dropdown-item" href="#">
                                                <i class="fas fa-cogs fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Parametres
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
      <div class="container-fluid">

        <div class="row row-no-gutters" id="bottom-footer" >
        
          <div class=" col-md-7 col-sm-12 text-center" >
              <ul class="vertical-links small">
                <li><a href="#"><i class="fas fa-map-marker-alt"></i> Dakar Ngor-Almadies</a></li>
                <li><a href="#"><i class="fas fa-phone"></i>+221 33 899 99 99</a></li>
                <li><a href="#"><i class="far fa-envelope"></i> medilife@gmail.com</a></li>
                <li><a href="#">site web : www.medilife.sn</a></li>
              </ul>
          </div>
          
          <div class="col-xs-12 col-md-5 text-center" >
            <ul>
              <li class="small">© Copyright 2019 Developpeur web/mobile<a href="#" style="color:white;font-weight:500;">Galima Academy</a>. Tous droits reserves.</li>
            </ul>
          </div>
        </div> <!--  end row  -->

      </div> <!--  end container-fluid  -->
    </footer>
       
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
    <script src="{{asset('js/app.js')}}"></script>  
    <script src="{{asset('js/jquery-2.2.4.min.js')}}"></script>
    <!-- Popper js -->
    
    <script src="{{asset('js/popper.min.js')}}"></script>
    <script src="{{asset('js/sb-admin-2.min.js')}}"></script>
    <!-- Bootstrap js -->
    <script src="{{asset('js/bootstrap.min.js')}}"></script>
    <!-- Plugins js -->
    <script src="{{asset('js/plugins.js')}}"></script>
    <!-- Active js -->
    <script src="{{asset('js/active.js')}}"></script>
    <script src="{{asset('js/footer.js')}}"></script>
    <script src="{{asset('js/folder.js')}}"></script>
   
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script>
    
    <script>
        
        $(document).ready(function(){
            $(".nav-tabs a").click(function(){
                $(this).tab('show');
            });
            $('.nav-tabs a').on('shown.bs.tab', function(event){
                var x = $(event.target).text();         // active tab
                var y = $(event.relatedTarget).text();  // previous tab
                $(".act span").text(x);
                $(".prev span").text(y);
            });
        });
        
            jQuery(document).ready(function($) {
                $(".clickable-row").click(function() {
                    window.location = $(this).data("href");
                });
            });
            $(document).ready( function () {
            $('#myTable').DataTable();
        } );
    </script>
    <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
    <script>
        tinymce.init({
            selector:'textarea.description',
            width: 350,
            height: 200
        });
    </script>
    <!--script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script-->
</body>

</html>