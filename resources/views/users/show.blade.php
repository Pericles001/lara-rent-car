@extends('layouts.master')

@section('content')

    <div class="row my-4">

        <div class="col-md-4">
            <div class="card text-left">
                <img class="card-img-top" src="{{ auth()->user()->image }}" alt="">
                <div class="card-body">

                    <h4 class="card-title">{{ auth()->user()->name }}</h4>
                    <p class="card-text d-flex flex-row align-items-center">
                        <button type="button" class="btn btn-primary mx-2">
                            Téléphone :<span class="badge bg-primary"> {{ auth()->user()->tel }}</span>
                        </button>
                        <button type="button" class="btn btn-danger">
                            Ville :<span class="badge bg-danger"> {{ auth()->user()->ville }}</span>
                        </button>

                    </p>
                </div>
            </div>
        </div>
        <div class="col-md-8">
            <h3>Mes commandes</h3>
            <table class="table">
                <thead>
                    <tr>
                        <th>Marque</th>
                        <th>Type</th>
                        <th>Prix Journée</th>
                        <th>Date de début</th>
                        <th>Date de Fin</th>
                        <th>prix TTC</th>
                        <th>action</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach (auth()->user()->commands as $command)
                        <tr>
                            <td>{{ App\Models\Car::findOrFail($command->car_id)->marque }}</td>
                            <td>{{ App\Models\Car::findOrFail($command->car_id)->type }}</td>
                            <td> {{ App\Models\Car::findOrFail($command->car_id)->prixJ }}</td>
                            <td>{{ $command->dateL }}</td>
                            <td>{{ $command->dateR }}</td>
                            <td>{{ $command->prixTTC }}</td>
                            <td class="d-flex flex-row justify-content-center">

                                <form action="{{route('commands.delete', [$command->id, $command->car_id])}}" method="post">
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
        </div>
    </div>

@endsection
