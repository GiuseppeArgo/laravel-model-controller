@extends('layouts.app')

@section('content')
    <div class="container">
        <div class="row d-flex">
            @foreach ($movies as $movie)
                <div class="col g-4">
                    <div class="card" style="width: 18rem;">
                        <img class="card-img-top" src="{{ $movie->image }}" alt="Card image cap">
                        <div class="card-body">
                        <h3 class="card-title">{{ $movie->title }}</h3>
                        <h4 class="card-text">Titolo originale: {{ $movie->original_title }}</h4>
                        <h5 class="card-text">Voto: {{ $movie->vote }}</h5>
                        </div>
                    </div>
                </div>
                @endforeach
        </div>
    </div>
@endsection
