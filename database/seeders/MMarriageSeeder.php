<?php

namespace Database\Seeders;

use App\Models\M_marriage;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;

class MMarriageSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        M_marriage::create([

            'M_marriageID' => '1',
            'U_userID' => '1',
            'ST_staffID' => '1',
            'P_paymentID' => '1',
            'W_waliID' => '1',
            'D_documentID' => '1',
            'M_applicationStatus' => 'Lulus',
            'M_nikahCategory' => 'Nikah dengan kebenaran',
            'M_partnerIC' => '890919065566',
            'M_akadNikahDatetime' => '2023-06-09 14:30:00',
            'A_houseAddress' => 'Pekan, Pahang',
            'M_akadNikahVenue' => 'Temerloh',
            'M_masKahwinAmount' => '250.00',
            'M_hantaranAmount' => '350.00',
            'M_pemberianLain' => 'Tiada',
            'M_jurunikahName' => 'Ahmad',
            'M_lafaztaliq' => 'Tiada',
        ]);
    }
}
