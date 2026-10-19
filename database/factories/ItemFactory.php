<?php

namespace Database\Factories;

use App\Models\Company;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Item>
 */
class ItemFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
    return [
        'item' => $this->faker->word,
        'unit_price' => $this->faker->randomFloat(2, 1000, 500000),
        'company_id' => Company::inRandomOrder()->first()->company_id ?? Company::factory(),
    ];
    }
}
