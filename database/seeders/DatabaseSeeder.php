<?php

namespace Database\Seeders;

// use Illuminate\Database\Console\Seeds\WithoutModelEvents;

use ForeignKeySeeder;
use Illuminate\Database\Seeder;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     */
    public function run(): void
    {
        $this->call([
            AccountSeeder::class,
            StaffSeeder::class,
            MMarriageSeeder::class,
            IIncentiveSeeder::class,

        ]);
    }
}
