    @extends('layouts.appmedecin')
        @section('content')

            <div class="mb-2" style="height:auto;">
                <div class="mb-2">
                    @if(session('danger'))
                        <div class="alert alert-danger">{{session('danger')}}</div>
                    @endif
                </div>
                <div class="mb-2">
                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#myModal_folder">new folder</a>
                </div>
            </div>
            <div class="container" style="width:100%;border:2px solid #081f3e;background-color:#081f3e ;border-radius:4px;">
                <div class=" row justify-content-between">
                    <a class="navbar-brand d-none d-sm-inline-block form-inline mr-auto ml-md-3 mb-md-3 my-2 my-md-0 mw-100" href="index.html"><img src="{{asset('img/core-img/logo.png')}}" alt="Logo"></a>
                    <form action="{{route('recherche_dossier')}}" method="post">
                        @csrf 
                        <div class="input-group mb-3">
                            <input type="text" class="form-control" name="numfolder"  placeholder="Recherche par numero dossier">
                            <div class="input-group-append">
                                <button class="btn btn-success"  type="submit">Go</button>
                            </div>
                        </div>
                    </form>
                </div>
                <div class="table-responsive">
                    <table id="myTable" class="table table-hover" style="overflow:hedden; width:100%;">
                        <thead>
                            <tr>
                                <th>Numero</th>
                                <th>Prenom</th>
                                <th>Nom</th>
                                <th>Adresse</th>
                                <th>Telephone</th>
                                <th>Naissance</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($patients as $patient)
                            <tr class="clickable-row" data-href="{{route('afficher_dossier',['id'=>$patient->id])}}" style="cursor:pointer;">
                                <td>{{$patient->num_patient}}</td>
                                <td>{{$patient->prenom_patient}}</td>
                                <td>{{$patient->nom_patient}}</td>
                                <td>{{$patient->adresse_patient}}</td>
                                <td>{{$patient->telephone_patient}}</td>
                                <td>{{$patient->datenaisse_patient}}</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>        
            </div>

            <div class="modal fade" id="myModal_folder">
                <div class="modal-dialog modal-lg">
                    <div class="modal-content">
                        <!-- Modal Header -->
                        <div class="modal-header">
                        <a class="navbar-brand d-none d-sm-inline-block form-inline mr-auto ml-md-3 mb-md-3 my-2 my-md-0 mw-100" href="index.html"><img src="{{asset('img/core-img/logo.png')}}" alt="Logo"></a>
                            <button type="button" class="close" data-dismiss="modal">&times;</button>
                        </div>                        
                        <!-- Modal body -->
                        <div class="modal-body container">
                            <form action="{{route('creer_folder')}}" method="post">
                            @csrf
                                <div class="row mb-5">
                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                        <label for="inputEmail" class="col-sm-2 ">Numero patient<span style="background-colol:red;">*</span></span></label>
                                        <div class="col-sm-10">
                                            <input type="text" class="form-control" id="prenom" name="num_patient" placeholder="Entrer numero patient">
                                        </div>
                                    </div>
                                    <div class="form-group col-12 col-sm-12 col-md-6">
                                        <label for="inputPassword" class="col-sm-2 ">Groupe Sanguin</label>
                                        <div class="col-sm-10">
                                            <select name="groupe" id="" class="form-control">
                                                <option value="A+">A+</option>
                                                <option value="A-">A-</option>
                                                <option value="AB+">AB+</option>
                                                <option value="AB-">AB-</option>
                                                <option value="B+">B+</option>
                                                <option value="B-">B-</option>
                                                <option value="O+">O+</option>
                                                <option value="O-">O-</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>
                                
                                <div class="">         
                                    <button type="submit" class="btn btn-success">Enregistrer</button>
                                    <button type="reset" class="btn btn-danger" data-dismiss="modal">Close</button>
                                </div>
                            </form>
                        </div>      
                        <!-- Modal footer -->                
                    </div>
                </div>
            </div>

    @endsection