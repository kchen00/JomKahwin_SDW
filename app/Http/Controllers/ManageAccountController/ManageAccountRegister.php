<?php

namespace App\Http\Controllers\ManageAccountController;

use App\Http\Controllers\Controller;
use App\Models\Account\Account;
use App\Models\Account\Staff;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class ManageAccountRegister extends Controller
{
    private $user;
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $this->user = Auth::user();
        // $this->user["A_accountType"]="S";
        // display the public register form
        if($this->user != null && $this->user["A_accountType"]=="S") {
            return view("ManageAccountView.RegisterStaffAccountView");
        }
        else {
        // display the register form for staff to internal registration
            return view("ManageAccountView.RegisterPublicAccountView");

        }
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        // store a new resources
    }

    /**
     * Store a newly created resource in storage.
     */
    public function storePublicAccount(Request $request)
    {
        $validated = $request->validate([
            'A_icNum' => ['required', 'string', 'max:12', 'min:12', "unique:a_account", "bail"],
            'A_email' => ['required', 'string', 'email', 'max:100', 'unique:a_account'],
            'A_password' => ['required', 'confirmed', Rules\Password::defaults()],
            'A_gender' => ['required'],
        ]);

        // calling the register method at account class
        $account = Account::register([
            'A_icNum' => $request->A_icNum,
            'A_email' => $request->A_email,
            'A_password' => Hash::make($request->A_password),  //hashing the password
            'A_gender' => $request->A_gender,
            "A_accountType" => "P",  // public register form so by default P
        ]);



        // Auth::login($account);


        return redirect("/");
    }

        /**
     * Store a newly created resource in storage.
     */
    public function storeStaffAccount(Request $request)
    {
        $validated = $request->validate([
            'A_icNum' => ['required', 'string', 'max:12', 'min:12', "unique:a_account", "bail"],
            'A_email' => ['required', 'string', 'email', 'max:100', 'unique:a_account'],
            'A_password' => ['required', 'confirmed', Rules\Password::defaults()],
            'A_gender' => ['required'],
            'ST_staffPosition' => ['required'],
            'ST_staffAccessLevel' => ['required'],
        ]);

        // calling the register method at account class
        $account = Account::register([
            'A_icNum' => $request->A_icNum,
            'A_email' => $request->A_email,
            'A_password' => Hash::make($request->A_password),  //hashing the password
            'A_gender' => $request->A_gender,
            "A_accountType" => "S",  // internal register form so by default S
        ]);

        $staff = Staff::register([
            'A_email'=>$request->A_email,
            'ST_staffPosition'=>$request->ST_staffPosition,
            'ST_staffAccessLevel'=>$request->ST_staffAccessLevel
        ]);

        // Auth::login($account);


        // return redirect("/");
    }

    /**
     * Display the specified resource.
     */
    public function show(Account $account)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Account $account)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Account $account)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Account $account)
    {
        //
    }
}
