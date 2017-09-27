<?php

use App\User;
use Illuminate\Database\Seeder;

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
            'name' => 'admin',
            'email' => 'admin@local.host',
            'password' => bcrypt('admin'),
            'is_admin' => true,
            'is_confirmed' => true
        ]);

        User::create([
            'name' => 'john',
            'email' => 'john@local.host',
            'password' => bcrypt('john'),
            'is_admin' => false,
            'is_confirmed' => false
        ]);

        User::create([
            'name' => 'jane',
            'email' => 'jane@local.host',
            'password' => bcrypt('jane'),
            'is_admin' => false,
            'is_confirmed' => false
        ]);
    }
}
