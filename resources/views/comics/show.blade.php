{{-- Estensione per definire il layout --}}
@extends('layouts.app')

{{-- Contenuto --}}
@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <h1>Titolo: {{ $comic->title }}</h1>
            <div class="imgContainer">
                <img src="{{$comic->thumb}}" alt="">
            </div>
            <div class="d-flex align-items-center">
                <h4 class="m-0">Price-</h4>
                <p class="m-0">{{$comic->price}}</p>
            </div>
            <div class="card my-2">
                <h4>Description</h4>
                <hr>
                <p>{{$comic->description}}</p>
            </div>
        </div>
    </div>
    <div class="row flex-column text-center py-3">
        <a href="{{route("home")}}">
            <div class="btn btn-success w-25">
                Back To Home
            </div>
        </a>
        <form action="{{ route('comics.destroy', $comic) }}" method="post" class="py-3">
            @csrf
            @method('DELETE')
            <input class="btn btn-danger" type="submit" value="Cancella il prodotto">
        </form>
    </div>
</div>

@endsection