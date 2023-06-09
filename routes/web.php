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


Route::get('/mainPage', function () {
    return view('ManageMarriagePrepCourse.User.mainPageView');
});

Route::get('/anjuran', function () {
    return view('ManageMarriagePrepCourse.User.searchAnjuran');
});

Route::get('/register', function () {
    return view('ManageMarriagePrepCourse.User.registerCourse');
});

Route::get('/tempat', function () {
    return view('ManageMarriagePrepCourse.Admin.adminDaftarTempat');
});

Route::get('/maklumat', function () {
    return view('ManageMarriagePrepCourse.Admin.adminDaftarMaklumat');
});

Route::get('/peserta', function () {
    return view('ManageMarriagePrepCourse.Admin.adminDaftarPeserta');
});

Route::get('/kehadiran', function () {
    return view('ManageMarriagePrepCourse.Admin.adminDaftarKehadiran');
});

Route::get('/kelulusan', function () {
    return view('ManageMarriagePrepCourse.Admin.adminKelulusan');
});

Route::get('/searchKP', function () {
    return view('ManageMarriageRequest.User.searchKP');
});

require __DIR__.'/auth.php';