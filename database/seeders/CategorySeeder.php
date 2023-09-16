<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class CategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {

        $categories = collect(
            [
                'Computer Engineering',
                'Medicine',
                'Psychology',
                'Economic',
                'English',
                'Marketing and Communications',
            ]
        );

        Category::factory(count($categories))->sequence(fn($sequence) => [
            'name' => $categories[$sequence->index]
        ])->create();
    }
}
