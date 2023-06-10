<?php
namespace App\Models\Account;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Storage;


class Account extends Authenticatable
{
    use HasFactory;
    protected $table = 'A_account';
    protected $primaryKey = 'A_accountID';
    protected $password = 'A_password';
    protected $email = 'A_email';
    protected $guard = "account";
    
    // attributes that can be mass assigned, ie can be updated with create, update method
    protected $fillable = [
        'A_accountType',
        'A_icNum',
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
        'A_officeNum',
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
        DB::table('A_account')
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

    public static function updateProfile($information) {
        // saving the image
        // $information->A_profilePhoto->move("app\Models\Account\A_profilePhoto", $information["A_profilePhoto"]);
        // dd($information); 
        // updating the table
        // return($information);
        DB::table('A_account')
        ->where("A_accountID", Auth::guard('account')->id())
        ->limit(1)
        ->update([
            'A_name' => $information["A_name"],
            'A_ethnicity' => $information["A_ethnicity"],
            'A_nationality' => $information["A_nationality"],
            'A_houseAddress' => $information["A_houseAddress"],
            'A_telephoneNum' => $information["A_telephoneNum"],
            'A_landlineNumber' => $information["A_landlineNumber"],
            'A_jobSector' => $information["A_jobSector"],
            'A_jobAddress' => $information["A_jobAddress"],
            'A_officeNum' => $information["A_officeNum"],
            'A_income' => $information["A_income"],
            'A_marriageStatus' => $information["A_marriageStatus"],
            'A_educationLevel' => $information["A_educationLevel"],
            'A_profilePhoto' => $information["A_profilePhoto"],
            'A_lastUpdated' => now(),
        ]);
        
    }

    public static function resetPassword($information) {
        DB::table('A_account')
        ->where("A_email", $information["A_email"])
        ->limit(1)
        ->update([
            "A_password" => $information["A_password"],
            'A_lastUpdated' => now(),
        ]);
    }

    public function getAuthPassword()
    {
        return $this->A_password;
    }

    public function getEmailForPasswordReset()
    {
        return $this->A_email;
    }
}
