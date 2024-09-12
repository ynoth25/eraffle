<?php

namespace Database\Factories;

use App\Models\Prize;
use App\Models\Promo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Prize>
 */
class PrizeFactory extends Factory
{
    protected $model = Prize::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'name' => $this->faker->word(),
            'description' => $this->faker->text(),
            'value' => $this->faker->randomFloat(2, 1, 1000),
            'promo_id' => Promo::factory(), // This creates a new promo
        ];
    }
}
