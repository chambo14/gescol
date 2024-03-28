@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Information d'un professeur</div>
    <div class="card-body">
<h5 class="card-title">Nom :{{$teachers->firstname}}</h5>
<h5 class="card-title">Prenoms :{{$teachers->lastname}}</h5>
<p class="card-text"> Lieu de naissance : {{$teachers->lieudenaissance}}</p>
<p class="card-text"> Téléphone : {{$teachers->phone}}</p>
<p class="card-text"> Email : {{$teachers->email}}</p>
<p class="card-text"> Addresse: {{$teachers->addresse}}</p>
    </div>
</div>
@endsection
