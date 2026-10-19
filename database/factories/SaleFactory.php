<?php

namespace Database\Factories;

use App\Models\Customer;
use App\Models\Item;
use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends Factory<Sale>
 */
class SaleFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array {
    return [
        'date_of_purchase' => $this->faker->date,
        'customer_id' => Customer::inRandomOrder()->first()->customer_id ?? Customer::factory(),
        'item_code' => Item::inRandomOrder()->first()->item_code ?? Item::factory(),
    ];
    }
}
