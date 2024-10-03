<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\employee;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {    employee::truncate();
         employee::factory(500)->create();
    }
}
