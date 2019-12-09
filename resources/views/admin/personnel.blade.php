@extends('layouts.appadmin')
@section('content')
        <div class="row" style="height:100px;">
            @if(session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
        </div>
        <div class="container" style="padding-top:25px;padding-bottom:15px;width:50%;border-radius:5px; background-color:#081f3e; height:auto;">
            <div class="row">
                <a class="navbar-brand d-none d-sm-inline-block form-inline mr-auto ml-md-3 mb-md-3 my-2 my-md-0 mw-100" href="index.html"><img src="{{asset('img/core-img/logo.png')}}" alt="Logo"></a>
            </div>
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
                                                <option value=""></option>
                                                <option value="">Masculin</option>
                                                <option value="">Feminin</option>
                                            </select>
                                        </div>
                                    </div>
                                    <div class="form-group col">
                                        <label for="profil" class="col-sm-4 ">Profil</label>                                 
                                        <div class="col-sm-10">
                                            <select name="profil" id="" class="form-control">
                                                <option value=""></option>
                                                <option value="">Admin</option>
                                                <option value="">Super Admin</option>
                                                <option value="">Utilisateur</option>
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
@endsection