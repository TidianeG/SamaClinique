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
    <link rel="stylesheet" href="{{asset('css/app.css')}}">
    <link rel="stylesheet" href="{{asset('css/all.css')}}">
</head>

<body>
    <!-- Preloader -->
    

    <!-- ***** Header Area Start ***** -->
    <header>
        @yield('sidebar')
    </header>
    <main style=" margin-bottom:20px">
        <div class="" >
            @yield('content')
        </div>
    </main>
    <footer>
    <div class="container-fluid" style="background-color:#eff5f5;">

    <div class="row  row-no-gutters">
      <div class="col-xs-12 col-sm-6 col-md-3" >
        <ul>
          <li class="col-heading">Subheading</li>
          <li>
            <i class="fa fa-phone" aria-hidden="true"></i><a href="tel:99-999-999-9999">99-999-999-9999</a>
          </li>
          <li>
            <i class="fa fa-mobile" aria-hidden="true"></i><a href="sms:99-999-999-9999">SMS Message</a>
          </li>
          <li>
             <i class="fa fa-map-marker" aria-hidden="true"></i><a href="#">Address</a>
          </li> 
          <li>
             <i class="fa fa-envelope-square" aria-hidden="true"></i><a href="mailto:someone@yoursite.com?subject=Email Subject line">Email Us</a>  
          </li> 
        </ul>
      </div>     

      <div class="col-xs-12 col-sm-6 col-md-3" >
        <ul>
          <li class="col-heading">Subheading</li>
          <li><a href="#">Link to page</a></li>
          <li><a href="#">Link to page</a></li>
          <li><a href="#">Link to page</a></li>
          <li><a href="#">Link to page</a></li>
        </ul>
      </div>      

      <div class="col-xs-12 col-sm-6 col-md-3" >
        <ul>
          <li class="col-heading">Subheading</li>
          <li><a href="#">Link to page</a></li>
          <li><a href="#">Link to page</a></li>
          <li><a href="#">Link to page</a></li>
          <li><a href="#">Link to page</a></li>
        </ul>
      </div>
      
      <div class="col-xs-12 col-sm-6 col-md-3" >
        <ul>
          <li class="col-heading">Subheading</li>
          <li><a href="#">Link to page</a></li>
          <li><a href="#">Link to page</a></li>
          <li><a href="#">Link to page</a></li>
          <li><a href="#">Link to page</a></li>
        </ul>
      </div>
    </div> <!--  end row  -->
    
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
            
    </footer>
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