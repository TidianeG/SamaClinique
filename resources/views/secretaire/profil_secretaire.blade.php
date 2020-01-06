@extends('layouts.appsecretaire')
    @section('content')
    <div class="container">
        <div>
            @if(session('success'))
                <div class="alert alert-success">{{session('success')}}</div>
            @endif
            @if(session('danger'))
                <div class="alert alert-danger">{{session('danger')}}</div>
            @endif
        </div>
            <div class="card ">
                <div class="card-header">
                    <h2>Iformations personnelles et compte</h2>
                </div>
                <div class="card-body ">
                    <div class="d-flex  justify-content-between">
                        <div class="card " style="border:none;">
                            <div class="card-body fadein  container" style="border:3px solid blue;border-radius:20px 20px;">
                                <?php
                                    if($staffs->poste_staff=="medecin" && $staffs->sexe_staff=="masculin"){
                                ?>
                                    <img class="card-img-top" style="width:100px;height:100px;" src="{{asset('images/medecinmal.jpg')}}" alt="Card image mascul">                                                     
                                <?php    
                                    }
                                    elseif($staffs->sexe_staff=="feminin" && $staffs->poste_staff=="medecin"){
                                ?>
                                        <img class="card-img-top" style="width:100px;height:100px;" src="{{asset('images/medecinfem.jpeg')}}" alt="Card image mascul">                                                     
                                <?php    
                                }
                                
                                    elseif($staffs->sexe_staff=="masculin"){
                                ?>
                                    <img class="card-img-top" style="width:100px;height:100px;" src="{{asset('images/avatar-mal.png')}}" alt="Card image mascul">                                                     
                                <?php    
                                }
                                    elseif($staffs->sexe_staff=="feminin"){
                                ?>
                                    <img class="card-img-top" style="width:100px;height:100px;" src="{{asset('images/avatar-fem.png')}}" alt="Card image femel">                                                     
                                <?php   
                                    }
                                ?>
                                <hr>
                                <h4 style="color:blue;">{{$staffs->prenom_staff}} {{$staffs->nom_staff}}</h4>
                            </div>
                        </div>
                        <div >
                            <form action="">
                                        <div class="mb-2">
                                            <div class="col">
                                                <div class="">Login : </div>
                                                <input class="form-control" type="text" style="color:blue; border:none;width:auto;" value="{{$user->email ?? ''}}" disabled>
                                            </div>
                                            <div class="col">
                                                <div class="">Mot de passe : </div>
                                                <input type="text" class="form-control" style="color:blue; border:none;width:auto;" value="{{$user->password ?? ''}}" disabled>
                                            </div>
                                        
                                            <div class="col">
                                                <div class="">Profil : </div>
                                                <input class="form-control" type="text" style="color:blue; border:none;width:auto;" value="{{$user->profil ?? ''}}" disabled>
                                            </div>
                                        </div>
                                        <div>
                                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#myModal">Modifier Password</a>
                                        </div>
                                </form>
                        </div>
                    </div><hr>
                    <div class=" " style="margin-top:25px; ">
                        <div class="row justify-content-between  m-0 p-0" >
                            
                            <div class="card col-xl-4 col-md-4 col-sm-5 mb-3" style="border-bottom:4px solid rgba(23, 111, 226, 0.87); width:auto;">
                                <div class="card-header" style="background-color:rgba(23, 111, 226, 0.87);text-align:center; color:white; font-size:18px; font-weight:bold;">Poste occupe: </div>
                                <div class="card-body" style="color:#081f3e;text-align:center;font-size:16px;">
                                    {{$staffs->poste_staff}}
                                </div>
                            </div>
                            <div class="card col-xl-4 col-md-3 col-sm-5 mb-3" style="border-bottom:4px solid rgba(23, 111, 226, 0.87); width:auto;">
                                <div class="card-header" style="background-color:rgba(23, 111, 226, 0.87);text-align:center; color:white; font-size:18px; font-weight:bold;">Sexe: </div>
                                <div class="card-body"  style="color:#081f3e;text-align:center;font-size:16px;">
                                    {{$staffs->sexe_staff}}
                                </div>
                            </div>
                            <div class="card col-xl-4 col-md-5 col-sm-12 mb-3" style="border-bottom:4px solid rgba(23, 111, 226, 0.87);  width:auto;">
                                <div class="card-header" style="background-color:rgba(23, 111, 226, 0.87);text-align:center; color:white; font-size:18px; font-weight:bold;">Email: </div>
                                <div class="card-body" style="color:#081f3e; text-align:center;font-size:16px;">
                                    {{$staffs->email_staff}}
                                </div>
                            </div>
                        </div>
                        <div class="row justify-content-between m-0 p-5">
                            <div class="card col-xl-3 col-md-5 col-sm-5 mb-3" style="border-bottom:4px solid rgba(23, 111, 226, 0.87); width:auto;">
                                <div class="card-header" style="background-color:rgba(23, 111, 226, 0.87); color:white; font-size:18px; font-weight:bold;">Adresse du Medecin: </div>
                                <div class="card-body"  style="color:#081f3e;text-align:center;font-size:16px;">
                                    {{$staffs->adresse_staff}}
                                </div>
                            </div>
                            <div class="card  col-xl-3 col-md-5 col-sm-5 mb-3" style="border-bottom:4px solid rgba(23, 111, 226, 0.87); width:auto;">
                                <div class="card-header" style="background-color:rgba(23, 111, 226, 0.87);text-align:center; color:white; font-size:18px; font-weight:bold;">Numéro de telephone: </div>
                                <div class="card-body"  style="color:#081f3e;text-align:center;font-size:16px;">
                                    {{$staffs->telephone_staff}}
                                </div>
                            </div>
                            <div class="card col-xl-3 col-md-5 col-sm-5 mb-3" style="border-bottom:4px solid rgba(23, 111, 226, 0.87); width:auto;">
                                <div class="card-header" style="background-color:rgba(23, 111, 226, 0.87);text-align:center; color:white; font-size:18px; font-weight:bold;">Specialite: </div>
                                <div class="card-body"  style="color:#081f3e;text-align:center;font-size:16px;">
                                    {{$staffs->specialite_staff}}
                                </div>
                            </div>
                            <div class="card col-xl-3 col-md-5 col-sm-5 mb-3" style="border-bottom:4px solid rgba(23, 111, 226, 0.87); width:auto;">
                                <div class="card-header" style="background-color:rgba(23, 111, 226, 0.87);text-align:center; color:white; font-size:18px; font-weight:bold;">Numero CNI: </div>
                                <div class="card-body"  style="color:#081f3e;text-align:center;font-size:16px;">
                                    {{$staffs->cnipass_staff}}
                                </div>
                            </div>
                        </div>
                    </div><hr>
                    
                    <div class="m-5">
              
                        <div class="row">
                            
                        </div>    
                    </div>
                </div>
            </div>
        </div>
        <!-----------------------------------debut modal---->
        <div class="modal fade" id="myModal">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                        <a class="navbar-brand d-none d-sm-inline-block form-inline mr-auto ml-md-3 mb-md-3 my-2 my-md-0 mw-100" href="index.html"><img src="{{asset('img/core-img/logo.png')}}" alt="Logo"></a>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>                        
                        <!-- Modal body -->
                        <div class="modal-body container">
                            <form action="{{route('update_password_secretaire',['id'=>$user->id])}}" method="post">
                                @csrf 
                                @method('patch')                              
                                <div class="row ">
                                    <div class="form-group col">
                                        <label for="inputPassword" class="col-sm-4 ">Nouveau password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="email" name="password" >
                                        </div>
                                    </div>
                                    <div class="form-group col">
                                        <label for="inputPassword" class="col-sm-4 ">Confirmer password</label>
                                        <div class="col-sm-10">
                                            <input type="password" class="form-control" id="adresse" name="confirme" >
                                        </div>
                                    </div>
                                </div>
                                
                                
                                <div class="" style="padding-bottom:15px;">         
                                    <button type="submit" class="btn btn-success">Modifier</button>
                                    <button type="reset" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>                         
            </div>
    @endsection