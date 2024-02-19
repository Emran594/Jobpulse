<?php

use App\Http\Controllers\CompanyController;
use App\Http\Controllers\UserController;
use App\Http\Middleware\TokenVerificationMiddleware;
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
    return view('pages.frontend.home');
});
Route::post('/user-registration',[UserController::class,'UserRegistration']);
Route::post('/user-login',[UserController::class,'UserLogin']);
Route::post('/send-otp',[UserController::class,'SendOTPCode']);
Route::post('/verify-otp',[UserController::class,'VerifyOTP']);
Route::get('/Logout',[UserController::class,'UserLogout']);
Route::get('/userLogin',[UserController::class,'LoginPage']);
Route::get('/userRegistration',[UserController::class,'RegistrationPage']);
Route::get('/sendOtp',[UserController::class,'SendOtpPage']);
Route::get('/verifyOtp',[UserController::class,'VerifyOTPPage']);
Route::get('/resetPassword',[UserController::class,'ResetPasswordPage']);
Route::post('/reset-password',[UserController::class,'ResetPassword']);

Route::group(['middleware' => 'login'], function () {
    Route::get('/adminDashboard', [UserController::class,'adminDashboard']);
    Route::get('/companyDashboard', [UserController::class,'companyDashboard']);
    Route::get('/candidatesDashboard', [UserController::class,'candidatesDashboard']);

    Route::group(['middleware' => 'company'], function () {
        Route::get('/company-profile', [CompanyController::class,'companyProfile']);
        Route::post('/updateCompany',[CompanyController::class,'updateCompany']);
    });
});

