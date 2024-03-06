<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Cell>
 */
class CellFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'model' => $this->faker->randomElement(['Vivi', 'Oppo', 'Samsung']),
            'qty' => $this->faker->randomElement([10, 25, 30]),

        ];
    }
}
