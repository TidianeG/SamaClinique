@extends('layouts.appsecretaire')
  @section('content')

    <!-- Begin Page Content -->
          <div class="">

            <!-- Page Heading -->
            <h1 class="h3 mb-2 text-gray-800">La liste des patients de medilife</h1>
            

            <!-- DataTales Example -->
            <div class="card shadow mb-4">
              <div class="card-header">
                <a class="navbar-brand ml-25" href="#"><img src="{{asset('img/core-img/logo.png')}}" alt="Logo"></a>
              </div>
              <div class="card-body" style="background-color:#081f3e ;">
                <div class="table-responsive">
                  <table class="table table-hover" id="dataTable" width="100%" cellspacing="0">
                  <thead>
                        <tr>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Adresse</th>
                            <th>Telephone</th>
                            <th>Profession</th>
                            <th>Naissance</th>
                            <th>Lieu</th>
                            <th>Sexe</th>
                            <th>Editer</th>
                            <th>Delete</th>
                        </tr>
                    </thead>
                    <tfoot>
                        <tr>
                            <th>Numero</th>
                            <th>Nom</th>
                            <th>Prenom</th>
                            <th>Adresse</th>
                            <th>Telephone</th>
                            <th>Profession</th>
                            <th>Naissance</th>
                            <th>Lieu</th>
                            <th>Sexe</th>
                            <th>Editer</th>
                            <th>Delete</th>
                        </tr>
                    </tfoot>
                    <tbody>
                        @foreach($patients as $patient)
                            <tr class="clickable-row" data-href="{{route('afficher_patient',['id'=>$patient->id])}}" style="cursor:pointer;">
                                    <td>{{$patient->num_patient}}</td>
                                    <td>{{$patient->nom_patient}}</td>
                                    <td>{{$patient->prenom_patient}}</td>
                                    <td>{{$patient->adresse_patient}}</td>
                                    <td>{{$patient->telephone_patient}}</td>
                                    <td>{{$patient->profession_patient}}</td>
                                    <td>{{date('d-m-Y',strtotime($patient->datenaisse_patient))}}</td>
                                    <td>{{$patient->lieu_patient}}</td>
                                    <td>{{$patient->sexe_patient}}</td>
                                
                                <td>
                                    <p><a href="{{route('editer_patient',['id'=>$patient->id])}}" class="btn btn-primary"><i class="fas fa-edit"></i></a></p>
                                </td>
                                <td>
                                    <p><a class="btn btn-danger" href="#" data-toggle="modal" data-target="#deleteModal"><i class="fas fa-trash-alt"></i></a></p>
                                </td>
                            </tr>
                        
                        <div class="modal fade" id="deleteModal" tabindex="-1" role="dialog" aria-labelledby="labelModalDelete" aria-hidden="true">
                            <div class="modal-dialog" role="document">
                                <div class="modal-content">
                                    <div class="modal-header">
                                        <div><a class="navbar-brand d-none d-sm-inline-block form-inline mr-auto ml-md-3 mb-md-3 my-2 my-md-0 mw-100" href="index.html"><img src="{{asset('img/core-img/logo.png')}}" alt="Logo"></a></div>
                                        
                                        <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                                            <span aria-hidden="true">×</span>
                                        </button>
                                    </div>
                                    <div class="modal-body" >
                                        <h5 style="color:white;">Voulez vous supprimer le patient?</h5>
                                        <p style="color:white;">Si vous Selectionner <span class="bg-danger">Oui</span>  vous ne pourrez plus revenir en arriere.</p>
                                        <p style="color:white;">Selectionner <span class="bg-secondary">Cancel</span> pour annuler.</p>
                                    </div>
                                                                       
                                    <div class="modal-footer">
                                        <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                                        <form action="/secretaire/liste/{{$patient->id}}" method="post">
                                            @csrf
                                            @method('delete')
                                            <input type="submit" class="btn btn-danger" name="delete" value="Oui">
                                        </form>
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>

          </div>
          <!-- /.container-fluid -->
    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
      <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
              <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">×</span>
              </button>
            </div>
            <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
            <div class="modal-footer">
                <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
                <a class="btn btn-primary" href="login.html">Logout</a>
            </div>
          </div>
        </div>
      </div>
      <!--Debut Modal-->
      
@endsection