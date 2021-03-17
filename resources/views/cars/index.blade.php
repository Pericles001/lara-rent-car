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
                <img src="{{$car->image}}"  width="100" height="100"  alt="" class="img-fluid rounded-circle">
            </div>


            <div  class="media-body">
                <h3 class="text-info">
                    <a id="myLink" href="" class="btn btn-link">
                        <button type="button" class="btn btn-primary">
                            Marque :<span class="badge bg-primary"> {{$car->marque}}</span>
                           </button>
                    </a>
                </h3>




                 <p class="d-flex flex-row justify-content-start">

                <button type="button" class="btn btn-success mx-3">
                    Type :<span class="badge bg-success "> {{$car->type}}</span>
                   </button>
                    <button type="button" class="btn btn-danger">
                  Prix Journée :<span class="badge bg-secondary">  {{$car->prixJ}} £</span>
                   </button>

                </p>
            </div>
            </div>


           @endforeach

        </div>

</div>



</div>

</div>
@endsection
