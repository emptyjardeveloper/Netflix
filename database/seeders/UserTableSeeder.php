<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\User;

class UserTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $admin = user::create([
            'name' => 'Admin',
            'email' => 'admin@netflix.com',
            'password' => bcrypt('password'),
        ]);

        $admin->assignRole('admin');
    }
}
