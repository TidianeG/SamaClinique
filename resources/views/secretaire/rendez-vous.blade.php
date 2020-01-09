@extends('layouts.appsecretaire')
    @section('content')
        <div class="" style="background-color:rgba(255,255,255, 0.3); height:100%; margin-bottom:10px;">
            @if(session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
            @endif
            @if(session('danger'))
                <div class="alert alert-danger">{{session('danger')}}</div>
            @endif
            <div class=" row"  style="margin-top:50px; height:100%;">
            
                <div class="card col-xl-7 col-md-12  " >
                    <div class="card-header">
                        <div class="row justify-content-between"> 
                            <a href="#" id="listecons" style="width:auto;" class="btn btn-primary efficherv">
                                <i class="fas fa-list"></i>
                                liste des consultation
                            </a>
                            <a href="#" id="listerv" style="width:auto;" class="btn btn-primary fermerv">
                            <i class="fas fa-reply"></i>
                                retour au rendez-vous
                            </a>
                            <div class="">
                                <a href="#" class="btn btn-success" id="newrv">
                                    <i class="far fa-calendar-plus"></i>
                                    New rendez-vous</a>
                                <a href="#" class="btn btn-success" id="newcons">
                                    <i class="fas fa-stethoscope"></i>
                                    New consultation</a>
                            </div>
                        </div>
                        <div id="titre"><h3>Liste de tous les rendez-vous</h3></div>
                    </div>
                    <div class="card-body" style="border:2px solid #081f3e;background-color:#081f3e;"> 
                        <div id="myTable1"class="afficherv">
                            <table id="" class="table" style="height:auto; margin-left:5px;">
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
                                            <p><a href="{{route('editer_rv',['id'=>$rendv->id])}}" class="btn btn-primary"><i class="fas fa-edit"></i></a></p>
                                        </td>
                                        <td>
                                            <form action="{{route('delete_rv',['id'=>$rendv->id])}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger"  value="Delete" ><i class="fas fa-trash-alt"></i></button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div id="myTable2" class="fermerv">
                        <table id="myTable" class="table" style="height:auto;">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Patient</th>
                                    <th>Medecin</th>
                                    <th>Description</th>
                                    <th>Type paiement</th>
                                    <th>Montant</th>
                                    <th>Editer</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                                @foreach($consults as $consultation)
                                    <tr>
                                        <td>{{$consultation->date_consultation}}</td>
                                        <td>{{$consultation->patient->prenom_patient}} {{$consultation->patient->nom_patient}}</td>
                                        <td>{{$consultation->staff->prenom_staff}} {{$consultation->staff->nom_staff}}</td>
                                        <td>{{$consultation->description_consultation}}</td>
                                        <td>{{$consultation->type_payment}}</td>
                                        <td>{{$consultation->montant_payment}}</td>
                                        <td>
                                            <p><a href="{{route('editer_consultation',['id'=>$consultation->id])}}" class="btn btn-primary"><i class="fas fa-edit"></i></a></p>
                                        </td>
                                        <td>
                                            <form action="{{route('delete_consultation',['id'=>$consultation->id])}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger"  value="Delete" ><i class="fas fa-trash-alt"></i>Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach         
                            </tbody>
                        </table>
                    </div>
                    </div>
                   
                    
                </div>
                
                <div class="col-sm-12 col-md-10 col-xl-5 container" style="height:100%; background-color:white; ">
                            @if($errors->any())
                                @foreach($errors->all() as $error)
                                    <div class="alert alert-danger">{{$error}}</div>
                                @endforeach
                            @endif
                    <div class="card afficherv" id="inforv">
                        <img src="{{asset('images/medecin2.jpg')}}" alt="">
                        <div class="card-body">
                            <h3>N'esiter pas de prendre rendez-vous à Medilife</h3>
                            <p class="text-justify">
                                Prendre un rendez-vous avec un spécialiste ou un généraliste médical a toujours été un casse-tête pour le patient. Soit on est confronté à un long temps d’attente soit à une indisponibilité du  médecin. Ainsi, pour vous porter secours, la plateforme Medilife vous propose un service de prise de rendez-vous fiable et rapide.
                            </p>
                        </div>
                    </div>
                    <div class="fermerv"  id="rv" style="height:100%; margin-bottom:3px;margin-top:20px;">
                           
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
                                        <input type="date" class="form-control" id="date" name="daterv" placeholder="date">
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
                    <!----------------------------------------------------->
                    <div class="fermerv"  id="consult" style="height:100%; margin-bottom:3px;argin-top:20px;">
                        <form action="{{route('createconsultation')}}" method="post">
                            @csrf 
                            <div class="row">
                                <div class="form-group col">
                                    <label for="numerop" style="color:red;" class="">Numero Patient</label>
                                    <div class="">
                                    <input type="text" class="form-control" id="numero" name="numerop" placeholder="Entrer Numero">
                                    </div>
                                </div>
                                <div class="form-group col">
                                    <label for="medecin" style="color:red;" class="">Medecin</label>
                                    <div>
                                        <select name="medecinc" id="medecin" class="form-control custom-select" style="width:100%">
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
                                    <label for="inputPassword" style="color:red;" class="">Date consultation</label>
                                    <div class="">
                                        <input type="date" class="form-control" id="" name="datec" placeholder="date">
                                    </div>
                                </div>
                                <div class="form-group col">
                                    <label for="inputPassword" style="color:red;" class="">Heure consultation</label>
                                    <div class="">
                                        <input type="time" class="form-control" id="" name="heurec" placeholder="heure">
                                    </div>
                                </div>
                            </div>
                           
                            <div class="row">
                                <div class="form-group col">
                                    <label for="inputPassword" style="color:red;" class="">Type paiement</label>
                                    <div class="">
                                        <input type="text" class="form-control" id="" name="typep" placeholder="type paiement">
                                    </div>
                                </div>
                                <div class="form-group col">
                                    <label for="inputPassword" style="color:red;" class="">Montant paiement</label>
                                    <div class="">
                                        <input type="number" class="form-control" id="" name="montantp" placeholder="montant paiement">
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="form-group ">
                                    <label for="desc" style="color:red;" class="">Description</label>
                                    <div class="">
                                    <textarea name="descc" id="descrv" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div> 
                            
                            <button type="submit" class="btn btn-success">Valider</button>
                            <button type="reset" class="btn btn-danger" id="fermecons">Annuler</button>
                        </form>
                    </div>
                    <!----------------------------------------------------->
                </div>
            </div>
        </div>
        
    @endsection