@extends('layouts.appadmin')
@section('content')
    <div class="">
        <h1 class="h3 mb-2 text-gray-800">La liste des personnels de medilife</h1>
        <div class="card shadow">
            <div class="card-header">
            <a class="btn btn-success" style="height:auto;" data-toggle="modal" data-target="#myModal"><span>+</span> New user</a>                
            </div>
            <div class="card-body" style="background-color:#081f3e ;">
                <div class="table-responsive">
                    <table id="myTable" class="table table-hover" style="overflow:hedden; margin:5px;">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Specialite</th>
                                <th>Sexe</th>
                                <th>Poste</th>
                                <th>Editer</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($staffs as $staff)
                            <tr class="clickable-row" data-href="{{route('afficher_staff',['id'=>$staff->id])}}" style="cursor:pointer;">
                                <td>{{$staff->prenom_staff}} {{$staff->nom_staff}}</td>
                                <td>{{$staff->adresse_staff}}</td>
                                <td>{{$staff->sexe_staff}}</td>
                                <td>{{$staff->poste_staff}}</td> 
                                <td>
                                    <p><a href="{{route('editer_staff',['id'=>$staff->id])}}" class="btn btn-primary">Editer</a></p>
                                </td>
                                <td>
                                    <form action="/admin/staff/{{$staff->id}}" method="post">
                                        @csrf
                                        @method('delete')
                                        <input type="submit" class="btn btn-danger" name="delete" value="Delete">
                                    </form>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>                
            </div>
        </div>
    </div>
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
                        <form action="{{route('ajouter_user')}}" method="post">
                                @csrf                               
                                <div class="row">
                                    <div class="form-group col">
                                        <label for="inputEmail" class="col-sm-4 ">Prenom<span style="background-colol:red;">*</span></span></label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Entrer Prenom">
                                        </div>
                                    </div>
                                    <div class="form-group col">
                                        <label for="inputPassword" class="col-sm-4 ">Nom</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nom" name="nom" placeholder="Entrer Nom">
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="form-group col">
                                        <label for="inputPassword" class="col-sm-4 ">Email</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="email" name="email" placeholder="Entrer Email">
                                        </div>
                                    </div>
                                    <div class="form-group col">
                                        <label for="inputPassword" class="col-sm-4 ">Adresse</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Entrer Adresse">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                       <div class="form-group col">
                                        <label for="inputPassword" class="col-sm-4 ">Specialite</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="specialite" name="specialite" placeholder="Entrer Specialite">
                                        </div>
                                    </div>
                                    <div class="form-group col">
                                        <label for="inputPassword" class="col-sm-4 ">Telephone</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="phone" name="phone" placeholder="Entrer Telephone"">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label for="inputPassword" class="col-sm-4 ">Numero CNI</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="cni" name="cni" placeholder="Entrer CNI">
                                        </div>
                                    </div>
                                    <div class="form-group col">
                                        <label for="inputPassword" class="col-sm-4 ">Poste Occupe</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="poste" name="poste" placeholder="Entrer Poste occupe"">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label for="sexe" class="col-sm-4 ">Sexe</label>
                                        <div class="col-sm-10">
                                            <select name="genre" id="genre" class="form-control">
                                                <option value="masculin">Masculin</option>
                                                <option value="feminin">Feminin</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                <div class="" style="padding-bottom:15px;">         
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