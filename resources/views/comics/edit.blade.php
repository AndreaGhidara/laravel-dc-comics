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

                <label for="">title</label>
                <input class="form-control" name="title" type="text" value="{{$comic->title}}">

                <label for="">description</label>
                <textarea class="form-control" name="description" id="" cols="30" rows="10">
                    {{$product->description}}
                </textarea>

                <label for="">thumb</label>
                <input class="form-control" name="thumb" type="text" placeholder="{{$$comic->thumb}}">

                <label for="">price</label>
                <input class="form-control" name="price" type="text" value="{{$product->price}}">

                <label for="">series</label>
                <input class="form-control" name="series" type="text" value="{{$product->series}}">

                <label for="">sale_date</label>
                <input class="form-control" name="sale_date" type="date" value="{{$product->sale_date}}">
                
                <label for="">type</label>
                <input class="form-control" name="type" type="text" value="{{$product->type}}">
                
                <label for="">artists</label>
                <input class="form-control" name="artists" type="text" value="{{$product->artists}}">

                <label for="">writers</label>
                <input class="form-control" name="writers" type="text" value="{{$product->writers}}">

                <button class="form-control mt-3" type="submit">
                    invia
                </button>
            </form>
        </div>
    </div>
</div>


@endsection