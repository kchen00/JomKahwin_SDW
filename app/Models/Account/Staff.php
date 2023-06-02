<?php

namespace App\Models\Account;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Support\Facades\DB;

class Staff extends Model
{
    use HasFactory;

    public static function register($information) {
        $account = DB::table("A_account")
                        ->select("A_accountID")
                        ->where("A_accountType", "=", "S")
                        ->where("A_email", "=", $information["A_email"])
                        ->get();
        
        $account_ID = $account->first()->A_accountID;
        $newStaff = DB::table('st_staff')
            ->insert(
                [
                    'A_accountID' => $account_ID,
                    'ST_staffPosition' => $information['ST_staffPosition'],
                    'ST_staffAccessLevel' => $information['ST_staffAccessLevel'],
                ]
            );
    }

}
