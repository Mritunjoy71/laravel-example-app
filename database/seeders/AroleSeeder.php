<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Arole;

class AroleSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Arole::insert([

            [

                'name' => 'admin',

            ],

            [

                'name' => 'supervisor',

            ],

            [

                'name' => 'manager',

            ]

        ]
        );
    }
}
