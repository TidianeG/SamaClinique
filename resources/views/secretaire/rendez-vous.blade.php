@extends('layouts.appsecretaire')
    @section('content')
        <div class="" style="background-color:rgba(255,255,255, 0.3); height:auto; margin-bottom:10px;">
            @if(session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
            @endif
            @if(session('danger'))
                <div class="alert alert-danger">{{session('danger')}}</div>
            @endif
            <div class=" row"  style="margin-top:50px; height:100%;">
            
                <div class="card col-8 container" >
                    <div class="card-header">
                        <h3>Liste des des rendez-vous à venir</h3>
                    </div>
                    <div class="card-body" style="border:2px solid #081f3e;background-color:#081f3e;"> 
                    <table id="myTable" class="table" style="height:auto;">
                        <thead>
                            <tr>
                                <th>Nom</th>
                                <th>Adresse</th>
                                <th>Telephone</th>
                                <th>Description</th>
                                <th>Medecin</th>
                                <th>Date Appel</th>
                                <th>Editer</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>          
                            @foreach($rv as $rendv)
                                <tr>
                                    <td>{{$rendv->patient->prenom_patient}} {{$rendv->patient->nom_patient}}</td>
                                    <td>{{$rendv->patient->adresse_patient}}</td>
                                    <td>{{$rendv->patient->telephone_patient}}</td>
                                    <td>{{$rendv->description_appointment}}</td>
                                    <td>{{$rendv->staff->prenom_staff}} {{$rendv->staff->nom_staff}}</td>
                                    <td>{{$rendv->daterendez_appointment}}</td>
                                    <td>
                                        <p><a href="#" class="btn btn-primary">Editer</a></p>
                                    </td>
                                    <td>
                                        <p><a href="#" class="btn btn-danger">Delete</a></p>
                                    </td>
                                </tr>
                            @endforeach
                        </tbody>
                    </table>
                    <div class="row justify-content-center mt-5">
                        <a href="#" class="btn btn-success" id="newrv"><span>+</span> New rendez-vous</a>
                    </div>
                    </div>
                    <div class="card-footer">
                    
                    </div>
                </div>
                <div class="col-4" style="height:100%; background-color:white; ">
                    <div class="card afficherv" id="inforv">
                        <img src="{{asset('images/font2.jpg')}}" alt="">
                        <div class="card-body">
                            <h3>N'esiter pas de prendre rendez-vous à Medilife</h3>
                            <p class="text-justify">
                                Prendre un rendez-vous avec un spécialiste ou un généraliste médical a toujours été un casse-tête pour le patient. Soit on est confronté à un long temps d’attente soit à une indisponibilité du  médecin. Ainsi, pour vous porter secours, la plateforme Medilife vous propose un service de prise de rendez-vous fiable et rapide.
                            </p>
                        </div>
                    </div>
                    <div class="fermerv"  id="rv" style="height:100%; margin-bottom:3px;">
                        <form action="{{route('createrv')}}" method="post">
                            @csrf 
                            <div class="row">
                                <div class="form-group col">
                                    <label for="numero" style="color:red;" class="">Numero Patient</label>
                                    <div class="">
                                    <input type="text" class="form-control" id="numero" name="numero" placeholder="Entrer Numero">
                                    </div>
                                </div>
                                <div class="form-group col">
                                    <label for="medecin" style="color:red;" class="">Medecin</label>
                                    <div>
                                        <select name="medecin" id="medecin" class="form-control custom-select" style="width:100%">
                                            <option value="">Selecttionner---</option>
                                            @foreach($medecin as $value)
                                                <option value="{{$value->id}}">Dr {{$value->prenom_staff}} {{$value->nom_staff}}</option>
                                            @endforeach                           
                                        </select>
                                    </div>
                                </div>
                            </div>                             
                            <div class="row">
                                <div class="form-group col">
                                    <label for="inputPassword" style="color:red;" class="">Date Rendez-vous</label>
                                    <div class="">
                                        <input type="date" class="form-control" id="date" name="date" placeholder="date">
                                    </div>
                                </div>
                                <div class="form-group col">
                                    <label for="inputPassword" style="color:red;" class="">Heure</label>
                                    <div class="">
                                        <input type="time" class="form-control" id="heure" name="heure" placeholder="heure">
                                    </div>
                                </div>
                            </div>
                            
                            <div class="">
                                <div class="form-group ">
                                    <label for="desc" style="color:red;" class="">Description</label>
                                    <div class="">
                                    <textarea name="descrv" id="descrv" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div> 
                            
                            <button type="submit" class="btn btn-success">Valider</button>
                            <button type="reset" class="btn btn-danger" id="fermerv">Annuler</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
        
    @endsection