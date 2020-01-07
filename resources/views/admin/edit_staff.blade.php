@extends('layouts.appadmin')
@section('content')
        <div class="row" style="height:100px;">
            @if(session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
        </div>
        <div class="container" style="width:50%;border-radius:5px; background-color:#081f3e; height:auto;" >
            <div class="row">
                <a class="navbar-brand d-none d-sm-inline-block form-inline mr-auto ml-md-3 mb-md-3 my-2 my-md-0 mw-100" href="index.html"><img src="{{asset('img/core-img/logo.png')}}" alt="Logo"></a>
            </div>
           <hr style="background-color:white;">

                <form action="" method="post" style="margin-bottom:7px;">
                            @csrf
                            @method('patch')
                                <div class="row">
                                    <div class="form-group col">
                                        <label for="inputEmail" class="col-sm-2 ">Prenom</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="prenom" name="prenom" value="{{$staff->prenom_staff ?? ''}}">
                                        </div>
                                    </div>
                                    <div class="form-group col">
                                        <label for="inputPassword" class="col-sm-2 ">Nom</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nom" name="nom" value="{{$staff->nom_staff ?? ''}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="form-group col">
                                        <label for="inputPassword" class="col-sm-2 ">Specialite</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="specialite" name="specialite" value="{{$staff->specialite_staff ?? ''}}">
                                        </div>
                                    </div>
                                    <div class="form-group col">
                                        <label for="inputPassword" class="col-sm-2 ">Adresse</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="adresse" name="adresse" value="{{$staff->adresse_staff ?? ''}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label for="inputPassword" class="col-sm-2 ">Email</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="email" name="email" value="{{$staff->emailprof_staff ?? ''}}">
                                        </div>
                                    </div>
                                    <div class="form-group col">
                                        <label for="inputPassword" class="col-sm-2 ">Telephone</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="phone" name="phone" value="{{$staff->telephone_staff ?? ''}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label for="inputPassword" class="col-sm-10 ">CNI ou Passport</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="cni" name="cni" value="{{$staff->cnipass_staff ?? ''}}">
                                        </div>
                                    </div>
                                    <div class="form-group col">
                                        <label for="inputPassword" class="col-sm-2 ">Poste</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="poste" name="poste" value="{{$staff->poste_staff ?? ''}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom:10px;">
                                    <button type="submit" class="btn btn-success">Modifier</button>
                                    <a href="{{route('liste_staff')}}" type="reset" class="btn btn-danger">Close</a>
                                </div>
                        </form>
                    </div>
@endsection