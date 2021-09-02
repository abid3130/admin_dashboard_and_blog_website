<?php

namespace Database\Seeders;
use Illuminate\Support\Facades\DB;

use Illuminate\Database\Seeder;

class CommentsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('comments')->insert([
           
            'name' => 'Irfan',
            
            'comment' =>'Seventh   comment',
            'website' =>'picawesome.com',

            'email' =>'irfan1234@gmail.com',
           
        ]);
    }
}
?>



          
           
          