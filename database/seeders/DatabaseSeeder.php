<?php

namespace Database\Seeders;

use App\Models\Brands;
use App\Models\Category;
use App\Models\Contant;
use App\Models\Customer;
use App\Models\HomeSlider;
use App\Models\OfferSaleDate;
use App\Models\Product;
use App\Models\User;
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
        $brands = ['Nick' , 'Addidas', 'Calivn Klain' , 'Jordan'];
        foreach ($brands as $key => $value) {
            Brands::create([
                'name' => $value,
            ]);
        }

       $products =  Product::factory(30)->create();
       foreach ($products as $key => $value) {
            $brandsids = Brands::all()->random(2)->map(fn($el) => $el->id );
            // dd($brandsids);
            $value->Brands()->sync($brandsids);
       }
        // $prducts->attach(Brands::all());
        // Brands::find([1, 2, 3 , 4])->Products()->sync();
        // Product::factory(5)->create();
        // Product::factory(5)->create();
        HomeSlider::factory(5)->create();
        OfferSaleDate::factory(1)->create();
        User::factory(1)->create([
            'email' => 'admin@gmail.com',
            'password'=> bcrypt('123456'),
        ]);
        Contant::factory(4)->create();

    }
}
