<?php

use App\Http\Controllers\MarriageRequestController;
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

Route::get('/daftar', function () {
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

Route::get('/applicant-information', function () {
    return view('ApplicantInformationView');
})->name('applicant-information');

Route::post('/seterusnya', 'MarriageRequestController@seterusnya')->name('seterusnya');

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';