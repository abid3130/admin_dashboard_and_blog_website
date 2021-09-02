<?php


use App\Models\User;
namespace Database\Seeders;

use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Hash;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('Users')->insert([
            'password' => Hash::make('password'),
            'name' => 'abaaid',
            'user_name' => 'abid11221',
            'full_name' => 'abid ',
            'email' =>'abid11111111@gmail.com',
            'password' => Hash::make('password'),
        ]);
    }
}

