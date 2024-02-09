<?php

namespace Database\Seeders;

use App\Models\UserRole;
use Illuminate\Database\Seeder;

class UsertypeSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        UserRole::create(
            [
                'Name' => 'Super Admin'

            ]
        );
        UserRole::create(
            [
                'Name' => 'Admin'

            ]
        );
        UserRole::create(
            [
                'Name' => 'User'

            ]
        );
    }
}
