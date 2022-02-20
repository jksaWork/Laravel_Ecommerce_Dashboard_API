<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class HomeSliderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'short_description' => random_int(10, 50) .  '%   ' .  '  '.$this->faker->realText(14),
            'description' => $this->faker->realText(50),
            'regular_price' => random_int(1000, 10000),
            'image' => 'slider_' . random_int(1, 5) . '.jpg',
        ];
    }
}
