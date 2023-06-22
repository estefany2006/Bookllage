<?php

namespace Database\Seeders;

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
        Book::factory(25)->create();
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
        ]);
        Book::create([
            'name' => 'Libro2',
            'publisher' => 'tu',
            'edition' => 'N/A',
            'date' => '2023'
        ]); Book::create([
            'name' => 'Libro3',
            'publisher' => 'el',
            'edition' => 'N/A',
            'date' => '2090'
        ]); Book::create([
            'name' => 'Libro4',
            'publisher' => 'ella',
            'edition' => 'N/A',
            'date' => '2012'
        ]); Book::create([
            'name' => 'Libro6',
            'publisher' => 'she',
            'edition' => 'N/A',
            'date' => '2014'
        ]); Book::create([
            'name' => 'Libro7',
            'publisher' => 'he',
            'edition' => 'N/A',
            'date' => '2014'
        ]); Book::create([
            'name' => 'Libro8',
            'publisher' => 'they',
            'edition' => 'N/A',
            'date' => '2022'
        ]); Book::create([
            'name' => 'Libro9',
            'publisher' => 'you',
            'edition' => 'N/A',
            'date' => '1209'
        ]);*/

    }
}
