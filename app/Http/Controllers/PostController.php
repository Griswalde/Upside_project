<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Http;
use App\Models\Category;
use Illuminate\Http\Request;
use App\Models\Post;
use App\Models\User;

class PostController extends Controller
{
    public function index()
    {
 
        $title ="";
        if(request('category')){
            $category = Category::firstWhere('slug', request('category'));
            $title = ' in ' . $category->name;
        }

        if(request('author')){
            $author = User::firstWhere('username', request('author'));
            $title = ' by ' . $author->name;
        }

        $categories = Category::withCount('posts')->get();

        return view('posts', [
            "title"      => "All Posts" . $title,
            "active"     => 'posts',
            "categories" => $categories,
            "posts"      => Post::latest()->filter(request(['search', 'category','author']))
            ->paginate(9)->withQueryString()
            
        ]);
    }

    public function show(Post $post)
    {
        $posts = Post::where('id', '!=', $post->id)->get()->random(2);
        return view('post', [
            "title" => "Single Post",
            "active" => 'posts',
            "posts" => $posts,
            "post" => $post,
        ]);
    }

    public function upcoming()
    {
        $response = Http::get('http://api.themoviedb.org/3/movie/upcoming?api_key=69f41d98f270bb6413ffef7a8ad029f9');

        $movies = $response->json();
        $title = 'Upcoming';
        return view('upcoming', compact('title', 'movies'));
    }

}