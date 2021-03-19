@extends('layouts.master')

@section('content')

    <div class="row my-4">
        <div class="col-md-8">
            <div class="card border border-primary shadow-sm">
                <h3 class="card-header">Louer cette voiture</h3>
                <div class="row my-3">
                    <div class="col-md-12">
                        <div class="card border border-primary">

                            <div class="card-img-top">
                                <h3 class="card-header">{{ $car->first()->marque }}</h3>
                                <img src="{{ $car->first()->image }}" alt="" class="img-fluid m-2 rounded">

                            </div>
                            <div class="card-body">
                                <p class="d-flex flex-row justify-content-start">

                                    <button type="button" class="btn btn-dark mx-1">
                                        Type :<span class="badge bg-dark "> {{ $car->first()->type }}</span>
                                    </button>
                                    <button type="button" class="btn btn-danger mx-1">
                                        Prix Journée :<span class="badge bg-secondary"> {{ $car->first()->prixJ }} £</span>
                                    </button>

                                </p>
                            </div>
                        </div>

                    </div>
                </div>
            </div>



            <!-- form below this line -->
        </div>
        <div class="card-body">
            <form action="{{ route('commands.store') }}" method="post">
                @csrf
                <div class="form-group">
                    <label for="dateL">Date Location</label>
                    <input type="date" name="dateL" id="" class="form-control" placeholder="Date de debut..."
                        aria-describedby="helpId" />
                </div>


                <div class="form-group">
                    <label for="dateR">Date Retour</label>
                    <input type="date" name="dateR" id="" class="form-control" placeholder="Date de Fin..."
                        aria-describedby="helpId" />
                </div>
                <div class="form-group">
                    <button type="submit" class="btn btn-primary">Submit</button>
                </div>
            </form>
        </div>
    </div>
    </div>
    </div>

@endsection
