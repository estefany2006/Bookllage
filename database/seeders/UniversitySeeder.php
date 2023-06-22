<?php

namespace Database\Seeders;

use App\Models\University;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UniversitySeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        University::create([
            'name' => 'UCA'
        ]);
        University::create([
            'name' => 'ESEN'
        ]);
        University::create([
            'name' => 'José Matias Delgado'
        ]);
        University::create([
            'name' => 'UES'
        ]);
        University::create([
            'name' => 'Don Bosco'
        ]);
    }
}
