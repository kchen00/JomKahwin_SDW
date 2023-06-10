<?php

use App\Http\Controllers\ProfileController;
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

Route::get('/Incentive-Admin', function () {
    return view('IncentiveAdmin.dashboard');
});

Route::get('/Incentive-User', function () {
    return view('ManageSpecialIncentiveView.User.UserMainPageView');
});

Route::get('/search', function () {
    return view('ManageMarriageRequest.User.searchKP');
});

Route::get('/applicant', function () {
    return view('ManageMarriageRequest.User.ApplicantInformation');
});

Route::get('/document', function () {
    return view('ManageMarriageRequest.User.document');
});

Route::get('/search', function () {
    return view('ManageMarriageRequest.Admin.searchApplicantView');
});

Route::get('/info', function () {
    return view('ManageMarriageRequest.Admin.infoApplicantView');
});

Route::get('/validate', function () {
    return view('ManageMarriageRequest.Admin.validateApplicantView');
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