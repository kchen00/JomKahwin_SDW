<?php
//  a contoller that manages user profile
namespace App\Http\Controllers\ManageProfileController;

use Illuminate\Http\Request;
use App\Models\Account\Account;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Storage;

class ManageProfile extends Controller
{
    /**
     * Display a listing of the resource.
     */
    //show the dashboard of the user
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
                $base_template = "ManageProfileView.ManageProfileViewBaseAdmin";
                $displaying_profile = FALSE;
                // if the user is a public account, change the base template
                if($user->A_accountType == "P"){
                    $base_template = 'ManageProfileView.ManageProfileViewBaseUser';                    
                }
                return view("ManageProfileView.ManageDisplayProfile", 
                            ['base_template'=> $base_template,
                             'account'=>$user,
                             "displaying_profile" => $displaying_profile]);
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
    // show user information from the search results
    public function show(string $id)
    {
        // checks if user who made this show request is an staff or not
        if(Auth::guard('account')->user()->A_accountType == "S") {
            //search db for the account id
            $result = DB::table("A_account")
                        ->where("A_accountID", $id)
                        ->limit(1)
                        ->first();
            return view("ManageProfileView.ManageDisplayProfile", 
                        ["account"=>$result, 
                         'base_template'=> 'ManageProfileView.ManageProfileViewBaseAdmin',
                         "displaying_profile"=>TRUE]);
        }
        return redirect()->back();
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
        $user = Auth::guard("account")->user();
        if($user) {
            if($user->A_accountType == "P") {
                return view("ManageProfileView/ManageUpdateProfileView", ['base_template'=> 'ManageProfileView.ManageProfileViewBaseUser','account'=>$user]);   
            }
            return view("ManageProfileView/ManageUpdateProfileView", ['base_template'=> 'ManageProfileView.ManageProfileViewBaseAdmin','account'=>$user]);
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
            'A_ethnicity' => ['required'],
            'A_nationality' => ['required'],
            'A_houseAddress' => ['required'],
            'A_telephoneNum' => ['required'],
            'A_landlineNumber' => ['required'],
            'A_jobSector' => ['required'],
            'A_jobAddress' => ['required'],
            'A_officeNum' => ['required'],
            'A_income' => ['required', "decimal:2"],
            'A_marriageStatus' => ['required'],
            'A_educationLevel' => ['required'],
            'A_profilePhoto' => ['required', 'max:4000', 'mimes:jpg, jpeg, png'],
            ]
        );
        
        //creating a new name for the image
        $profileImageName = time() . "." . $request->A_profilePhoto->extension();
        //sending the validated request to the account model to update the database
        $request->A_profilePhoto->move("A_profilePhoto", $profileImageName, );
        Account::updateProfile([
                'A_name' => $request->A_name,
                'A_ethnicity' => $request->A_ethnicity,
                'A_nationality' => $request->A_nationality,
                'A_houseAddress' => $request->A_houseAddress,
                'A_telephoneNum' => $request->A_telephoneNum,
                'A_landlineNumber' => $request->A_landlineNumber,
                'A_jobSector' => $request->A_jobSector,
                'A_jobAddress' => $request->A_jobAddress,
                'A_officeNum' => $request->A_officeNum,
                'A_income' => $request->A_income,
                'A_marriageStatus' => $request->A_marriageStatus,
                'A_educationLevel' => $request->A_educationLevel,
                'A_profilePhoto' => $profileImageName,
            ]);
        return redirect("/dashboard");
    }

    public function showSearchForm() {
        if(Auth::guard("account")->user()->A_accountType == "S") {
            $users = DB::table('A_account')
                        ->limit(10)
                        ->get();
            // return($users);
            return view("ManageProfileView.ManageSearchProfileView", [
                'user_list'=>$users
            ]);
        }
        return redirect()->back();
    }

    public function searchUser(Request $request) {
        $results = DB::table("A_account")
                    ->where("A_icNum", $request->A_icNum)
                    ->orwhere("A_accountType", $request->A_accountType)
                    ->get();
        return view("ManageProfileView.ManageSearchProfileView", [
            'user_list'=>$results
        ]);
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
