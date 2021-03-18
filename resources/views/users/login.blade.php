@extends('layouts.master')

@section('content')

<div class="row my-4">
    <div class="col-md-8">
        <div class="card border border-primary shadow-sm">
            <h3 class="card-header">Connexion</h3>
            <div class="card-body">
                <form action="{{route('users.auth')}}" method="post">
                   @csrf

                    <div class="form-group">
                        <label for="email">email</label>
                        <input type=" email" name="email" id="" class="form-control" placeholder="email..."   aria-describedby="helpId"/>
                    </div>


                    <div class="form-group">
                        <label for="email">mot de passe</label>
                        <input type="password" name="password" id="" class="form-control" placeholder="password..."   aria-describedby="helpId"/>
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
