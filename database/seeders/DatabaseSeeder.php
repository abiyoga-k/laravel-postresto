<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        \App\Models\User::factory()->create([
            'name' => 'kalaloe',
            'email' => 'kalaloeabiyoga@gmail.com',
            'password' => Hash::make('qwerty'),
            'role' => 'admin'
        ]);

        \App\Models\User::factory(19)->create();
    }
}
