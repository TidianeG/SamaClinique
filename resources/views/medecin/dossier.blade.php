@extends('layouts.appmedecin')
    @section('content')
    <div class="conatiner row m-3">
        <div class="col-2">
        
        </div>
        <div class="col-6">
            <div class="container mt-3" style="">
                <div class="alert alert-primary">
                    <h2>Les informations du dosssier Medical de: <span style="color:blue">{{$patients->prenom_patient}}  {{$patients->nom_patient}}</span>
                    </h2>
                </div>
                        
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
                        <div class=" container row justify-content-around">
                            <div class="col-6 ">
                                Prenom : <h5 style="color:blue;">{{$patients->prenom_patient}}</h5>
                            </div>
                            <div class="col-6 ">
                                Nom : <h5 style="color:blue;">{{$patients->nom_patient}}</h5>
                            </div>
                        </div>
                        <div class=" container row justify-content-around">
                            <div class="col-8 ">
                                Date de Naissance : <h5 style="color:blue;">{{$patients->datenaisse_patient}}</h5>
                            </div>
                            <div class="col-4 ">
                                Adresse : <h5 style="color:blue;">{{$patients->adresse_patient}}</h5>
                            </div>
                        </div>

                        <div class=" container row justify-content-around">
                            <div class="col-6 ">
                                Sexe : <h5 style="color:blue;">{{$patients->sexe_patient}}</h5>
                            </div>
                            <div class="col-6 ">
                                Profession : <h5 style="color:blue;">{{$patients->profession_patient}}</h5>
                            </div>
                        </div>
                        
                    </div>
                    <div id="menu1" class="container tab-pane fade"><br>
                        <h3>Résumé Clinique</h3>
                        <div>
                            Profession : {{$patients->profession_patient}}
                        </div>
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
        </div>

        <div class="col-4 container mt-3">
            <div class="alert alert-primary">
                <h5>Acceder aux differents elements du dossier</h5>
                <h6>En utilisant mes fonctionnalitées tabs</h6>
            </div>
            <div><img src="{{asset('img/bg-img/breadcumb3.jpg')}}" alt="" style="overflow:hedden;margin-right:4px;"></div>
        </div>
    </div>
        
 @endsection