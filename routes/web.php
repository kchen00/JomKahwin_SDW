<?php

// specify the contoller class here
use App\Http\Controllers\ManageAccountController\ManageAccountRegister;
use App\Http\Controllers\ManageAccountController\ManageLogin;
use App\Http\Controllers\ManageProfileController\ManageProfileController;
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

Route::get('/incentive', function () {
    return view('incentive.dashboard');
});

// Route::view("/register", "ManageAccountView.RegisterAccountView");
Route::view("/login", "ManageAccountView.LoginAccountView");
// Route::resource('/register', ManageAccountRegister::class);

// Route::controller(ManageAccountRegisterPublic::class)->group(function () {
//     Route::get('/register', 'index');
//     Route::post('/register_new_user', 'store');
// });

Route::controller(ManageAccountRegister::class)->group(function () {
    Route::get('/register', 'index');
    Route::post('/register_new_user', 'storePublicAccount');
    Route::post('/register_new_staff', 'storeStaffAccount');
});

Route::controller(ManageLogin::class)->group(function () {
    Route::get('/login', 'index');
    Route::post('/authenticate', 'authenticate');
    Route::get("logout", "logout");
});

Route::controller(ManageProfileController::class)->group(function () {
    Route::get('/dashboard', 'index');
    Route::get('/update_profile', 'showUpdateProfileForm');
    Route::post('/update_profile_store', 'update');
    Route::get("/user_directory", 'showSearchForm');
    Route::post("/search_user", "searchUser");
    Route::get("user/{id}", "show");
});
