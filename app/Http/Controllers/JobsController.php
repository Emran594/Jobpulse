<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Job;
use App\Models\JobApplication;
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
    function editJob(Request $request, $id):View{
        $user_id = $request->header('id');
        $id = $id;
        $job = Job::where('id','=',$id)->where('user_id',$user_id)->first();
        $categories = Categorie::all();
        return view('pages.dashboard.company.job-update',compact('job','categories'));
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


    public function updateJob(Request $request, $id){
        $validatedData = $request->validate([
            'title' => 'required|string',
            'position' => 'required|string',
            'category_id' => 'required|integer',
            'type' => 'required|string',
            'vacancy' => 'required|string',
            'experience' => 'required|string',
            'benefits' => 'required|string',
            'requirements' => 'required|string',
            'salary' => 'required|numeric',
            'tags' => 'required|string',
            'due_date' => 'required|date',
            'is_active' => 'required|boolean',
        ]);

        $job = Job::findOrFail($id);

        $job->update($validatedData);

        return redirect('/job')->with('success', 'Job updated successfully');
    }

    public function jobsShow($id){
        $job = Job::where('id','=',$id)->first();
        $applicationCount = $job->jobApplications()->count();
        return view('pages.dashboard.company.job-details',compact('job','applicationCount'));
    }


}
