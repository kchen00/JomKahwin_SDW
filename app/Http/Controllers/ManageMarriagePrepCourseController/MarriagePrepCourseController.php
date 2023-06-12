<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarriagePrepCourseController extends Controller
{
    public function index()
    {
        return 'Hi from MarriagePrepCourseController';
    }

    public function show()
    {
        //
    }

    public function store(Request $request)
    {
        //
    }

    public function edit()
    {
        //
    }

    public function destroy()
    {
        //
    }

    public function nextPage()
    {
       return view('searchAnjuranView');
    }

}
