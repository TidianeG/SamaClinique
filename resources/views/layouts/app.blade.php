<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- The above 4 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <!-- Title  -->
    <title>Medilife - Mon clinique</title>

    <!-- Favicon  -->
    <link rel="icon" href="img/core-img/favicon.ico">

    <!-- Style CSS -->
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.6.3/css/all.css" integrity="sha384-UHRtZLI+pbxtHCWp1t77Bi1L4ZtiqrqD80Kn4Z8NTSRyMA2Fd33n5dQ8lWUE00s/" crossorigin="anonymous">
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <!--link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"-->    
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
    

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
                            <p style="font-weight:bold;">Bienvenu à <span>Medifile</span></p>
                            <p style="font-weight:bold;">jours ouvrable : du Lundi au Samedi - 8h à 23h<span></span></p>
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
                                <a class="navbar-brand" href=""><img src="{{asset('img/core-img/logo.png')}}" alt="Logo"></a>
                                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#medilifeMenu" aria-controls="medilifeMenu" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>
                                <div class="collapse navbar-collapse" id="medilifeMenu">
                                    <!-- Menu Area -->
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item">
                                            <a class="nav-link style-bar" href="/">
                                                <i class="fas fa-home fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>
                                                Acceuil 
                                            </a>
                                        </li>
                                        <!--div class="topbar-divider d-none d-sm-block"></div>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link " href="#">
                                            <i class="fab fa-hire-a-helper fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>
                                                Services
                                            </a>
                                            
                                        </li-->
                                        <div class="topbar-divider d-none d-sm-block"></div>
                                        <li class="nav-item">
                                            <a class="nav-link style-bar" href="/login">
                                            <i class="fas fa-sign-in-alt fa-md fa-fw mr-2 text-gray-400" aria-hidden="true" ></i>
                                                Connexion
                                            </a>
                                        </li>
                                        <div class="topbar-divider d-none d-sm-block style-bar"></div>
                                        <!--li class="nav-item">
                                            <a class="nav-link" href="/register">
                                            <i class="fas fa-user-plus fa-md fa-fw mr-2 text-gray-400" aria-hidden="true" ></i>
                                                Inscription
                                            </a>
                                        </li-->
                                      
                                      </ul>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    </header>
    <main class=" content-div">
        <div class=" content-yield " style="background-image: url('../images/anesthesiology.jpg');background-size:100%;background-repeat:repeat;">
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
                <li><a href="#"><i class="fab fa-internet-explorer"></i>site web : www.medilife.sn</a></li>
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
    <script src="{{ asset('node_modules/tinymce/tinymce.js') }}"></script>
    <script src="https://code.jquery.com/jquery-3.4.1.js" integrity="sha256-WpOohJOqMqqyKL9FccASB9O0KwACQJpFTUBLTYOVvVU=" crossorigin="anonymous"></script>
     <script>
        tinymce.init({
            selector:'textarea.description',
            width: 900,
            height: 300
        });
    </script>

</body>

</html>