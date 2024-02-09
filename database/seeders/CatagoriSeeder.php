<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Categori;

class CatagoriSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Categori::create(
            [

                'name' => 'LAPTOP',
                'details' => 'HP',
                'image' => 'nullable',
                'status' => '1'
            ]
        );
        Categori::create(
            [
                'name' => 'MOBILE',
                'details' => 'SAMSUNG',
                'image' => 'nullable',
                'status' => '1'
            ]
        );
    }
}
