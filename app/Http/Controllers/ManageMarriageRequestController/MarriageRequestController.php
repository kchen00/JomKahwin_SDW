<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarriageRequestController extends Controller
{
    public function seterusnya(Request $request)
    {
        // Add your logic here if needed

        return redirect()->route('ApplicantInformationView');
    }

    public function insertData(Request $request)
    {
        $noKadPengenalan = $request->input('no_kad_pengenalan');

        $user = new User();
        $user->kad_pengenalan = $noKadPengenalan;
        $user->save();

        // Alternatively, you can use the create method if you have the User model mass assignable:
        // User::create(['kad_pengenalan' => $noKadPengenalan]);

        // Return a response or redirect as needed
    }
}
