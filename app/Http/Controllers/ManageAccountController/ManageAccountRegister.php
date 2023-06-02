<?php

namespace App\Http\Controllers\ManageAccountController;

use App\Http\Controllers\Controller;
use App\Models\Account\Account;
use Illuminate\Http\Request;
use App\Providers\RouteServiceProvider;
use Illuminate\Auth\Events\Registered;
use Illuminate\Http\RedirectResponse;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Validation\Rules;

class ManageAccountRegister extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // display the register form
        
        // return DB::select('select * from migrations');
        return view("ManageAccountView.RegisterAccountView");
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
    public function store(Request $request)
    {
        // validating the field before store it 
        // $request->validate([
        //     'A_icNum' => ['required', 'string', 'max:12', 'min:12', "unique:".a_account::class],
        //     'A_email' => ['required', 'string', 'email', 'max:100', 'unique:'.a_account::class],
        //     'A_password' => ['required', 'confirmed', Rules\Password::defaults()],
        //     'A_gender' => ['required'],
        // ]);
        
        $validated = $request->validate([
            'A_icNum' => ['required', 'string', 'max:12', 'min:12', "unique:a_account", "bail"],
            'A_email' => ['required', 'string', 'email', 'max:100', 'unique:a_account'],
            'A_password' => ['required', 'confirmed', Rules\Password::defaults()],
            'A_gender' => ['required'],
        ]);

        $account = Account::register([
            'A_icNum' => $request->A_icNum,
            'A_email' => $request->A_email,
            'A_password' => Hash::make($request->A_password),
            'A_gender' => $request->A_gender,
            "A_accountType" => "N",
        ]);

        // Auth::login($account);

        return redirect("/");
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
