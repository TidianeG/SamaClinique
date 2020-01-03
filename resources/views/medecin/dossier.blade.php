@extends('layouts.appmedecin')
    @section('content')
        <div style="margin-top:10px;"><a href="{{route('patients')}}" class="btn btn-primary" style="width:auto;"><i class="fas fa-long-arrow-alt-left"></i>Retour a la liste des patients</a></div>       
        <div class="row">
            <div class="col-7 mt-3 mb-2 afficherv" id="folder" style="height:100%;">
                    <div class="alert alert-primary">
                        <h4>Dosssier Medical de: <span style="color:blue">{{$patients->prenom_patient ?? ''}}  {{$patients->nom_patient ?? ''}}</span>
                        </h4>
                    </div> 
                    <div class="row" style="height:auto;">
                        @if(session('success'))
                            <div class="alert alert-success">{{session('success')}}</div>
                        @endif
                    </div>                          
                    <!-- Nav tabs -->
                    <ul class="nav nav-tabs" style="height:auto;">
                        <li class="nav-item">
                            <a class="nav-link active" href="#home">Etat Civil</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#menu1">Résumé Clinque</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#menu2">Bilan Paraclinique</a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link" href="#menu3">Traitement</a>
                        </li>
                    </ul>
                <!-- Tab panes -->
                    <div class="container tab-content border mb-2" style=" background-color:rgba(255, 255, 255, 0.5); border-left:5px solid #081f3e; height:auto;">
                        <div id="home" class="container tab-pane active"><br>
                            <h3>Etat Civil</h3>
                                <div class="container d-flex justify-content-center" style="border-left:10px solid rgba(23, 111, 226, 0.87);background-color:white; border-radius:15px 15px;">
                                    <div class="" style="width:90%; ">
                                        <div class="card " style="border:none;">
                                            <div class="card-body fadein  container" >
                                                <?php
                                                    if($patients->sexe_patient=="masculin"){
                                                ?>
                                                    <img class="card-img-top img-cercle" style="width:100px;height:100px;" src="{{asset('images/avatar-mal.png')}}" alt="Card image mascul">                                                     
                                                <?php    
                                                }
                                                    elseif($patients->sexe_patient=="feminin"){
                                                ?>
                                                    <img class="card-img-top img-cercle" style="width:100px;height:100px;" src="{{asset('images/avatar-fem.png')}}" alt="Card image femel">                                                     
                                                <?php   
                                                    }
                                                ?>
                                               
                                            </div>
                                        </div>
                                        <div class="row">
                                            <div class="col-4 mb-5">
                                                <div class=""> Numero patient : </div>
                                                <input type="text" class="form-control" style="color:blue; border:none;" value="{{$patients->id ?? ''}}" disabled>
                                            </div>
                                        </div>
                                        <div class="row mb-5">
                                            <div class="col">
                                                <div class=""> Prenom : </div>
                                                <input type="text" class="form-control" style="color:blue; border:none;" value="{{$patients->prenom_patient ?? ''}}" disabled>
                                            </div>
                                            <div class="col">
                                                <div class="">Nom : </div>
                                                <input type="text" class="form-control" style="color:blue; border:none;" value="{{$patients->nom_patient ?? ''}}" disabled>
                                            </div>
                                        </div>
                                        <div class="row mb-5">
                                            <div class="col">
                                                <div class=""> Née le : </div>
                                                <input type="date" class="form-control" style="color:blue; border:none;" value="{{$patients->datenaisse_patient ?? ''}}" disabled>
                                            </div>
                                            <div class="col">
                                                <div class="">A : </div>
                                                <input type="text" class="form-control" style="color:blue; border:none;" value="{{$patients->lieu_patient ?? ''}}" disabled>
                                            </div>
                                        </div>
                                        <div class="row mb-5">
                                            <div class="col">
                                                <div class="">Adresse : </div>
                                                <input class="form-control" type="text" style="color:blue; border:none;" value="{{$patients->adresse_patient ?? ''}}" disabled>
                                            </div>
                                            <div class="col">
                                                <div class="">Sexe : </div>
                                                <input type="text" class="form-control" style="color:blue; border:none;" value="{{$patients->sexe_patient ?? ''}}" disabled>
                                            </div>
                                        
                                            <div class="col">
                                                <div class="">Profession : </div>
                                                <input class="form-control" type="text" style="color:blue; border:none;" value="{{$patients->profession_patient ?? ''}}" disabled>
                                            </div>
                                        </div>
                                    </div>                          
                                </div>
                            </div>
                            <div id="menu1" class="container tab-pane fade " style="height:100%;">
                                <h3>Résumé Clinique</h3>
                                        <div class="container d-flex justify-content-center" style="background-color:white;border-left:10px solid rgba(23, 111, 226, 0.87); border-radius:15px 15px;">
                                            <form class="form-group" action="/action_page.php" style="width:100%;">
                                                <div class="card " style="border:none;">
                                                    <div class="card-body fadein  container" >
                                                        <?php
                                                            if($patients->sexe_patient=="masculin"){
                                                        ?>
                                                            <img class="card-img-top img-cercle" style="width:100px;height:100px;" src="{{asset('images/avatar-mal.png')}}" alt="Card image mascul">                                                     
                                                        <?php    
                                                        }
                                                            elseif($patients->sexe_patient=="feminin"){
                                                        ?>
                                                            <img class="card-img-top img-cercle" style="width:100px;height:100px;" src="{{asset('images/avatar-fem.png')}}" alt="Card image femel">                                                     
                                                        <?php   
                                                            }
                                                        ?>
                                                    
                                                    </div>  
                                                </div> 
                                                <div class="row mb-3">
                                                    <div class="col-4">
                                                        <label for="poid" class="label-form ">Numero dossier:</label>
                                                        <input type="text" class="form-control" style="border:none;" value="{{$folders->id ?? 'null'}}"  disabled>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="form-group col">
                                                        <label for="poid" class="label-form ">Poids:</label>
                                                        <input type="text" class="form-control" value="{{$folders->poids_folder ?? 'null'}}" style="border:none;" disabled>
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="temp" class="label-form">Temperature:</label>
                                                        <input type="text" class="form-control" value="{{$folders->temperature_folder ?? 'null'}}" disabled style="border:none;">
                                                    </div>
                                                </div>
                                                
                                                <div class="row mb-3 justify-content-around">    
                                                    <div class="form-group col">
                                                        <label for="poid" class="label-form ">Date Consultation:</label>
                                                        <input type="date" class="form-control" value="{{$folders->created_at ?? 'null'}}" disabled style="border:none;">
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="tension" class="label-form">Tension:</label>
                                                        <input type="text" class="form-control" value="{{$folders->tension_folder ?? 'null'}}" disabled style="border:none;">
                                                    </div>                                               
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="form-group col">
                                                        <label for="ante" class="label-form">Antecedant:</label>
                                                        <input type="text" class="form-control" id="ante" value="{{$folders->antecedant_folder ?? 'null'}}" disabled style="border:none;">
                                                    </div>
                                                    <div class="form-group col">
                                                        <label for="type" class="label-form">Type antecedant:</label><br>
                                                        <select name="type" id="" class="form-control" style="border:none;" disabled>
                                                            <option value="{{$folders->typeentec_folder ?? 'null'}}">{{$folders->typeentec_folder ?? 'null'}}</option>
                                                            <option value="familial">Familial</option>
                                                            <option value="personnel">Personnel</option>
                                                            <option value="autre">Autres</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="row mb-3">
                                                    <div class="form-group col">
                                                        <label for="groupe" class="label-form">Groupe Sanguin:</label><br>
                                                        <select name="groupe" class="form-control" id="" style="border:none;" disabled>
                                                            <option value="{{$folders->groupesang_folder ?? 'null'}}">{{$folders->groupesang_folder ?? 'null'}}</option>
                                                            <option value="O">O</option>
                                                            <option value="O+">O+</option>
                                                            <option value="A+">A+</option>
                                                        </select>
                                                    </div>
                                                    
                                                </div>
                                                <div class="row">
                                                    <div class="form-group col-6">
                                                        <label for="groupe" class="label-form">Description:</label>
                                                        <textarea name="" id="" class="form-control" cols="15" rows="6" disabled style="border:none;"></textarea>
                                                    </div>
                                                </div>
                                            </form>
                                                                 
                                        </div>
                                                                          
                                    </div>
                            
                            <div id="menu2" class="container tab-pane fade" style="height:100%;background-color:white;">
                                <h3>Bilan Paraclinique</h3>
                                <div class="container" style="background-color:white;border-left:10px solid rgba(23, 111, 226, 0.87); border-radius:15px 15px;">
                                    <div class="card " style="border:none;">
                                    
                                        <div class="card-body fadein  container" >
                                            <?php
                                                if($patients->sexe_patient=="masculin"){
                                            ?>
                                                    <img class="card-img-top img-cercle" style="width:100px;height:100px;" src="{{asset('images/avatar-mal.png')}}" alt="Card image mascul">                                                     
                                            <?php    
                                                }
                                                elseif($patients->sexe_patient=="feminin"){
                                            ?>
                                                    <img class="card-img-top img-cercle" style="width:100px;height:100px;" src="{{asset('images/avatar-fem.png')}}" alt="Card image femel">                                                     
                                            <?php   
                                                }
                                            ?>
                                                        
                                        </div>  
                                    
                                    </div>
                                    <div class="row justify-content-between alert alert-primary">Liste des analyses et résultat du patient</div>
                                    <table class="table ">
                                        <thead class="table-dark">
                                            <tr>
                                                <th>Nom analyse</th>
                                                <th>Date analyse</th>
                                                <th>Designation</th>
                                                <th>Date resultat</th>
                                                <th>Decription Resultat</th>
                                            </tr>
                                        </thead>
                                        <tbody class="table-dark">
                                            @foreach($analyse as $analysis)
                                                <tr>
                                                    <td>{{$analysis->nom_analysis ?? 'null'}}</td>
                                                    <td>{{$analysis->date_analysis ?? 'null'}}</td>
                                                    <td>{{$analysis->designation_analysis ?? 'null'}}</td>
                                                    <td>{{$analysis->dateresult_analysis ?? 'null'}}</td>
                                                    <td>{{$analysis->descriptresult_analysis ?? 'null'}}</td>
                                                </tr>
                                            @endforeach
                                        </tbody>
                                    </table>                            
                            </div>
                        </div>  
                        <div id="menu3" class="container tab-pane fade" style="height:100%; background:white;"><br>     
                            <h3>Traitement</h3>
                            <div class="" style="background-color:white;border-left:10px solid rgba(23, 111, 226, 0.87); border-radius:15px 15px;">
                                <div class="card " style="border:none;">
                                
                                    <div class="card-body fadein  container" >
                                        <?php
                                            if($patients->sexe_patient=="masculin"){
                                        ?>
                                                <img class="card-img-top img-cercle" style="width:100px;height:100px;" src="{{asset('images/avatar-mal.png')}}" alt="Card image mascul">                                                     
                                        <?php    
                                            }
                                            elseif($patients->sexe_patient=="feminin"){
                                        ?>
                                                <img class="card-img-top img-cercle" style="width:100px;height:100px;" src="{{asset('images/avatar-fem.png')}}" alt="Card image femel">                                                     
                                        <?php   
                                            }
                                        ?>
                                                    
                                    </div>  
                                 
                                </div>
                                <table class="table ">
                                    <thead class="table-dark">
                                        <tr>
                                            <th>Date</th>
                                            <th>Medicament</th>
                                            <th>Dosage</th>
                                            <th>Forme</th>
                                            <th>Quantitie</th>
                                            <th>Posologie</th>
                                            <th>Durée Traitement</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                            <td></td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
            </div>
            <!-----------------------------creation newdossier-->
            <div class="col-7 mt-3 fermerv mb-2" id="newfolder" style="height:100%;">
                    <div class="container  ">
                            <a href="" id="retourfolder" class="btn btn-primary"><i class="fas fa-long-arrow-alt-left"></i>Retour</a>
                            <div class="" >
                                <div class="card mb-3 mt-3 ">
                                    <div class="card-header ml-0">
                                        <h3>Création d'un nouveau dossier medical</h3>
                                    </div>
                                    <div class="card-body">
                                        <div>
                                            <form class="form-group" action="{{route('create_folder',['id'=>$patients->id])}}" method="post">
                                                @csrf
                                                <div class="row justify-content-between">
                                                    <div class="form-group ">
                                                        <label for="poid" class="label-form ">Numero patient:</label>
                                                        <input type="text" class="form-control" name="numpatient"  style="width:100px; height:32px;">
                                                    </div>
                                                    <div class="form-group ">
                                                        <label for="temp" class="label-form">Temperature:</label>
                                                        <input type="text" class="form-control" name="temperature" style="width:100px; height:32px;">
                                                    </div>
                                                    <div class="form-group ">
                                                        <label for="poid" class="label-form ">Poids:</label>
                                                        <input type="text" class="form-control" name="poid" style="width:100px; height:32px;">
                                                    </div>
                                                </div>
                                                <div class="row justify-content-between">
                                                   <div class="form-group ">
                                                        <label for="tension" class="label-form">Tension:</label>
                                                        <input type="text" class="form-control" name="tension" style="width:100px; height:32px;">
                                                    </div>
                                                    <div class="form-group ">
                                                        <label for="taille" class="label-form">Taille:</label>
                                                        <input type="text" class="form-control" name="taille" style="width:100px; height:32px;">
                                                    </div>
                                                    <div class="form-group ">
                                                        <label for="groupe" class="label-form">Groupe Sanguin:</label><br>
                                                        <select name="groupe" class="form-control" style="width:150px; height:35px;" id="">
                                                            <option value="">Selectionner groupe</option>
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
                                                </div>                                       
                                        <div class="row justify-content-between">
                                            <div class="form-group ">
                                                <label for="ante" class="label-form">Antecedant:</label>
                                                <input type="text" class="form-control" name="antecedant">
                                            </div>
                                            <div class="form-group ">
                                                <label for="type" class="label-form">Type antecedant:</label><br>
                                                <select name="type" id="" class="form-control" style="width:25px; height:32px;">
                                                    <option value="">Selectionner le type</option>
                                                    <option value="familial">Familial</option>
                                                    <option value="personnel">Personnel</option>
                                                    <option value="autre">Autres</option>
                                                </select>
                                            </div>
                                            <div class="form-group ">
                                                <label for="file" class="label-form">Radio:</label>
                                                <input type="file" class="form-control" name="file" id="file">
                                            </div>
                                        </div>
                                        <button type="submit" class="btn btn-success">Valider</button>
                                        <button type="reset" class="btn btn-danger" id="">Annuler</button>
                                    </form> 
                                </div>                    
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!--------------fin creation dossier-->
            <!-------------- creation Analyse----->
            <div class="col-7 mt-3 fermerv mb-2" id="newanalyse" style="height:100%;">
                <div class="container">
                    <a href="" id="retouranalyse" class="btn btn-primary"><i class="fas fa-long-arrow-alt-left"></i>Retour</a>
                        <div class="card mb-3 mt-3 ">
                            <div class="card-header ml-0">
                                <h3>Création d'une nouvelle analyse</h3>
                            </div>
                            <div class="card-body">
                                    <form action="{{route('create_analyse',['id'=>$patients->id])}}" method="post">
                                        @csrf
                                        <div class="alert alert-primary">Analyse et Resultat</div>
                                        <div class="row justify-content-between">
                                            <div class="form-group ">
                                                <label for="tension" class="label-form">Nom analyse:</label>
                                                <input type="text" class="form-control" name="nomanalyse" style="width:100px; height:32px;">
                                            </div>
                                            <div class="form-group ">
                                                <label for="pwd" class="label-form">Date analyse:</label>
                                                <input type="date" class="form-control" name="dateanalyse">
                                            </div>
                                            <div class="form-group ">
                                                <label for="pwd" class="label-form">Date resultat:</label>
                                                <input type="date" class="form-control" name="dateresultat">
                                            </div>
                                        </div>
                                       
                                        <div class="row justify-content-around">   
                                            <div class="form-group col-5">
                                                <label for="tension" class="label-form">Designation:</label>
                                                <textarea  name="designation" class="form-control" cols="15" rows="8"></textarea>
                                            </div>
                                            <div class="form-group col-5">
                                                <label for="tension" class="label-form">Description resultat:</label>
                                                <textarea  name="descriptionresultat" cols="15" class="form-control" rows="6"></textarea>
                                            </div>
                                            
                                        </div>
                                        <button type="submit" class="btn btn-success">Valider</button>
                                        <button type="reset" class="btn btn-danger" id="">Annuler</button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>

            <!---------------- fin creation analyse-------->
            <!--------------Creation Traitement------------>
            <div class="col-7 mt-3 fermerv mb-2" id="newtraitement" style="height:100%;">
                <div class="container">
                    <a href="" id="retourtraitement" class="btn btn-primary"><i class="fas fa-long-arrow-alt-left"></i>Retour</a>
                        <div class="card mb-3 mt-3 ">
                            <div class="card-header ml-0">
                                <h3>Création d'un nouveau traitement</h3>
                            </div>
                            <div class="card-body">
                                <form action="" method="post">
                                    <div >
                                        <div class="row justify-content-between">
                                            <div class="form-group ">
                                                <label for="medoc" class="label-form ">Date Traitement:</label>
                                                <input type="date" class="form-control" id="dateT"  name="dateT">
                                            </div>
                                            <div class="form-group ">
                                                <label for="medoc" class="label-form ">Nom medicament:</label>
                                                <input type="text" class="form-control" id="medoc" name="medoc">
                                            </div> 
                                            <div class="form-group ">
                                                <label for="dose" class="label-form ">Dosage:</label>
                                                <input type="text" class="form-control" id="dose" name="dose">
                                            </div>
                                            <div class="form-group ">
                                                <label for="forme" class="label-form ">Forme:</label>
                                                <input type="text" class="form-control" id="forme" name="forme">
                                            </div>
                                        </div>
                                        <div class="row justify-content-between">
                                            <div class="form-group ">
                                                <label for="quantite" class="label-form ">Quantité:</label>
                                                <input type="text" class="form-control" id="quantite"  name="quantite">
                                            </div>
                                            <div class="form-group ">
                                                <label for="posologie" class="label-form ">Posologie:</label>
                                                <input type="text" class="form-control" id="posologie" name="posologie">
                                            </div> 
                                            <div class="form-group ">
                                                <label for="dure" class="label-form ">Durée traitement:</label>
                                                <input type="text" class="form-control" id="dure" name="dure">
                                            </div>
                                        </div>
                                    </div><hr>
                                    <div class="d-flex justify-content-end"><a href="" id="traitementplus" class="btn btn-success">Plus</a></div>
                                    <button type="submit" class="btn btn-primary">Valider</button>
                                    <button type="reset" class="btn btn-danger" id="fermetraitement">Annuler</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            
            <!-------------fin creation traitement---------->
            <div class="col-5  mt-3" style="height:100%;background-color:white;text-align:justify;">
                <div class="alert alert-primary" style="margin-bottom:0px;">
                    <h5>Creation de nouveau dossier</h5>
                    <div class=" row justify-content-between" id="">
                        <a  class="btn btn-primary afficherv" id="createfolder" href="#">
                            <i class="fas fa-folder-plus"></i>    
                            Nouveau dossier
                        </a>
                        <a  class="btn btn-primary afficherv" id="createanalyse" href="#">
                            <i class="fas fa-folder-plus"></i>    
                            New Analyse
                        </a>
                        <a href="#" class="btn btn-primary afficherv" style="width:150px;" id="createtraitement">New Traitement</a>
                    </div>
                </div>
                <div><img src="{{asset('img/bg-img/breadcumb3.jpg')}}" alt="" style="overflow:hedden;margin-right:4px;"></div>
                <div>
                    <p>
                        Ce dossier médical regroupe donc l’ensemble des informations qui sont formalisées et qui ont « contribué à l’élaboration et au suivi du diagnostic et du traitement ou d’une action de prévention ou ont fait l’objet d’échanges écrits entre professionnels de santé, notamment des résultats d’examens, comptes rendus de consultation, d'intervention, d'exploration ou d'hospitalisation, des protocoles et prescriptions thérapeutiques mis en œuvre, feuilles de surveillance, correspondances entre professionnels de santé, à l'exception des informations mentionnant qu'elles ont été recueillies auprès de tiers n'intervenant pas dans la prise en charge thérapeutique ou concernant un tel tiers ».
                        On peut retenir qu’à priori, doivent se trouver dans le dossier médical du patient :
                        <ul style="list-style:block;">
                            <ol style="list-style:block;">Les résultats d'examen</ol>
                            <ol>Les comptes rendus de consultation, d'intervention, d'exploration ou d'hospitalisation</ol>
                            <ol>Le bilan paraclinique</ol>
                            <ol>Les traitements</ol>
                            <ol>Les protocoles et des prescriptions thérapeutiques mis en œuvre </ol>
                            <ol>Les feuilles de surveillance</ol>
                        </ul>
                        Toutes ces informations médicales ou paramédicales du dossier, dès lors qu’elles concernent bien le patient et non un tiers, font partie de ce dossier médical, au sens légal du terme, et doivent ainsi être portées à sa connaissance s’il le demande
                    </p>
                </div>
            </div>
        
    </div>
    
   
 @endsection
                                            