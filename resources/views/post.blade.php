@extends('layouts/main')

@section('container')
<h1 class="mb-5">{{ $post["title"] }}</h1>
<p>{{ $post["body"] }} </p>

<a href="/posts">back to posts</a>

@endsection