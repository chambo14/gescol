@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Editer les informations d'un professeur</div>
    <div class="card-body">
        <form action="{{url('teachers/'. $teachers->id)}}" method="POST">
            {!!csrf_field()!!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$teachers->id}}" id="id">
            <label>Nom</label></br>
            <input type="text" name="firstname" id="name" value="{{$teachers->firstname}}" class="form-control"></br>
            <label>Prenoms</label></br>
            <input type="text" name="lastname" id="lastname" value="{{$teachers->lastname}}" class="form-control"></br>
            <label>Lieu de naissance</label></br>
            <input type="text" name="lieudenaissance" id="lieudenaissance" value="{{$teachers->lieudenaissance}}" class="form-control"></br>
            <label>Téléphone</label></br>
            <input type="text" name="phone" id="phone" value="{{$teachers->phone}}" class="form-control"></br>
            <label>Email</label></br>
            <input type="text" name="email" id="email" value="{{$teachers->email}}" class="form-control"></br>
            <label>Addresse</label></br>
            <input type="text" name="addresse" id="address" value="{{$teachers->addresse}}" class="form-control"></br>
            <input type="submit" value="update" class="btn btn-success"></br>
        </form>
    </div>
</div>
@endsection
