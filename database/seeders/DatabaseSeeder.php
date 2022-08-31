<?php

namespace Database\Seeders;

use App\Models\Category;
use App\Models\Customer;
use App\Models\HomeSlider;
use App\Models\OfferSaleDate;
use App\Models\Product;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {
        \App\Models\Customer::factory(1)->create();
        Customer::create([
            'name' => 'hello',
            'email' => 'jksa@gmail.com',
            'phone' => '0915477450',
            'photo' => 'logo.svg',
            'password'=> bcrypt('123456'),
        ]);
        $this->call(OrganizationProfileSeeder::class);
        Category::factory(5)->create();
        Category::factory(2)->create([
            'parent_id' => Category::NotChild()->get()->random()->id
        ]);
        Category::factory(2)->create([
            'parent_id' => Category::NotChild()->get()->random()->id
        ]);
        Category::factory(2)->create([
            'parent_id' => Category::NotChild()->get()->random()->id
        ]);
        Category::factory(2)->create([
            'parent_id' => Category::NotChild()->get()->random()->id
        ]);
        Category::factory(2)->create([
            'parent_id' => Category::NotChild()->get()->random()->id
        ]);

        Product::factory(22)->create();
        HomeSlider::factory(5)->create();
        OfferSaleDate::factory(1)->create();
    }
}
