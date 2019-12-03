@extends('layouts.app')
    <!-- ***** Hero Area Start ***** -->
    @section('sidebar')
    <div class="header-area">
        <!-- Top Header Area -->
        <div class="top-header-area">
            <div class="container h-100">
                <div class="row h-100">
                    <div class="col-12 h-100">
                        <div class="h-100 d-md-flex justify-content-between align-items-center">
                            <p>Bienvenu à <span>Medifile</span></p>
                            <p>jours ouvrable : du Lundi au Samedi - 8h à 23h Contact : <span>+221 33 899 99 99</span></p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Main Header Area -->
        <div class="main-header-area" id="stickyHeader">
            <div class="container h-100">
                <div class="row h-100 align-items-center">
                    <div class="col-12 h-100">
                        <div class="main-menu h-100">
                            <nav class="navbar h-100 navbar-expand-lg">
                                <!-- Logo Area  -->
                                <a class="navbar-brand" href="index.html"><img src="{{asset('img/core-img/logo.png')}}" alt="Logo"></a>
                                <!--button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#medilifeMenu" aria-controls="medilifeMenu" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button-->
                                <div class="collapse navbar-collapse" id="medilifeMenu">
                                <button  type="button" class="btn medilife-btn mt-50" data-animation="fadeInUp" data-delay="70ms" data-toggle="modal" data-target="#exampleModal" id="buton">Se Connecter à mon espace <span>-></span></button>
                                </div>
                            </nav>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>    
    @endsection

    @section('content')
            <section class="hero-area">
                <div class="hero-slides owl-carousel">
                    <!-- Single Hero Slide -->
                    <div class="single-hero-slide bg-img bg-overlay-white" style="background-image: url(img/bg-img/hero1.jpg);">
                        <div class="container h-100">
                            <div class="row h-100 align-items-center">
                                <div class="col-12">
                                    <div class="hero-slides-content">
                                        <h2 data-animation="fadeInUp" data-delay="100ms">Des Services Medicaux 100% <br>Digne de Confiance</h2>
                                        <h6 data-animation="fadeInUp" data-delay="400ms">Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod.</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Hero Slide -->
                    <div class="single-hero-slide bg-img bg-overlay-white" style="background-image: url(../img/bg-img/breadcumb3.jpg);">
                        <div class="container h-100">
                            <div class="row h-100 align-items-center">
                                <div class="col-12">
                                    <div class="hero-slides-content">
                                        <h2 data-animation="fadeInUp" data-delay="100ms">Des Services Medicaux 100% <br>Digne de Confiance</h2>
                                        <h6 data-animation="fadeInUp" data-delay="400ms">Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod.</h6>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- Single Hero Slide -->
                    <div class="single-hero-slide bg-img bg-overlay-white" style="background-image: url(../img/bg-img/breadcumb1.jpg);">
                        <div class="container h-100">
                            <div class="row h-100 align-items-center">
                                <div class="col-12">
                                    <div class="hero-slides-content">
                                        <h2 data-animation="fadeInUp" data-delay="100ms">Des Services Medicaux 100% <br>Digne de Confiance</h2>
                                        <h6 data-animation="fadeInUp" data-delay="400ms">Lorem ipsum dolor sit amet, consectetuer adipiscing elit sed diam nonummy nibh euismod.</h6>
                                        
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <!-- ***** Hero Area End ***** -->
            <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                            <header >
                                <div class="header d-flex justify-content-between">
                                    <img class="image0 " src="../images/logo-clinique3.jpg" alt="">
                                        <h1>Medifile</h1>
                                    <img class=""  src="{{asset('img/core-img/logo.png')}}" >
                                </div>
                            </header><hr>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <div class="sous-page" id="sous_page" >
                                
                                <main>
                                    <section class="section-authenti">
                                            <div class="authenti">
                                                <!--img class="image"  src="../images/authenti.jpg" alt=""-->
                                                <div class="parent-form">
                    
                                                    <form class="form" action="../php/valid.php" method="POST" id="formulaire1">              
                                                        <select name="profil" style="border-radius: 10px;" >
                                                            <option value="" class="form-control">Profil</option>
                                                            <optgroup>
                                                                <option id="option1" value="0" class="form-control">Utilisateur</option>
                                                                <option id="option2" value="1" class="form-control">Admin</option>
                                                            </optgroup>
                                                        </select>
                                                        <div id="slect"></div>
                                                        <input type="text" id="login" name="login" class="form-control" placeholder="Veuiller saisir le login" style="border-radius: 10px;">
                                                        <div id="info_login"></div>
                                                        <input type="password" id="pass" name="pass" class="form-control" placeholder="Mot de Passe" style="border-radius: 10px;">
                                                        <div id="info_pass"></div>
                                                        <div><input type="checkbox"> Se souvenir de moi </div>   
                                                        
                                                      </form>
                                                </div>
                                            </div>
                                    </section>
                                  </main>
                                  <footer>
                      
                                  </footer>
                              </div>
                        </div>
                        <div class="modal-footer">
                          <div style="position:absolute; left: 10px;"><a href="initPassword.php" >Mot de passe oublié ?</a></div>
                          <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                          <button type="submit" id="formulaire" class="btn btn-primary">Connection</button>
                        </div>
                      </div>
                    </div>
                  </div>
    @endsection
    