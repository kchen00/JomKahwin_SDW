<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\Account\Account;
use Illuminate\Validation\Rules\Enum;

/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Account\Account>
 */
class AccountFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    protected $model = Account::class;
    public function definition(): array
    {
        
        return [

            'A_accountID',
            'A_password'=>fake()->password(),
            'A_accountType',
            'A_IcNum' => fake()->random_int(12, 12),
            'A_email' => fake()->unique()->safeEmail(),
            'A_gender',
            'A_name' => fake()->name(),
            'A_telephoneNum',
            'A_ethnicity',
            'A_nationality',
            'A_houseAddress',
            'A_landlineNumber',
            'A_jobSector',
            'A_jobAddress',
            'A_income',
            'A_marriageStatus',
            'A_educationLevel',
            'A_profilePhoto',
            'A_lastUpdated' => now(),
        ];

    }
}
