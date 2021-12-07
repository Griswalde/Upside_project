@extends('layouts.main')

@section('container')
<h1 class="mb-5">{{ $title }}</h1>

@if($posts->count())
<div id="carouselExampleCaptions" class="carousel slide" data-bs-ride="carousel">
    <div class="carousel-indicators">
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
      <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>

    {{-- image 1 --}}
    <div class="carousel-inner">
      <div class="carousel-item active">
        <img src="http://source.unsplash.com/1200x400/?nature,water" class="d-block w-100" alt="{{ $posts[0]->category->name }}">
        <div class="carousel-caption d-none d-md-block">
            <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"
                class="text-decoration-none text-info">{{ $posts[0]->title }} </a></h3>
            <p>
                <small class="text-muted">
                By, <a href="/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}
                </a>{{ $posts[0]->created_at->diffForHumans() }}
            </small>
        </p>
        </div>
      </div>

      {{-- image 2 --}}
      <div class="carousel-item">
        <img src="http://source.unsplash.com/1200x400/?nature,water" class="d-block w-100" alt="{{ $posts[1]->category->name }}">
        <div class="carousel-caption d-none d-md-block">
            <h3 class="card-title"><a href="/posts/{{ $posts[1]->slug }}"
                class="text-decoration-none text-info">{{ $posts[1]->title }} </a></h3>
            <p>
                <small class="text-muted">
                By, <a href="/authors/{{ $posts[1]->author->username }}">{{ $posts[1]->author->name }}
                </a>{{ $posts[1]->created_at->diffForHumans() }}
            </small>
        </p>
        </div>
      </div>

      {{-- image 3 --}}
      <div class="carousel-item">
        <img src="http://source.unsplash.com/1200x400/?nature,water" class="d-block w-100" alt="{{ $posts[2]->category->name }}">
        <div class="carousel-caption d-none d-md-block">
            <h3 class="card-title"><a href="/posts/{{ $posts[2]->slug }}"
                class="text-decoration-none text-info">{{ $posts[2]->title }} </a></h3>
            <p>
                <small class="text-muted">
                By, <a href="/authors/{{ $posts[2]->author->username }}">{{ $posts[2]->author->name }}
                </a>{{ $posts[2]->created_at->diffForHumans() }}
            </small>
        </p>
        </div>
      </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="visually-hidden">Next</span>
    </button>
  </div>
  <br>
{{-- <div class="card mb-3">
    <img src="..." class="card-img-top" alt="...">
    <div class="card-body">
        <h1 class="card-title">{{ $posts[0]->title }}</h1>
        <p>
            <small class="text-muted">
            By, <a href="/authors/{{ $posts[0]->author->username }}">{{ $posts[0]->author->name }}
            </a>{{ $posts[0]->created_at->diffForHumans() }}
        </small>
    </p>
    </div>
  </div> --}}
@else
<p class="text-center fs-4"> No Post Found. </p>
@endif



<div class="container">
    <div class="row">
        @foreach ($posts->skip(3) as $post)
        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute px-3 py-2 text-white" style="background-color:rgb(168, 168, 76)">
                    <a href="/categories/{{ $post->category->slug }}" class="text-white text-decoration-none">
                    {{ $post->category->name }}</a></div>
                <img src="http://source.unsplash.com/500x400?nature,water" class="card-img-top" alt="{{ $post->category->name }}">
                <div class="card-body">
                  <h5 class="card-title">{{ $post->title }}</h5>
                  <p>
                    <small class="text-muted">
                    By, <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}
                    </a> {{ $post->created_at->diffForHumans() }}
                </small>
            </p>
                  <p class="card-text">{{ $post->excerpt }}</p>
                  <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                </div>
              </div>
        </div>
        @endforeach
    </div>
</div>


@endsection