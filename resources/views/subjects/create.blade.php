@extends('layout')
@section('content')

    <div class="card">
     <div class="card-header">Ajout d'une nouvelle matière</div>

     <div class="card-body">

                <form action="{{ url('subjects') }}" method="POST">
                    @csrf
                    <label>Module</label></br>
                        <div class="select" style="width:200px;">
                            <select name="module_id">
                                @foreach($modules as $item)
                                    <option value="{{ $item->id }}">{{ $item->libelle }}</option>
                                @endforeach
                            </select>
                        </div>

            <label>Matière</label></br>
            <input type="text" name="name" id="name" class="form-control"></br>

            <label>Code</label></br>
            <input type="text" name="slug" id="slug" class="form-control"></br>

            <input type="submit" value="save" class="btn btn-success"></br>
            </form>

        </div>
    </div>
@endsection
