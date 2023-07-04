{{-- Estensione per definire il layout --}}
@extends('layouts.app')

{{-- Contenuto --}}
@section('content')

<div class="container my-3">
    {{-- Comics book --}}
    <div class="row row-cols-md-4 row-cols-lg-6 g-3">
        @foreach ($comics as $item)
            <div class="col ">
                <div class="imgContainer">
                    <a href="{{route("comics.show", $item->id)}}">
                        <img src="{{$item->thumb}}" alt="">
                    </a>
                </div>
            </div>
        @endforeach
        <div class="w-100 d-flex justify-content-center align-items-center">
            <a href="{{ route("comics.create") }}">
                {{-- <button class="btn btn-primary"> --}}
                    Add More
                {{-- </button> --}}
            </a>
        </div>
    </div>
</div>

{{-- Info Comics --}}
<div class="container-fluid">
    <div class="row">
        <div class="col-12 bg-primary">
            <h1>Info Comics</h1>
        </div>
    </div>
</div>

@endsection