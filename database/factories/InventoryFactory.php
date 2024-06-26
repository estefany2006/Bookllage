<?php

namespace Database\Factories;

use App\Models\District;
use App\Models\Municipality;
use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Book;
use App\Models\Department;
use Illuminate\Foundation\Auth\User;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Inventory>
 */
class InventoryFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $books = Book::all()->pluck('id');
        $districts = District::all()->pluck('id');
        $user = User::all()->pluck('id');

        return [
            'book_id'=>$books->random(),
            'address'=>fake()->unique()->address(),
            'district_id'=>$districts->random(),
            'price'=>fake()->randomFloat(2, 0, 50),
            //'image'=>fake()->randomNumber(5, false),
            'available'=>fake()->boolean(),
            'description'=>fake()->paragraph(),
            'user_id'=>$user->random(),
            'fee'=>fake()->randomFloat(2, 00, 5),
            //'date'=>fake()->date(),
        ];
    }
}
