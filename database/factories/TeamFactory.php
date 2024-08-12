<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Team>
 */
class TeamFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        return [
            'city'=> fake()->city(),
            'nickname'=>fake()->randomElement(
                ['Celtics', 'Raptors', 'Lakers', 'TimberWolves', 'Hawks',
                'Eagles','Bears','Chameleons','Lions','Tigers','Caridinals',
                'Robins','Hyenas','foxes','Ostriches']
            ),
            'abbreviation'=>fake()->stateAbbr(),
            'year_founded'=>fake()->year()
        ];
    }
}

