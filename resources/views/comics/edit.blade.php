{{-- Estensione per definire il layout --}}
@extends('layouts.app')

{{-- Contenuto --}}
@section('content')

<div class="container">
    <div class="row">
        <div class="col">
            <form action="{{route('comics.update', $comic->id)}}" method="post" >
                @csrf

                @method("PUT")

                <label for="title">title</label>
                <input class="form-control" name="title" type="text" value="{{$comic->title}}">

                <label for="description">description</label>
                <textarea class="form-control" name="description" id="" cols="30" rows="10">
                    {{$comic->description}}
                </textarea>

                <label for="thumb">thumb</label>
                <input class="form-control" name="thumb" type="text" value="{{$comic->thumb}}">

                <label for="price">price</label>
                <input class="form-control" name="price" type="text" value="{{$comic->price}}">

                <label for="series">series</label>
                <input class="form-control" name="series" type="text" value="{{$comic->series}}">

                <label for="sale_date">sale_date</label>
                <input class="form-control" name="sale_date" type="date" value="{{$comic->sale_date}}">
                
                <label for="type">type</label>
                <input class="form-control" name="type" type="text" value="{{$comic->type}}">
                
                <label for="artists">artists</label>
                <input class="form-control" name="artists" type="text" value="{{$comic->artists}}">

                <label for="writers">writers</label>
                <input class="form-control" name="writers" type="text" value="{{$comic->writers}}">

                <button class="form-control mt-3" type="submit">
                    invia
                </button>
            </form>
        </div>
    </div>
</div>


@endsection