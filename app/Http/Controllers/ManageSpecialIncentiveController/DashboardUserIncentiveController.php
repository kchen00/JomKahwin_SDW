<?php

namespace App\Http\Controllers\ManageSpecialIncentiveController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Models\ManageSpecialIncentiveModel\I_incentive;

class DashboardUserIncentiveController extends Controller
{
    public function index()
    {
        $dashboardUserIncentive = I_incentive::all();
        return view('ManageSpecialIncentiveView.User.UserMainPageView',[
            'user-IncentiveDashboard' => $dashboardUserIncentive
        ]);
    }
}
