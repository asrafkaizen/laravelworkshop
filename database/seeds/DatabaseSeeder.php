<?php

use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            'name' => 'tarmizi',
            'email' => 'tarmizi@gmail.com',
            'password' => bcrypt('password123'),
        ]);

        DB::table('users')->insert([
            'name' => 'acap ipin',
            'email' => 'acap@gmail.com',
            'password' => bcrypt('acap123'),
        ]);
        
        DB::table('users')->insert([
            'name' => 'asyraf arifin',
            'email' => 'asrafkaizen@gmail.com',
            'password' => bcrypt('acapacap'),
        ]);

        DB::table('users')->insert([
            'name' => 'luqman mohidin',
            'email' => 'luqmanhakim@gmail.com',
            'password' => bcrypt('luqmankaslda'),
        ]);

        DB::table('users')->insert([
            'name' => 'aqilah athirah',
            'email' => 'aqilahathirah@gmail.com',
            'password' => bcrypt('aqilahathirah'),
        ]);

        DB::table('users')->insert([
            'name' => 'foo bar',
            'email' => 'email@mail.com',
            'password' => bcrypt('password'),
        ]);

        
    }
}
