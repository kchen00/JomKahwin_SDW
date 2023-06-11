<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\I_incentive;

class DashboardUserIncentiveController extends Controller
{
    public function index()
    {
        $dashboardUserIncentive = I_incentive::all();
        return view('ManageSpecialIncentiveView.User.UserMainPageView',[
            'user-dashboard' => $dashboardUserIncentive
        ]);
    }
}
