{{-- Estensione per definire il layout --}}
@extends('layouts.app')

{{-- Contenuto --}}
@section('content')

<div class="container">
    @if ($errors->any())
    <div class="alert alert-danger">
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
    @endif
</div>

<div class="container">
    <div class="row">
        <div>
            <form action="{{ route('comics.store') }}" method="post" class="needs-validation">
                {{--@csrf serve per la sicurezza --}}
                @csrf

                <label for="title">title</label>
                <input class="form-control  @error('title') is-invalid @enderror" name="title" type="text">
                @error("title")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="description">description</label>
                <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="" cols="30" rows="10"></textarea>
                @error("description")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="thumb">thumb</label>
                <input class="form-control @error('thumb') is-invalid @enderror" name="thumb" type="text" placeholder="url.">
                @error("thumb")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="price">price</label>
                <input class="form-control @error('price') is-invalid @enderror" name="price" type="text">
                @error("price")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="series">series</label>
                <input class="form-control @error('series') is-invalid @enderror" name="series" type="text">
                @error("series")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="sale_date">sale_date</label>
                <input class="form-control @error('v') is-invalid @enderror" name="sale_date" type="date">
                @error("sale_date")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
                
                <label for="type">type</label>
                <input class="form-control @error('type') is-invalid @enderror" name="type" type="text">
                @error("type")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror
                
                <label for="artists">artists</label>
                <input class="form-control @error('artists') is-invalid @enderror" name="artists" type="text">
                @error("artists")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <label for="writers">writers</label>
                <input class="form-control @error('writers') is-invalid @enderror" name="writers" type="text">
                @error("writers")
                    <div class="invalid-feedback">{{$message}}</div>
                @enderror

                <button class="form-control mt-3" type="submit">
                    invia
                </button>
            </form>
        </div>
    </div>
</div>

@endsection