@extends('layouts.main')

@section('container')

<h1 class="mb-5">New Post</h1>

@foreach ($posts as $post)
<article>
    <h2><a href="/posts/{{ $post->id }}">{{ $post->title }}</a></h2>
    <p>{{ $post->body }}</p>
</article>

@endsection
