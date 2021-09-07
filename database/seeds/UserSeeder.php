<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS= 0');
       DB::table('users')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS= 1');
        
        DB::table('users')->insert([
            'name' => 'Noe Rivera',
            'email' => 'google@gmail.com',
            'password' => bcrypt('12345678'),
            'profession_id' => 1
        ]);
        DB::table('users')->insert([
            'name' => 'Noe Rivera',
            'email' => 'facebook@gmail.com',
            'password' => bcrypt('12345678'),
            'profession_id' => 2
        ]);
        DB::table('users')->insert([
            'name' => 'Noe Rivera',
            'email' => 'instagram@gmail.com',
            'password' => bcrypt('12345678'),
            'profession_id' => 3
        ]);
        DB::table('users')->insert([
            'name' => 'Noe Rivera',
            'email' => 'twitter@gmail.com',
            'password' => bcrypt('12345678'),
            'profession_id' => 4
        ]);
        DB::table('users')->insert([
            'name' => 'Noe Rivera',
            'email' => 'youtube@gmail.com',
            'password' => bcrypt('12345678'),
            'profession_id' => 5
        ]);
        DB::table('users')->insert([
            'name' => 'Noe Rivera',
            'email' => 'snagchat@gmail.com',
            'password' => bcrypt('12345678'),
            'profession_id' => 6
        ]);
        DB::table('users')->insert([
            'name' => 'Noe Rivera',
            'email' => 'uls@gmail.com',
            'password' => bcrypt('12345678'),
            'profession_id' => 7
        ]);
        DB::table('users')->insert([
            'name' => 'Noe Rivera',
            'email' => 'twich@gmail.com',
            'password' => bcrypt('12345678'),
            'profession_id' => 8
        ]);
        DB::table('users')->insert([
            'name' => 'Noe Rivera',
            'email' => 'marquez@gmail.com',
            'password' => bcrypt('12345678'),
            'profession_id' => 9
        ]);
        DB::table('users')->insert([
            'name' => 'Noe Rivera',
            'email' => 'angel@gmail.com',
            'password' => bcrypt('12345678'),
            'profession_id' => 10
        ]);
    }
}
