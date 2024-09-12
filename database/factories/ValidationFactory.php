<?php

namespace Database\Factories;

use App\Models\Validation;
use App\Models\Entry;
use App\Models\Admin;
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
            'entry_id' => Entry::factory(), // This creates a new entry
            'validated_by' => Admin::factory(), // This creates a new admin
            'validation_code' => $this->faker->word(),
            'validation_status' => $this->faker->word(),
            'comments' => $this->faker->text(),
            'validation_date' => $this->faker->date(),
        ];
    }
}
