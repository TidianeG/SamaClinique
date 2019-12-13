@extends('layouts.appsecretaire')
@section('content')
            <div class="row" style="height:100px;">
            @if(session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
            </div>
            <div class="container" style="padding-top:25px;border:2px solid #081f3e;background-color:#081f3e ;border-radius:4px;">
               
                <div class=" row justify-content-between">
                    <a class="navbar-brand d-none d-sm-inline-block form-inline mr-auto ml-md-3 mb-md-3 my-2 my-md-0 mw-100" href="index.html"><img src="{{asset('img/core-img/logo.png')}}" alt="Logo"></a>
                    <form action="#" method="post">
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" placeholder="Recherche par numero dossier">
                            <div class="input-group-append">
                                <button class="btn btn-success" type="submit">Go</button>
                            </div>
                        </div>
                    </form>
                </div>
                <table id="myTable" class="table" style="overflow:hedden">
                    <thead>
                        <tr>
                            <th>Numero</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Adresse</th>
                            <th>Telephone</th>
                            <th>Profession</th>
                            <th>Naissance</th>
                            <th>Sexe</th>
                            <th>Dossier</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($patients as $patient)
                        <tr>
                            <td>{{$patient->id}}</td>
                            <td>{{$patient->nom_patient}}</td>
                            <td>{{$patient->prenom_patient}}</td>
                            <td>{{$patient->adresse_patient}}</td>
                            <td>{{$patient->telephone_patient}}</td>
                            <td>{{$patient->profession_patient}}</td>
                            <td>{{$patient->datenaisse_patient}}</td>
                            <td>{{$patient->sexe_patient}}</td>
                            <td>
                                <p><a href="{{route('afficher_dossier',['id'=>$patient->id])}}" class="btn btn-primary">Afficher</a></p>
                            </td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row" style="height:100px;">

            </div>      
    @endsection