<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Job;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class JobsController extends Controller
{
    function jobsPage(Request $request):View{
        $user_id = $request->header('id');
        $jobs = Job::where('user_id','=',$user_id)->get();
        return view('pages.dashboard.company.job-page',compact('jobs'));
    }
    function savePage(Request $request):View{
        $category = Categorie::all();
        return view('pages.dashboard.company.job-save',compact('category'));
    }

    public function saveJob(Request $request){
        $user_id = $request->header('id');

        $job = Job::create([
            'user_id' => $user_id,
            'title' => $request->input('title'),
            'position' => $request->input('position'),
            'category_id' => $request->input('category_id'),
            'type' => $request->input('type'),
            'vacancy' => $request->input('vacancy'),
            'experience' => $request->input('experience'),
            'due_date' => $request->input('due_date'),
            'benefits' => $request->input('benefits'),
            'requirements' => $request->input('requirements'),
            'salary' => $request->input('salary'),
            'tags' => $request->input('tags'),
            'is_active' => $request->input('is_active'),
        ]);

        if ($job) {
            return redirect('/job')->with('success', 'Company profile updated successfully');
        } else {
            return response()->json(['error' => 'Failed to update company profile'], 500);
        }
    }


}
