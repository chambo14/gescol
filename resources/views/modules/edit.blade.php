@extends('layout')
@section('content')
<div class="card">
    <div class="card-header">Modifier les informations</div>
    <div class="card-body">
        <form action="{{url('modules/'. $modules->id)}}" method="POST">
            {!!csrf_field()!!}
            @method("PATCH")
            <input type="hidden" name="id" id="id" value="{{$modules->id}}" id="id">
            <label>Module</label></br>
            <input type="text" name="name" id="name" value="{{$modules->name}}" class="form-control"></br>
            <label>Slug</label></br>
            <input type="text" name="slug" id="slug" value="{{$modules->slug}}" class="form-control"></br>
            <input type="submit" value="update" class="btn btn-success"></br>
        </form>
    </div>
</div>
@endsection
