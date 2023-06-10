<?php

<<<<<<< HEAD

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardAdminIncentiveController;
use App\Http\Controllers\DashboardUserIncentiveController;
use App\Http\Controllers\IIncentiveController;
use App\Http\Controllers\UserViewStatusIncentiveController;
=======
// specify the contoller class here
use App\Http\Controllers\ManageAccountController\ManageAccountRegister;
use App\Http\Controllers\ManageAccountController\ManageLogin;
use App\Http\Controllers\ManageAccountController\ManagePasswordReset;
use App\Http\Controllers\ManageProfileController\ManageProfile;
>>>>>>> origin/main
use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Manager;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::get('/', function () {
    return view('homepage.homepage');
});

Route::get('/requestChange', function () {
    return view('ManageChangeConsultRequestView.Admin.ManageUserRequestView');
});

Route::get('/approvalChange', function () {
    return view('ManageChangeConsultRequestView.Admin.ManageApprovalChangeRequestView');
});

Route::get('/updateChange', function () {
    return view('ManageChangeConsultRequestView.Admin.UpdateChangeRequestView');
});

Route::get('/applyChange', function () {
    return view('ManageChangeConsultRequestView.User.ApplyChangeRequestView');
});

Route::get('/mainConsultation', function () {
    return view('ManageConsultationView.User.UserConsultationMainPageView');
});

Route::get('/applyConsultation', function () {
    return view('ManageConsultationView.User.ApplyConsultationView');
});

Route::get('/listApplication', function () {
    return view('ManageConsultationView.User.ListApplicationRecordView');
});

Route::get('/listStatusApprove', function () {
    return view('ManageConsultationView.User.ListStatusApproveView');
});

Route::get('/updateApplication', function () {
    return view('ManageConsultationView.User.UpdateApplicationView');
});

Route::get('/consultSession', function () {
    return view('ManageConsultationView.User.DisplayConsultSessionView');
});

Route::get('/viewStatusConsultation', function () {
    return view('ManageConsultationView.User.UserViewStatusConsultationView');
});

Route::get('/userApplication', function () {
    return view('ManageConsultationView.Admin.ManageUserApplicationView');
});

Route::get('/updatedApplication', function () {
    return view('ManageConsultationView.Admin.UpdatedApplicationView');
});

Route::get('/manageConsultation', function () {
    return view('ManageConsultationView.Admin.AdminManageConsultationView');
});

Route::get('/approvalConsultation', function () {
    return view('ManageConsultationView.Admin.ManageApprovalApplicationView');
});

Route::get('/advisor', function () {
    return view('ManageConsultationView.Admin.ManageAdvisorView');
});

Route::get('/manageConsultSession', function () {
    return view('ManageConsultationView.Admin.ManageConsultSessionView');
});

Route::get('/incentive', function () {
    return view('ManageSpecialIncentiveView.Admin.AdminMainPageView');
});


Route::get('/mainPage', function () {
    return view('ManageMarriagePrepCourse.mainPageView');
});

<<<<<<< HEAD
require __DIR__.'/auth.php';

Route::resource('admin-dashboardIncentive', DashboardAdminIncentiveController::class);
Route::resource('user-dashboardIncentive', DashboardUserIncentiveController::class);
Route::resource('user-status', UserViewStatusIncentiveController::class);
Route::resource('user-apply', IIncentiveController::class);
=======
Route::get('/anjuran', function () {
    return view('ManageMarriagePrepCourse.searchAnjuran');
});

Route::get('/register', function () {
    return view('ManageMarriagePrepCourse.registerCourse');
});

Route::get('/tempat', function () {
    return view('ManageMarriagePrepCourse.adminDaftarTempat');
});

Route::get('/maklumat', function () {
    return view('ManageMarriagePrepCourse.adminDaftarMaklumat');
});

Route::get('/peserta', function () {
    return view('ManageMarriagePrepCourse.adminDaftarPeserta');
});

Route::get('/kehadiran', function () {
    return view('ManageMarriagePrepCourse.adminDaftarKehadiran');
});

Route::get('/kelulusan', function () {
    return view('ManageMarriagePrepCourse.adminKelulusan');
});

Route::get('/search', function () {
    return view('ManageMarriageRequest.User.searchKP');
Route::view("/login", "ManageAccountView.LoginAccountView");
});

Route::controller(ManageAccountRegister::class)->group(function () {
    Route::get('/register', 'index');
    Route::post('/register_new_user', 'storePublicAccount');
    Route::post('/register_new_staff', 'storeStaffAccount');
});

Route::controller(ManageLogin::class)->group(function () {
    Route::get('/login', 'index');
    Route::post('/authenticate', 'authenticate');
    Route::get("/logout", "logout");
});

Route::view("/login", "ManageAccountView.LoginAccountView");

Route::controller(ManageAccountRegister::class)->group(function () {
    Route::get('/register', 'index');
    Route::post('/register_new_user', 'storePublicAccount');
    Route::post('/register_new_staff', 'storeStaffAccount');
});

Route::controller(ManageLogin::class)->group(function () {
    Route::get('/login', 'index');
    Route::post('/authenticate', 'authenticate');
    Route::get("/logout", "logout");
});

Route::controller(ManageProfile::class)->group(function () {
    Route::get('/dashboard', 'index');
    Route::get('/update_profile', 'showUpdateProfileForm');
    Route::post('/update_profile_store', 'update');
    Route::get("/user_directory", 'showSearchForm');
    Route::post("/search_user", "searchUser");
    Route::get("user/{id}", "show");
    
});

Route::controller(ManagePasswordReset::class)->group(function () {
    Route::view("/forget_password", "ManageAccountView.ManageForgetPasswordView");
    Route::post("/request_reset_password", "sendResetLink");
    Route::get("/reset_form/{token}", "displayResetForm");
    Route::post("/password_reset", "resetPassword");
});

Route::get('/kelulusan', function () {
    return view('ManageMarriagePrepCourse.adminKelulusan');
});

Route::get('/search', function () {
    return view('ManageMarriageRequest.User.searchKP');
});
>>>>>>> origin/main
