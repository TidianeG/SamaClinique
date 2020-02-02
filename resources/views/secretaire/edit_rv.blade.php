@extends('layouts.appsecretaire')
    @section('content')
        <!--Debut Modal-->
                <div class="container" style="width:90%;border-radius:5px; background-color:#081f3e; height:100%;" >
                    <div class="row">
                        <a class="navbar-brand d-none d-sm-inline-block form-inline mr-auto ml-md-3 mb-md-3 my-2 my-md-0 mw-100" href="index.html"><img src="{{asset('img/core-img/logo.png')}}" alt="Logo"></a>
                    </div>
                        <hr style="background-color:white;">
                        <form action="{{route('update_rv',['id'=>$rv->id])}}" method="post">
                            @csrf 
                            @method('patch')
                            <div class="row">
                                <div class="form-group col">
                                    <label for="numero" style="color:red;" class="">Numero Patient</label>
                                    <div class="">
                                    <input type="text" class="form-control" id="numero" name="numero" value="{{$rv->patient_id}}">
                                    </div>
                                </div>
                                <div class="form-group col">
                                    <label for="medecin" style="color:red;" class="">Medecin</label>
                                    <div>
                                        <select name="medecin" id="medecin" class="form-control custom-select" style="width:100%">
                                            <option value="{{$rv->staff_id}}">{{$rv->staff->prenom_staff}} {{$rv->staff->nom_staff}}</option>
                                            @foreach($medecin as $value)
                                                <option value="{{$value->id}}">Dr {{$value->prenom_staff}} {{$value->nom_staff}}</option>
                                            @endforeach                           
                                        </select>
                                    </div>
                                </div>
                            </div>                             
                            <div class="row">
                                <div class="form-group col-8">
                                    <label for="inputPassword" style="color:red;" class="">Date Rendez-vous</label>
                                    <div class="">
                                        <input type="datetime" class="form-control"  name="daterv" value="{{$rv->daterendez_appointment}}">
                                    </div>
                                </div>
                                
                            </div>
                            
                            <div class="">
                                <div class="form-group ">
                                    <label for="desc" style="color:red;" class="">Description</label>
                                    <div class="">
                                    <textarea name="descrv" id="descrv" cols="30" rows="10">{{$rv->description_appointment}}</textarea>
                                    </div>
                                </div>
                            </div> 
                            
                            <button type="submit" class="btn btn-success">Valider</button>
                            <a href="{{route('rendezvous')}}" class="btn btn-danger" >Annuler</a>
                        </form>
                        </div>      
                     <div class="row" style="height:50px;">
    
                    </div>
    @endsection