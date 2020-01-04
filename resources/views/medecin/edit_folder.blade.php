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
                                <form class="form-group" action="" method="post" style="width:100%;">
                                    @csrf
                                    @method('patch')
                                                <div class="row mb-3">
                                                    <div class="form-group col">
                                                        <label for="poid" class="">Poids:</label>
                                                        <input type="text" class="form-control" name="poid" value="{{$folders->poids_folder ?? 'null'}}"  >
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="temp" class="">Temperature:</label>
                                                        <input type="text" class="form-control" name="temperature" value="{{$folders->temperature_folder ?? 'null'}}" >
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="temp" class="">Taille:</label>
                                                        <input type="text" class="form-control" name="taille" value="{{$folders->taille_folder ?? 'null'}}" >
                                                    </div>
                                                </div>
                                                
                                                <div class="row mb-3 justify-content-around">    
                                                    <div class="form-group col">
                                                        <label for="poid" class="">Date d'enregistrement:</label>
                                                        <input type="datetime" class="form-control"  value="{{$folders->created_at ?? 'null'}}" disabled>
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="tension" class="">Tension:</label>
                                                        <input type="text" class="form-control" name="tension" value="{{$folders->tension_folder ?? 'null'}}">
                                                    </div>                                               
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="form-group col">
                                                        <label for="ante" class="">Antecedant:</label>
                                                        <input type="text" class="form-control" name="antecedant" value="{{$folders->antecedant_folder ?? 'null'}}" >
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="type" class="">Type antecedant:</label><br>
                                                        <select name="type" id="" class="form-control" >
                                                            <option value="{{$folders->typeentec_folder ?? 'null'}}">{{$folders->typeentec_folder ?? 'null'}}</option>
                                                            <option value="familial">Familial</option>
                                                            <option value="personnel">Personnel</option>
                                                            <option value="autre">Autres</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="form-group col">
                                                        <label for="groupe" class="">Groupe Sanguin:</label><br>
                                                        <input type="text" class="form-control" name="groupe" value="{{$folders->groupesang_folder ?? 'null'}}" disabled >
                                                        
                                                    </div>
                                                    
                                                </div>
                                                <div class="">         
                                                    <button type="submit" class="btn btn-success">Modifier</button>
                                                    <button type="reset" class="btn btn-danger" >Close</button>
                                                </div>
                                            </form>
                                            </div>      
                     <div class="row" style="height:50px;">
    
                    </div>
    @endsection