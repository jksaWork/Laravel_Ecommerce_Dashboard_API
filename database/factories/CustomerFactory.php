<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class CustomerFactory extends Factory
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
        'email' => 'jksa@jksa.jksa',
        'phone' => '0915477450',
        'photo' => 'logo.svg',
        'password'=> bcrypt('123456'),
        ];
    }
}
