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
            'acc' => $account
        ]);
    }

    public function update(Request $request, DashboardAdminIncentiveController $dashboardAdminIncentiveController)
    {
        $i_incentive = I_incentive::where('I_incentiveID', $request->I_incentiveID)->where('I_applicationStatus', 'Dalam Proses')->first();
    
        if (!$i_incentive) {
            return redirect()->back()->withErrors(['error' => 'Incentive not found or already processed.']);
        }
    
        $i_incentive->I_applicationStatus = $request->input('I_applicationStatus');
        $i_incentive->save();
    
        return redirect('/admin-IncentiveDashboard');
    }
    

    public function destroy(I_incentive $i_incentive)
    {
        $i_incentive->delete();

        
        return redirect('/admin-IncentiveDashboard'); 
    }

    public function show()
    {
     
        return view('ManageSpecialIncentiveView.Admin.AdminViewApplyIncentiveView', [
           
        ]);
    }
    
    
    
    
    
    
    

 
}
