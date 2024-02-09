<?php

namespace Database\Seeders;
use App\Models\User;

use Illuminate\Database\Seeder;

use Illuminate\Support\Facades\Hash;
use function GuzzleHttp\Promise\task;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        User::create
        ([
                'name' => 'NUR ALAM SHISHIR',
                'email'=>'shishir@gmail.com',
                'usertype'=>'1',
                'password'=>Hash::make('11111111'),

        ]);

    }
}
