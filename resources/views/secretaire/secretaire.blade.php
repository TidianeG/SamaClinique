@extends('layouts.appsecretaire')
@section('content')
    <div id="carouselExampleCaptions" class="carousel slide" data-ride="carousel">
        <ol class="carousel-indicators">
            <li data-target="#carouselExampleCaptions" data-slide-to="0" class="active"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="1"></li>
            <li data-target="#carouselExampleCaptions" data-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="../images/medecin2.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <div class="hero-slides-content">
                        <h5 data-animation="fadeInUp" data-delay="100ms">Des Services Medicaux 100% <br>Digne de Confiance</h5>
                        <p data-animation="fadeInUp" data-delay="100ms">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../images/medecin5.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <div class="hero-slides-content">
                        <h5 data-animation="fadeInUp" data-delay="100ms">Des Services Medicaux 100% <br>Digne de Confiance</h5>
                        <p data-animation="fadeInUp" data-delay="100ms">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img src="../images/medecinacceuil.jpg" class="d-block w-100" alt="...">
                <div class="carousel-caption d-flex justify-content-center align-content-center">
                    <div class="">
                        <h5 data-animation="fadeInUp" data-delay="100ms">Des Services Medicaux 100% <br>Digne de Confiance</h5>
                        <p data-animation="fadeInUp" data-delay="100ms">Praesent commodo cursus magna, vel scelerisque nisl consectetur.</p>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleCaptions" role="button" data-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="sr-only">Precedant</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleCaptions" role="button" data-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="sr-only">Suivant</span>
        </a>
    </div>
@endsection