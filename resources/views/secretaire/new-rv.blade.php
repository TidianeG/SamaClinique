@extends('layouts.appsecretaire')
    @section('content')
        <div class="container" style="width:50%;margin-top:15px; border:2px solid #081f3e;background-color:#081f3e ;border-radius:4px;" >
            <form action="" method="post">
            @csrf 
                <div class="row">
                    <div class="form-group col-6">
                        <label for="numero" class="col-md-6 ">Numero Patient</label>
                        <div class="col-sm-10">
                           <input type="text" class="form-control" id="numero" name="numero" placeholder="Entrer Numero">
                        </div>
                    </div>
                </div>    
                <div class="row">
                    <div class="form-group col-6">
                        <label for="type" class="col-md-5">Medecin:</label>
                        <select name="type" id="medecin" class="form-control custom-select" >
                            <option value="">Selecttionner---</option>
                            @foreach($medecin as $value)
                                <option value="{{$value->id}}">Dr {{$value->prenom_staff}} {{$value->nom_staff}}</option>
                            @endforeach                           
                        </select>
                    </div>
                </div>
                
                <div class="row ">
                    <div class="form-group col-8">
                        <label for="inputPassword" class="col-md-5 ">Date Rendez-vous</label>
                        <div class="col-sm-10">
                            <input type="date" class="form-control" id="date" name="date" placeholder="date">
                        </div>
                    </div>
                    <div class="form-group col-4">
                        <label for="inputPassword" class="col-md-5 ">Heure</label>
                        <div class="col-sm-10">
                            <input type="time" class="form-control" id="heure" name="heure" placeholder="heure">
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="form-group ">
                        <label for="desc" class="col-md-5 ">Description</label>
                        <div class="col-sm-10">
                           <textarea name="descrv" id="descrv" cols="30" rows="10"></textarea>
                        </div>
                    </div>
                </div> 
                <button type="submit" class="btn btn-success">Valider</button>
                <button type="reset" class="btn btn-danger">Annuler</button>
            </form>
        </div>
    @endsection