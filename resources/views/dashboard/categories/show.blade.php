@extends('dashboard.layouts.main')

@section('container')

<div class="container">
    <div class="row my-3">
        <div class="col-lg-8">
            <h2 class="mb-3">{{ $category->name }}</h2>
            
            <a href="/dashboard/categories" class="btn btn-success"><span data-feather="arrow-left"></span> Back to all my categories</a>
            <a href="/dashboard/categories/{{ $category->slug }}/edit" class="btn btn-warning"><span data-feather="edit"></span> Edit</a>
            <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                @method('delete')
                @csrf
                <form action="/dashboard/categories/{{ $category->slug }}" method="post" class="d-inline">
                    @method('delete')
                    @csrf
                    <button class="btn btn-danger " onclick="return confirm ('are you sure?')"><span data-feather="x-circle"></span>Delete</button>
                  </form>
              </form>
        </div>
    </div>
</div>

@endsection