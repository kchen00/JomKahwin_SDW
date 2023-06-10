<?php

namespace App\Http\Controllers\ManageAccountController;

use PharIo\Manifest\Email;
use Illuminate\Support\Str;
use Illuminate\Http\Request;
use App\Models\Account\Account;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\Controller;
use App\Mail\password_reset_mail;
use Illuminate\Cache\RedisTagSet;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Password;
use Illuminate\Support\Carbon;

class ManagePasswordReset extends Controller
{
    public function displayResetForm($token) {
        //check if the token is valid or not
        $isValid = DB::table("PR_passwordResetToken")
                        ->where("PR_token", $token)
                        ->where("PR_expiredAt", ">", now())
                        ->first();  

        // if it is not null, then the token is valid
        if($isValid) {
            // make sure there is no user logged in the system before doing password reset
            if(Auth::guard('account')->user() == NULL) {
                return view("ManageAccountView/ManageResetPasswordView");
            } 
            // redirect user back to dashboard if user access this form when logged in
            return redirect("/dashboard");   
        }
        return redirect("/");
        
        
    }

    public function sendResetLink(Request $request) {
        $request -> validate(["A_email" => 'required', "email"]);

        $account = DB::table('A_account')
                ->where("A_email", $request->A_email)
                ->limit(1)
                ->first();

        // if the account exists in database
        if($account) {
            //generate a token
            $token = Str::random(255);
            //inserting a new reset token at table
            DB::table('PR_passwordResetToken')->insert([
                'A_accountID' => $account->A_accountID,
                'PR_token' => $token,
                'PR_createdAt' => Carbon::now(),
                "PR_expiredAt" => Carbon::now()->addMinute(30)
            ]);

            $resetURL = url("reset_form/".$token);
            // dd($resetURL);
            //sendint the email
            Mail::to($account->A_email)->send(new password_reset_mail($account->A_name, $resetURL));
            return redirect("/");
        }
        
    }

    public function resetPassword(Request $request) {
        $validated = $request->validate([
            "A_email" => ["required", "email"],
            "A_password" => ["required", "confirmed"]
        ]);
        $information = [
            'A_email' => $validated["A_email"],
            'A_password' => Hash::make($validated["A_password"]),
        ];

        Account::resetPassword($information);
        //after reset redirect user back to login page
        return redirect("/login");

    } 

}
