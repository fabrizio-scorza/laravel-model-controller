{{-- estendiamo il layout di app --}}
@extends('layouts.app')

{{-- estendiamo title in app --}}
@section('title','Movies')

{{-- estendiamo content in app --}}
@section('content')
    <section>
        <div class="container pt-5">
            <h1>Movies</h1>
            <div class="row row-cols-4 py-4 row-gap-4">
                @foreach ($movies as $movie)
                <div class="col">
                    <div class="card">
                        <div class="card-body">
                            <h5 class="card-title fs-6">Titolo: {{ $movie->title }}</h5>
                            <h5 class="card-subtitle fs-6">Titolo Originale: {{ $movie->title }}</h5>
                            <p>
                                <span>
                                    Nazionalità: {{$movie->nationality}}
                                </span>
                                <span>
                                    Voto: {{$movie->vote}}
                                </span>
                            </p>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </section>
@endsection