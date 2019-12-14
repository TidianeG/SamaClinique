@extends('layouts.appmedecin')
    @section('content')
    <div class="container">
        <div class="conatiner row mb-3">
            
            <div class="col-9">
                <div class="container mt-3" style="">
                    <div class="alert alert-primary">
                        <h4>Dosssier Medical de: <span style="color:blue">{{$patients->prenom_patient}}  {{$patients->nom_patient}}</span>
                        </h4>
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
                    <div class="tab-content border mb-5" style="background-color:white; border-left:5px solid #081f3e">
                        <div id="home" class="container tab-pane active"><br>
                            <h3>Etat Civil</h3>
                            
                                <div class=" row">
                                    <span class="col"> Prenom : </span> <span class="col" style="color:blue;">{{$patients->prenom_patient}}</span>
                                </div><hr>
                                <div class="row ">
                                    <span class="col"> Nom : </span><span class="col" style="color:blue;">{{$patients->nom_patient}}</span>
                                </div><hr>
                        
                                <div class=" row">
                                    <span class="col">Date de Naissance : </span><span class="col" style="color:blue;">{{$patients->datenaisse_patient}}</span>
                                </div><hr>
                                <div class="row ">
                                    <span class="col">Adresse : </span><span class="col" style="color:blue;">{{$patients->adresse_patient}}</span>
                                </div><hr>
                        
                                <div class=" row">
                                    <span class="col">Sexe : </span><span class="col" style="color:blue;">{{$patients->sexe_patient}}</span>
                                </div><hr>
                                <div class="row ">
                                    <span class="col">Profession : </span><span class="col" style="color:blue;">{{$patients->profession_patient}}</span>
                                </div>
                            
                            
                        </div>
                        <div id="menu1" class="container tab-pane fade ">
                            <div class="">
                                <div class="card mb-3 mt-3 ">
                                    <div class="card-header ml-0">
                                        <h3>Résumé Clinique</h3>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <form class="form-group" action="/action_page.php">
                                                <div class="row">
                                                    <div class="form-group col-5">
                                                        <label for="poid" class="label-form ">Numero dossier:</label>
                                                        <input type="text" class="form-control" id="poid" value="{{$patients->id}}" style="width:100px; height:32px;" disabled>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-4">
                                                        <label for="poid" class="label-form ">Poids:</label>
                                                        <input type="text" class="form-control" id="poid" style="width:100px; height:32px;">
                                                    </div>
                                                    <div class="form-group col-4">
                                                        <label for="temp" class="label-form">Temperature:</label>
                                                        <input type="text" class="form-control" id="temp" style="width:100px; height:32px;">
                                                    </div>
                                                    <div class="form-group col-4">
                                                        <label for="tension" class="label-form">Tension:</label>
                                                        <input type="text" class="form-control" id="tension" style="width:100px; height:32px;">
                                                    </div>
                                                </div>
                                                
                                                <div class="row justify-content-around">    
                                                    <div class="form-group col-3">
                                                        <label for="poid" class="label-form ">Date Consultation:</label>
                                                        <input type="date" class="form-control" id="poid" style="width:200px; height:32px;" >
                                                    </div> 
                                                    <div class="form-group col-4">
                                                        <label for="groupe" class="label-form">Description:</label>
                                                        <textarea name="" id="" class="form-control" cols="15" rows="6"></textarea>
                                                    </div>                                              
                                                </div>
                                            </form> 
                                        </div>                       
                                    </div>
                                </div>                        
                            </div>                                    
                        </div>
                            
                        <div id="menu2" class="container tab-pane fade"><br>
                            <div class="card mb-3 mt-3 ">
                                <div class="card-header  ml-0">
                                    <h3>Bilan Paraclinique</h3>
                                </div>
                                <div class="card-body">
                                    <form action="#">
                                        <div class="row justify-content-around">
                                            <div class="form-group col-4">
                                                <label for="ante" class="label-form">Antecedant:</label>
                                                <input type="text" class="form-control" id="ante">
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="type" class="label-form">Type antecedant:</label>
                                                <select name="type" id="" class="form-control" style="width:25px; height:32px;">
                                                    <option value=""></option>
                                                    <option value="familial">Familial</option>
                                                    <option value="personnel">Personnel</option>
                                                    <option value="autre">Autres</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row justify-content-around">
                                            <div class="form-group col-3">
                                                <label for="groupe" class="label-form">Groupe Sanguin:</label>
                                                <select name="groupe" class="form-control" style="width:75px; height:32px;" id="">
                                                    <option value=""></option>
                                                    <option value="O">O</option>
                                                    <option value="O+">O+</option>
                                                     <option value="A+">A+</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-4">
                                                <label for="file" class="label-form">Radio:</label>
                                                <input type="file" class="form-control" name="file" id="file">
                                            </div>
                                        </div>
                                        <div class="alert alert-primary">Analyse et Resultat</div>
                                        <div class="row justify-content-around">
                                            <div class="form-group col-3">
                                                <label for="tension" class="label-form">Nom analyse:</label>
                                                <input type="text" class="form-control" id="tension" style="width:100px; height:32px;">
                                            </div>
                                            <div class="form-group col-4">
                                                <label for="pwd" class="label-form">Date analyse:</label>
                                                <input type="date" class="form-control" id="pwd">
                                            </div>
                                        </div>
                                       
                                        <div class="row justify-content-around">   
                                            <div class="form-group col-5">
                                                <label for="tension" class="label-form">Designation:</label>
                                                <textarea name="designation" id="" class="form-control" cols="15" rows="8"></textarea>
                                            </div>
                                            <div class="form-group col-5">
                                                <label for="tension" class="label-form">Description resultat:</label>
                                                <textarea name="description" id="" cols="15" class="form-control" rows="6"></textarea>
                                            </div>
                                            
                                        </div>
                                        <div>
                                            <div class="form-group col-4">
                                                <label for="pwd" class="label-form">Date resultat:</label>
                                                <input type="datetime-local" class="form-control" id="pwd">
                                            </div>
                                        </div>
                                    </form> 
                                </div>                       
                            </div>
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

            <div class="col-3 container mt-3">
                <div class="alert alert-primary" style="margin-bottom:0px;">
                    <h5>Creation de nouveau dossier</h5>
                    <a  class="btn btn-primary" data-toggle="modal" data-target="#myModal">Nouveau dossier</a>
                </div>
                <div><img src="{{asset('img/bg-img/breadcumb3.jpg')}}" alt="" style="overflow:hedden;margin-right:4px;"></div>
            </div>
        </div>
        <div style="height:100px;">

        </div>
    </div>
    
    <!-- Debut modal-->
    <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                        <a class="navbar-brand d-none d-sm-inline-block form-inline mr-auto ml-md-3 mb-md-3 my-2 my-md-0 mw-100" href="index.html"><img src="{{asset('img/core-img/logo.png')}}" alt="Logo"></a>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>                        
                        <!-- Modal body -->
                        <div class="modal-body container">
                            <form action="#" method="post">
                                @csrf
                                
                                <div class="row">
                                                <div class="form-group col-4">
                                                        <label for="poid" class="">Poids:</label>
                                                        <input type="text" class="form-control" id="poid" style="width:100px; height:32px;">
                                                    </div>
                                                    <div class="form-group col-4">
                                                        <label for="temp" class="">Temperature:</label>
                                                        <input type="text" class="form-control" id="temp" style="width:100px; height:32px;">
                                                    </div>
                                                    <div class="form-group col-4">
                                                        <label for="tension" class="">Tension:</label>
                                                        <input type="text" class="form-control" id="tension" style="width:100px; height:32px;">
                                                    </div>
                                                </div>
                                </div>
                                <div class="row justify-content-around">
                                                    <div class="form-group col-4">
                                                        <label for="tension" class="">Taille:</label>
                                                        <input type="text" class="form-control" id="taille" style="width:100px; height:32px;">
                                                    </div>    
                                                    <div class="form-group col-3">
                                                        <label for="poid" class="">Date Consultation:</label>
                                                        <input type="date" class="form-control" id="consult" style="width:150px; height:32px;" >
                                                    </div> 
                                                    <div class="form-group col-4">
                                                        <label for="groupe" class="">Description:</label>
                                                        <textarea name="" id="" class="form-control" cols="15" rows="6"></textarea>
                                                    </div>                                              
                                </div>
                                
                                <div class="container row justify-content-end">         
                                    <button type="submit" class="btn btn-success">Creer</button>
                                    <button type="reset" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>
    <!-- Fin Modal-->
 @endsection
                                            