<?php

namespace Database\Factories;

use App\Models\Entry;
use App\Models\User;
use App\Models\Promo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Entry>
 */
class EntryFactory extends Factory
{
    protected $model = Entry::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'user_id' => User::factory(), // This creates a new user
            'promo_id' => Promo::factory(), // This creates a new promo
            'submission_date' => $this->faker->date(),
            'status' => $this->faker->word(),
        ];
    }
}
