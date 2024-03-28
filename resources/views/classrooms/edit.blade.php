@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Modification d'une classe</div>
    <div class="card-body">
        <form action="{{url('classrooms/'. $classrooms->id)}}" method="POST">
            {!!csrf_field()!!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$classrooms->id}}" id="id">
            <label>Classe</label></br>
            <input type="text" name="name" id="name" value="{{$classrooms->name}}" class="form-control"></br>
            <label>Description</label></br>
            <input type="text" name="description" id="name" value="{{$classrooms->description}}" class="form-control"></br>
            <input type="submit" value="update" class="btn btn-success"></br>
        </form>
    </div>
</div>
@endsection
