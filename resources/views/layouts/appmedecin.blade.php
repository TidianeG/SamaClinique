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

</head>

<body >
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
                                            <a class="nav-link" href="index.html">
                                                <i class="fas fa-home fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>
                                                Acceuil <span class="sr-only">(current)</span>
                                            </a>
                                        </li>
                                        <div class="topbar-divider d-none d-sm-block"></div>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link " href="{{route('patients')}}">
                                                <i class="fas fa-wheelchair fa-md fa-fw mr-2 text-gray-400" aria-hidden="true"></i>
                                                Patient
                                            </a>
                                            
                                        </li>
                                        <div class="topbar-divider d-none d-sm-block"></div>
                                        <li class="nav-item">
                                            <a class="nav-link" href="about-us.html">
                                                <i class="fas fa-calendar fa-md fa-fw mr-2 text-gray-400"></i>
                                                Rendez-Vous
                                            </a>
                                        </li>
                                        <div class="topbar-divider d-none d-sm-block"></div>
                                        <li class="nav-item">
                                            <a class="nav-link" href="services.html">
                                                <i class="fas fa-calendar fa-md fa-fw mr-2 text-gray-400" aria-hidden="true" ></i>
                                                Calendrier
                                            </a>
                                        </li>
                                        <div class="topbar-divider d-none d-sm-block"></div>
                                        <li class="nav-item">
                                            <a class="nav-link" href="blog.html">
                                                <i class="fas fa-hospital fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Mon Service
                                            </a>
                                        </li>
                                        <div class="topbar-divider d-none d-sm-block"></div>
                                        <li class="nav-item">
                                            <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                                <i class="fas fa-user fa-sm fa-fw mr-2 text-gray-400"></i>
                                                Moi
                                            </a>
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
    <main class="content-div">
        <div class="content-yield" >
            @yield('content')
        </div>
    </main>
    <footer style="">
            <div class="container-fluid">
                 <!--  end row  --> 
                <div class="row row-no-gutters" id="bottom-footer" >
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
    <script src="{{asset('js/datatable.min.js')}}"></script>
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
    </script>
</body>

</html>