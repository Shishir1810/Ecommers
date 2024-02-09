<?php

namespace Database\Seeders;

use App\Models\About;
use Illuminate\Database\Seeder;

class AboutSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        About::create(
            [

                'details' => '  largest online shop for laptop, Phones, Camera ,Accesories and many more',
                'address' => 'GLIWICE POLAND',
                'email' => 'shishir@gmail.com',
                'phone' => '697566318'
            ]
        );
    }
}
