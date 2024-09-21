<?php

namespace Database\Factories;

use App\Models\Promo;
use App\Models\Validation;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Validation>
 */
class ValidationFactory extends Factory
{
    protected $model = Validation::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'promo_id' => Promo::factory(), // This creates a new entry
            'serial_number' => $this->faker->word(),
            'status' => $this->faker->word(),

        ];
    }
}
