<?php

namespace App\Http\Controllers\ManageMarriagePrepCourseController;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ManagePrepCourseController extends Controller
{
    public function searchPrepCourse() {
        $results = DB::table("c_marriagecourse")
        ->where("C_displayCourse", "true")
        ->get();

        return view("ManageMarriagePrepCourse.searchAnjuran", ["results"=>$results]);
    }

    public function submitRegister(Request $request) {
        return redirect("/dashboard");
    }
}
