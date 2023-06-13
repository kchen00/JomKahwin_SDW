<?php

namespace App\Http\Controllers\ManageConsultationController;

use App\Http\Controllers\Controller;
use App\Models\consultation;
use App\Http\Requests\StoreconsultationRequest;
use App\Http\Requests\UpdateconsultationRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\View\View;
use Illuminate\Support\Collection;



class UserConsultationController extends Controller
{
    
    public function validateICnumber(Request $request)
    {
        $validatedData = $request->validate([
            'A_icNum' => ['required', 'string', 'max:12', 'min:12']
        ]);

        $A_icNum = $validatedData['A_icNum'];

        // Perform the validation logic to check if the IC number exists or not
        $exists = consultation::where('A_icNum', $A_icNum)->exists();

        if ($exists) {
            return redirect("/listApplication");
        } else {
            // IC number does not exist, display an error message
            return back()->withErrors(['A_icNum' => 'No. K/P / Passport Kene Adu tidak wujud.
            Sila masukkan No. K/P / Passport Kene Adu yang betul atau daftar akaun semula.']);
        }
    }

    /**
     * Show a list of all of the application's users.
     */
    public function index(): View
    {
        $CO_consultations = DB::table('CO_consultations')->get();
 
        return view('user.index', ['CO_consultations' => $CO_consultations]);
    }

    public function applyConsultation()
    {
        return view('ManageConsultationView.User.ApplyConsultationView');
    }

    public function create()
    {
        //
    }

    public function store(StoreconsultationRequest $request)
    {
     // Validate the request data
     $validatedData = $request->validate([
        'CO_purpose' => 'required',
        'CO_paidChoice' => 'required',
        'A_icNum' => 'required',
        'A_name' => 'required',
        'A_houseAddress' => 'required',
        'A_telephoneNum' => 'required',
    ]);

    // Create a new consultation record
    $consultation = new Consultation();
    $consultation->CO_purpose = $request->input('CO_purpose');
    $consultation->CO_paidChoice = $request->input('CO_paidChoice');
    $consultation->A_icNum = $request->input('A_icNum');
    $consultation->A_name = $request->input('A_name');
    $consultation->A_houseAddress = $request->input('A_houseAddress');
    $consultation->A_telephoneNum = $request->input('A_telephoneNum');
    $consultation->save();

    // Redirect the user to the record list application page
    return redirect()->route('listApplication.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(consultation $consultation)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(consultation $consultation)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateconsultationRequest $request, consultation $consultation)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(consultation $consultation)
    {
        $deleted = DB::table('CO_consultations')->delete();
    }

}
