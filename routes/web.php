<?php

// specify the contoller class here
use App\Http\Controllers\ManageAccountController\ManageAccountRegister;
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

Route::get('/incentive', function () {
    return view('incentive.dashboard');
});

// Route::view("/register", "ManageAccountView.RegisterAccountView");
Route::view("/login", "ManageAccountView.LoginAccountView");
// Route::resource('/register', ManageAccountRegister::class);
Route::controller(ManageAccountRegister::class)->group(function () {
    Route::get('/register', 'index');
    Route::post('/register_new_user', 'store');
});