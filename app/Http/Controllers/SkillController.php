<?php

namespace App\Http\Controllers;

use App\Models\Skill;
use Illuminate\Http\Request;

class SkillController extends Controller
{
    public function skillPage(Request $request){
        $user_id = $request->header('id');
        $skill = Skill::where('user_id','=',$user_id)->get();
        return view('pages.dashboard.candidate.skill.skill-page',compact('skill'));
    }

    public function skillCreate(){
        return view('pages.dashboard.candidate.skill.create-page');
    }

    public function saveSkill(Request $request){
        $user_id = $request->header('id');
        $skill = Skill::create([
            'user_id' => $user_id,
            'title' => $request->input('title'),
            'value' => $request->input('value')
        ]);

        if ($skill) {
            return redirect('/skills-page')->with('success', 'your Skills Added successfully');
        } else {
            return response()->json(['error' => 'Failed to update company profile'], 500);
        }
    }
}
