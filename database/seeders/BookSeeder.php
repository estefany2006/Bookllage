<?php

namespace Database\Seeders;

use App\Models\Category;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Book;

class BookSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $categories_id = Category::pluck('id');

        Book::factory(25)->sequence(fn($sqn) => [
            'category_id' => $categories_id->random()
        ])->create();
        /*Book::create([
            'name' => 'Anatomia de gray',
            'publisher' => 'Henry Gray',
            'edition' => 'N/A',
            'date' => '1858'
        ]);
        Book::create([
            'name' => 'Libro1',
            'publisher' => 'Yo',
            'edition' => 'N/A',
            'date' => '2022'
        ]);*/

    }
}
