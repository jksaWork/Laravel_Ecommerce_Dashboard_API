<?php

namespace Database\Factories;


use Illuminate\Database\Eloquent\Factories\Factory;
// use Illuminate\Support\Facades\Str;
use Illuminate\Support\Str;


class ProductFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array
     */
    public function definition()
    {

        $name =  $this->faker->name;
        return [
            'name' => $name,
            'slug' => Str::slug($name),

            'short_description' => $this->faker->realText(100),

            'description' => $this->faker->realText(300),
            'regular_price' => 10,
            'sale_price' => 15,
            'SKU' => 'jksa altigna',
            'stock'  =>  'inStock',
            'featured' => true,
            'quantity' => 20,
            'image' => "digital_0" . random_int(1, 9) . '.jpg',
            'images' => null,
            'category_id' => random_int(1, 5),
        ];
    }
}
