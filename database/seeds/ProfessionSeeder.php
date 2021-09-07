<?php

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
class ProfessionSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::statement('SET FOREIGN_KEY_CHECKS= 0');
       DB::table('profession')->truncate();
        DB::statement('SET FOREIGN_KEY_CHECKS= 1');

        DB::table('profession')->insert([
            'tittle' => 'Front-end developer'
        ]);
        DB::table('profession')->insert([
            'tittle' => 'Back-end developer'
        ]);
        DB::table('profession')->insert([
            'tittle' => 'Programador PHP'
        ]);
        DB::table('profession')->insert([
            'tittle' => 'Programador Java'
        ]);
        DB::table('profession')->insert([
            'tittle' => 'Programador Python'
        ]);
        DB::table('profession')->insert([
            'tittle' => 'Programador Go'
        ]);
        DB::table('profession')->insert([
            'tittle' => 'Programador C++'
        ]);
        DB::table('profession')->insert([
            'tittle' => 'Programador c#'
        ]);
        DB::table('profession')->insert([
            'tittle' => 'Programador Javascript'
        ]);
        DB::table('profession')->insert([
            'tittle' => 'Admin Base de datos'
        ]);
    }
}
