@extends('layouts.app')

@section('header')
    <h2>Boolflix</h2>
@endsection

@section('content')
    <div class="ms_container">
         @foreach ($movies as $movie)
            <div class="card" style="width: 18rem;">
                <img class="card-img-top" src="{{ $movie->image }}" alt="Card image cap">
                <div class="card-body">
                    <h3 class="card-title">{{ $movie->title }}</h3>
                    <h4 class="card-text">Titolo originale: {{ $movie->original_title }}</h4>
                    <h5 class="card-text">Voto: {{ $movie->vote }}</h5>
                </div>
            </div>
        @endforeach
    </div>
@endsection
