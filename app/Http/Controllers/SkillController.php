<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function skillPage(Request $request){
        return view('pages.dashboard.candidate.skill.skill-page');
    }

    public function skillCreate(){
        return view('pages.dashboard.candidate.skill.create-page');
    }
}
