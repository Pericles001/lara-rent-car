@extends('layouts.master')

@section('content')

<div class="row my-4">
    <div class="col-md-8">
        <div class="card border border-primary shadow-sm">
            <h3 class="card-header">Inscription</h3>
            <div class="card-body">
                <form action="{{route('users.create')}}" method="post">
                   @csrf
                    <div class="form-group">
                        <label for="name">Nom & Prenom</label>
                        <input type=" text" name="name" id="" class="form-control" placeholder="Nom..."   aria-describedby="helpId"/>
                    </div>


                    <div class="form-group">
                        <label for="tel">Telephone</label>
                        <input type=" text" name="tel" id="" class="form-control" placeholder="Telephone..."   aria-describedby="helpId"/>
                    </div>

                    <div class="form-group">
                        <label for="ville">Ville</label>
                        <input type="text" name="ville" id="" class="form-control" placeholder="ville..."   aria-describedby="helpId"/>
                    </div>

                    <div class="form-group">
                        <label for="email">Email</label>
                        <input type="email" name="email" id="" class="form-control" placeholder="email..."   aria-describedby="helpId"/>
                    </div>
                    <div class="form-group">
                        <label for="password">Mot de passe</label>
                        <input type="password" name="password" id="" class="form-control" placeholder="Mot de passe..."   aria-describedby="helpId"/>
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
