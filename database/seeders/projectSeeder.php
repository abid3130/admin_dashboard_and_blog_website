<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class projectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
 DB::table('projects')->insert([

            'name' => 'project5',
            'email' => 'project5@example.com',
            'message' => 'my fifth project'

            ]);
    }

    }