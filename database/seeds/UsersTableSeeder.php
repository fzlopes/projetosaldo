<?php

use Illuminate\Database\Seeder;
use App\User;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create([
        	'name'     => 'Fábio Lopes',
        	'email'    => 'fabio@sistema.com',
        	'password' => bcrypt('123456'),
       ]);

        User::create([
            'name'     => 'Cesar Duarte',
            'email'    => 'duarte@sistema.com',
            'password' => bcrypt('123456'),
       ]);
    }
}
