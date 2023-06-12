<?php

use App\Http\Controllers\MarriagePrepCourseController;
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
    return view('ManageMarriagePrepCourseView.User.mainPageView');
});

Route::get('/anjuran', function () {
    return view('ManageMarriagePrepCourseView.User.searchAnjuranView');
});

Route::get('/registerCourse', function () {
    return view('ManageMarriagePrepCourseView.User.registerCourseView');
});

Route::get('/tempat', function () {
    return view('ManageMarriagePrepCourseView.Admin.daftarTempatView');
});

Route::get('/maklumat', function () {
    return view('ManageMarriagePrepCourseView.Admin.daftarMaklumatView');
});

Route::get('/peserta', function () {
    return view('ManageMarriagePrepCourseView.Admin.daftarPesertaView');
});

Route::get('/kehadiran', function () {
    return view('ManageMarriagePrepCourseView.Admin.daftarKehadiranView');
});

Route::get('/kelulusan', function () {
    return view('ManageMarriagePrepCourseView.Admin.kelulusanPesertaView');
});

//Route::get('/mainPage', [MarriagePrepCourseController::class, 'nextPage'])->name('searchAnjuranView'); 
   



require __DIR__.'/auth.php';