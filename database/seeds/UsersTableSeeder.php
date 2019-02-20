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
        User::create ([
            'name' => 'manu',
            'email' => 'manu@gmail.com',
            'password' => bcrypt('manu'),
            'role_id' => 1,
        ]);
        User::create ([
            'name' => 'israa',
            'email' => 'israa@gmail.com',
            'password' => bcrypt('israa'),
            'role_id' => 2,
        ]);
        User::create ([
            'name' => 'younes',
            'email' => 'younes@gmail.com',
            'password' => bcrypt('younes'),
            'role_id' => 2,
        ]);
    }
}
