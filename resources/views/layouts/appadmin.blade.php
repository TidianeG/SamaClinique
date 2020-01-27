<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Medilife - Admin</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>

    <!--link rel="stylesheet" href="//cdn.datatables.net/1.10.20/css/jquery.dataTables.min.css"-->
    

</head>

<body>
    <!-- Preloader -->
    

    <!-- ***** Header Area Start ***** -->
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
                                        <li class="nav-item ">
                                            <a class="nav-link style-bar" href="{{route('admin')}}">
                                                <i class="fas fa-home fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>
                                                Acceuil <span class="sr-only">(current)</span>
                                            </a>
                                        </li>
                                        <div class="topbar-divider d-none d-sm-block"></div>
                                        <li class="nav-item ">
                                            <a class="nav-link style-bar" href="">
                                            <i class="far fa-hospital"></i>
                                                Clinique
                                            </a>
                                        </li>
                                        <div class="topbar-divider d-none d-sm-block"></div>
                                        <li class="nav-item">
                                            <a class="nav-link style-bar" href="{{route('liste_staff')}}">
                                                <i class="fas fa-users"></i>
                                                Gestion Utilisateurs
                                            </a>    
                                        </li>
                                        <div class="topbar-divider d-none d-sm-block"></div>
                                        <li class="nav-item">
                                            <a class="nav-link style-bar" href="{{route('liste_patientAdmin')}}">
                                            <i class="fab fa-accessible-icon fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>    
                                            Patients</a>
                                        </li>
                                        <div class="topbar-divider d-none d-sm-block"></div>

                                            <!-- Nav Item - User Information -->
                                            <li class="nav-item">
                                                <a class="nav-link dropdown-toggle style-bar" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                    <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                    Moi
                                                </a>
                                        
                                                <!-- Dropdown - User Information -->
                                                <div class="dropdown-menu dropdown-menu-right shadow animated--grow-in" aria-labelledby="userDropdown">
                                                    <a class="dropdown-item" href="#">
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
                                            <!-- Dropdown - User Information -->
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
    <main class="content-div">
        <div class="content-yield" >
            @yield('content')
        </div>
    </main>
    <footer>
      <div class="container-fluid">

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
    <script src="{{asset('js/datatables.min.js')}}"></script>
    <script src="{{asset('js/jquery.min.js')}}"></script>
    <script src="{{asset('js/bootstrap.bundle.min.js')}}"></script>
    <!--script src="//cdn.datatables.net/1.10.20/js/jquery.dataTables.min.js"></script-->
    <script>
        $(document).ready( function () {
        $('#myTable').DataTable();
        } );
        jQuery(document).ready(function($) {
                $(".clickable-row").click(function() {
                    window.location = $(this).data("href");
                });
            });
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