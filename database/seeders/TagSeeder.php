<?php

namespace Database\Seeders;

use App\Models\Tag;
use Illuminate\Database\Seeder;

class TagSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Tag::create(
            [
                'tag' => 'MSM1222',
                'status' => '1'
            ]
        );
        Tag::create(
            [
                'tag' => 'MSM12345',
                'status' => '1'
            ]
        );
        Tag::create(
            [
                'tag' => 'MMMSSS12',
                'status' => '1'
            ]
        );
    }
}
