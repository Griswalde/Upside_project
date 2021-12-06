@extends('layouts.main')

@section('container')

<h2>{{ $post->title }}</h2>


<p>By. <a href="/authors/{{ $post->author->username }}" class="text-decoration-none">{{ $post->author->name }}</a>
     </p>

{!!  $post->body !!}

<a href = "/posts" class="d-block mt-3"> Back to Posts</a>
</p>

@endsection