<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\I_incentive;

class UserViewStatusIncentiveController extends Controller
{
    public function index()
    {
        $i_incentive = I_incentive::all();
        return view('ManageSpecialIncentiveView.User.UserViewStatusIcentiveView',[
            'user-status' => $i_incentive
        ]);
    }
 
}
