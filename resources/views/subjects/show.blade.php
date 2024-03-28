@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Information d'une matière</div>
    <div class="card-body">
<h5 class="card-title">Nom :{{$subjects->libelle}}</h5>

    </div>
</div>
@endsection
