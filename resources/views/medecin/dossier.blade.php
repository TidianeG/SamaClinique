@extends('layouts.appmedecin')
    @section('content')
        <div class="container mt-3" >
            <h2>Les informations du dosssier Medical de:</h2>
            <h4>Mr Cheikh Tidiane Gaye</h4>             
            <!-- Nav tabs -->
            <ul class="nav nav-tabs">
                <li class="nav-item">
                    <a class="nav-link active" href="#home">Etat Civil</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#menu1">Résumé Clinque</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#menu2">Bilan Paraclinique</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#menu3">Traitement</a>
                </li>
            </ul>
        <!-- Tab panes -->
            <div class="tab-content border mb-3" style="background-color:white; border-left:5px solid #081f3e">
                <div id="home" class="container tab-pane active"><br>
                    <h3>Etat Civil</h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
                </div>
                <div id="menu1" class="container tab-pane fade"><br>
                    <h3>Résumé Clinique</h3>
                    <p>Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.</p>
                </div>
                <div id="menu2" class="container tab-pane fade"><br>
                    <h3>Bilan Paraclinique</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>
                <div id="menu3" class="container tab-pane fade"><br>
                    <h3>Traitement</h3>
                    <p>Sed ut perspiciatis unde omnis iste natus error sit voluptatem accusantium doloremque laudantium, totam rem aperiam.</p>
                </div>
            </div>
            <p class="act"><b>Active Tab</b>: <span></span></p>
            <p class="prev"><b>Previous Tab</b>: <span></span></p>
        </div>
 @endsection