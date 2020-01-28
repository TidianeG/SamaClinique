@extends('layouts.appadmin')
@section('content')
<div class="container" style="padding-top:25px;height:100%;">     
        <div class="card" style="background-color:#081f3e;overflow-x:scroll;border:2px solid #ffffff;border-radius:4px;height:100%;">
            <div class="card-header" style="background-color:white;">
                <h2>La liste de tous les patiens</h2>
            </div>
            <div class="card-body" style="background-color:#081f3e ;overflow-x:scroll;">
                <div class=" row justify-content-between">
                    <a class="navbar-brand d-none d-sm-inline-block form-inline mr-auto ml-md-3 mb-md-3 my-2 my-md-0 mw-100" href="index.html"><img src="{{asset('img/core-img/logo.png')}}" alt="Logo"></a>
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
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($patients as $patient)
                            <tr class="clickable-row" data-href="{{route('afficher_patientAdmin',['id'=>$patient->id])}}" style="cursor:pointer;">
                                    <td>{{$patient->nom_patient}}</td>
                                    <td>{{$patient->prenom_patient}}</td>
                                    <td>{{$patient->adresse_patient}}</td>
                                    <td>{{$patient->telephone_patient}}</td>
                                    <td>{{$patient->profession_patient}}</td>
                                    <td>{{$patient->datenaisse_patient}}</td>
                                    <td>{{$patient->lieu_patient}}</td>
                                    <td>{{$patient->sexe_patient}}</td>
                            </tr>                        
                        @endforeach
                    </tbody>
                </table>
            </div>
           </div>
    </div>
            
    @endsection