@extends('layouts.appsecretaire')
    @section('content')
        <div class="" style="">
            @if(session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
            @endif
            @if(session('danger'))
                <div class="alert alert-danger">{{session('danger')}}</div>
            @endif
                <div class="card shadow" >
                    <div class="card-header py-3 ">     
                        <div id="titre"><h3>Liste des rendez-vous  à venir</h3></div>
                    </div>
                    <div class="card-body" style="background-color:#081f3e ;"> 
                        <div class="table-responsive">
                            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Adresse</th>
                                        <th>Telephone</th>
                                        <th>Description</th>
                                        <th>Medecin</th>
                                        <th>Dat Rv</th>
                                        <th>Editer</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tfoot>
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
                                </tfoot>
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
    @endsection