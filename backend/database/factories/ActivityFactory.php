<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Activity>
 */
class ActivityFactory extends Factory
{
    public function definition(): array
    {
        return [
            'category_id' => fake()->numberBetween(1, 3),
            'name' => fake()->randomElement([
                'Mosogatás',
                'Porszívózás',
                'Matek házi',
                'Angol tanulás',
                'Bevásárlás',
                'Telefonhívás',
                'Projektmunka',
                'Rendszerezés'
            ]),
            'status' => fake()->boolean(30),
        ];
    }
}