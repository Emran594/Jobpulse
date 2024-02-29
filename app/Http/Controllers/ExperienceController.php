<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function experiencePage(Request $request){
        return view('pages.dashboard.candidate.experience.experience-page');
    }

    public function experienceCreate(){
        return view('pages.dashboard.candidate.experience.create-page');
    }
}
