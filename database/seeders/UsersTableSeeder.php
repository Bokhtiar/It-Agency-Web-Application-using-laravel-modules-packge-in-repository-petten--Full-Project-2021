<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            "name"=>'admin',
            "email"=>'admin@gmail.com',
            "password"=>bcrypt('12345678'),
            "role_id"=>2,
          ]);


          DB::table('users')->insert([
            "name"=>'user',
            "email"=>'user@gmail.com',
            "password"=>bcrypt('12345678'),
            "role_id"=>1,
          ]);


          DB::table('users')->insert([
            "name"=>'manager',
            "email"=>'manager@gmail.com',
            "password"=>bcrypt('12345678'),
            "role_id"=>3,
          ]);

          DB::table('users')->insert([
            "name"=>'staff',
            "email"=>'staff@gmail.com',
            "password"=>bcrypt('12345678'),
            "role_id"=>4,
          ]);
    }
}
