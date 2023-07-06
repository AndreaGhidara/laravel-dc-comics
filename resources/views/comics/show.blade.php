{{-- Estensione per definire il layout --}}
@extends('layouts.app')

{{-- Contenuto --}}
@section('content')
    <div class="container">
        <div class="row">
            <div class="col">
                <h1>Titolo: {{ $comic->title }}</h1>
                <div class="imgContainer">
                    <img src="{{ $comic->thumb }}" alt="">
                </div>
                <div class="d-flex align-items-center">
                    <h4 class="m-0">Price-</h4>
                    <p class="m-0">{{ $comic->price }}</p>
                </div>
                <div class="card my-2">
                    <h4>Description</h4>
                    <hr>
                    <p>{{ $comic->description }}</p>
                </div>
            </div>
        </div>
        <div class="row row-cols-3 d-flex justify-content-between py-3">
            <div class="col">
                <a href="{{ route('home') }}">
                    <div class="btn btn-success">
                        Back To Home
                    </div>
                </a>
            </div>
            <div class="col">
                <button class="btn btn-danger" type="button" data-bs-toggle="offcanvas" data-bs-target="#offcanvasTop"
                    aria-controls="offcanvasTop">
                    Cancella prodotto
                </button>
            </div>
            <div class="col">
                <a href="{{ route('comics.edit', $comic) }}">
                    <div class="btn btn-warning">
                        Modifica questo prodotto
                    </div>
                </a>
            </div>
            {{-- <form action="{{ route('comics.destroy', $comic) }}" method="post" class="py-3">
                @csrf
                @method('DELETE')
                <input class="btn btn-danger" type="submit" value="Cancella il prodotto">
            </form> --}}
        </div>
    </div>
    {{-- OFF CANVAS --}}
    <div class="offcanvas offcanvas-top text-white bg-dark" tabindex="-1" id="offcanvasTop" aria-labelledby="offcanvasTopLabel">
        <div class="offcanvas-header">
            <h5 class="offcanvas-title" id="offcanvasTopLabel">Sei sicuro di voler cancellare?</h5>

            <div class="d-flex align-items-center">
                <form action="{{ route('comics.destroy', $comic) }}" method="post" class="p-3">
                    @csrf
                    @method('DELETE')
                    
                    <input class="btn btn-danger" type="submit" value="Cancella il prodotto">
                </form>

                <div>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="offcanvas" aria-label="Close">
                        Annulla
                    </button>
                </div>
            </div>
        </div>
    </div>
@endsection
