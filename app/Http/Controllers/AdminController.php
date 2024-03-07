<?php

namespace App\Http\Controllers;

use App\Models\Companie;
use Illuminate\Http\Request;

class AdminController extends Controller
{
    public function adminCompany(){
        $company = Companie::all();
        $count_company = Companie::count();
        return view('pages.dashboard.admin.admin-company',compact('company','count_company'));
    }
    public function companyDetails($id){
        $info = Companie::where('id','=',$id)->first();
        return view('pages.dashboard.admin.admin-company-details',compact('info'));
    }


    public function adminJob(){
        return view('pages.dashboard.admin.admin-job');
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
