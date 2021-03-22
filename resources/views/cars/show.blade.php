@extends('layouts.master')

@section('content')

    <div class="row my-4">
        <div class="col-md-4">
            <div class="card bg-light border border-primary">
                <h3 class="card-header">
                    Recherche
                </h3>
                <div class="card-body">
                    <form action="{{route('cars.index')}}" method="post">
                        @csrf
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

            <div class="card border border-primary">

                <h3 class="card-header">{{ $car->marque }}</h3>
                <div class="card-img-top">
                    <img src="{{ $car->image }}" alt="" class="img-fluid m-2 rounded">

                </div>
                <div class="card-body">

                    <div class="media mb-2 ">


                        <div class="media-body">
                            <h3 class="text-info">
                                <a id="myLink" href="{{ route('cars.show', $car->id) }}" class="btn btn-link">
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
                                    @auth
                                        <p>
                                            <a type="button" href="{{ route('command.create', $car->id) }}"
                                                class="btn btn-primary">
                                                Reserver
                                            </a>

                                        </p>

                                    @else <p>
                                            <a type="button" href="{{ route('users.login') }}" class="btn btn-primary">

                                            </a>

                                        </p>
                                    @endauth
                                @else
                                    <button type="button" class="btn btn-warning">
                                        Reservé<span class="badge bg-warning"></span>
                                    </button>

                                @endif


                            </p>
                        </div>
                    </div>

                </div>
            </div>
        </div>


    @endsection
