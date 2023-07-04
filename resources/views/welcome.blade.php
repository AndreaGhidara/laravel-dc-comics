{{-- Estensione per definire il layout --}}
@extends('layouts.app')

{{-- Contenuto --}}
@section('content')

<div class="container my-3">

    <h1>Content-Page</h1>
    <div class="row g-4">
        <div class="col">
            <div>
                <p>Elementi</p>
                <i class="fa-solid fa-asterisk"></i>
            </div>
        </div>
    </div>

</div>

@endsection