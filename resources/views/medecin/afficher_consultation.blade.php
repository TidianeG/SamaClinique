@extends('layouts.appmedecin')
    @section('content')
        <div class="container row">
            <div class=" p-3 col-12 col-sm-12 col-md-7">
                <div class="mb-2">
                    <h3>Detail de la consultation du <span style="color:blue;">{{date('d-m-Y',strtotime($consultation->date_consult)) ?? ''}}</span></h3>
                    <h4>Du patient <span style="color:blue;">{{$consultation->folder->patient->prenom_patient}} {{$consultation->folder->patient->nom_patient}}</span></h4>
                </div>
                <form action="#" method="post">
                    @csrf
                    <div class="form-group ">
                        <label for="inputEmail" class=" ">Numero dossier<span style="background-colol:red;">*</span></span></label>
                        <div class="row col-md-6">
                            <input type="text" class="form-control" id="num_folder" name="num_folder" value="{{$consultation->folder->num_folder}}"  style="color:red;font-weight:bold;" disabled>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12 col-sm-12 col-md-8">
                            <label for="inputEmail" class=" ">Date prise<span style="background-colol:red;">*</span></span></label>
                            <div class="">
                                <input type="date" class="form-control" id="date" name="date_prise"  value="{{date('Y-m-d',strtotime($consultation->date_consult)) ?? ''}}" disabled>
                            </div>
                        </div>
                        <div class="form-group col-12 col-sm-12 col-md-4">
                            <label for="inputEmail" class=" ">Heure prise<span style="background-colol:red;">*</span></span></label>
                            <div class="">
                                <input type="time" class="form-control" id="heure_prise" name="heure_prise" value="{{date('H:i:s',strtotime($consultation->date_consult)) ?? ''}}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12 col-sm-12 col-md-7">
                            <label for="inputPassword" class="">Poids</label>
                            <div class="">
                                <input type="double" class="form-control" id="nom" name="poid" placeholder="" value="{{$consultation->poids}}" disabled>
                            </div>
                        </div>
                        <div class="form-group col-12 col-sm-12 col-md-5">
                            <label for="inputPassword" class="">Taille</label>
                            <div class="">
                                <input type="number" class="form-control" id="taille" name="taille" placeholder="taille en cm" value="{{$consultation->taille}}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-12 col-sm-12 col-md-5">
                            <label for="inputPassword" class="">Tension</label>
                            <div class="">
                                <input type="text" class="form-control" id="tension" name="tension" placeholder="" value="{{$consultation->tension}}" disabled>
                            </div>
                        </div>
                        <div class="form-group col-12 col-sm-12 col-md-7">
                            <label for="inputPassword" class=" ">Temperature</label>
                            <div class="">
                                <input type="number" class="form-control" id="litemperatureeu" name="temperature" value="{{$consultation->temperature}}" disabled>
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="inputPassword" class="">Motif</label>
                        <div class="">
                            <textarea name="motif" class="form-control" id="" cols="30" rows="8" disabled>{{$consultation->motif}}</textarea>
                        </div>
                    </div>
                    
                </form>
            </div>
            <div class="p-3 col-12 col-sm-12 col-md-5">
                <div class="card shadow">
                    <div class="card-header">
                        <h2>Ajout traitement</h2> 
                    </div>
                    <div class="card-body">
                        <form action="" method="post">
                                    @csrf
                                    <div >
                                        
                                            <div class="form-group ">
                                                <label for="medoc" class="label-form ">Date Traitement:</label>
                                                <input type="date" class="form-control" id="date"  name="date">
                                            </div>
                                            <div class="form-group ">
                                                <label for="medoc" class="label-form ">Nom medicament:</label>
                                                <input type="text" class="form-control" id="medoc" name="medoc">
                                            </div> 
                                            <div class="form-group ">
                                                <label for="dose" class="label-form ">Dosage:</label>
                                                <input type="text" class="form-control" id="dosage" name="dosage">
                                            </div>
                                            <div class="form-group ">
                                                <label for="forme" class="label-form ">Forme:</label>
                                                <input type="text" class="form-control" id="forme" name="forme">
                                            </div>
                                            <div class="form-group ">
                                                <label for="quantite" class="label-form ">Quantité:</label>
                                                <input type="text" class="form-control" id="quantite"  name="quantite">
                                            </div>
                                            <div class="form-group ">
                                                <label for="posologie" class="label-form ">Posologie:</label>
                                                <input type="text" class="form-control" id="posologie" name="posologie">
                                            </div> 
                                            <div class="form-group ">
                                                <label for="dure" class="label-form ">Durée traitement:</label>
                                                <input type="text" class="form-control" id="dure" name="dure">
                                            </div>
                                    </div>
                                    <!--div class="d-flex justify-content-end"><a href="" id="traitementplus" class="btn btn-success">Plus</a></div-->
                                    <button type="submit" class="btn btn-primary">Valider</button>
                                    <button type="reset" class="btn btn-danger" id="fermetraitement">Annuler</button>
                        </form>
                    </div>
                </div>
            
            </div>
            <div class="d-flex justify-content-start m-3">
                <button class="btn btn-success">
                <i class="fas fa-download"></i>
                    Imprimer ordonnance
                </button>
            </div>
        </div>
    @endsection