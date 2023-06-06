<?php
//  a contoller that manages user profile
namespace App\Http\Controllers\ManageProfileController;

use Illuminate\Http\Request;
use App\Models\Account\Account;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ManageProfileController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $user = Auth::guard('account')->user();
        if($user) {
            // if user is authenticated
            // if the user is login for the first time
            if($user->A_lastUpdated == null){
                return redirect("update_profile");
            }
            else {
                //if the user if a public account
                if($user->A_accountType == "P") {
                    return view("ManageProfileView.public_dashboard", ['account'=>$user]);
                }
                return view("ManageProfileView.admin_dashboard");
            }

        }
        // else redirect to login page
        return redirect("/login");
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        //
    }

    // method to show the update profile form
    public function showUpdateProfileForm() {
        $user = Auth::guard('account')->user();
        if($user) {
            return view("ManageProfileView/ManageUpdateProfileView");
        }
        return redirect("/login");
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request)
    {
        // validating the information
        $validated = $request->validate([
            'A_name' => ["required", "string"],
            'A_ethnicity' => ['required' ],
            'A_nationality' => ['required' ],
            'A_houseAddress' => ['required' ],
            'A_telephoneNum' => ['required' ],
            'A_landlineNumber' => ['required' ],
            'A_jobSector' => ['required' ],
            'A_jobAddress' => ['required' ],
            'A_officeNo' => ['required' ],
            'A_income' => ['required' ],
            'A_marriageStatus' => ['required' ],
            'A_educationLevel' => ['required' ],
            'A_profilePhoto' => ['required', 'max:4000', 'mimes:jpg, jpeg, png'],
            ]
        );
        //creating a new name for the image
        $profileImageName = time() . "." . $request->A_profilePhoto->extension();
        //sending the validated request to the account model to update the database
        $request->A_profilePhoto->move("A_profilePhoto", $profileImageName, );
        Account::update_profile([
                'A_name' => $request->A_name,
                'A_ethnicity' => $request->A_ethnicity,
                'A_nationality' => $request->A_nationality,
                'A_houseAddress' => $request->A_houseAddress,
                'A_telephoneNum' => $request->A_telephoneNum,
                'A_landlineNumber' => $request->A_landlineNumber,
                'A_jobSector' => $request->A_jobSector,
                'A_jobAddress' => $request->A_jobAddress,
                'A_officeNo' => $request->A_officeNo,
                'A_income' => $request->A_income,
                'A_marriageStatus' => $request->A_marriageStatus,
                'A_educationLevel' => $request->A_educationLevel,
                'A_profilePhoto' => $profileImageName,
            ]);
        return redirect("dashboard");
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
