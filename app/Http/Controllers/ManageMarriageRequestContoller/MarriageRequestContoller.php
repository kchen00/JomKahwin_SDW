<?php

namespace App\Http\Controllers\ManageMarriageRequestContoller;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class MarriageRequestContoller extends Controller
{
    public function searchPartner(Request $request) {
        $results = DB::table('A_account')
                    ->where("A_icNum", $request->A_icNum)
                    ->where("A_accountType", "P")
                    ->get();
        // return($results);
        return view("ManageMarriageRequest.User.searchKP", ["results"=>$results]);
    }
}
