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

    <div class="container">
        <div class="row">
            <div class="col-md-8">
                <div class="row">
                    <h4 class="h4">
                        Posts
                    </h4>
                    @forelse ($posts as $post)
                        <div class="card mb-4 p-1">
                            <div class="position-absolute bg-dark px-3 py-2 text-white">
                                <a href="/posts?category={{ $post->category->slug }}"
                                    class="text-white text-decoration-none">
                                    {{ $post->category->name }}
                                </a>
                            </div>
                            <div class="row g-0 ">
                                <div class="col-md-4">
                                    @if ($post->image)
                                        <img src="{{ asset('storage/' . $post->image) }}"
                                            alt="{{ $post->category->name }}" class="img-fluid rounded-start"
                                            style="height: 200px;">
                                    @else
                                        <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                                            class="img-fluid rounded-start"" alt=" {{ $post->category->name }}"
                                            style="height: 200ppx;">
                                    @endif
                                </div>
                                <div class="col-md-8">
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $post->title }}</h5>
                                        <p class="card-text" title="{{ $post->excerpt }}">
                                            {{ $post->excerpt }}
                                        </p>
                                        <a href="/posts/{{ $post->slug }}" class="btn btn-primary mb-3">Read more</a>
                                        <p class="card-text">
                                            <small class="text-muted">
                                                By. <a href="/posts?author={{ $post->author->username }}"
                                                    class="text-decoration-none">{{ $post->author->name }}</a>
                                                {{ $post->created_at->diffForHumans() }}
                                            </small>
                                            <small class="text-muted">
                                                Last updated
                                                {{ $post->created_at->diffForHumans() }}
                                            </small>
                                        </p>
                                    </div>
                                </div>
                            </div>
                        </div>

                        {{-- <div class="col-md-4 mb-3">
                                <div class="card">
                                    <div class="position-absolute bg-dark px-3 py-2 text-white"><a
                                            href="/posts?category={{ $post->category->slug }}"
                                            class="text-white text-decoration-none">{{ $post->category->name }}</a></div>
                                    @if ($post->image)
                                        <img src="{{ asset('storage/' . $post->image) }}"
                                            alt="{{ $post->category->name }}" class="img-fluid">
    
                                    @else
                                        <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                                            class="card-img-top" alt="{{ $post->category->name }}">
                                    @endif
    
    
                                    <div class="card-body">
                                        <h5 class="card-title">{{ $post->title }}</h5>
                                        <p>
                                            <small class="text-muted">
                                                By. <a href="/posts?author={{ $post->author->username }}"
                                                    class="text-decoration-none">{{ $post->author->name }}</a>
                                                {{ $post->created_at->diffForHumans() }}
                                            </small>
                                        </p>
                                        <p class="card-text">{{ $post->excerpt }}</p>
                                        <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read More</a>
                                    </div>
                                </div>
                            </div> --}}
                    @empty
                        <p class="text-center fs-4">No Post Found.</p>
                    @endforelse
                    <div class="d-flex justify-content-end">
                        {{ $posts->links() }}
                    </div>
                </div>
            </div>

            <div class="col-md">
                <h4 class="h4">
                    Cetegories
                </h4>
                <ol class="list-group list-group-numbered">

                    @forelse ($categories as $category)
                        <a class="list-group-item d-flex justify-content-between align-items-start @if (request()->input('category') == $category->slug) text-primary @endif"
                            href="/posts?category={{ $category->slug }}">
                            <div class="ms-2 me-auto">
                                <div class="fw-bold">{{ $category->name }}</div>
                            </div>
                            <span class="badge bg-primary rounded-pill">{{ $category->posts_count }}</span>
                        </a>
                    @empty
                        <p class="text-center fs-4">No Category Found.</p>
                    @endforelse
                </ol>
            </div>
        </div>

    </div>




@endsection
