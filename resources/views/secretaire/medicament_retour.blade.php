@extends('layouts.appsecretaire')
@section('content')
        <div class="" style="">
                <div class="card shadow" >
                    <div class="card-header py-3"> 
                        <div id="titre"><h3>Medicament à retourner</h3></div>
                    </div>
                    <div class="card-body" style="background-color:#081f3e ;">
                        <div class=" row justify-content-between">
                            <a class="navbar-brand d-none d-sm-inline-block form-inline mr-auto ml-md-3 mb-md-3 my-2 my-md-0 mw-100" href="#"><img src="{{asset('img/core-img/logo.png')}}" alt="Logo"></a>  
                        </div>
                        <div class="table-responsive">
                            <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr>
                                        <th>Nom</th>
                                        <th>Dosage</th>
                                        <th>Forme</th>
                                        <th>Laboratoire</th>
                                        <th>Date fabrication</th>
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
                <div class="modal fade" id="myModalmedoc">
                    <div class="modal-dialog modal-lg">
                        <div class="modal-content">
                        <!-- Modal Header -->
                            <div class="modal-header">
                                <a class="navbar-brand d-none d-sm-inline-block form-inline mr-auto ml-md-3 mb-md-3 my-2 my-md-0 mw-100" href="index.html"><img src="{{asset('img/core-img/logo.png')}}" alt="Logo"></a>
                                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                            </div>                        
                        <!-- Modal body -->
                            <div class="modal-body container"> 
                                <form action="{{route('ajout_medoc')}}" method="post">
                                    @csrf
                                        <div class="row">
                                            <div class="form-group col">
                                                <label for="inputPassword" style="color:red;" class="">Nom Medicament</label>
                                                <div class="">
                                                    <input type="text" class="form-control" id="" name="nom" placeholder="nom medoc">
                                                </div>
                                            </div>
                                            <div class="form-group col">
                                                <label for="inputPassword" style="color:red;" class="">Nom laboratoire</label>
                                                <div class="">
                                                    <input type="text" class="form-control" id="" name="labo" placeholder="laboratoire">
                                                </div>
                                            </div>
                                        </div>
                                    
                                        <div class="row">
                                            <div class="form-group col">
                                                <label for="inputPassword" style="color:red;" class="">Dosage</label>
                                                <div class="">
                                                    <input type="text" class="form-control" id="" name="dosage" placeholder="Dosage">
                                                </div>
                                            </div>
                                            <div class="form-group col">
                                                <label for="inputPassword" style="color:red;" class="">Forme</label>
                                                <div class="">
                                                    <input type="text" class="form-control" id="" name="forme" placeholder="montant paiement">
                                                </div>
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="form-group col">
                                                <label for="inputPassword" style="color:red;" class="">Date fabrication</label>
                                                <div class="">
                                                    <input type="date" class="form-control" id="" name="fabrique" >
                                                </div>
                                            </div>
                                            <div class="form-group col">
                                                <label for="inputPassword" style="color:red;" class="">Date d'expiration</label>
                                                <div class="">
                                                    <input type="date" class="form-control" id="" name="expire">                                    
                                                </div>
                                            </div>
                                            
                                        </div>
                                        <div class="row">
                                            <div class="form-group col-6">
                                                    <label for="inputPassword" style="color:red;" class="">Quantite</label>
                                                    <div class="">
                                                        <input type="number" class="form-control" id="" name="">                                    
                                                    </div>
                                            </div>
                                        </div>
                                        <div class="row justify-content-center ">
                                            <button type="submit" class="btn btn-success w-25">Valider</button>
                                        </div>        
                                </form>        
                            </div>      
                        </div>
                    </div>
                </div>
@endsection