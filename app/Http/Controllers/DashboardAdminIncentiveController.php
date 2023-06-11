<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\I_incentive;


class DashboardAdminIncentiveController extends Controller
{

    public function index()
    {
        $i_incentive = I_incentive::all();
        return view('ManageSpecialIncentiveView.Admin.AdminMainPageView',[
            'i_incentive' => $i_incentive
        ]);
    }
 
}
