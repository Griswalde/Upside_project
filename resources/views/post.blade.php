@extends('layouts.main')

@section('container')

    <div class="container">
        <div class="row justify-content-center mb-5">
            <div class="col-md-10">
                <h1 class="mb-3">{{ $post->title }}</h1>

                <p>By. <a href="/posts?author={{ $post->author->username }}"
                        class="text-decoration-none">{{ $post->author->name }}</a>

                    @if ($post->image)
                        <div style="max-height: 350px; overflow:hidden">
                            <img src="{{ asset('storage/' . $post->image) }}" alt="{{ $post->category->name }}"
                                class="img-fluid">
                        </div>
                    @else
                        <img src="https://source.unsplash.com/1200x400?{{ $post->category->name }}"
                            alt="{{ $post->category->name }}" class="img-fluid">
                    @endif

                <div class="row">
                    <div class="col-md-8" S>
                        <article class="my-3 fs-5">
                            {!! $post->body !!}
                        </article>
                        <a href="/posts" class="d-block mt-3">Back to Posts</a>
                    </div>
                    <div class="col-md">
                        <h4>Another posts</h4>
                        <div class="row">
                            @forelse ($posts as $post)
                                <div class="mb-3">
                                    <div class=" card">
                                        @if ($post->image)
                                            <img src="{{ asset('storage/' . $post->image) }}"
                                                alt="{{ $post->category->name }}" class="img-fluid">
                                        @else
                                            <img src="https://source.unsplash.com/500x400?{{ $post->category->name }}"
                                                class="card-img-top" alt="{{ $post->category->name }}">
                                        @endif
                                        <div class="card-body">
                                            <h5 class="card-title">{{ $post->title }}</h5>
                                            <a href="/posts/{{ $post->slug }}" class="btn btn-primary">Read more</a>
                                        </div>
                                    </div>
                                </div>
                            @empty
                                <p class="fs-4">No Post Found.</p>
                            @endforelse
                        </div>

                    </div>
                </div>


            </div>
        </div>
    </div>



@endsection
