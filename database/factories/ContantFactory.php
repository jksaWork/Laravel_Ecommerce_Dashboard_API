<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;

class ContantFactory extends Factory
{
    /**email_verified_at
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {
        return [
            'name' => $this->faker->name,
            'email' => $this->faker->unique()->safeEmail(),
            'message' => $this->faker->realText(150),
            'subject' => $this->faker->name,
            // 'email'=>$this->
        ];
    }
}
