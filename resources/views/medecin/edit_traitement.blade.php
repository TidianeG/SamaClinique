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
                        <form action="{{route('update_traitement',['id'=>$traitement->id])}}" method="post">
                                    @csrf
                                    <div >
                                        <div class="row justify-content-between">
                                            <div class="form-group ">
                                                <label for="medoc" class="label-form ">Date Traitement:</label>
                                                <input type="date" class="form-control" id="date"  name="date" value="{{$traitement->date}}">
                                            </div>
                                            <div class="form-group ">
                                                <label for="medoc" class="label-form ">Nom medicament:</label>
                                                <input type="text" class="form-control" id="medoc" name="medoc" value="{{$traitement->medoc}}">
                                            </div> 
                                            <div class="form-group ">
                                                <label for="dose" class="label-form ">Dosage:</label>
                                                <input type="text" class="form-control" id="dosage" name="dosage" value="{{$traitement->dosage}}">
                                            </div>
                                            <div class="form-group ">
                                                <label for="forme" class="label-form ">Forme:</label>
                                                <input type="text" class="form-control" id="forme" name="forme" value="{{$traitement->forme}}">
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="form-group ">
                                                <label for="quantite" class="label-form ">Quantité:</label>
                                                <input type="text" class="form-control" id="quantite"  name="quantite" value="{{$traitement->quantite}}">
                                            </div>
                                            <div class="form-group ">
                                                <label for="posologie" class="label-form ">Posologie:</label>
                                                <input type="text" class="form-control" id="posologie" name="posologie" value="{{$traitement->posologie}}">
                                            </div> 
                                            <div class="form-group ">
                                                <label for="dure" class="label-form ">Durée traitement:</label>
                                                <input type="text" class="form-control" id="dure" name="dure" value="{{$traitement->duree}}">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="">         
                                        <button type="submit" class="btn btn-success">Modifier</button>
                                            <a href="{{route('afficher_dossier',['id'=>$traitement->patient_id])}}" class="btn btn-danger" >fermer</a>
                                    </div>
                                </form>
                            </div>      
                     <div class="row" style="height:50px;">
    
                    </div>
    @endsection