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
}
