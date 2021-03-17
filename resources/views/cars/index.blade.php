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
<input type="text" name="search" id="" class="form-control" placeholder="Recherche..."/>

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
