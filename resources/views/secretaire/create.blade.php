@extends('layouts.appsecretaire')
    @section('content')
      <div class="container" style="width:50%;">
        <div class="row justify-content-center">
          <h2>Insertion de nouveau Patient</h2>
        </div> 
        <form action="{{route('ajouter_patient')}}" method="post">
        @csrf
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" id="sexe" placeholder="" name="sexe">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Enter Nom" name="nom">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" id="Prenom" placeholder="Enter Prenom" name="prenom">
            </div>
            <div class="col">
            Date: <input type="date" id="datepicker" name="date">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" id="phone" placeholder="Enter phone" name="phone">
            </div>
            <div class="col">
              <input type="text" class="form-control" placeholder="Enter Pofession" name="profession">
            </div>
          </div>
          <div class="row">
            <div class="col">
              <input type="text" class="form-control" id="adresse" placeholder="Enter adresse" name="adresse">
            </div>
            
          </div>
        <button type="submit" class="btn btn-primary mt-3">Submit</button>
        </form>
      </div>
    @endsection