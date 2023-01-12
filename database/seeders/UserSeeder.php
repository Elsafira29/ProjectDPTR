<?php

namespace Database\Seeders;

use App\Models\User;
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
        $master = User::create([
            'username' => 'Master',
            'email' => 'dptrp5master@gmail.com',
            'password' => bcrypt('p5dptrmaster'),
        ]);

        $master->assignRole('admin');

        $admin = User::create([
            'username' => 'Admin',
            'email' => 'dptrp5admin@gmail.com',
            'password' => bcrypt('p5dptradmin')
        ]);

        $admin->assignRole('admin');

    }
}
