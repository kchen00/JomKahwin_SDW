<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\ManageSpecialIncentiveController\DashboardAdminIncentiveController;
use App\Http\Controllers\ManageSpecialIncentiveController\DashboardUserIncentiveController;
use App\Http\Controllers\ManageSpecialIncentiveController\IIncentiveController;
// specify the contoller class here
use App\Http\Controllers\ManageAccountController\ManageAccountRegister;
use App\Http\Controllers\ManageAccountController\ManageLogin;
use App\Http\Controllers\ManageAccountController\ManagePasswordReset;
use App\Http\Controllers\ManageProfileController\ManageProfile;
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
    //  if user has logged in, redirect them to their dashboard
    if(Auth::guard("account")->user()) {
        return redirect("/dashboard");
    }
    return view('homepage.homepage');
});

// consultation admin routes
Route::get('/requestChange', function () {
    return view('ManageChangeConsultRequestView.Admin.ManageUserRequestView');
});

Route::get('/approvalChange', function () {
    return view('ManageChangeConsultRequestView.Admin.ManageApprovalChangeRequestView');
});

Route::get('/updateChange', function () {
    return view('ManageChangeConsultRequestView.Admin.UpdateChangeRequestView');
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

//consultation user routes
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

//incentive
Route::get('/admin-viewDocument', function () {
    return view('ManageSpecialIncentiveView.Admin.AdminViewDocumentIncentiveView');
});
Route::get('/user-viewDocument', function () {
    return view('ManageSpecialIncentiveView.User.UserViewDocumentIncentiveView');
});




Route::group(['middleware' => 'auth'], function () {
    Route::resource('admin-IncentiveDashboard', DashboardAdminIncentiveController::class);
    Route::resource('user-IncentiveDashboard', DashboardUserIncentiveController::class);
    Route::get('/user-apply', [IIncentiveController::class, 'create'])->name('apply.incentive');
    Route::post('/user-apply', [IIncentiveController::class, 'store'])->name('apply.incentive.store');
    Route::get('/user-status', [IIncentiveController::class, 'index'])->name('user.status');
    Route::put('/admin-IncentiveDashboard', [DashboardAdminIncentiveController::class, 'update'])->name('admin.incentive.update');
    Route::get('/admin-IncentiveDashboard/{i_incentive}/delete', [DashboardAdminIncentiveController::class, 'destroy'])->name('admin.incentive.destroy');
    Route::get('/user-status/{i_incentive}/delete', [IIncentiveController::class, 'destroy'])->name('user.incentive.destroy');
    Route::get('/admin-view', [DashboardAdminIncentiveController::class, 'show'])->name('admin-view');
    Route::get('/user-view', [IIncentiveController::class, 'show'])->name('user-view');
    Route::get('/user-update', [IIncentiveController::class, 'update'])->name('user-update');



    

    

});

Auth::routes();


// marriage preparation couse
Route::get('/marriage_course_anjuran', function () {
    return view('ManageMarriagePrepCourse.searchAnjuran');
});

Route::get('/marriage_course_mainPage', function () {
    return view('ManageMarriagePrepCourse.mainPageView');
});

Route::get('/marriage_course_register', function () {
    return view('ManageMarriagePrepCourse.registerCourse');
});

Route::get('/marriage_course_tempat', function () {
    return view('ManageMarriagePrepCourse.adminDaftarTempat');
});

Route::get('/marriage_course_maklumat', function () {
    return view('ManageMarriagePrepCourse.adminDaftarMaklumat');
});

Route::get('/marriage_course_peserta', function () {
    return view('ManageMarriagePrepCourse.adminDaftarPeserta');
});

Route::get('/marriage_course_kehadiran', function () {
    return view('ManageMarriagePrepCourse.adminDaftarKehadiran');
});

Route::get('/marriage_course_kelulusan', function () {
    return view('ManageMarriagePrepCourse.adminKelulusan');
});

// marriage request routs
Route::get('/marriage_request_search', function () {
    return view('ManageMarriageRequest.User.searchKP');
});

//routes for registering new account
Route::controller(ManageAccountRegister::class)->group(function () {
    Route::get('/register', 'index');
    Route::post('/register_new_user', 'storePublicAccount');
    Route::post('/register_new_staff', 'storeStaffAccount');
});

//routes for login and logout
Route::controller(ManageLogin::class)->group(function () {
    Route::get('/login', 'index');
    Route::post('/authenticate', 'authenticate');
    Route::get("/logout", "logout");
});

// routes to manage profile
Route::controller(ManageProfile::class)->group(function () {
    Route::get('/dashboard', 'index');
    Route::get('/update_profile', 'showUpdateProfileForm');
    Route::post('/update_profile_store', 'update');
    Route::get("/user_directory", 'showSearchForm');
    Route::post("/search_user", "searchUser");
    Route::get("user/{id}", "show");
    
});

// routes for password reseting
Route::controller(ManagePasswordReset::class)->group(function () {
    Route::view("/forget_password", "ManageAccountView.ManageForgetPasswordView");
    Route::post("/request_reset_password", "sendResetLink");
    Route::get("/reset_form/{token}", "displayResetForm");
    Route::post("/password_reset", "resetPassword");
});

// routes for module 3
Route::view("/search_card", "MarriageRegistration.SearchCardNo");
Route::view("/marriageReq_info", "MarriageRegistration.MarriageRegInfo");
Route::view("/Partner_info", "MarriageRegistration.PartnerInfo");
Route::view("/marriage_info", "MarriageRegistration.MarriageInfo");
Route::view("/search_cardCopy", "MarriageRegistration.SearchCardNocopy");
Route::view("/marriage_infoCopy", "MarriageRegistration.MarriageInfoCopy");
Route::view("/Manage_Document", "MarriageRegistration.ManageDocument");
Route::view("/Manage_PaymentInfoDDD", "MarriageRegistration.ManagePaymentInfoDDD");
Route::view("/Manage_PaymentInfoCopy", "MarriageRegistration.ManagePaymentInfoCopy");
Route::view("/StuffSearch_Application", "MarriageRegistration.StuffSearchApplication");
Route::view("/StuffView_Application", "MarriageRegistration.StuffViewApplication");
Route::view("/StuffApproval_Application", "MarriageRegistration.StuffApprovalApplication");