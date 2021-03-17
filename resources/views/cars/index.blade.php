@extends('layouts.master')

@section('content')

    <div class="row my-4">
        <div class="col-md-4">
            <div class="card bg-light border border-primary">
                <h3 class="card-header">
                    Recherche
                </h3>
                <div class="card-body">
                    <form action="#" method="post">
                        <div class="form-group">
                            <label for="search">Recherche</label>
                            <input type="text" name="search" id="" class="form-control" placeholder="Recherche..." />

                        </div>

                        <div class="form-group">
                            <button type="submit" class="btn btn-primary">Submit</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>

        <div class="col-md-8">

            <div class="border border-primary">

                <h3 class="card-header">Toutes les voitures</h3>
                <div class="card-body">
                    @foreach ($cars as $car)

                        <div class="media mb-2 ">
                            <div class="media-left">
                                <img src="{{ $car->image }}" width="100" height="100" alt=""
                                    class="img-fluid rounded-circle">
                            </div>


                            <div class="media-body">
                                <h3 class="text-info">
                                    <a id="myLink" href="{{route('cars.show', $car->id)}}" class="btn btn-link">
                                        <button type="button" class="btn btn-primary">
                                            Marque :<span class="badge bg-primary"> {{ $car->marque }}</span>
                                        </button>
                                    </a>
                                </h3>




                                <p class="d-flex flex-row justify-content-start">

                                    <button type="button" class="btn btn-dark mx-1">
                                        Type :<span class="badge bg-dark "> {{ $car->type }}</span>
                                    </button>
                                    <button type="button" class="btn btn-danger mx-1">
                                        Prix Journée :<span class="badge bg-secondary"> {{ $car->prixJ }} £</span>
                                    </button>
                                    @if ($car->dispo)
                                        <button type="button" class="btn btn-success">
                                            Disponible<span class="badge bg-success"></span>
                                        </button>
                                    @else
                                        <button type="button" class="btn btn-warning">
                                           Reservé<span class="badge bg-warning"></span>
                                        </button>

                                    @endif


                                </p>
                            </div>
                        </div>
                        <hr>

                    @endforeach

                </div>
            </div>
        </div>


    @endsection
