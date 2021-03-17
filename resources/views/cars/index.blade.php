@extends('layouts.master')

@section('content')

<div class="row my-4">
    <div class="col-md-3">
        <div class="card bg-light border border-primary">
            <h3 class="card-header">
                Recherche
            </h3>
            <div class="card-body">
                <form action="#" method="post">
                            <div class="form-group">
<label for="search">Recherche</label>
<input type="text" name="search" id="" class="form-control" placeholder="Recherche..."/>

             </div>

                 <div class="form-group">
                     <button type="submit" class="btn btn-primary">Submit</button>
                </div>
                </form>
                </div>
        </div>
    </div>

<div class="col-md-6">

<div class="border border-primary">

        <h3 class="card-header">Toutes les voitures</h3>
        <div class="card-body">
           @foreach($cars as $car)

           <div class="media">
            <div class="media-left">
                <img src="{{$car->image}}"    alt="" class="img-fluid rounded-circle">
            </div>


            <div class="media-body">
                <h3 class="text-info">
                    <a href="" class="btn btn-link">
                        {{$car->marque}}

                    </a>
                </h3>
                
                 <p class="d-flex flex-row justify-content-between align-items-center">
                    <span class="badge badge-danger">
                        {{$car->type}}
                    </span>
                    <span class="badge badge-primary">
                        {{$car->prixJ}}
                    </span>
                </p>
            </div>
            </div>


           @endforeach

        </div>

</div>



</div>

</div>
@endsection
