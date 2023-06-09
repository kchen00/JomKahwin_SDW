<?php

namespace App\Models\Account;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class User extends Model
{
    use HasFactory;

    // attributes that can be mass assigned, ie can be updated with create, update method
    protected $fillable = [
        "U_employeeName"
    ];

    public static function register($information) {
        $account = DB::table("A_account")
                        ->select("A_accountID")
                        ->where("A_accountType", "=", "P")
                        ->where("A_email", "=", $information["A_email"])
                        ->get();
        
        $account_ID = $account->first()->A_accountID;
        $newUser = DB::table('U_user')
            ->insert(
                [
                    'A_accountID' => $account_ID,
                ]
            );
    }
}
