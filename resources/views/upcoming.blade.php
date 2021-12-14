@extends('layouts.main')

@section('container')
    <div>
        <p>Dates : {{ $movies['dates']['minimum'] }} - {{ $movies['dates']['maximum'] }}</p>
        <div class="row g-3">
            @forelse ($movies['results'] as $movie)
                <div class="col-md-3">
                    <div class="card" style="width: 18rem;">
                        <img src="https://www.themoviedb.org/t/p/w600_and_h900_bestv2/{{ $movie['poster_path'] }}"
                            class="card-img-top" alt="...">
                        <div class="card-body">
                            <h5 class="card-title">{{ $movie['original_title'] }}</h5>
                            <p class="card-text text-truncate" title="{{ $movie['overview'] }}">{{ $movie['overview'] }}
                            </p>
                        </div>
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">{{ $movie['release_date'] }}</li>
                            <li class="list-group-item">{{ $movie['vote_average'] }}</li>
                        </ul>
                        {{-- <div class="card-body">
                            <a href="#" class="card-link">Card link</a>
                        </div> --}}
                    </div>
                </div>
            @empty
                <p class="fs-4">No Movie Found.</p>
            @endforelse

        </div>
    </div>
@endsection
