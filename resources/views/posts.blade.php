@extends('layouts.main')

@section('container')
<h1 class="mb-3 text-center">{{ $title }}</h1>

<div class="row justify-content-center mb-3">
  <div class="col-md-6">
    <form action="/posts">
      @if (request('category'))
      <input type="hidden" name="category" value="{{ request('category') }}">     
      @endif
      @if (request('author'))
      <input type="hidden" name="author" value="{{ request('author') }}">     
      @endif
      <div class="input-group mb-3">
        <input type="text" class="form-control" placeholder="Search..." name="search" 
        value="{{ request('search') }}">
        <button class="btn btn-danger" type="submit">Search</button>
      </div>
    </form>
  </div>
</div>



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
        @if($posts[0]->image)
                <img src="{{ asset('storage/' . $posts[0]->image) }}" alt="{{ $posts[0]->category->name }}">
              @else
              <img src="http://source.unsplash.com/1200x400/?nature,water" class="d-block w-100" alt="{{ $posts[0]->category->name }}">
              @endif
        <div class="carousel-caption d-none d-md-block">
            <h3 class="card-title"><a href="/posts/{{ $posts[0]->slug }}"
                class="text-decoration-none text-info">{{ $posts[0]->title }} </a></h3>
            <p>
                <small class="text-muted">
                {{ $posts[0]->created_at->diffForHumans() }}
            </small>
        </p>
        </div>
      </div>

      {{-- image 2 --}}
      <div class="carousel-item">
        @if($posts[1]->image)
                <img src="{{ asset('storage/' . $posts[1]->image) }}" alt="{{ $post[1]->category->name }}">
              </div>
              @else
              <img src="http://source.unsplash.com/1200x400/?nature,water" class="d-block w-100" alt="{{ $posts[1]->category->name }}">
              @endif
        <div class="carousel-caption d-none d-md-block">
            <h3 class="card-title"><a href="/posts/{{ $posts[1]->slug }}"
                class="text-decoration-none text-info">{{ $posts[1]->title }} </a></h3>
            <p>
                <small class="text-muted">
                {{ $posts[1]->created_at->diffForHumans() }}
            </small>
        </p>
        </div>
      </div>

      {{-- image 3 --}}
      <div class="carousel-item">
        @if($posts[2]->image)
                <img src="{{ asset('storage/' . $posts[2]->image) }}" alt="{{ $post[2]->category->name }}">
              </div>
              @else
              <img src="http://source.unsplash.com/1200x400/?nature,water" class="d-block w-100" alt="{{ $posts[2]->category->name }}">>
              @endif
        <div class="carousel-caption d-none d-md-block">
            <h3 class="card-title"><a href="/posts/{{ $posts[2]->slug }}"
                class="text-decoration-none text-info">{{ $posts[2]->title }} </a></h3>
            <p>
                <small class="text-muted">
                {{ $posts[2]->created_at->diffForHumans() }}
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





  <div class="container">
    <div class="row">
        @foreach ($posts->skip(1) as $post)

        <div class="col-md-4 mb-3">
            <div class="card">
                <div class="position-absolute bg-dark px-3 py-2 text-white"><a href="/posts?category={{ $post->category->slug }}" class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                @if($post->image)
                <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}" 
                class="img-fluid">
        
              @else
              <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}" class="card-img-top"
               alt="{{ $post->category->name }}">
              @endif

                
                <div class="card-body">
                  <h5 class="card-title">{{ $post->title }}</h5>
                  <p>
                    <small class="text-muted">
                      By. <a href="/posts?author={{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a> {{ $post->created_at->diffForHumans() }}
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

@else
  <p class="text-center fs-4">No Post Found.</p>
@endif
    
<div class="d-flex justify-content-end">
{{ $posts->links() }}
</div>
@endsection