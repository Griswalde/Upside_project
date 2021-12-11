@extends('layouts.main')

@section('container')
    <h1 class="mb-5">Post Categories</h1>    
    @if ($categories->count())
    <div class="container">
        <div class="row">
            <div class="col-md-4 mb-3">
                <a href="/posts?categories={{ $categories[2]->slug }}">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/1920x1080?" class="card-img" alt="{{ $categories[2]->name }}">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                      <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, 0, 7)">{{ $categories[2]->name }}</h5>
                    </div>
                  </div>
                </a>
            </div>
            <div class="col-md-4 mb-3">
                <a href="/posts?category={{ $categories[1]->slug }}">
            <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/500x500?" class="card-img" alt="{{ $categories[1]->slug }}">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                      <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, 0, 7)">{{ $categories[1]->name }}</h5>
                    </div>
                  </div>
                </a>
            </div>
            <div class="col-md-4 mb-3">
                <a href="/posts?category={{ $categories[0]->slug }}">
                <div class="card bg-dark text-white">
                    <img src="https://source.unsplash.com/500x500?" class="card-img" alt="{{ $categories[0]->name }}">
                    <div class="card-img-overlay d-flex align-items-center p-0">
                      <h5 class="card-title text-center flex-fill p-4 fs-3" style="background-color: rgba(0, 0, 0, 0, 7)">{{ $categories[0]->name }}</h5>
                    </div>
                  </div>
                </a>
            </div>
       
        </div>
    </div>
    @else 
    <h1>Data Kosong</h1>
    @endif

@endsection
