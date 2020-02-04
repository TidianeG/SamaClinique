@extends('layouts.appsecretaire')
    @section('content')
    <div class="" style="">
                <div class="card shadow" >
                    <div class="card-header py-3"> 
                        <div id="titre"><h3>Recette de Medilife</h3></div>
                    </div>
                    <div class="card-body" style="background-color:#081f3e ;">
                        <div class=" row justify-content-between">
                            <a class="navbar-brand d-none d-sm-inline-block form-inline mr-auto ml-md-3 mb-md-3 my-2 my-md-0 mw-100" href="#"><img src="{{asset('img/core-img/logo.png')}}" alt="Logo"></a>  
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Date</th>
                                        <th>Dosage</th>
                                        <th>Forme</th>
                                        <th>Montant</th>
                                        <th>Type</th>
                                        <th>Date expiration</th>
                                        <th>Editer</th>
                                        <th>Delete</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    @foreach($medocs as $medoc)
                                        <tr class="clickable-row" data-href="" style="cursor:pointer;">
                                                <td>{{$medoc->nom}}</td>
                                                <td>{{$medoc->dosage_drug}}</td>
                                                <td>{{$medoc->forme}}</td>
                                                <td>{{$medoc->labo}}</td>
                                                <td>{{$medoc->date_fabrication}}</td>
                                                <td>{{$medoc->date_peremtion}}</td>
                                            <td>
                                                <p><a href="{{route('edit_medicament',['id'=>$medoc->id])}}" class="btn btn-primary"><i class="fas fa-edit"></i></a></p>
                                            </td>
                                            <td>
                                                <p><a class="btn btn-danger" href="#" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash-alt"></i></a></p>
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