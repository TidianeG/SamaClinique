@extends('layouts.appsecretaire')
    @section('content')
    <div class="row" style="height:100px;">
    
    </div>
        <div class="container" style="width:50%;border-radius:5px; background-color:rgba(0, 108, 255, 0.7) ; height:auto;" >
            <div class="row justify-content-center">
                <h2>Nouveau Patient</h2>
            </div> 
            <form action="{{route('ajouter_patient')}}" method="post">
            @csrf
                <div class="form-group row">
                    <label for="inputEmail" class="col-sm-2 col-form-label">Prenom</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="prenom" name="prenom" placeholder="Prenom">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Nom</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="nom" name="nom" placeholder="Nom">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Naissance</label>
                    <div class="col-sm-10">
                        <input type="date" class="form-control" id="date" name="date" placeholder="Date de naissance">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Adresse</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="adresse" name="adresse" placeholder="Adresse">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Profession</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="profession" name="profession" placeholder="Profession">
                    </div>
                </div>
                <div class="form-group row">
                    <label for="inputPassword" class="col-sm-2 col-form-label">Telephone</label>
                    <div class="col-sm-10">
                        <input type="text" class="form-control" id="phone" name="phone" placeholder="Telephone">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col col-sm-10 offset-sm-2">
                        <label class="form-check-label" ><input type="radio" name="genre"> Masculin</label>
                    </div>
                    <div class="col col-sm-10 offset-sm-2">
                        <label class="form-check-label"><input type="radio" name="genre"> Feminin</label>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-sm-10 offset-sm-2">
                        <button type="submit" class="btn btn-success" style="margin-bottom:10px;">Nouveau Patient</button>
                    </div>
                </div>
            </form>
        </div>  
    <div class="row" style="height:100px;">
    
    </div>
    @endsection