{{-- Estensione per decidere il layout --}}
@extends('layouts.app')

{{-- titolo di pagiona --}}
@section('page-title', 'Title Override: Info page')

@section('content')
<div class="container my-3">

    <h1>Info Page</h1>

    <div class="row g-4">
        <div class="col">
            <div>
                <p>Info</p>
            </div>
        </div>
    </div>

</div>
@endsection