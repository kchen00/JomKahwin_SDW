<?php

namespace App\Http\Controllers\ManageSpecialIncentiveController;

use App\Http\Controllers\Controller;
use App\Models\ManageSpecialIncentiveModel\I_incentive;
use App\Http\Requests\StoreI_incentiveRequest;
use App\Http\Requests\UpdateI_incentiveRequest;

class IIncentiveController extends Controller
{
    
    public function index()
    {
        $i_incentive = I_incentive::all();
        return view ('ManageSpecialIncentiveView.User.UserViewStatusIncentiveView',[
            'i_incentive' => $i_incentive
        ]);
    }

   
    public function create()
    {
        return view('ManageSpecialIncentiveView.User.UserApplyIncentiveView');
    }

  
    public function store(StoreI_incentiveRequest $request)
    {
        $i_incentive = New I_incentive;

        $i_incentive->I_bankName = $request->I_bankName;
        $i_incentive->I_noAcc = $request->I_noAcc;
        $i_incentive->I_applicationStatus = 'Sedang diproses';
        $i_incentive->I_relativeName = $request->I_relativeName;
        $i_incentive->I_relativePhone = $request->I_relativePhone;
        $i_incentive->I_relativeAddress = $request->I_relativeAddress;
        $i_incentive->I_relativeRelation = $request->I_relativeRelation;
        $i_incentive->I_relativePhoneHouse = $request->I_relativePhoneHouse;

        $i_incentive->save();

        return redirect('/user-status');

    }


    public function show(I_incentive $i_incentive)
    {
        //
    }

  
    public function edit(I_incentive $i_incentive)
    {
        //
    }

  
    public function update(UpdateI_incentiveRequest $request, I_incentive $i_incentive)
    {
        
        $i_incentive->I_bankName = $request->I_bankName;
        $i_incentive->I_noAcc = $request->I_noAcc;
        $i_incentive->I_relativeName = $request->I_relativeName;
        $i_incentive->I_relativePhone = $request->I_relativePhone;
        $i_incentive->I_relativeAddress = $request->I_relativeAddress;
        $i_incentive->I_relativeCity = $request->I_relativeCity;
        $i_incentive->I_relativeState = $request->I_relativeState;
        $i_incentive->I_relativePostcode = $request->I_relativePostcode;
        $i_incentive->I_relativeRelation = $request->I_relativeRelation;
        $i_incentive->I_relativePhoneHouse = $request->I_relativePhoneHouse;

        $i_incentive->I_applicationStatus = 'Sedang diproses';

        $i_incentive->save();

        return redirect('/user-status');
    }

   
    public function destroy(I_incentive $i_incentive)
    {
        $i_incentive->delete();

        return redirect('/user-status');
    }
}
