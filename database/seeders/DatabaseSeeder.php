<?php

namespace Database\Seeders;


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
         $this->call([
            AboutSeeder::class,
            UsertypeSeeder::class,
            UserSeeder::class,
            CatagoriSeeder::class,
            SubCategorySeeder::class,
            ColorSeeder::class,
            TagSeeder::class,
            SizeSeeder::class,
            BrandSeeder::class,
            ProductSeeder::class


         ]);



    }
}
