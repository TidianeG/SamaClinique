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
                                <!--button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#medilifeMenu" aria-controls="medilifeMenu" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button-->
                                <div class="collapse navbar-collapse" id="medilifeMenu">
                                    <!-- Menu Area -->
                                    <ul class="navbar-nav ml-auto">
                                        <li class="nav-item active">
                                            <a class="nav-link" href="index.html">Acceuil <span class="sr-only">(current)</span></a>
                                        </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Patient</a>
                                            <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                                                <a class="dropdown-item" href="{{route('dossier_patient')}}">New</a>
                                                <a class="dropdown-item" href="about-us.html">Afficher</a>
                                    
                                            </div>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="about-us.html">Rendez-Vous</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="services.html">Calendrier</a>
                                        </li>
                                        <li class="nav-item">
                                            <a class="nav-link" href="blog.html">Mon Service</a>
                                        </li>
                                       
                                        <li class="nav-item">
                                            <a href="#" class="nav-link btn medilife-appoint-btn ml-30">Deconnection</a>
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
    </header>
    <main style="height:auto; background-image:url(../img/bg-img/breadcumb3.jpg)">
        <div class="" style="height:auto;" >
            @yield('content')
        </div>
    </main>
    <footer>
            <div class="container-fluid" style="background-color:#081f3e;">
                 <!--  end row  --> 
                <div class="row row-no-gutters" id="bottom-footer" style="background-color:#081f3e;">
                    <div class="col-xs-12 col-md-5 text-center" >
                        <ul class="vertical-links small">
                            <li><a href="#">Privacy</a></li>
                            <li><a href="#">Terms & Conditions</a></li>
                            <li><a href="#">Site Map</a></li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                    </div>
                    <div class="col-xs-12 col-md-2 text-center" >
                        <p><i class="fa fa-heart-o" aria-hidden="true"></i></p>
                    </div>
                    <div class="col-xs-12 col-md-5 text-center" >
                        <ul>
                        <li class="small">© Copyright 2019 Website by <a href="#" style="color:white;font-weight:500;">Developr</a>. All Rights reserved.</li>
                        </ul>
                    </div>
                </div> <!--  end row  -->
            </div> <!--  end container-fluid  -->

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

</body>

</html>