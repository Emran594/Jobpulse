<?php

namespace App\Http\Controllers;

use App\Helper\JWTToken;
use App\Mail\OTPMail;
use App\Models\Companie;
use App\Models\Job;
use App\Models\JobApplication;
use App\Models\User;
use Exception;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Redirect;

class UserController extends Controller
{
    function LoginPage():View{
        return view('pages.auth.login-page');
    }

    function RegistrationPage():View{
        return view('pages.auth.registration-page');
    }
    function SendOtpPage():View{
        return view('pages.auth.send-otp-page');
    }
    function VerifyOTPPage():View{
        return view('pages.auth.verify-otp-page');
    }

    function ResetPasswordPage():View{
        return view('pages.auth.reset-pass-page');
    }

    function ProfilePage():View{
        return view('pages.dashboard.profile-page');
    }
    function adminDashboard():View{
        $total_job = Job::count();
        $apply_job = JobApplication::count();
        $total_company = Companie::count();
        return view('pages.dashboard.admin.dashboard-page', [
            'total_job' => $total_job,
            'apply_job' => $apply_job,
            'total_company' => $total_company,
        ]);
    }
        function companyDashboard():View{
        return view('pages.dashboard.company.dashboard-page');
    }
        function candidatesDashboard():View{
        return view('pages.dashboard.candidate.dashboard-page');
    }


    function UserRegistration(Request $request){
        try {
            User::create([
                'name' => $request->input('name'),
                'email' => $request->input('email'),
                'otp' => $request->input('otp'),
                'password' => $request->input('password'),
                'role' => $request->input('role'),
            ]);
            return Redirect::to('/userLogin')->with([
                'status' => 'success',
                'message' => 'User Registration Successfully'
            ]);

        } catch (Exception $e) {
            return response()->json([
                'status' => 'failed',
                'message' => $e
            ],200);

        }
    }


    function UserLogin(Request $request){
        $count=User::where('email','=',$request->input('email'))
             ->where('password','=',$request->input('password'))
             ->select('id','role')->first();

        if($count!==null){
            // User Login-> JWT Token Issue
            $token=JWTToken::CreateToken($request->input('email'),$count->id,$count->role);

            if($count->role == 1){
                return Redirect::to('/adminDashboard')->with([
                    'status' => 'success',
                    'message' => '4 Digit OTP Code has been send to your email !'
                ],200)->cookie('token',$token,time()+60*24*30);
            }
            if($count->role == 2){
                return Redirect::to('/companyDashboard')->with([
                    'status' => 'success',
                    'message' => '4 Digit OTP Code has been send to your email !'
                ],200)->cookie('token',$token,time()+60*24*30);
            }
            if($count->role == 3){
                return Redirect::to('/candidatesDashboard')->with([
                    'status' => 'success',
                    'message' => '4 Digit OTP Code has been send to your email !'
                ],200)->cookie('token',$token,time()+60*24*30);
            }
        }
        else{
            return response()->json([
                'status' => 'failed',
                'message' => 'unauthorized'
            ],200);

        }

     }

     function SendOTPCode(Request $request){

        $email=$request->input('email');
        $otp=rand(1000,9999);
        $count=User::where('email','=',$email)->count();

        if($count==1){
            Mail::to($email)->send(new OTPMail($otp));
            User::where('email','=',$email)->update(['otp'=>$otp]);

            $request->session()->put('email', $email);

            return Redirect::to('/verifyOtp')->with([
                'status' => 'success',
                'message' => '4 Digit OTP Code has been send to your email !'
            ]);
        }
        else{
            return response()->json([
                'status' => 'failed',
                'message' => 'unauthorized'
            ]);
        }
    }



    function VerifyOTP(Request $request){
        $email = $request->session()->get('email');
        $otp=$request->input('otp');
        $count=User::where('email','=',$email)
            ->where('otp','=',$otp)->count();

        if($count==1){
            // Database OTP Update
            User::where('email','=',$email)->update(['otp'=>'0']);

            // Pass Reset Token Issue
            $token=JWTToken::CreateTokenForSetPassword($email);

            return Redirect::to('/resetPassword')->with([
                'status' => 'success',
                'message' => '4 Digit OTP Code has been send to your email !'
            ])->cookie('token',$token,60*24*30);

        }
        else{
            return response()->json([
                'status' => 'failed',
                'message' => 'unauthorized'
            ],200);
        }
    }

    function ResetPassword(Request $request){
        try{
            $email = $request->session()->get('email');
            $password=$request->input('password');
            User::where('email','=',$email)->update(['password'=>$password]);

            return Redirect::to('/userLogin')->with([
                'status' => 'success',
                'message' => 'Password Reset Successfully'
            ]);

        }catch (Exception $exception){
            return response()->json([
                'status' => 'fail',
                'message' => 'Something Went Wrong',
            ],200);
        }
    }

    function UserLogout(){
        return redirect('/')->cookie('token','',-1);
    }
}
