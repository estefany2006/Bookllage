<?php

namespace Database\Seeders;

use App\Models\User;
use GuzzleHttp\Promise\Create;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        User::factory(1)->create([
            'first_name' => 'Anibal',
            'last_name' => 'Mendez',
            'email' => 'anibal.mendez2024@poma.superate.org.sv',
            'support_email' => 'ab@',
            'password' => 'password'
        ]);


       /* UserSeeder::create([
            'first_name' => 'Anibal',
            'last_name' => 'Mendez',
            'email' => 'anibal.mendez2024@poma.superate.org.sv',
            'email_verified_at' => 'ad@',
            'support_email' => 'ab@',
            'password' => 'password'
        ]);*/

        /*UserSeeder::create([
            'first_name' => 'eeeee',
            'last_name' => 'cccc',
            'email' => 'ec@',
            'email_verified_at' => 'ec@',
            'support_email' => 'ec@',
            'password' => '456'
        ]);
        UserSeeder::create([
            'first_name' => 'iiii',
            'last_name' => 'dddd',
            'email' => 'id@',
            'email_verified_at' => 'id@',
            'support_email' => 'id@',
            'password' => '789'
        ]);
        UserSeeder::create([
            'first_name' => 'oooo',
            'last_name' => 'ffff',
            'email' => 'of@',
            'email_verified_at' => 'of@',
            'support_email' => 'of@',
            'password' => '101'
        ]);

        UserSeeder::create([
            'first_name' => 'uuuu',
            'last_name' => 'gggg',
            'email' => 'ug@',
            'email_verified_at' => 'ug@',
            'support_email' => 'ug@',
            'password' => '102'
        ]);*/
    }
}
