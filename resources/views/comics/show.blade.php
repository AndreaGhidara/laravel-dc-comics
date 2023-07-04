{{-- Estensione per definire il layout --}}
@extends('layouts.app')

{{-- Contenuto --}}
@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Titolo: {{$comix->title}}</h1>
            <div class="imgContainer">
                <img src="{{$comix->thumb}}" alt="">
            </div>
            <div class="d-flex align-items-center">
                <h4 class="m-0">Price-</h4>
                <p class="m-0">{{$comix->price}}</p>
            </div>
            <div class="card my-2">
                <h4>Description</h4>
                <hr>
                <p>{{$comix->description}}</p>
            </div>
        </div>
    </div>
    <div class="row text-center py-3">
        <a href="{{route("home")}}">
            <div class="btn btn-success w-25">
                Back To Home
            </div>
        </a>
    </div>
</div>

@endsection