<?php

namespace Database\Seeders;

use App\Models\Blog;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class PostSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
     DB::table('articles')->delete();

    $blogs = [
        [

            'name' => 'post 1',
            'slug' => 'post-1',
            'description' => 'My first post ',
        ],
        [

            'name' => 'post 2',
            'slug' => 'post-2',
            'description' => 'My second post ',
        ],
        [

            'name' => 'post 3',
            'slug' => 'post-3',
            'description' => 'My third  post ',
        ],
        [

            'name' => 'post 4',
            'slug' => 'post-4',
            'description' => 'My fourth post ',
        ],
        [

            'name' => 'post 5',
            'slug' => 'post-5',
            'description' => 'My Sixth post ',
        ],
        [

            'name' => 'post 7',
            'slug' => 'post-7',
            'description' => 'My Seventh post ',
        ],
        [

            'name' => 'post 8',
            'slug' => 'post-8',
            'description' => 'My Eighth  post ',
        ],
        [

            'name' => 'post 9',
            'slug' => 'post-9',
            'description' => 'My Ninth post ',
        ],
        [

            'name' => 'post 10',
            'slug' => 'post-10',
            'description' => 'My tenth post ',
        ],

    ];


    foreach ($blogs as $blog) {
        Blog::insert([
            'name' => $blog['name'],
            'slug' => $blog['slug'],
            'description' => $blog['description'],

        ]);
    }
    }

}
