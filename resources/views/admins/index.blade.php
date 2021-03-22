@extends('layouts.master')

@section('content')
    <div class="row my-4">
        <div class="col-md-12">
            <div class="form-group">
                <button class="btn btn-primary" data-bs-toggle="modal" data-bs-target="#addCar">
                    <i class="fa fa-plus">
 </i>
                </button>
            </div>
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
                            @foreach ($cars as $car)
                                <tr>
                                    <td>{{ $car->id }}</td>
                                    <td>{{ $car->marque }}</td>
                                    <td>{{ $car->model }}</td>
                                    <td>{{ $car->type }}</td>
                                    <td>{{ $car->prixJ }}</td>
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
                                        <img class="img-fluid rounded" src="{{ $car->image }}" alt="" width="60"
                                            height="60" srcset="">
                                    </td>
                             <td class="d-flex flex-row justify-content-center"> <a href="{{route('cars.edit',$car->id)}}"  class="btn btn-warning mr-2" >
                                        <i class="fa fa-edit"> </i>
                                    </a>

                                 <form action="{{route('cars.destroy', $car->id)}}" method="post">
                                @csrf
                                {{method_field('delete')}}
                                <button type="submit"  class="btn btn-danger" role="button">
                                    <i class="fa fa-trash"> </i>
                                </button>

                                </form>
                             </td>
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


    <!--modal -->
    <div class="modal fade" id="addCar" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Ajouter une voiture</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close">


                    </button>
                </div>
                <div class="modal-body">

                    <form action="{{route('cars.store')}}" method="post" enctype="multipart/form-data">
                        @csrf
                        <div class="form-group">
                            <label for="">Marque*</label>
                            <input type="text" name="marque" class="form-control" placeholder="Marque..."
                                aria-describedby="helpId" />

                        </div>

                        <div class="form-group">
                            <label for="">Model*</label>
                            <input type="text" name="model" class="form-control" placeholder="Modele..."  aria-describedby="helpId"/>

                        </div>

                        <div class="form-group">
                            <label for="">Type*</label>
                            <select name="type" id="" class="form-control">
                                <option value="" selected disabled>Veuillez choisir un type</option>
                                <option value="Diesel">Diesel</option>
                                <option value="Essence">Essence</option>
                            </select>
                        </div>

                        <div class="form-group">
                            <label for="">Prix Journée*</label>
                            <input class="form-control" type="number" name="prixJ" placeholder="Prix journée..."  aria-describedby="helpId"/>
                            <small></small>
                        </div>

                        <div class="form-group">
                            <label for="">Disponible*</label>
                            <select name="dispo" id="" class="form-control">
                                <option value="" selected disabled>Veuillez choisir un type</option>
                                <option value="1">oui</option>
                                <option value="0">non</option>
                            </select>
                        </div>



                        <div class="form-group">
                            <label for="">Photo*</label>
                            <input type="file" name="image" class="form-control"  aria-describedby="helpId"/>

                        </div>
                        <button type="submit" class="bt btn-primary" > Valider</button>
                    </form>


                </div>

            </div>
        </div>
    </div>


@endsection
