<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MarriagePrepCourseController extends Controller
{
    public function index()
    {
        return ;
    }

    
    public function showNextPage()
    {
        return view('kehadiran');
        
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
