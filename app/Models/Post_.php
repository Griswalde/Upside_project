<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Post
{
     private static $blog_posts = [
        [
        "title" => "judul Tulisan petama",
        "slug" => "judul-tulisan-petama",
        "author" => "mondo",
        "body" => "judul pertama dan untuk keterakhir kalinya"
    ],
    [
        "title" => "judul tulisan kedua",
        "slug" => "judul-tulisan-kedua",
        "author" => "luke",
        "body" => "lorem saya ipsum dahar"
    ]
    ];

    public static function all()
    {
        return self::$blog_posts;
    }

    public static function find($slug)
    {
        $posts = self::$blog_posts;
        $post = [];
        foreach($posts as $p) {
            if($p["slug"] === $slug) {
                $post = $p;
            }
        }
        return $post;
    }
    
}