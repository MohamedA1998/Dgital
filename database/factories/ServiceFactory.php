<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Service>
 */
class ServiceFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $icon = collect(['fa-search', 'fa-laptop-code', 'fa-facebook-f', 'fa-mail-bulk', 'fa-thumbs-up', 'fa-android']);

        return [
            'name'  => fake()->name(),
            'icon'  => $icon->random(),
            'description'   => 'Erat ipsum justo amet duo et elitr dolor, est duo duo eos lorem sed diam
            stet diam sed stet lorem.'
        ];
    }
}
