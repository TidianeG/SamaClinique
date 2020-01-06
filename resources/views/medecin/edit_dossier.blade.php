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
                            <form action="{{route('update_analyse',['id'=>$analyse->id])}}" method="post">
                            @csrf
                            @method('patch')
                                <div class="row">
                                    <div class="form-group col">
                                        <label for="inputEmail" class="" >Nom analyse<span style="background-colol:red;">*</span></span></label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="analyse" name="nomanalyse" value="{{$analyse->nom_analysis}}">
                                        </div>
                                    </div>
                                    <div class="form-group col">
                                        <label for="inputPassword" class="" >Date analyse</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" id="date" name="dateanalyse" value="{{$analyse->date_analysis}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row ">
                                    <div class="form-group col">
                                        <label for="inputPassword" class=" " >Designation</label>
                                        <div class="col-sm-10">
                                            <textarea name="designation" id="" cols="30" rows="10" >{{$analyse->designation_analysis}}</textarea>
                                        </div>
                                    </div>
                                    <div class="form-group col">
                                        <label for="inputPassword" class="" >Date Resultat</label>
                                        <div class="col-sm-10">
                                            <input type="date" class="form-control" id="dateresult" name="dateresultat" value="{{$analyse->dateresult_analysis}}">
                                        </div>
                                    </div>
                                </div>
                                <div class="row">
                                        <div class="form-group col">
                                            <label for="inputPassword" class="" >Description resultat</label>
                                            <div class="col-sm-10">
                                                <textarea name="description" id="" cols="30" rows="10" >{{$analyse->descriptresult_analysis}}</textarea>
                                            </div>
                                        </div>
                                </div>
                                
                                <div class="">         
                                    <button type="submit" class="btn btn-success">Modifier</button>
                                    <a href="{{route('afficher_dossier',['id'=>$analyse->id])}}" class="btn btn-danger" >Fermer</a>
                                </div>
                            </form>
                        </div>      
                     <div class="row" style="height:50px;">
    
                    </div>
    @endsection