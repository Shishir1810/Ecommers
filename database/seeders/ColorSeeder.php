<?php

namespace Database\Seeders;

use App\Models\Color;
use Illuminate\Database\Seeder;

class ColorSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Color::create(
            [
                'color' => 'Black',
                'code' => '#000000',
                'status' => '1'
            ]
        );
        Color::create(
            [
                'color' => 'Blue',
                'code' => '#0000FF',
                'status' => '1'
            ]
        );
    }
}
