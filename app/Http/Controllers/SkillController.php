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

    public function editSkill(Request $request,$id){
        $user_id = $request->header('id');
        $id = $id;
        $skill = Skill::where('user_id','=',$user_id)->where('id','=',$id)->first();
        return view('pages.dashboard.candidate.skill.edit-page',compact('skill'));
    }

    
    public function updateSkill(Request $request,$id){
        $user_id = $request->header('id');
        $id = $id;
        $result = Skill::where('user_id','=',$user_id)->where('id','=',$id)->update([
            'title' => $request->input('title'),
            'value' => $request->input('value')
        ]);

        if($result){
            return redirect('/skills-page')->with('success', 'your Degree Added successfully');
        } else {
            return response()->json(['error' => 'Failed to update company profile'], 500);
        }
    }


    public function delSkill(Request $request,$id){
        $user_id = $request->header('id');
        $id = $id;
        $result = Skill::where('user_id','=',$user_id)->where('id','=',$id)->delete();

        if($result){
            return redirect('/skills-page')->with('success', 'your Degree Added successfully');
        } else {
            return response()->json(['error' => 'Failed to update company profile'], 500);
        }
    }
}
