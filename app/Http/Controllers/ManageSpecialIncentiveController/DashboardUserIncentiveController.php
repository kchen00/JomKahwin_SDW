<?php

namespace App\Http\Controllers\ManageSpecialIncentiveController;

use App\Http\Controllers\Controller;
use App\Models\Account\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ManageSpecialIncentiveModel\I_incentive;

class DashboardUserIncentiveController extends Controller
{
    
    public function index()
    {
        $i_incentive = I_incentive::all();
        $userId = null;
        $userName = null;
    
        if (auth()->check()) {
            $account = Account::find(auth()->user()->A_accountID);
            if ($account) {
                $userId = $account->A_icNum;
                $userName = $account->A_name;
            }
        }
    
        return view('ManageSpecialIncentiveView.User.UserMainPageView', [
            'i_incentive' => $i_incentive,
            'userId' => $userId,
            'userName' => $userName,
        ]);
    }
    
}
