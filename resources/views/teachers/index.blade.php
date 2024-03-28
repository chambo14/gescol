@extends('layout')
@section('content')

            <div class="card">
                <div class="card_header">
                    <h2>Teacher application</h2>
                </div>
                <div class="card-body">
                    <a href="{{url('teachers/create')}}" class="btn btn-success btn-sm" title="Add new teacher">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add new
                    </a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead>
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Nom</th>
                                  <th scope="col">Prenoms</th>
                                  <th scope="col">Lieu de naissance</th>
                                  <th scope="col">Téléphone</th>
                                  <th scope="col">Email</th>
                                  <th scope="col">Adresse</th>
                                  <th scope="col">Actions</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($teachers as $item)

                                <tr>
                                    <td>{{ $loop->iteration  }}</td>
                                    <td>{{$item->firstname }}</td>
                                    <td>{{ $item->lastname }}</td>
                                    <td>{{$item->lieudenaissance }}</td>
                                    <td>{{ $item->phone }}</td>
                                    <td>{{ $item->email }}</td>
                                    <td>{{ $item->addresse }}</td>


                                <td>
                                    <a href="{{ url('/teachers/'. $item->id) }}"title="Voir"> <button class="btn btn-info btn-sm"><i class="fa fa-eye" aria-hidden="true"></i>Voir</button></a>
                                    <a href="{{ url('/teachers/'. $item->id . '/edit') }}" title="Edit teacher"> <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Modifier</button></a>

                                    <form method="POST" action="{{url('/teachers' . '/' .$item->id)}}" accept-charset="utf-8" enctype="multipart/form-data">
                                        {{method_field('DELETE')}}
                                        {{csrf_field()}}
                                        <button type="submit" class="btn btn-danger btn-sm" title="Delete teacher" onclick="return confirm(&quot;confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>Supprimer</button>

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
