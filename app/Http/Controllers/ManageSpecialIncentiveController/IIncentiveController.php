<?php

namespace App\Http\Controllers\ManageSpecialIncentiveController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\ManageSpecialIncentiveModel\I_incentive;
use App\Http\Requests\StoreI_incentiveRequest;
use App\Http\Requests\UpdateI_incentiveRequest;
use App\Models\Account\Account;

class IIncentiveController extends Controller
{
    public function index()
    {
        $userId = null;
        $userName = null;
        $i_incentive = null;

        if (Auth::check()) {
            $account = Auth::user();
            $userId = $account->A_icNum;
            $userName = $account->A_name;

            // Retrieve i_incentive data for the authenticated user
            $i_incentive = $account->iIncentive;
        }
        $i_incentive = I_incentive::all();

        return view('ManageSpecialIncentiveView.User.UserViewStatusIncentiveView', compact('i_incentive', 'userId', 'userName'));
    }

    public function create()
    {
        $userId = null;
        $userName = null;
        $partner = null;

        if (Auth::check()) {
            $account = Auth::user();
            $userId = $account->A_icNum;
            $userName = $account->A_name;

            // Find the marriage based on the relationship
            $marriage = $account->marriage;

            if ($marriage) {
                $partner = Account::where('A_icNum', $marriage->M_partnerIC)->first();
            }
        }

        return view('ManageSpecialIncentiveView.User.UserApplyIncentiveView', compact('userId', 'userName', 'partner'));
    }

    public function store(Request $request)
    {
        $validatedData = $request->validate([
            'I_bankName' => 'required',
            'I_noAcc' => 'required',
            'I_relativeName' => 'required',
            'I_relativePhone' => 'required',
            'I_relativeAddress' => 'required',
            'I_relativeRelation' => 'required',
        ]);

        $i_incentive = new I_incentive($validatedData);
        $i_incentive->I_applicationStatus = 'Dalam Proses';
        $i_incentive->save();

        return redirect('/user-status');
    }

    public function update()
    {
        return view('ManageSpecialIncentiveView.User.UserUpdateApplyIncentiveView', [
           
        ]);
    }

    public function destroy(I_incentive $i_incentive)
    {
        $i_incentive->delete();

        return redirect('/user-status');
    }

    public function show()
    {
     
        return view('ManageSpecialIncentiveView.User.UserViewIncentiveView', [
           
        ]);
    }

}
