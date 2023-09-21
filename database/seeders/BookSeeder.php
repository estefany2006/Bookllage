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


        Book::create([
            'name' => 'Bioquimica',
            'publisher' => 'Jacobson',
            'edition' => 'N/A',
            'category_id' => '2',
            'date' => '20/05/20'
        ]);
        /*
        Book::create([
            'name' => 'Libro1',
            'publisher' => 'Yo',
            'edition' => 'N/A',
            'date' => '2022'
        ]);*/

    }
}
