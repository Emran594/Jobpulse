<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\CandidateController;
use App\Http\Controllers\CompanyController;
use App\Http\Controllers\EducationController;
use App\Http\Controllers\ExperienceController;
use App\Http\Controllers\FrontendController;
use App\Http\Controllers\JobsController;
use App\Http\Controllers\SkillController;
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

Route::get('/about',[FrontendController::class,'aboutPage']);
Route::get('/jobs',[FrontendController::class,'jobPage']);
Route::get('/blog',[FrontendController::class,'blogPage']);
Route::get('/contact',[FrontendController::class,'contactPage']);
Route::get('/',[FrontendController::class,'homePage']);
Route::get('/single-job/{id}',[FrontendController::class,'singleJob']);



Route::group(['middleware' => 'login'], function () {

    Route::group(['middleware' => 'admin'], function () {
        Route::get('/adminDashboard', [UserController::class,'adminDashboard']);
        Route::get('/admin-company',[AdminController::class,'adminCompany']);
        Route::get('/admin-job',[AdminController::class,'adminJob']);
        Route::get('/admin-employe',[AdminController::class,'adminEmploye']);
        Route::get('/admin-blog',[AdminController::class,'adminBlog']);
        Route::get('/admin-pages',[AdminController::class,'adminPages']);
        Route::get('/admin-plugin',[AdminController::class,'adminPlugin']);
        Route::get('/company-details/{id}',[AdminController::class,'companyDetails']);
        Route::get('/job-details/{id}',[AdminController::class,'jobDetails']);


    });


    Route::group(['middleware' => 'company'], function () {

        Route::get('/companyDashboard', [UserController::class,'companyDashboard']);
        Route::get('/company-profile', [CompanyController::class,'companyProfile']);
        Route::get('/save-page',[CompanyController::class,'savePage']);
        Route::get('/update-company/{id}',[CompanyController::class,'updatePage']);
        Route::post('/save-info',[CompanyController::class,'saveCompany']);
        Route::post('/update-company/{id}',[CompanyController::class,'updateCompany']);


        Route::get('/job',[JobsController::class,'jobsPage']);
        Route::get('/job-page',[JobsController::class,'savePage']);
        Route::post('/save-job',[JobsController::class,'saveJob']);
        Route::get('/jobs-edit/{id}',[JobsController::class,'editJob']);
        Route::post('/job-update/{id}',[JobsController::class,'updateJob']);
        Route::get('/jobs-show/{id}',[JobsController::class,'jobsShow']);
        Route::get('/applicant-list/{id}',[JobsController::class,'applicantList']);
        Route::get('/applicant-cv/{id}/{job_id}',[JobsController::class,'applicantCV']);
        Route::get('/hired-candidate/{candidate_id}/{job_id}',[JobsController::class,'hireCandidate']);
        Route::get('/reject-application/{candidate_id}/{job_id}',[JobsController::class,'rejectApplication']);


    });



    Route::group(['middleware' => 'candidate'], function () {

        Route::get('/candidatesDashboard', [UserController::class,'candidatesDashboard']);
        route::get('/candidate-profile',[CandidateController::class,'candidateProfile']);
        Route::get('/info-page',[CandidateController::class,'candidatePage']);
        Route::post('/info-save',[CandidateController::class,'saveInfo']);
        Route::get('/update-page/{id}',[CandidateController::class,'updatePage']);
        Route::post('/info-update/{id}',[CandidateController::class,'updateCandidate']);


        Route::get('/applied-jobs',[CandidateController::class,'myJobs']);



        Route::get('/apply-job/{id}',[CandidateController::class,'jobApplication']);


        Route::get('/education-page', [EducationController::class,'educationPage']);
        Route::get('/experience-page', [ExperienceController::class,'experiencePage']);
        Route::get('/skills-page', [SkillController::class,'skillPage']);

        Route::get('/education-create', [EducationController::class,'educationCreate']);
        Route::get('/experience-create', [ExperienceController::class,'experienceCreate']);
        Route::get('/skill-create', [SkillController::class,'skillCreate']);

        Route::post('/save-degree',[EducationController::class,'saveEducation']);
        Route::post('/save-experience',[ExperienceController::class,'saveExperience']);
        Route::post('/save-skill',[SkillController::class,'saveSkill']);



        Route::get('/edit-education/{id}',[EducationController::class,'editEduPage']);
        Route::get('/delete-education/{id}',[EducationController::class,'delEducation']);
        Route::post('/update-degree/{id}',[EducationController::class,'updateDegree']);

        Route::get('/edit-experience/{id}',[ExperienceController::class,'editExPage']);
        Route::get('/delete-experience/{id}',[ExperienceController::class,'delExp']);
        Route::post('/update-experience/{id}',[ExperienceController::class,'updateExperience']);

        Route::get('/edit-skill/{id}',[SkillController::class,'editSkill']);
        Route::get('/delete-skill/{id}',[SkillController::class,'delSkill']);
        Route::post('/update-skill/{id}',[SkillController::class,'updateSkill']);

        Route::get('/candidate-cv/{id}',[CandidateController::class,'candidateCv']);


    });




});

