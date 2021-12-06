@extends('layouts.main')

@section('container')


@foreach ($posts as $post)
<article class="mb-5 border-bottom pb-4">
    <h2>
     <a href="/posts/{{ $post->slug }}"
         class="text-decoration-none">{{ $post->title }}</a></h2>
         
    <p>By, <a href="/authors/{{ $post->author->username }}">{{ $post->author->name }}</a>  </p>

    <p>{{ $post->excerpt }} </p>

    <a href="/posts/{{ $post->slug }}" class="text-decoration-none">Read More...</a>
</article>

@endforeach

@endsection