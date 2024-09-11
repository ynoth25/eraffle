<?php

namespace Database\Factories;

use App\Models\Faq;
use App\Models\Promo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Faq>
 */
class FaqFactory extends Factory
{
    protected $model = Faq::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'promo_id' => Promo::factory(), // This creates a new promo
            'question' => $this->faker->sentence(),
            'answer' => $this->faker->paragraph(),
        ];
    }
}
