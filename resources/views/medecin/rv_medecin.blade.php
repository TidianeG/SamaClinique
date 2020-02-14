@extends('layouts.appmedecin')
    @section('content')
        <div class="" style="background-color:rgba(255,255,255, 0.3); height:100%;">
            <div class=" row"  style=" height:100%;">
                <div class="card col-xl-7 col-md-12  " >
                    <div class="card-header">                       
                        <div id="titre"><h3>Liste de mes rendez-vous</h3></div>
                    </div>
                    <div class="card-body" style="background-color:white;"> 
                        <div class="table-responsive">
                            <table id="myTable" class="table" style="height:auto;">
                                <thead class="table-dark">
                                    <tr>
                                        <th>prenom et Nom</th>
                                        <th>Adresse</th>
                                        <th>Telephone</th>
                                        <th>Description</th>
                                        <th>Date</th>
                                    </tr>
                                </thead>
                                <tbody class="table-dark">          
                                    @foreach($rv as $rendv)
                                        <tr>
                                            <td>{{$rendv->patient->prenom_patient}} {{$rendv->patient->nom_patient ?? 'null'}}</td>
                                            <td>{{$rendv->patient->adresse_patient ?? 'null'}}</td>
                                            <td>{{$rendv->patient->telephone_patient ?? 'null'}}</td>
                                            <td>{{$rendv->description_appointment ?? 'null'}}</td>
                                            <td>{{$rendv->daterendez_appointment ?? 'null'}}</td>
                                        </tr>
                                    @endforeach
                                </tbody>
                            </table>
                        </div> 
                    </div>   
                </div>
                <div class="col-sm-12 col-md-10 col-xl-5 container" style="height:100%; background-color:white; ">
                    <div class="card afficherv" id="inforv">
                        <img src="{{asset('images/medecin3.jpg')}}" alt="">
                        <div class="card-body">
                            <h3>N'esiter pas de prendre rendez-vous à Medilife</h3>
                            <p class="text-justify">
                                Prendre un rendez-vous avec un spécialiste ou un généraliste médical a toujours été un casse-tête pour le patient. Soit on est confronté à un long temps d’attente soit à une indisponibilité du  médecin. Ainsi, pour vous porter secours, la plateforme Medilife vous propose un service de prise de rendez-vous fiable et rapide.
                            </p>
                        </div>
                    </div>
                </div>
    @endsection