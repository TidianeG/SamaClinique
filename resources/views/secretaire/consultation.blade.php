<div id="myTable2" class="fermerv">
                        <table id="myTable" class="table" style="height:auto;">
                            <thead>
                                <tr>
                                    <th>Date</th>
                                    <th>Patient</th>
                                    <th>Medecin</th>
                                    <th>Description</th>
                                    <th>Type paiement</th>
                                    <th>Montant</th>
                                    <th>Editer</th>
                                    <th>Delete</th>
                                </tr>
                            </thead>
                            <tbody>
                            
                                @foreach($consults as $consultation)
                                    <tr>
                                        <td>{{$consultation->date_consultation}}</td>
                                        <td>{{$consultation->patient->prenom_patient}} {{$consultation->patient->nom_patient}}</td>
                                        <td>{{$consultation->staff->prenom_staff}} {{$consultation->staff->nom_staff}}</td>
                                        <td>{{$consultation->description_consultation}}</td>
                                        <td>{{$consultation->type_payment}}</td>
                                        <td>{{$consultation->montant_payment}}</td>
                                        <td>
                                            <p><a href="{{route('editer_consultation',['id'=>$consultation->id])}}" class="btn btn-primary"><i class="fas fa-edit"></i></a></p>
                                        </td>
                                        <td>
                                            <form action="{{route('delete_consultation',['id'=>$consultation->id])}}" method="post">
                                                @csrf
                                                @method('delete')
                                                <button type="submit" class="btn btn-danger"  value="Delete" ><i class="fas fa-trash-alt"></i>Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach         
                            </tbody>
                        </table>
                    </div>




                    <div class="fermerv"  id="consult" style="height:100%; margin-bottom:3px;argin-top:20px;">
                        <form action="{{route('createconsultation')}}" method="post">
                            @csrf 
                            <div class="row">
                                <div class="form-group col">
                                    <label for="numerop" style="color:red;" class="">Numero Patient</label>
                                    <div class="">
                                    <input type="text" class="form-control" id="numero" name="numerop" placeholder="Entrer Numero">
                                    </div>
                                </div>
                                <div class="form-group col">
                                    <label for="medecin" style="color:red;" class="">Medecin</label>
                                    <div>
                                        <select name="medecinc" id="medecin" class="form-control custom-select" style="width:100%">
                                            <option value="">Selecttionner---</option>
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
                                        <input type="date" class="form-control" id="" name="datec" placeholder="date">
                                    </div>
                                </div>
                                <div class="form-group col">
                                    <label for="inputPassword" style="color:red;" class="">Heure consultation</label>
                                    <div class="">
                                        <input type="time" class="form-control" id="" name="heurec" placeholder="heure">
                                    </div>
                                </div>
                            </div>
                           
                            <div class="row">
                                <div class="form-group col">
                                    <label for="inputPassword" style="color:red;" class="">Type paiement</label>
                                    <div class="">
                                        <input type="text" class="form-control" id="" name="typep" placeholder="type paiement">
                                    </div>
                                </div>
                                <div class="form-group col">
                                    <label for="inputPassword" style="color:red;" class="">Montant paiement</label>
                                    <div class="">
                                        <input type="number" class="form-control" id="" name="montantp" placeholder="montant paiement">
                                    </div>
                                </div>
                            </div>
                            <div class="">
                                <div class="form-group ">
                                    <label for="desc" style="color:red;" class="">Description</label>
                                    <div class="">
                                    <textarea name="descc" id="descrv" cols="30" rows="10"></textarea>
                                    </div>
                                </div>
                            </div> 
                            
                            <button type="submit" class="btn btn-success">Valider</button>
                            <button type="reset" class="btn btn-danger" id="fermecons">Annuler</button>
                        </form>
                    </div>