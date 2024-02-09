<?php

namespace Database\Factories;

use App\Models\Brand;
use App\Models\Categori;
use App\Models\Color;
use App\Models\Size;
use App\Models\SubCategory;
use App\Models\Tag;
use Illuminate\Support\Str;
use Illuminate\Database\Eloquent\Factories\Factory;

class ProductFactory extends Factory
{

    public function definition()
    {
        return [
            'name' => $this->faker->name(),
            'category_id' => Categori::all()->random()->id,
            'sub_category_id' => SubCategory::all()->random()->id,
            'brand_id' => Brand::all()->random()->id,
            'tag_id' => Tag::all()->random()->id,
            'size_id' => Size::all()->random()->id,
            'color_id' => Color::all()->random()->id,
            'quantity' => $this->faker->numberBetween(10,100),
            'price' => $this->faker->numberBetween(10,100),
            'details' => $this->faker->sentence(),
            

        ];
    }


}
