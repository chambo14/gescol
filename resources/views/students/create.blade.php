@extends('layout')
@section('content')

<div class="card">
    <div class="card-header">Nouvel enregistrement d'un élève</div>
    <div class="card-body">
        <form action="{{url('students')}}" method="POST">
            {!!csrf_field()!!}
            <label>Nom</label></br>
            <input type="text" name="firstname" id="name" class="form-control"></br>
            <label>Prenoms</label></br>
            <input type="text" name="lastname" id="lastname" class="form-control"></br>
            <label>Lieu de naissance</label></br>
            <input type="text" name="lieudenaissance" id="lieudenaissance" class="form-control"></br>
            <label>Mobile</label></br>
            <input type="text" name="mobile" id="mob" class="form-control"></br>
            <label>Matricule</label></br>
            <input type="text" name="matricule" id="mat" class="form-control"></br>
            <label>Addresse</label></br>
            <input type="text" name="addresse" id="address" class="form-control"></br>
            <label>Parent</label></br>
            <input type="text" name="parent_name" id="address" class="form-control"></br>
            <label>Télephone Parent</label></br>
            <input type="text" name="parent_phone_number" id="address" class="form-control"></br>
            <label>Télephone Parent</label></br>
            <input type="text" name="second_phone_number" id="address" class="form-control"></br>
            <label>Addresse</label></br>
            <input type="text" name="addresse" id="address" class="form-control"></br>
            <div class="row">
                <div class="col-md-6">
                    <div class="form-group row">
                        <label for="gender" class="col-sm-3 col-form-label">Gender</label>
                        <div class="col-sm-9">
                            <select id="gender" name="gender" class="form-control form-control-sm">
                                @if(isset($student->gender))
                                    <option value="0" {{($student->gender == 0)? 'selected': ''}}>Male</option>
                                    <option value="1" {{($student->gender == 1)? 'selected': ''}}>Female</option>
                                @else
                                    <option value="0">Male</option>
                                    <option value="1">Female</option>
                                @endif
                            </select>
                        </div>
                    </div>
                </div>
            <input type="submit" value="save" class="btn btn-success"></br>
    </div>
</div>
@endsection()
