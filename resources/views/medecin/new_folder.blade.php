@extends('layouts.appmedecin')
    @section('content')
                        <div class="container  ">
                            <div class="">
                                <div class="card mb-3 mt-3 ">
                                    <div class="card-header ml-0">
                                        <h3>Création d'un nouveau dossier medical<cal</h3>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <form class="form-group" action="/action_page.php">
                                                <div class="row">
                                                    <div class="form-group col-5">
                                                        <label for="poid" class="label-form ">Numero dossier:</label>
                                                        <input type="text" class="form-control" id="poid"  style="width:100px; height:32px;" disabled>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-3">
                                                        <label for="poid" class="label-form ">Poids:</label>
                                                        <input type="text" class="form-control" id="poid" style="width:100px; height:32px;">
                                                    </div>
                                                    <div class="form-group col-3">
                                                        <label for="temp" class="label-form">Temperature:</label>
                                                        <input type="text" class="form-control" id="temp" style="width:100px; height:32px;">
                                                    </div>
                                                    <div class="form-group col-3">
                                                        <label for="tension" class="label-form">Tension:</label>
                                                        <input type="text" class="form-control" id="tension" style="width:100px; height:32px;">
                                                    </div>
                                                    <div class="form-group col-3">
                                                        <label for="taille" class="label-form">Taille:</label>
                                                        <input type="text" class="form-control" id="taille" style="width:100px; height:32px;">
                                                    </div>
                                                </div>
                                                
                                                <div class="row justify-content-around">    
                                                    <div class="form-group col-3">
                                                        <label for="poid" class="label-form ">Date Consultation:</label>
                                                        <input type="date" class="form-control" id="poid" style="width:200px; height:32px;" >
                                                    </div> 
                                                    <div class="form-group col-4">
                                                        <label for="groupe" class="label-form">Description:</label>
                                                        <textarea name="" id="" class="form-control" cols="15" rows="6"></textarea>
                                                    </div>                                              
                                                </div> 
                                        
                                        <div class="row justify-content-around">
                                            <div class="form-group col-4">
                                                <label for="ante" class="label-form">Antecedant:</label>
                                                <input type="text" class="form-control" id="ante">
                                            </div>
                                            <div class="form-group col-3">
                                                <label for="type" class="label-form">Type antecedant:</label>
                                                <select name="type" id="" class="form-control" style="width:25px; height:32px;">
                                                    <option value=""></option>
                                                    <option value="familial">Familial</option>
                                                    <option value="personnel">Personnel</option>
                                                    <option value="autre">Autres</option>
                                                </select>
                                            </div>
                                        </div>
                                        <div class="row justify-content-around">
                                            <div class="form-group col-3">
                                                <label for="groupe" class="label-form">Groupe Sanguin:</label>
                                                <select name="groupe" class="form-control" style="width:150px; height:35px;" id="">
                                                    <option value=""></option>
                                                    <option value="O">O</option>
                                                    <option value="O+">O+</option>
                                                     <option value="A+">A+</option>
                                                     <option value="A-">A-</option>
                                                     <option value="AB+">AB+</option>
                                                     <option value="AB-">AB-</option>
                                                     <option value="B+">B+</option>
                                                     <option value="B-">B-</option>
                                                </select>
                                            </div>
                                            <div class="form-group col-4">
                                                <label for="file" class="label-form">Radio:</label>
                                                <input type="file" class="form-control" name="file" id="file">
                                            </div>
                                        </div>
                                        <div class="alert alert-primary">Analyse et Resultat</div>
                                        <div class="row justify-content-around">
                                            <div class="form-group col-3">
                                                <label for="tension" class="label-form">Nom analyse:</label>
                                                <input type="text" class="form-control" id="tension" style="width:100px; height:32px;">
                                            </div>
                                            <div class="form-group col-4">
                                                <label for="pwd" class="label-form">Date analyse:</label>
                                                <input type="date" class="form-control" id="pwd">
                                            </div>
                                        </div>
                                       
                                        <div class="row justify-content-around">   
                                            <div class="form-group col-5">
                                                <label for="tension" class="label-form">Designation:</label>
                                                <textarea name="designation" id="" class="form-control" cols="15" rows="8"></textarea>
                                            </div>
                                            <div class="form-group col-5">
                                                <label for="tension" class="label-form">Description resultat:</label>
                                                <textarea name="description" id="" cols="15" class="form-control" rows="6"></textarea>
                                            </div>
                                            
                                        </div>
                                        <div>
                                            <div class="form-group col-4">
                                                <label for="pwd" class="label-form">Date resultat:</label>
                                                <input type="datetime-local" class="form-control" id="pwd">
                                            </div>
                                        </div>
                                    </form> 
                                </div>                    
                            </div>
                        </div>
                    </div>
                </div>

    @endsection