@extends('layout')
@section('content')

            <div class="card">
                <div class="card_header">
                    <h2>Liste des matières</h2>
                </div>
                <div class="card-body">
                    <a href="{{url('subjects/create')}}" class="btn btn-success btn-sm" title="Nouvelle matière">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add new
                    </a>
                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
                            <thead style="height: 5px;">
                                <tr>
                                  <th scope="col">#</th>
                                  <th scope="col">Nom</th>
                                  <th scope="col">Actions</th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach ($subjects as $item)

                                <tr>
                                    <td>{{ $loop->iteration  }}</td>
                                    <td>{{$item->libelle }}</td>



                                <td>
                                    <a href="{{ url('/subjects/'. $item->id) }}"title="Voir"> <button class="btn btn-info btn-md"><i class="fa fa-eye" aria-hidden="true"></i>Voir</button></a>
                                    <a href="{{ url('/subjects/'. $item->id . '/edit') }}" title="Edit student"> <button class="btn btn-primary btn-md"><i class="fa fa-pencil-square-o" aria-hidden="true"></i>Modifier</button></a>

                                    <form method="POST" action="{{url('/subjects' . '/' .$item->id)}}" accept-charset="utf-8" enctype="multipart/form-data">
                                        {{method_field('DELETE')}}
                                        {{csrf_field()}}
                                        <button type="submit" class="btn btn-danger btn-md" title="Delete student" onclick="return confirm(&quot;confirm delete?&quot;)"><i class="fa fa-trash-o" aria-hidden="true"></i>Supprimer</button>

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
