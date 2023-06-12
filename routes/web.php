<?php


// specify the contoller class here
use App\Http\Controllers\ManageAccountController\ManageAccountRegister;
use App\Http\Controllers\ManageAccountController\ManageLogin;
use App\Http\Controllers\ManageAccountController\ManagePasswordReset;
use App\Http\Controllers\ManageProfileController\ManageProfile;
use App\Http\Controllers\ManageSpecialIncentiveController\DashboardAdminIncentiveController;
use App\Http\Controllers\ManageSpecialIncentiveController\DashboardUserIncentiveController;
use App\Http\Controllers\ManageSpecialIncentiveController\IIncentiveController;
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


Route::get('/mainPage', function () {
    return view('ManageMarriagePrepCourse.mainPageView');
});

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

Route::resource('admin-IncentiveDashboard', DashboardAdminIncentiveController::class);
Route::resource('user-IncentiveDashboard', DashboardUserIncentiveController::class);
Route::resource('user-status', IIncentiveController::class);
Route::get('/user-apply', [App\Http\Controllers\ManageSpecialIncentiveController\IIncentiveController::class, 'create'])->name('apply.incentive');
Route::post('/user-apply', [App\Http\Controllers\ManageSpecialIncentiveController\IIncentiveController::class, 'store'])->name('apply.incentive.store');




