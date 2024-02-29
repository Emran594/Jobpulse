<?php

use App\Http\Controllers\CandidateController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\JobsController;
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

    Route::group(['middleware' => 'company'], function () {
        
        Route::get('/companyDashboard', [UserController::class,'companyDashboard']);
        Route::get('/company-profile', [CompanyController::class,'companyProfile']);
        Route::get('/save-page',[CompanyController::class,'savePage']);
        Route::get('/update-page/{id}',[CompanyController::class,'updatePage']);
        Route::post('/save-info',[CompanyController::class,'saveCompany']);
        Route::post('/update-company/{id}',[CompanyController::class,'updateCompany']);


        Route::get('/job',[JobsController::class,'jobsPage']);
        Route::get('/job-page',[JobsController::class,'savePage']);
        Route::post('/save-job',[JobsController::class,'saveJob']);
        Route::get('/jobs-edit/{id}',[JobsController::class,'editJob']);
        Route::post('/job-update/{id}',[JobsController::class,'updateJob']);
    });



    Route::group(['middleware' => 'candidate'], function () {
        
        Route::get('/candidatesDashboard', [UserController::class,'candidatesDashboard']);
        route::get('/candidate-profile',[CandidateController::class,'candidateProfile']);
        Route::get('/info-page',[CandidateController::class,'candidatePage']);
        
        Route::post('/info-save',[CandidateController::class,'saveInfo']);


    });




});

