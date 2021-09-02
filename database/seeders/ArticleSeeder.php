<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ArticleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('articles')->insert([

            'name' => 'post_5',
            'slug' => 'post-5',

            'description' =>'my fifth article ..',
            'image' => 'default5.png',


        ]);
    }
}
