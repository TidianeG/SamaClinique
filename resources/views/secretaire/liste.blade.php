@extends('layouts.appsecretaire')
@section('content')
    <div class="container">
        <div class="row justify-content-center bg-d" >
            <h2>Liste des Patients de la clinique</h2>
        </div>
        <table class="table table-hover table-striped table-dark">
            <thead>
                <tr>
                    <th>Nom</th>
                    <th>Prenom</th>
                    <th>Adresse</th>
                    <th>Telephone</th>
                    <th>Profession</th>
                    <th>Date de Naissance</th>
                    <th>Sexe</th>
                    <th>Modification</th>
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
                        <p><a href="#">Editer</a></p>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
        <a href="{{route('create_patient')}}" class="btn btn-success" style="margin-right:5px;">Nouveau Patient</a>
    </div>
@endsection