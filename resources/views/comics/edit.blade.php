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
            <div class="col">
                <form action="{{ route('comics.update', $comic->id) }}" method="post" class="needs-validation">
                    @csrf

                    @method('PUT')

                    <label for="title">title</label>
                    <input class="form-control @error('title') is-invalid @enderror" name="title" type="text" value="{{ $comic->title }}">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <label for="description">description</label>
                    <textarea class="form-control @error('description') is-invalid @enderror" name="description" id="" cols="30" rows="10">
                        {{ $comic->description }}
                    </textarea>

                    <label for="thumb">thumb</label>
                    <input class="form-control @error('thumb') is-invalid @enderror" name="thumb" type="text" value="{{ $comic->thumb }}">
                    @error('thumb')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <label for="price">price</label>
                    <input class="form-control @error('price') is-invalid @enderror" name="price" type="text" value="{{ $comic->price }}">
                    @error('price')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <label for="series">series</label>
                    <input class="form-control @error('series') is-invalid @enderror" name="series" type="text" value="{{ $comic->series }}">
                    @error('series')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <label for="sale_date">sale_date</label>
                    <input class="form-control @error('sale_date') is-invalid @enderror" name="sale_date" type="date" value="{{ $comic->sale_date }}">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <label for="type">type</label>
                    <input class="form-control @error('type') is-invalid @enderror" name="type" type="text" value="{{ $comic->type }}">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <label for="artists">artists</label>
                    <input class="form-control @error('artists') is-invalid @enderror" name="artists" type="text" value="{{ $comic->artists }}">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <label for="writers">writers</label>
                    <input class="form-control @error('writers') is-invalid @enderror" name="writers" type="text" value="{{ $comic->writers }}">
                    @error('title')
                        <div class="invalid-feedback">{{ $message }}</div>
                    @enderror

                    <button class="form-control mt-3" type="submit">
                        invia
                    </button>
                </form>
            </div>
        </div>
    </div>
@endsection
