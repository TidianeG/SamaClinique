@extends('layouts.appsecretaire')
    @section('content')
        <div class="" style="background-color:rgba(255,255,255, 0.3);">
            @if(session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
            @endif
            @if(session('danger'))
                <div class="alert alert-danger">{{session('danger')}}</div>
            @endif
                <div class="card shadow mb-4 " >
                    <div class="card-header">
                        <div class="row justify-content-between">   
                            <div class="">
                                <a href="#" class="btn btn-success" data-toggle="modal" data-target="#myModalrv">
                                    <i class="far fa-calendar-plus"></i>
                                    New rendez-vous</a>    
                            </div>
                        </div>
                        <div id="titre"><h3>Liste de tous les rendez-vous</h3></div>
                    </div>
                    <div class="card-body " style=""> 
                        <div id="table-responsive" class="">
                            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
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
                </div>
            </div>     
        </div>
                <div class="modal fade" id="myModalrv">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <!-- Modal Header -->
                            <div class="modal-header">
                                <a class="navbar-brand d-none d-sm-inline-block form-inline mr-auto ml-md-3 mb-md-3 my-2 my-md-0 mw-100" href="index.html"><img src="{{asset('img/core-img/logo.png')}}" alt="Logo"></a>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>                        
                        <!-- Modal body -->
                            <div class="modal-body container">    
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
                        </div>
                    </div>
                </div>
    @endsection