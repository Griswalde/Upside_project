<?php

use App\Http\Controllers\PostController;
use App\Models\Post;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/
Route::get('/', function(){
    return view('home',[
        "title" => "home"
    ]);
});



Route::get('/categories',function(){
    return view('categories',[
        "title" => "categories"
    ]);
});

Route::get('/posts', function(){
    return view('posts', [
        "title" => "Posts",
        "posts" => Post::all()
    ]);
});




Route::get('/posts/{slug}', function($slug){

    return view('post',[
        "title" => "Single Post",
        "post" => Post::find($slug)
    ]);
});