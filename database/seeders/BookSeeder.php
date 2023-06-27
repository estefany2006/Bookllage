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
        ]);*/

    }
}
