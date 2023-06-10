<?php

namespace Database\Seeders;

use App\Models\Account;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class AccountSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        Account::create([

            'A_accountID' => '1',
            'A_password' => 'pass123',
            'A_accountType' => 'S',
            'A_icNum' => '890919065567',
            'A_email' => 'abu@gmail.com',
            'A_gender' => 'M',
            'A_name' => 'Abu bin Abi',
            'A_telephoneNum' => '0198909909',
            'A_ethnicity' => 'Malay',
            'A_nationality' => 'M',
            'A_houseAddress' => 'Pekan, Pahang',
            'A_landlineNumber' => '0198909909',
            'A_jobSector' => 'Goverment',
            'A_jobAddress' => 'Pekan, Pahang',
            'A_income' => '3500',
            'A_marriageStatus' => 'married',
            'A_educationLevel' => 'Diploma',
            'A_profilePhoto' => '/profile.png',
        ]);
        Account::create([

            'A_accountID' => '2',
            'A_password' => 'pass123',
            'A_accountType' => 'S',
            'A_icNum' => '890919065566',
            'A_email' => 'siti@gmail.com',
            'A_gender' => 'F',
            'A_name' => 'Siti bin Ili',
            'A_telephoneNum' => '0187654321',
            'A_ethnicity' => 'Malay',
            'A_nationality' => 'M',
            'A_houseAddress' => 'Pekan, Pahang',
            'A_landlineNumber' => '0187654321',
            'A_jobSector' => 'Goverment',
            'A_jobAddress' => 'Pekan, Pahang',
            'A_income' => '2500',
            'A_marriageStatus' => 'married',
            'A_educationLevel' => 'Degree',
            'A_profilePhoto' => '/profile.png',
        ]);
    }
}
