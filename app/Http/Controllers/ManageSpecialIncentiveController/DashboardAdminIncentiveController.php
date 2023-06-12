<?php

namespace App\Http\Controllers\ManageSpecialIncentiveController;

use App\Http\Controllers\Controller;
use App\Models\Account\Account;
use Illuminate\Http\Request;
use App\Models\ManageSpecialIncentiveModel\I_incentive;


class DashboardAdminIncentiveController extends Controller
{

    public function index()
    {
        $i_incentive = I_incentive::all();
        $account = Account::all();
        return view('ManageSpecialIncentiveView.Admin.AdminMainPageView',[
            'i_incentive' => $i_incentive,
            'account' => $account
        ]);
    }
 
}
