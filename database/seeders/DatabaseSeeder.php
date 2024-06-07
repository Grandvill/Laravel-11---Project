<?php

namespace Database\Seeders;

use App\Models\Post;
// use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use App\Models\User;
use App\Models\Category;
use Illuminate\Support\Str;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        // User::factory(10)->create();

        // User::factory()->create([
        //     'name' => 'Test User',
        //     'email' => 'test@example.com',
        // ]);

        //buat user manual
        // $zahidan = User::create([
        //     'name' => 'Zahidan Ardhiansyah',
        //     'username' => 'zahidan',
        //     'email' => 'zahidan23@gmail.com',
        //     'email_verified_at' => now(),
        //     'password' => Hash::make('Password'),
        //     'remember_token' => Str::random(10)
        // ]);

        // Category::create([
        //     'name' => 'Web Security',
        //     'slug' => 'web-security'
        // ]);

        // Post::create([
        //     'title' => 'Keamanan Siber: Pentingnya Melindungi Data Pribadi',
        //     'author_id' => 1,
        //     'category_id' => 1,
        //     'slug' => 'keamanan-siber-pentingnya-melindungi-data-pribadi',
        //     'body' => 'Dalam era digital ini, keamanan siber menjadi salah satu aspek yang paling krusial bagi individu dan organisasi. Keamanan siber merujuk pada praktik melindungi sistem, jaringan, dan program dari serangan digital. Serangan ini biasanya bertujuan untuk mengakses, mengubah, atau menghancurkan informasi sensitif; memeras uang dari pengguna; atau mengganggu operasi bisnis normal.

        //     Salah satu ancaman terbesar adalah serangan phishing, di mana penjahat siber mengelabui individu untuk memberikan informasi pribadi melalui email yang tampaknya berasal dari sumber tepercaya. Untuk melindungi data pribadi, penting bagi pengguna untuk selalu memperbarui perangkat lunak keamanan, menggunakan kata sandi yang kuat, dan waspada terhadap email dan tautan yang mencurigakan.'
        // ]);

        $this->call([CategorySeeder::class, UserSeeder::class, PostSeeder::class]);
            Category::all();
            Post::all();
            User::all();
    }
}
