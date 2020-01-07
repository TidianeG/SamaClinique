    @extends('layouts.appmedecin')
        @section('content')
            <div class="row" style="height:100px;">
            @if(session('danger'))
                <div class="alert alert-danger">{{session('danger')}}</div>
            @endif
            </div>
            <div class="container" style="padding-top:25px;width:60%;border:2px solid #081f3e;background-color:#081f3e ;border-radius:4px;">
                <div class=" row justify-content-between">
                    <a class="navbar-brand d-none d-sm-inline-block form-inline mr-auto ml-md-3 mb-md-3 my-2 my-md-0 mw-100" href="index.html"><img src="{{asset('img/core-img/logo.png')}}" alt="Logo"></a>
                    <form action="{{route('recherche_dossier')}}" method="post">
                        @csrf 
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="numfolder"  placeholder="Recherche par numero dossier">
                            <div class="input-group-append">
                                <button class="btn btn-success"  type="submit">Go</button>
                            </div>
                        </div>
                    </form>
                </div>
                <table id="myTable" class="table table-hover" style="overflow:hedden; width:100%;">
                    <thead>
                        <tr>
                            <th>Prenom</th>
                            <th>Nom</th>
                            <th>Adresse</th>
                            <th>Telephone</th>
                            <th>Naissance</th>
                        </tr>
                    </thead>
                    <tbody>
                        @foreach($patients as $patient)
                        <tr class="clickable-row" data-href="{{route('afficher_dossier',['id'=>$patient->id])}}" style="cursor:pointer;">
                            <td>{{$patient->prenom_patient}}</td>
                            <td>{{$patient->nom_patient}}</td>
                            <td>{{$patient->adresse_patient}}</td>
                            <td>{{$patient->telephone_patient}}</td>
                            <td>{{$patient->datenaisse_patient}}</td>
                        </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
            <div class="row" style="height:100px;">

            </div>      
    @endsection