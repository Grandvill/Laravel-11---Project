<?php

namespace Database\Seeders;

use App\Models\User;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Support\Str;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::create([
            'name' => 'Zahidan Ardhiansyah',
            'username' => 'zahidan',
            'email' => 'zahidan23@gmail.com',
            'email_verified_at' => now(),
            'password' => Hash::make('Password'),
            'remember_token' => Str::random(10)
        ]);

        User::factory(4)->create();
    }
}
