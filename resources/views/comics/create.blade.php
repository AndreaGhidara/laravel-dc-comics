{{-- Estensione per definire il layout --}}
@extends('layouts.app')

{{-- Contenuto --}}
@section('content')

<div class="container">
    <div class="row">
        <div>
            <form action="{{ route('comics.store') }}" method="post">
                {{--@csrf serve per la sicurezza --}}
                @csrf

                <label for="">title</label>
                <input class="form-control" name="title" type="text">

                <label for="">description</label>
                <input class="form-control" name="description" type="text">

                <label for="">thumb</label>
                <input class="form-control" name="thumb" type="text">

                <label for="">price</label>
                <input class="form-control" name="price" type="text">

                <label for="">series</label>
                <input class="form-control" name="series" type="text">

                <label for="">sale_date</label>
                <input class="form-control" name="sale_date" type="date">
                
                <label for="">type</label>
                <input class="form-control" name="type" type="text">
                
                <label for="">artists</label>
                <input class="form-control" name="artists" type="text">

                <label for="">writers</label>
                <input class="form-control" name="writers" type="text">

                <button class="form-control mt-3" type="submit">
                    invia
                </button>
            </form>
        </div>
    </div>
</div>

@endsection