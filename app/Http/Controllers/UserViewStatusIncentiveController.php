<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\I_incentive;

class UserViewStatusIncentiveController extends Controller
{
    public function index()
    {
        $userViewStatusIncentive = I_incentive::all();
        return view('ManageSpecialIncentiveView.User.UserViewStatusIncentiveView',[
            'user-status' => $userViewStatusIncentive
        ]);
    }
}
