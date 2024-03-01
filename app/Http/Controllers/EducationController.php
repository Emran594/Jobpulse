<?php

namespace App\Http\Controllers;

use App\Models\Education;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Redis;

class EducationController extends Controller
{
    public function educationPage(Request $request){
        $user_id = $request->header('id');
        $education = Education::where('user_id','=',$user_id)->get();
        return view('pages.dashboard.candidate.education.education-page',compact('education'));
    }
    public function editEduPage(Request $request,$id){
        $user_id = $request->header('id');
        $id = $id;
        $education_item = Education::where('user_id','=',$user_id)->where('id','=',$id)->first();
        return view('pages.dashboard.candidate.education.edit-page',compact('education_item'));
    }

    public function educationCreate(){
        return view('pages.dashboard.candidate.education.create-page');
    }


    public function saveEducation(Request $request){
        $user_id = $request->header('id');
        $education = Education::create([
            'user_id' => $user_id,
            'title' => $request->input('title'),
            'group' => $request->input('group'),
            'year' => $request->input('year'),
            'result' => $request->input('result')
        ]);

        if ($education) {
            return redirect('/education-page')->with('success', 'your Degree Added successfully');
        } else {
            return response()->json(['error' => 'Failed to update company profile'], 500);
        }
    }

    public function updateDegree(Request $request,$id){
        $user_id = $request->header('id');
        $id = $id;
        $result = Education::where('user_id','=',$user_id)->where('id','=',$id)->update([
            'title' => $request->input('title'),
            'group' => $request->input('group'),
            'year' => $request->input('year'),
            'result' => $request->input('result')
        ]);

        if($result){
            return redirect('/education-page')->with('success', 'your Degree Added successfully');
        } else {
            return response()->json(['error' => 'Failed to update company profile'], 500);
        }
    }

    public function delEducation(Request $request,$id){
        $user_id = $request->header('id');
        $id = $id;
        $result = Education::where('user_id','=',$user_id)->where('id','=',$id)->delete();

        if($result){
            return redirect('/education-page')->with('success', 'your Degree Added successfully');
        } else {
            return response()->json(['error' => 'Failed to update company profile'], 500);
        }
    }
}
