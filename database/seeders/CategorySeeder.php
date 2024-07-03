<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // User::factory(5)->create()
        Category::create([
            'name' => 'Web Security',
            'slug' => 'web-security',
            'color' => 'red'
        ]);

        Category::create([
            'name' => 'Web Programming',
            'slug' => 'web-programming',
            'color' => 'green'
        ]);

        Category::create([
            'name' => 'Cloud Computing',
            'slug' => 'cloud-computing',
            'color' => 'blue'
        ]);

        Category::create([
            'name' => 'Artificial Inteligence',
            'slug' => 'artificial-intelligence',
            'color' => 'yellow'
        ]);

        Category::create([
            'name' => 'Machine Learning',
            'slug' => 'machine-learning',
            'color' => 'purple'
        ]);
    }
}
