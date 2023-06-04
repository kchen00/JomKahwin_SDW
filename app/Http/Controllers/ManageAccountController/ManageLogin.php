<?php
// a contoller that manages login
namespace App\Http\Controllers\ManageAccountController;

use App\Http\Controllers\Controller;
use App\Models\Account\Account;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ManageLogin extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        
        return view("ManageAccountView.LoginAccountView");
    }

    //authenticate the login credential
    public function authenticate(Request $request) {
        $credentials = $request->validate([
            'A_icNum' => ['required', 'string', 'max:12', 'min:12'],
            'A_password' => ['required'],
            'A_accountType' => ['required'],
            ]
        );

        $credentials = $request->only("A_icNum", 'A_password', "A_accountType");
        //specify which guard to use and attempt to authenticate withe condition specified
        // password is default condition, so need to assign it with value, instead of specified
        if(Auth::guard("account")->attempt(['password'=>$credentials['A_password'], 'A_icNum'=>$credentials["A_icNum"], 'A_accountType'=>$credentials["A_accountType"]])) {
            $request->session()->regenerate();
            Auth::guard("account")->loginUsingId(Auth::guard("account")->id());
            // Session::put('user', $user);
            // return(Auth::guard("account")->user());
            // Auth::guard("account")->login($user);
            return redirect("/dashboard");
        }
        // if the credential does not match, go back and display error message
        return back()->withErrors([
            'A_icNum' => 'Info akaun adalah tidak betul.',
        ])->onlyInput('A_icNum');
    }

}
