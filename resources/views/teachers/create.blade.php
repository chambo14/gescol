@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Nouvel enregistrement d'un professeur</div>
    <div class="card-body">
        <form action="{{url('teachers')}}" method="POST">
            {!!csrf_field()!!}
            <label>Nom</label></br>
            <input type="text" name="firstname" id="name" class="form-control"></br>
            <label>Prenoms</label></br>
            <input type="text" name="lastname" id="lastname" class="form-control"></br>
            <label>Lieu de naissance</label></br>
            <input type="text" name="lieudenaissance" id="lieudenaissance" class="form-control"></br>
            <label>Téléphone</label></br>
            <input type="text" name="phone" id="mob" class="form-control"></br>
            <label>Email</label></br>
            <input type="text" name="email" id="mat" class="form-control"></br>
            <label>Addresse</label></br>
            <input type="text" name="addresse" id="address" class="form-control"></br>
            <input type="submit" value="save" class="btn btn-success"></br>
    </div>
</div>
@endsection()
