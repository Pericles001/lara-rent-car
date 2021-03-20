@extends('layouts.master')

@section('content')

    <div class="row my-4">

           <div class="col-md-4">
               <div class="card text-left">
                 <img class="card-img-top" src="{{auth()->user()->image}}" alt="" >
                   <div class="card-body">

                       <h4 class="card-title">{{auth()->user()->name}}</h4>
                        <p class="card-text d-flex flex-row align-items-center">
                            <span class="badge bg-primary">
                                {{auth()->user()->tel}}
                            </span>
                            <span class="badge bg-primary">
                                {{auth()->user()->ville}}
                            </span>
                        </p>
                   </div>
               </div>
           </div>
    </div>



    @endsection
