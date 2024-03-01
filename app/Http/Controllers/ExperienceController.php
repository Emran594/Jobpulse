<?php

namespace App\Http\Controllers;

use App\Models\Experience;
use Illuminate\Http\Request;

class ExperienceController extends Controller
{
    public function experiencePage(Request $request){
        $user_id = $request->header('id');
        $experience = Experience::where('user_id','=',$user_id)->get();
        return view('pages.dashboard.candidate.experience.experience-page',compact('experience'));
    }

    public function experienceCreate(){
        return view('pages.dashboard.candidate.experience.create-page');
    }

    public function saveExperience(Request $request){
        $user_id = $request->header('id');
        $experience = Experience::create([
            'user_id' => $user_id,
            'title' => $request->input('title'),
            'from_date' => $request->input('from_date'),
            'to_date' => $request->input('to_date'),
            'description' => $request->input('description'),
            'responsibility' => $request->input('responsibility')
        ]);

        if ($experience) {
            return redirect('/experience-page')->with('success', 'your Experience Added successfully');
        } else {
            return response()->json(['error' => 'Failed to update company profile'], 500);
        }
    }

    public function editExPage(Request $request,$id){
        $user_id = $request->header('id');
        $id = $id;
        $ex_item = Experience::where('user_id','=',$user_id)->where('id','=',$id)->first();
        return view('pages.dashboard.candidate.experience.edit-page',compact('ex_item'));
    }

    
    public function updateExperience(Request $request,$id){
        $user_id = $request->header('id');
        $id = $id;
        $result = Experience::where('user_id','=',$user_id)->where('id','=',$id)->update([
            'title' => $request->input('title'),
            'from_date' => $request->input('from_date'),
            'to_date' => $request->input('to_date'),
            'description' => $request->input('description'),
            'responsibility' => $request->input('responsibility')
        ]);

        if($result){
            return redirect('/experience-page')->with('success', 'your Degree Added successfully');
        } else {
            return response()->json(['error' => 'Failed to update company profile'], 500);
        }
    }


    public function delExp(Request $request,$id){
        $user_id = $request->header('id');
        $id = $id;
        $result = Experience::where('user_id','=',$user_id)->where('id','=',$id)->delete();

        if($result){
            return redirect('/experience-page')->with('success', 'your Degree Added successfully');
        } else {
            return response()->json(['error' => 'Failed to update company profile'], 500);
        }
    }


}
