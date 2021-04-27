<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;

use App\Models\Auser;
class AuserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        Auser::factory()
            ->count(50)
            ->create();
    }
}
