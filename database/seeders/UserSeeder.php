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
        User::create([
            'name' => 'Admin',
            'email' => 'admin@simonev.com',
            'password' => bcrypt('123456')
        ]);

        User::create([
            'name' => 'Member',
            'email' => 'member@simonev.com',
            'password' => bcrypt('123456')
        ]);

        User::factory(15)->create();
    }
}
