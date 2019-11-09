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
            'name' => 'asyraf',
            'email' => 'acap@gmail.com',
            'password' => bcrypt('acap123'),
        ]);
    }
}
