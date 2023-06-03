<?php

namespace App\Models\Account;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class ServiceAdvisor extends Model
{
    use HasFactory;

    public static function register($information) {
        $account = DB::table("A_account")
                        ->select("A_accountID")
                        ->where("A_accountType", "=", "S")
                        ->where("A_email", "=", $information["A_email"])
                        ->get();
        
        $account_ID = $account->first()->A_accountID;
        $newUser = DB::table('SA_serviceAdvisosr')
            ->insert(
                [
                    'A_accountID' => $account_ID,
                ]
            );
    }
}
