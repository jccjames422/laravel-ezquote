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
        \App\Models\Dealership::factory()
            ->count(10)
            ->hasUsers(10)
            ->create();

        \App\Models\Customer::factory()
            ->count(100)
            ->create();

        \App\Models\Lead::factory()
            ->count(500)
            ->create();
    }
}
