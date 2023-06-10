<?php

namespace Database\Seeders;

use App\Models\staff;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class StaffSeeder extends Seeder
{
    public function run(): void
    {
        Staff::create([

            'ST_staffID' => '1',
            'A_accountID' => '1',
            'ST_staffPosition' => 'staff',
            'ST_staffAccessLevel' => 'all',
        ]);
    }

}
