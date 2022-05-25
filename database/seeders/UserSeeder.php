<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        \DB::table('users')->insert([
            'name' => 'Mayur',
            'email' => 'dev4@webbygenius.com',
            'role' => 'admin',
            'password' => bcrypt('webby@2021'),
        ]);
        \DB::table('users')->insert([
            'name' => 'Dhaval',
            'email' => 'dev5@webbygenius.com',
            'role' => 'developer',
            'password' => bcrypt('webby@2022'),
        ]);
    }
}
