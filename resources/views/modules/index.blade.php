@extends('layout')
@section('content')

            <div class="card">
                <div class="card_header">
                    <h2>Liste des modules</h2>
                </div>
                <div class="card-body">
                    <a href="{{url('modules/create')}}" class="btn btn-success btn-sm" title="Add new module">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add new
                    </a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Modules</th>
                                  <th scope="col">Code</th>
                                  <th scope="col">Actions</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($modules as $item)

                                <tr>
                                    <td>{{ $loop->iteration  }}</td>
                                    <td>{{$item->name }}</td>
                                    <td>{{ $item->slug }}</td>



                                <td>
                                    <a href="{{ url('/modules/'. $item->id) }}"title="Voir"> <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Voir</button></a>
                                    <a href="{{ url('/modules/'. $item->id . '/edit') }}" title="Edit module"> <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Modifier</button></a>

                                    <form method="POST" action="{{url('/modules' . '/' .$item->id)}}" accept-charset="utf-8" enctype="multipart/form-data">
                                        {{method_field('DELETE')}}
                                        {{csrf_field()}}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete module" onclick="return confirm(&quot;confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>Supprimer</button>

                                    </form>
                                </td>
                                </tr>
                                @endforeach
                              </tbody>
                        </table>
                    </div>
                </div>
            </div>

@endsection()
