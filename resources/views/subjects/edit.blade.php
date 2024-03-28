@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Modification d'une matière</div>
    <div class="card-body">
        <form action="{{url('subjects/'. $subjects->id)}}" method="POST">
            {!!csrf_field()!!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$subjects->id}}" id="id">
            <label>Matière</label></br>
            <input type="text" name="libelle" id="name" value="{{$subjects->firstname}}" class="form-control"></br>
            <input type="submit" value="update" class="btn btn-success"></br>
        </form>
    </div>
</div>
@endsection
