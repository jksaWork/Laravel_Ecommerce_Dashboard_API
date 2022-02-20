<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class OrganizationProfileSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('organization_profiles')->insert([
            "logo" => 'logos/logo.png',
            "name" => "Multi Vedor Ecommerce ",
            "address" => "KSA, Riyadh",
            "phone_no" => "96623323093",
            "whatsapp_no" => "96623323093",
            "email" => "info@faster.com",
        ]);
    }
}
