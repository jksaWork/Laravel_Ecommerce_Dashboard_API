<?php

namespace Database\Seeders;

use App\Models\Category;
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
        // \App\Models\User::factory(10)->create();
        $this->call(OrganizationProfileSeeder::class);
        Category::factory(5)->create();
        Product::factory(22)->create();
        HomeSlider::factory(5)->create();
        OfferSaleDate::factory(1)->create();
    }
}
