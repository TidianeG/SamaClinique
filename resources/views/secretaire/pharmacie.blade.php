@extends('layouts.appsecretaire')
@section('content')
<div class="     m-3">
    <div class="row" style="padding-top:25px;">     
        <div class="card col-7" style="border:2px solid #ffffff;border-radius:4px;">
            <div class="card-header">
                <h2>La liste des Medicaments</h2>
            </div>
            <div class="card-body" style="background-color:#081f3e ;">
                <div class="row" style="height:auto;">
                @if(session('success'))
                    <div class="alert alert-success">{{session('success')}}</div>
                @endif
                </div>
                <div class=" row justify-content-between">
                    <a class="navbar-brand d-none d-sm-inline-block form-inline mr-auto ml-md-3 mb-md-3 my-2 my-md-0 mw-100" href="index.html"><img src="{{asset('img/core-img/logo.png')}}" alt="Logo"></a>  
                </div>
                <table id="myTable" class="table table-hover" style="overflow:hedden">
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
        <div class="col-5" style="height:100px;">
                <div class="alert alert-success" style="text-align:center;">Nouveau Medicament</div>
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
                                        <input type="date" class="form-control" id="" name="expire">                                    </div>
                                </div>
                            </div>
                            <button type="submit" class="btn btn-success">Valider</button>
                            <button type="reset" class="btn btn-danger">Annuler</button>
                    </form>        
        </div>      
    </div>
</div>
@endsection