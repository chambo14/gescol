@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Editer les informations d'un étudiant</div>
    <div class="card-body">
        <form action="{{url('students/'. $students->id)}}" method="POST">
            {!!csrf_field()!!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$students->id}}" id="id">
            <label>Nom</label></br>
            <input type="text" name="firstname" id="name" value="{{$students->firstname}}" class="form-control"></br>
            <label>Prenoms</label></br>
            <input type="text" name="lastname" id="lastname" value="{{$students->lastname}}" class="form-control"></br>
            <label>Lieu de naissance</label></br>
            <input type="text" name="lieudenaissance" id="lieudenaissance" value="{{$students->lieudenaissance}}" class="form-control"></br>
            <label>Mobile</label></br>
            <input type="text" name="mobile" id="mob" value="{{$students->mobile}}" class="form-control"></br>
            <label>Matricule</label></br>
            <input type="text" name="matricule" id="mat" value="{{$students->matricule}}" class="form-control"></br>
            <label>Addresse</label></br>
            <input type="text" name="addresse" id="address" value="{{$students->addresse}}" class="form-control"></br>
            <input type="submit" value="update" class="btn btn-success"></br>
        </form>
    </div>
</div>
@endsection
