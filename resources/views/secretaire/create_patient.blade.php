@extends('layouts.appsecretaire')
@section('content')
    <div>
        <form action="#" method="post" class="d-flex align-content-center align-items-center">
            <input type="text" class="form-control" name="nom">
            <input type="text" class="form-control" name="prenom">
            <input type="text" class="form-control" name="sexe">
            <input type="text" class="form-control" name="adresse">
            <input type="text" class="form-control" name="telephone">
        </form>
    </div>
@endsection
