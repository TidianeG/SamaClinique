@extends('layouts.appsecretaire')
    @section('content')
    
        <div class="" style="border-radius:5px; background-color:#081f3e; height:auto;" >
            <div class="row">
                <a class="navbar-brand d-none d-sm-inline-block form-inline mr-auto ml-md-3 mb-md-3 my-2 my-md-0 mw-100" href="index.html"><img src="{{asset('img/core-img/logo.png')}}" alt="Logo"></a>
            </div>
            <hr style="background-color:white;">

                <form action="{{route('update_patient',['id'=>$patients->id])}}" method="post" style="margin-bottom:7px;">
                            @csrf
                            @method('patch')
                                <div class="row">
                                    <div class="form-group col">
                                        <label for="inputEmail" class="col-sm-2 ">Prenom</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="prenom" name="prenom" value="{{$patients->prenom_patient ?? ''}}">
                                        </div>
                                    </div>
                                    <div class="form-group col">
                                        <label for="inputPassword" class="col-sm-2 ">Nom</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="nom" name="nom" value="{{$patients->nom_patient ?? ''}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="form-group col">
                                        <label for="inputPassword" class="col-sm-2 ">Naissance</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" id="date" name="date" value="{{$patients->datenaisse_patient ?? ''}}">
                                        </div>
                                    </div>
                                    <div class="form-group col">
                                        <label for="inputPassword" class="col-sm-2 ">Adresse</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="adresse" name="adresse" value="{{$patients->adresse_patient ?? ''}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                    <div class="form-group col">
                                        <label for="inputPassword" class="col-sm-2 ">Profession</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="profession" name="profession" value="{{$patients->profession_patient ?? ''}}">
                                        </div>
                                    </div>
                                    <div class="form-group col">
                                        <label for="inputPassword" class="col-sm-2 ">Telephone</label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="phone" name="phone" value="{{$patients->telephone_patient ?? ''}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group" style="margin-bottom:10px;">
                                    <button type="submit" class="btn btn-success">Modifier</button>
                                    <a href="{{route('liste_patient')}}" class="btn btn-danger">Close</a>
                                </div>
                        </form>
                    </div>  
                <div class="row" style="height:100px;">
    
             </div>
    @endsection