@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Add new module</div>
    <div class="card-body">
        <form action="{{url('modules')}}" method="POST">
            {!!csrf_field()!!}
            <label>Module</label></br>
            <input type="text" name="name" id="name" class="form-control"></br>
            <label>Slug</label></br>
            <input type="text" name="slug" id="slug" class="form-control"></br>
            <input type="submit" value="save" class="btn btn-success"></br>
    </div>
</div>
@endsection()
