<?php

namespace Database\Factories;

use App\Models\RafflePick;
use App\Models\Entry;
use App\Models\Promo;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\RafflePick>
 */
class RafflePickFactory extends Factory
{
    protected $model = RafflePick::class;
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'promo_id' => Promo::factory(), // This creates a new promo
            'entry_id' => Entry::factory(), // This creates a new entry
            'pick_date' => $this->faker->date(),
            'is_winner' => $this->faker->boolean(),
        ];
    }
}
