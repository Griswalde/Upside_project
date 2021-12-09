@extends('layouts.main')

@section('container')






               <h1 class="mb-3">{{ $post->title }}</h1>
               <p>By. <a href="/posts?author={{ $post->author->username }}"
                    class="text-decoration-none">{{ $post->author->name }}</a>
                   </p>

                   <img src="http://source.unsplash.com/1200x400?nature,water"alt="{{ $post->category->name }}"
                   class="img-fluid">
              

                   <article class= "my-3 fs-5">
              {!!  $post->body !!}
          </article>
              <a href = "/posts" class="d-block mt-3"> Back to Posts</a>
              </p>


              
          </div>
     </div>
     
</div>
     






@endsection