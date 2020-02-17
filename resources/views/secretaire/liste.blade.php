@extends('layouts.appsecretaire')
@section('content')
<div class="container" style="padding-top:25px;">     
        <div class="card" style="border:2px solid #ffffff;border-radius:4px;">
            <div class="card-header">
                <h2>La liste de tous les patiens</h2>
            </div>
            <div class="card-body" style="background-color:#081f3e ;">
                <div class="row" style="height:auto;">
                @if(session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                @endif
                </div>
                <div class=" row justify-content-between">
                    <a class="navbar-brand d-none d-sm-inline-block form-inline mr-auto ml-md-3 mb-md-3 my-2 my-md-0 mw-100" href="index.html"><img src="{{asset('img/core-img/logo.png')}}" alt="Logo"></a>
                    <p><a class="btn btn-success" style="height:auto; margin-right:10px;" data-toggle="modal" data-target="#myModal">
                    <i class="fas fa-plus" aria-hidden="true"></i>
                        Nouveau Patient
                    </a></p>
                    
                </div>
                <table id="myTable" class="table table-hover" style="overflow:hedden">
                    <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Adresse</th>
                            <th>Telephone</th>
                            <th>Profession</th>
                            <th>Naissance</th>
                            <th>Lieu</th>
                            <th>Sexe</th>
                            <th>Editer</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($patients as $patient)
                            <tr class="clickable-row" data-href="{{route('afficher_patient',['id'=>$patient->id])}}" style="cursor:pointer;">
                                    <td>{{$patient->nom_patient}}</td>
                                    <td>{{$patient->prenom_patient}}</td>
                                    <td>{{$patient->adresse_patient}}</td>
                                    <td>{{$patient->telephone_patient}}</td>
                                    <td>{{$patient->profession_patient}}</td>
                                    <td>{{$patient->datenaisse_patient}}</td>
                                    <td>{{$patient->lieu_patient}}</td>
                                    <td>{{$patient->sexe_patient}}</td>
                                
                                <td>
                                    <p><a href="{{route('editer_patient',['id'=>$patient->id])}}" class="btn btn-primary"><i class="fas fa-edit"></i></a></p>
                                </td>
                                <td>
                                    <p><a class="btn btn-danger" href="#" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash-alt"></i></a></p>
                                </td>
                            </tr>
                        
                        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="labelModalDelete" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div><a class="navbar-brand d-none d-sm-inline-block form-inline mr-auto ml-md-3 mb-md-3 my-2 my-md-0 mw-100" href="index.html"><img src="{{asset('img/core-img/logo.png')}}" alt="Logo"></a></div>
                                        
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" >
                                        <h5 style="color:white;">Voulez vous supprimer le patient?</h5>
                                        <p style="color:white;">Si vous Selectionner <span class="bg-danger">Oui</span>  vous ne pourrez plus revenir en arriere.</p>
                                        <p style="color:white;">Selectionner <span class="bg-secondary">Cancel</span> pour annuler.</p>
                                    </div>
                                                                       
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                        <form action="/secretaire/liste/{{$patient->id}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" class="btn btn-danger" name="delete" value="Oui">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row" style="height:100px;">
                               
            </div>
        </div>
    </div>
            <!--Debut Modal-->
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
                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                        <label for="inputEmail" class=" ">Prenom<span style="background-colol:red;">*</span></span></label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrer Prenom">
                                        </div>
                                    </div>
                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                        <label for="inputPassword" class=" ">Nom</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrer Nom">
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                        <label for="inputPassword" class="">Date Naissance</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" id="date" name="date" placeholder="">
                                        </div>
                                    </div>
                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                        <label for="inputPassword" class="">Lieu Naissance</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="lieu" name="lieu" placeholder="Entrer Lieu">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="form-group col-12 col-sm-12 col-md-6">
                                            <label for="inputPassword" class=" ">Adresse</label>
                                            <div class="col-sm-10">
                                                <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Entrer Adresse">
                                            </div>
                                        </div>
                                       
                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                        <label for="inputPassword" class="c ">Telephone</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Entrer Telephone"">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                        <label for="inputPassword" class=" ">Profession</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="profession" name="profession" placeholder="Entrer Profession">
                                        </div>
                                    </div>
                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                        <label for="sexe" class="">Sexe</label>
                                        <div class="col-sm-10">
                                            <select name="genre" id="genre" class="form-control">
                                                <option value="masculin">Masculin</option>
                                                <option value="feminin">Feminin</option>
                                            </select>
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