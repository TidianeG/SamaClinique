@extends('layouts.appsecretaire')
    @section('content')
        <div class="m-0 p-0" style="background-color:rgba(255,255,255, 0.3);">
            <div class="container" style="margin-top:50px;">
                <div class="card" >
                    <div class="card-header">
                        <h3>Liste des des rendez-vous à venir</h3>
                    </div>
                    <div class="card-body" style="border:2px solid #081f3e;background-color:#081f3e;"> 
                    <table id="myTable" class="table" style="overflow:hedden">
                        <thead>
                            <tr>
                                <th >Nom</th>
                                <th>Adresse</th>
                                <th>Telephone</th>
                                <th>Sexe</th>
                                <th>Medecin</th>
                                <th>Date Appel</th>
                                <th>Editer</th>
                                <th>Delete</th>
                            </tr>
                        </thead>
                        <tbody>
                            <td>gaye</td>
                            <td>ngor</td>
                            <td>47855222</td>
                            <td>M</td>
                            <td>Cheikh</td>
                            <td>14585214</td>
                            <td>
                                <p><a href="#" class="btn btn-primary">Editer</a></p>
                            </td>
                            <td>
                                <p><a href="#" class="btn btn-danger">Delete</a></p>
                            </td>
                        </tbody>
                    </table>
                    <div class="row justify-content-center mt-5">
                        <a href="{{route('newrv')}}" class="btn btn-success"><span>+</span> New rendez-vous</a>
                    </div>
                    </div>
                    <div class="card-footer">
                    
                    </div>
                </div>
            </div>
        </div>
        
    @endsection