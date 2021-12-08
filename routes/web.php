<?php

use App\Models\Post;
use App\Models\Category;
use App\Models\User;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\PostController;

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
        "title" => "home",
    ]);
});





// Route::get('/posts', function(){
//     return view('posts', [
//         "title" => "Posts",
//         "posts" => Post::all()
//     ]);
// });




// Route::get('/posts/{slug}', function($slug){

//     return view('post',[
//         "title" => "Single Post",
//         "post" => Post::find($slug)
//     ]);
// });


Route::get('/posts',[PostController::class, 'index']);
Route::get('/posts/{post:slug}' ,  [PostController::class, 'show']);

Route::get('/categories', function() {
    return view('categories', [
        'title' => 'Post Categories',
        'categories' => Category::all()
    ]);
});



// Route::get('/authors/{author:username}', function(User $author) {
//     return view('posts', [
//         'title' => "Post By Author : $author->name",
//         'posts' => $author->posts->load('category', 'author')
//     ]);
// });