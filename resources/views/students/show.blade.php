@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Information d'un étudiant</div>
    <div class="card-body">
<h5 class="card-title">Nom :{{$students->firstname}}</h5>
<h5 class="card-title">Prenoms :{{$students->lastname}}</h5>
<p class="card-text"> Lieu de naissance : {{$students->lieudenaissance}}</p>
<p class="card-text"> Mobile : {{$students->mobile}}</p>
<p class="card-text"> Matricule : {{$students->matricule}}</p>
<p class="card-text"> Addresse: {{$students->addresse}}</p>
    </div>
</div>
@endsection
