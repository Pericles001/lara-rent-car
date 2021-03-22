@extends('layouts.master')

@section('content')
    <div class="row my-5">
        <div class="col-md-8 mx-auto">
            <div class="card bg-light">
                <div class="card bg-light">
                    <h3 class="card-header">Modifier une voiture</h3>
                    <div class="card-body">
                        <form action="{{ route('cars.update', $car->id) }}" method="post" enctype="multipart/form-data">
                            @csrf
                            <div class="form-group">
                                <label for="">Marque*</label>
                                <input type="text" name="marque" class="form-control" placeholder="Marque..."
                                    value="{{ $car->marque }}" aria-describedby="helpId" />

                            </div>

                            <div class="form-group">
                                <label for="">Model*</label>
                                <input type="text" name="model" class="form-control" placeholder="Modele..."
                                    value="{{ $car->model }}" aria-describedby="helpId" />

                            </div>

                            <div class="form-group">
                                <label for="">Type*</label>
                                <select name="type" id="" class="form-control">
                                    <option value="" selected disabled>Veuillez choisir un type</option>
                                    <option value="Diesel" {{ $car->type == 'Diesel' ? 'selected' : '' }}>Diesel</option>
                                    <option value="Essence" {{ $car->type == 'Essence' ? 'selected' : '' }}>Essence</option>
                                </select>
                            </div>

                            <div class="form-group">
                                <label for="">Prix Journée*</label>
                                <input class="form-control" type="number" name="prixJ" placeholder="Prix journée..."
                                    value="{{ $car->prixJ }}" aria-describedby="helpId" />
                                <small></small>
                            </div>

                            <div class="form-group">
                                <label for="">Disponible*</label>
                                <select name="dispo" id="" class="form-control">
                                    <option value="" selected disabled>Veuillez choisir un type</option>
                                    <option value="1" {{ $car->dispo ? 'selected' : '' }}>oui</option>
                                    <option value="0" {{!$car->dispo ? 'selected' : '' }}>non</option>
                                </select>
                            </div>



                            <div class="form-group">
                             <div class="form-group">
                                <img src="{{ $car->image }}" width="100" height="100" alt="" class="img-fluid rounded">
                             </div>

                                <label for="">Photo*</label>
                                <input type="file" name="image" class="form-control" aria-describedby="helpId" />

                            </div>
                            <button type="submit" class="bt btn-primary"> Valider</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
