<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\User;
use App\Models\Category;
use App\Models\Post;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
       
     
        User::factory(4)->create();



        Category::create([
            'name' => 'Movies',
            'slug' => 'movie'
        ]);
 
         Category::create([
             'name' =>'Series',
             'slug' =>'series'
         ]);

         Category::create([
            'name' =>'Drakor',
            'slug' =>'drakor'
        ]);

        Post::factory(18)->create();



        //  Post::create([
        //     'title' => 'Judul Pertama',
        //     'slug' => 'judul-pertama',
        //     'excerpt' => 'I am the Bone of my Sword',
        //     'body' => 'I am the Bone of my Sword
        //     Steel is my Body and Fire is my Blood.
        //     I have created over a Thousand Blades,
        //     Unknown to Death,
        //     Nor known to Life.
        //     Have withstood Pain to create many Weapons
        //     Yet those Hands will never hold Anything.
        //     So, as I Pray',
        //     'category_id' => 1,
        //     'user_id' =>1

        // ]);

        // Post::create([
        //     'title' => 'Judul ke Dua',
        //     'slug' => 'judul-ke-dua',
        //     'excerpt' => 'I am the Bone of my Sword',
        //     'body' => 'I am the Bone of my Sword
        //     Steel is my Body and Fire is my Blood.
        //     I have created over a Thousand Blades,
        //     Unknown to Death,
        //     Nor known to Life.
        //     Have withstood Pain to create many Weapons
        //     Yet those Hands will never hold Anything.
        //     So, as I Pray',
        //     'category_id' => 1,
        //     'user_id' =>1

        // ]);

        // Post::create([
        //     'title' => 'Judul ke tiga',
        //     'slug' => 'judul-ke-tiga',
        //     'excerpt' => 'I am the Bone of my Sword',
        //     'body' => 'I am the Bone of my Sword
        //     Steel is my Body and Fire is my Blood.
        //     I have created over a Thousand Blades,
        //     Unknown to Death,
        //     Nor known to Life.
        //     Have withstood Pain to create many Weapons
        //     Yet those Hands will never hold Anything.
        //     So, as I Pray',
        //     'category_id' => 2,
        //     'user_id' =>1
        // ]);

        //     Post::create([
        //         'title' => 'Judul ke Empat',
        //         'slug' => 'judul-ke-empat',
        //         'excerpt' => 'I am the Bone of my Sword',
        //         'body' => 'I am the Bone of my Sword
        //         Steel is my Body and Fire is my Blood.
        //         I have created over a Thousand Blades,
        //         Unknown to Death,
        //         Nor known to Life.
        //         Have withstood Pain to create many Weapons
        //         Yet those Hands will never hold Anything.
        //         So, as I Pray',
        //         'category_id' => 2,
        //         'user_id' =>2
    
           

        // ]);


    }
}
