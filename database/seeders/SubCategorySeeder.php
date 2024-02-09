<?php

namespace Database\Seeders;

use App\Models\Categori;
use App\Models\SubCategory;
use Illuminate\Database\Seeder;

class SubCategorySeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        SubCategory::create(
            [

                'category_id' => Categori::all()->random()->id,
                'name' => 'Desktop',
                'details' => 'intel',
                'status' => '1'
            ]
        );

        SubCategory::create(
            [

                'category_id' => Categori::all()->random()->id,
                'name' => 'laptop',
                'details' => 'Asus',
                'status' => '1'
            ]
        );
    }
}
