<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class MoviesTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        DB::table('movies')->insert([
        'title'=>'Dune',
        'length'=>'150',
        'description'=>'Directed by Dennis Villenieve'
        ]);
        DB::table('movies')->insert([
        'title'=>'Die Hard',
        'length'=>'120',
        'description'=>'Christmas movie'
        ]);
        DB::table('movies')->insert([
        'title'=>'Spiderman 3',
        'length'=>'145',
        'description'=>'Into the multiverse'
        ]);
        DB::table('movies')->insert([
        'title'=>'Dont look up',
        'length'=>'121',
        'description'=>'Amazing satire'
        ]);
    }
}
