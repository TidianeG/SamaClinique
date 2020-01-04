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
                        <form action="{{route('update_consultation',['id'=>$consult->id])}}" method="post">
                            @csrf
                            @method('patch') 
                            <div class="row">
                                <div class="form-group col">
                                    <label for="numerop" style="color:red;" class="">Numero Patient</label>
                                    <div class="">
                                    <input type="text" class="form-control" id="numero" name="numero" value="{{$consult->patient_id}}">
                                    </div>
                                </div>
                                <div class="form-group col">
                                    <label for="medecin" style="color:red;" class="">Medecin</label>
                                    <div>
                                        <select name="medecin" id="medecin" class="form-control custom-select" style="width:100%">
                                            <option value="{{$consult->staff_id}}">{{$consult->staff->prenom_staff}} {{$consult->staff->nom_staff}}</option>
                                            @foreach($medecin as $value)
                                                <option value="{{$value->id}}">Dr {{$value->prenom_staff}} {{$value->nom_staff}}</option>
                                            @endforeach                           
                                        </select>
                                    </div>
                                </div>
                            </div>                             
                            <div class="row">
                                <div class="form-group col">
                                    <label for="inputPassword" style="color:red;" class="">Date consultation</label>
                                    <div class="">
                                        <input type="datetime" class="form-control"  name="datec" value="{{$consult->date_consultation}}">
                                    </div>
                                </div>
                        
                            </div>
                           
                            <div class="row">
                                <div class="form-group col">
                                    <label for="inputPassword" style="color:red;" class="">Type paiement</label>
                                    <div class="">
                                        <input type="text" class="form-control" id="" name="typepayment" value="{{$consult->type_payment}}">
                                    </div>
                                </div>
                                <div class="form-group col">
                                    <label for="inputPassword" style="color:red;" class="">Montant paiement</label>
                                    <div class="">
                                        <input type="number" class="form-control" id="" name="montantpayment" value="{{$consult->montant_payment}}">
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="form-group ">
                                    <label for="desc" style="color:red;" class="">Description</label>
                                    <div class="">
                                    <textarea name="description" id="descrv" cols="30" rows="10">{{$consult->description_consultation}}</textarea>
                                    </div>
                                </div>
                            </div> 
                            
                            <button type="submit" class="btn btn-success">Valider</button>
                            <button type="reset" class="btn btn-danger" id="fermecons">Annuler</button>
                        </form>
                        </div>      
                     <div class="row" style="height:50px;">
    
                    </div>
    @endsection