<?php

namespace Database\Seeders;

use App\Models\Brand;
use Illuminate\Database\Seeder;

class BrandSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Brand::create(
            [
                'sub_category_id'=>'1',
                'brand' => 'HP',

                'status' => '1'
            ]
        );
        Brand::create(
            [
                'sub_category_id'=>'1',
                'brand' => 'ASUS',
                'status' => '1'
            ]
        );
        Brand::create(
            [
                'sub_category_id'=>'1',
                'brand' => 'Lenovo',
                'status' => '1'
            ]
        );
    }
}
