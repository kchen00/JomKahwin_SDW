<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\UserViewStatusIncentiveController;
// specify the contoller class here
use App\Http\Controllers\ManageSpecialIncentiveController\DashboardAdminIncentiveController;
use App\Http\Controllers\ManageSpecialIncentiveController\DashboardUserIncentiveController;
use App\Http\Controllers\ManageSpecialIncentiveController\IIncentiveController;
use App\Http\Controllers\ManageAccountController\ManageAccountRegister;
use App\Http\Controllers\ManageAccountController\ManageLogin;
use App\Http\Controllers\ManageAccountController\ManagePasswordReset;
use App\Http\Controllers\ManageProfileController\ManageProfile;
use App\Http\Controllers\ManageMarriagePrepCourseController\ManagePrepCourseController;
use App\Http\Controllers\ManageMarriageRequestContoller\MarriageRequestContoller;
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
Route::prefix('/consultation_admin')->group(function () {
    Route::view('/requestChange', 'ManageChangeConsultRequestView.Admin.ManageUserRequestView');
    Route::view('/approvalChange', 'ManageConsultationView.Admin.ManageApprovalApplicationView');
    Route::view('/updateChange', 'ManageChangeConsultRequestView.Admin.UpdateChangeRequestView');
    Route::view('/userApplication', 'ManageConsultationView.Admin.ManageUserApplicationView');
    Route::view('/updatedApplication', 'ManageConsultationView.Admin.UpdatedApplicationView');
    Route::view('/manageConsultation', 'ManageConsultationView.Admin.AdminManageConsultationView');
    Route::view('/approvalConsultation', 'ManageConsultationView.Admin.ManageApprovalApplicationView');
    Route::view('/advisor', 'ManageConsultationView.Admin.ManageAdvisorView');
    Route::view('/manageConsultSession', 'ManageConsultationView.Admin.ManageConsultSessionView');
});

// consultation routes for users
Route::prefix('/consultation_user')->group(function () {
    Route::view('/applyChange', 'ManageChangeConsultRequestView.User.ApplyChangeRequestView');
    Route::view('/mainConsultation', 'ManageConsultationView.User.UserConsultationMainPageView');
    Route::view('/applyConsultation', 'ManageConsultationView.User.ApplyConsultationView');
    Route::view('/listApplication', 'ManageConsultationView.User.ListApplicationRecordView');
    Route::view('/listStatusApprove', 'ManageConsultationView.User.ListStatusApproveView');
    Route::view('/updateApplication', 'ManageConsultationView.User.UpdateApplicationView');
    Route::view('/consultSession', 'ManageConsultationView.User.DisplayConsultSessionView');
    Route::view('/viewStatusConsultation', 'ManageConsultationView.User.UserViewStatusConsultationView');
});

//incentive
Route::get('/admin-viewDocument', function () {
    return view('ManageSpecialIncentiveView.Admin.AdminViewDocumentIncentiveView');
});
Route::get('/user-viewDocument', function () {
    return view('ManageSpecialIncentiveView.User.UserViewDocumentIncentiveView');
});

Route::group(['middleware' => 'auth'], function () {
    Route::resource('admin-dashboardIncentive', DashboardAdminIncentiveController::class);
    Route::resource('/user-dashboardIncentive', DashboardUserIncentiveController::class);
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

//marriage course routes
Route::prefix("/marriage_course")->group(function () {
    Route::get('anjuran', [ManagePrepCourseController::class, "searchPrepCourse"]);
    Route::get("anjuran/search", [ManagePrepCourseController::class, "searchPrepCourse"]);
    Route::view('register', 'ManageMarriagePrepCourse.registerCourse');
    Route::post("register/submit", [ManagePrepCourseController::class, "submitRegister"]);
    Route::view('mainPage', 'ManageMarriagePrepCourse.mainPageView');
    Route::view('tempat', 'ManageMarriagePrepCourse.adminDaftarTempat');
    Route::view('maklumat', 'ManageMarriagePrepCourse.adminDaftarMaklumat');
    Route::view('peserta', 'ManageMarriagePrepCourse.adminDaftarPeserta');
    Route::view('kehadiran', 'ManageMarriagePrepCourse.adminDaftarKehadiran');
    Route::view('kelulusan', 'ManageMarriagePrepCourse.adminKelulusan');
});

Route::get('/marriage_request_search', function () {
    return view('ManageMarriageRequestView.User.daftarBaruView');
});

Route::get('/applicant', function () {
    return view('ManageMarriageRequestView.User.ApplicantInformationView');
})->name('ApplicantInformationView');;

Route::get('/wali', function () {
    return view('ManageMarriageRequestView.User.waliDocumentView');
});

Route::get('/document', function () {
    return view('ManageMarriageRequestView.User.documentView');
});

Route::get('/semak', function () {
    return view('ManageMarriageRequestView.User.senaraiSemakView');
});

Route::get('/search', function () {
    return view('ManageMarriageRequestView.Admin.searchApplicantView');
});

Route::get('/info', function () {
    return view('ManageMarriageRequestView.Admin.infoApplicantView');
});

Route::get('/validate', function () {
    return view('ManageMarriageRequestView.Admin.validateApplicantView');
});

// // marriage request routs
// Route::get('/marriage_request_search', function () {
//     return view('ManageMarriageRequest.User.searchKP', ["results"=>[]]);
// });
Route::get('/marriage_request_search_KP', [MarriageRequestContoller::class, "searchPartner"]);
Route::view('/manage_marriage_application', "ManageMarriageRequestView.Admin.searchApplicantView");

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
