<?php

namespace App\Http\Controllers;

use App\Models\Companie;
use App\Models\Job;
use App\Models\JobApplication;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminCompany(Request $request){
        $search = $request['search'] ?? "";
        if($search != ""){
            $company = Companie::where('name', 'like', "%$search%")->get();
        }else{
        $company = Companie::paginate(2);
        }
        $count_company = Companie::count();
        return view('pages.dashboard.admin.admin-company',compact('company','count_company','search'));
    }
    public function companyDetails($id){
        $info = Companie::where('id','=',$id)->first();
        return view('pages.dashboard.admin.admin-company-details',compact('info'));
    }
    public function jobDetails($id){
        $job = Job::with('user')->find($id);
        return view('pages.frontend.single-job', compact('job'));
    }


    public function adminJob(){
        $search = $request['search'] ?? "";
        if($search != ""){
            $job = Job::where('name', 'like', "%$search%")->get();
        }else{
        $job = Job::paginate(2);
        }
        $count_job = Job::count();
        $vacancy = Job::sum('vacancy');
        $application = JobApplication::count();
        return view('pages.dashboard.admin.admin-job',compact('job','count_job','search','vacancy','application'));
    }
    public function adminEmploye(){
        return view('pages.dashboard.admin.admin-employe');
    }
    public function adminBlog(){
        return view('pages.dashboard.admin.admin-blog');
    }
    public function adminPages(){
        return view('pages.dashboard.admin.admin-pages');
    }
   public function adminPlugin(){
        return view('pages.dashboard.admin.admin-plugin');
    }

}
