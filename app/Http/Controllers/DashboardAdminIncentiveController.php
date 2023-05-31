<?php

namespace App\Http\Controllers;

use App\Models\DashboardAdminIncentive;
use App\Http\Requests\StoreDashboardAdminIncentiveRequest;
use App\Http\Requests\UpdateDashboardAdminIncentiveRequest;

class DashboardAdminIncentiveController extends Controller
{
 
    public function index()
    {
        $dashboardAdminIncentive = DashboardAdminIncentive::all();
        return view('ManageSpecialIncentiveView.Admin.AdminMainPageView',[
            'admin-dashboard' => $dashboardAdminIncentive
        ]);
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
    public function store(StoreDashboardAdminIncentiveRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(DashboardAdminIncentive $dashboardAdminIncentive)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(DashboardAdminIncentive $dashboardAdminIncentive)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(UpdateDashboardAdminIncentiveRequest $request, DashboardAdminIncentive $dashboardAdminIncentive)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(DashboardAdminIncentive $dashboardAdminIncentive)
    {
        //
    }
}
