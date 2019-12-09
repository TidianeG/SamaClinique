@extends('layouts.appsecretaire')
@section('content')
            <div class="row" style="height:100px;">
            @if(session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
            </div>
            <div class="container" style="padding-top:25px;border:2px solid #081f3e;background-color:rgba(0, 108, 255, 0.5) ;border-radius:10px;">
                <div class="row justify-content-center bg-d" >
                    <h2>Liste des Patients de la clinique</h2>
                </div>
                <div class="row justify-content-center">
                    <a class="navbar-brand d-none d-sm-inline-block form-inline mr-auto ml-md-3 mb-md-3 my-2 my-md-0 mw-100" href="index.html"><img src="{{asset('img/core-img/logo.png')}}" alt="Logo"></a>
                    <form class="d-none d-sm-inline-block form-inline ml-auto mr-md-3 mb-md-1 my-2 my-md-0 mw-100 navbar-search ">
                        <div class="input-group">
                        <input type="text" class="form-control bg-light border-0 small" placeholder="Rechercher..." aria-label="Search" aria-describedby="basic-addon2">
                        <div class="input-group-append">
                            <button class="btn btn-primary" type="button">
                            <i class="fas fa-search fa-sm"></i>
                            </button>
                        </div>
                        </div>
                    </form>
                </div>
                <table id="myTable" class="table table-hover table-striped table-dark" style="overflow:hedden">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Adresse</th>
                            <th>Telephone</th>
                            <th>Profession</th>
                            <th>Naissance</th>
                            <th>Sexe</th>
                            <th>Editer</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($patients as $patient)
                        <tr>
                            <td>{{$patient->nom_patient}}</td>
                            <td>{{$patient->prenom_patient}}</td>
                            <td>{{$patient->adresse_patient}}</td>
                            <td>{{$patient->telephone_patient}}</td>
                            <td>{{$patient->profession_patient}}</td>
                            <td>{{$patient->datenaisse_patient}}</td>
                            <td>{{$patient->sexe_patient}}</td>
                            <td>
                                <p><a href="{{route('editer_patient',['id'=>$patient->id])}}" class="btn btn-primary">Editer</a></p>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
                <a class="btn btn-success" style="margin-bottom:5px;" data-toggle="modal" data-target="#myModal">Nouveau Patient</a>
            </div>
            <div class="row" style="height:100px;">
            
            </div>
        @endsection
        @section('content2')
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
                            <form action="{{route('ajouter_patient')}}" method="post">
                                @csrf
                                
                                <div class="row">
                                    <div class="form-group col">
                                        <label for="inputEmail" class="col-sm-2 ">Prenom<span style="background-colol:red;">*</span></span></label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrer Prenom">
                                        </div>
                                    </div>
                                    <div class="form-group col">
                                        <label for="inputPassword" class="col-sm-2 ">Nom</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrer Nom">
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="form-group col">
                                        <label for="inputPassword" class="col-sm-2 ">Naissance</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" id="date" name="date" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group col">
                                        <label for="inputPassword" class="col-sm-2 ">Adresse</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Entrer Adresse">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label for="inputPassword" class="col-sm-2 ">Profession</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="profession" name="profession" placeholder="Entrer Profession">
                                        </div>
                                    </div>
                                    <div class="form-group col">
                                        <label for="inputPassword" class="col-sm-2 ">Telephone</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Entrer Telephone"">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <div class="col col-sm-10 offset-sm-2">
                                            <label class="form-check-label" ><input type="radio" name="genre"> Masculin</label>
                                        </div>
                                        <div class="col col-sm-10 offset-sm-2">
                                            <label class="form-check-label"><input type="radio" name="genre"> Feminin</label>
                                        </div>
                                    </div>
                                </div>
                                <div class="">         
                                    <button type="submit" class="btn btn-success">Enregistrer</button>
                                    <button type="reset" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>

                            </form>
                        </div>
                        
                        <!-- Modal footer -->
                                              
                    </div>
                </div>
            </div>
            
    @endsection