<?php


use App\Http\Controllers\ProfileController;
use App\Http\Controllers\DashboardAdminIncentiveController;
use App\Http\Controllers\DashboardUserIncentiveController;
use App\Http\Controllers\IIncentiveController;
use App\Http\Controllers\UserViewStatusIncentiveController;
use Illuminate\Support\Facades\Route;

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

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('admin-dashboardIncentive', DashboardAdminIncentiveController::class);
Route::resource('user-dashboardIncentive', DashboardUserIncentiveController::class);
Route::resource('user-status', UserViewStatusIncentiveController::class);
Route::resource('user-apply', IIncentiveController::class);