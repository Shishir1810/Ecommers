<?php

namespace Database\Seeders;

use App\Models\Size;
use Illuminate\Database\Seeder;

class SizeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Size::create(
            [
                'name' => 'XL',
                'status' => '1'
            ]
        );

        Size::create(
            [
                'name' => 'L',
                'status' => '1'
            ]
        );
        Size::create(
            [
                'name' => 'M',
                'status' => '1'
            ]
        );
        Size::create(
            [
                'name' => 'S',
                'status' => '1'
            ]
        );
    }
}
