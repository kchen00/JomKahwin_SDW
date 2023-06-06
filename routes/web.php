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
});

require __DIR__.'/auth.php';