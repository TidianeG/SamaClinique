@extends('layouts.appmedecin')
    @section('content')
        <!--Debut Modal-->
        <div class="row" style="height:50px;">
    
        </div>
                <div class="container pb-3" style="width:50%;border-radius:5px; background-color:#081f3e; height:auto;" >
                    <div class="row">
                        <a class="navbar-brand d-none d-sm-inline-block form-inline mr-auto ml-md-3 mb-md-3 my-2 my-md-0 mw-100" href="index.html"><img src="{{asset('img/core-img/logo.png')}}" alt="Logo"></a>
                    </div>
                        <hr style="background-color:white;">
                        <form action="{{route('update_medoc',['id'=>$medoc->id])}}" method="post">
                            @csrf 
                            @method('patch')
                            <div class="row">
                                <div class="form-group col">
                                    <label for="inputPassword" style="color:red;" class="">Nom Medicament</label>
                                    <div class="">
                                        <input type="text" class="form-control" id="" name="nom" value="{{$medoc->nom}}">
                                    </div>
                                </div>
                                <div class="form-group col">
                                    <label for="inputPassword" style="color:red;" class="">Nom laboratoire</label>
                                    <div class="">
                                        <input type="text" class="form-control" id="" name="labo" value="{{$medoc->labo}}">
                                    </div>
                                </div>
                            </div>
                           
                            <div class="row">
                                <div class="form-group col">
                                    <label for="inputPassword" style="color:red;" class="">Dosage</label>
                                    <div class="">
                                        <input type="text" class="form-control" id="" name="dosage" value="{{$medoc->dosage_drug}}">
                                    </div>
                                </div>
                                <div class="form-group col">
                                    <label for="inputPassword" style="color:red;" class="">Forme</label>
                                    <div class="">
                                        <input type="text" class="form-control" id="" name="forme" value="{{$medoc->forme}}">
                                    </div>
                                </div>
                            </div>
                            <div class="row">
                                <div class="form-group col">
                                    <label for="inputPassword" style="color:red;" class="">Date fabrication</label>
                                    <div class="">
                                        <input type="date" class="form-control" id="" name="fabrique" value="{{$medoc->date_fabrication}}">
                                    </div>
                                </div>
                                <div class="form-group col">
                                    <label for="inputPassword" style="color:red;" class="">Date d'expiration</label>
                                    <div class="">
                                        <input type="date" class="form-control" id="" name="expire" value="{{$medoc->date_peremtion}}">                                    </div>
                                </div>
                            </div>
                            
                            <button type="submit" class="btn btn-success">Valider</button>
                            <a href="{{route('pharmacie')}}" class="btn btn-danger" >Annuler</a>
                        </form>
                        </div>      
                     <div class="row" style="height:50px;">
    
                    </div>
    @endsection