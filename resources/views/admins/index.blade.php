@extends('layouts.master')

@section('content')
    <div class="row my-4">
        <div class="col-md-12">
            <div class="card">
                <div class="card-body">
                    <table class="table">
                        <thead>
                            <tr>
                                <th>Id</th>
                                <th>Marque</th>
                                <th>Modèle</th>
                                <th>Type</th>
                                <th>Prix Journée</th>
                                <th>Disponibilité</th>
                                <th>image</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                           @foreach ($cars as $car )
                           <tr>
                            <td >{{$car->id}}</td>
                            <td>{{$car->marque}}</td>
                            <td>{{$car->model}}</td>
                            <td >{{$car->type}}</td>
                            <td>{{$car->prixJ}}</td>
                            <td>
                            @if ($car->dispo)
                                <span class="badge bg-success">
                                    Disponible
                                </span>
                            @else
                            <span class="badge bg-danger">
                                Reservé
                            </span>
                            @endif
                            </td>
                            <td>
                                <img class="img-fluid rounded"  src="{{$car->image}}" alt="" width="60" height="60" srcset="">
                            </td>
                            <td></td>
                        </tr>
                           @endforeach
                        </tbody>
                    </table>
                   <div class="justify-content-center">
                    {!! $cars->links() !!}
                   </div>
                </div>
            </div>
        </div>
    </div>
@endsection
