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


Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';

Route::resource('admin-IncentiveDashboard', DashboardAdminIncentiveController::class);
Route::resource('user-IncentiveDashboard', DashboardUserIncentiveController::class);
Route::resource('user-status', UserViewStatusIncentiveController::class);
Route::resource('user-apply', IIncentiveController::class)->middleware('auth');
Route::post('user-apply', [IIncentiveController::class, 'store'])->middleware('can:create,I_incentive');

