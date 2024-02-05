<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Counter>
 */
class CounterFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $icon = collect(['fa-certificate', 'fa-users-cog', 'fa-users', 'fa-check']);

        return [
            'name'  => fake()->name(),
            'count' => fake()->randomNumber(5, true),
            'icon'  => $icon->random(),
        ];
    }
}
