<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EducationController extends Controller
{
    public function educationPage(Request $request){
        return view('pages.dashboard.candidate.education.education-page');
    }

    public function educationCreate(){
        return view('pages.dashboard.candidate.education.create-page');
    }
}
