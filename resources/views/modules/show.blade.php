@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Information d'un module</div>
    <div class="card-body">
<h5 class="card-title">Nom :{{$modules->name}}</h5>
<h5 class="card-title">Prenoms :{{$modules->slug}}</h5>

    </div>
</div>
@endsection
