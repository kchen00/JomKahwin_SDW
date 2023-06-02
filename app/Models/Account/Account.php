<?php

namespace App\Models\Account;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\DB;

class Account extends Model
{
    use HasFactory;
    protected $table = 'a_account';
    // attributes that can be mass assigned, ie can be updated with create, update method
    protected $fillable = [
        'A_accountType',
        'A_icNum',
        'A_accountID',
        'A_password',
        'A_accountType',
        'A_IcNum',
        'A_email',
        'A_gender',
        'A_name',
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
        'A_lastUpdated',
    ];

    //attribute should be hidden in json response during api call
    protected $hidden = [
        'A_password',
    ];

    public static function register($information) {
        $newAccount = DB::table('A_account')
            ->insert(
                [
                    'A_email' => $information["A_email"],
                    'A_icNum' => $information["A_icNum"],
                    'A_email' => $information["A_email"],
                    'A_password' => $information["A_password"],
                    'A_gender' => $information["A_gender"],
                    "A_accountType" => $information["A_accountType"],
                ]
            );
    }

}
