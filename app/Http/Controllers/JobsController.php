<?php

namespace App\Http\Controllers;

use App\Mail\HiredNotification;
use App\Models\ApplicationStatus;
use App\Models\Candidate;
use App\Models\Categorie;
use App\Models\Education;
use App\Models\Experience;
use App\Models\Job;
use App\Models\JobApplication;
use App\Models\Skill;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use Swift_TransportException;

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

    public function applicantList(Request $request, $id) {
        $search = $request->input('search', '');

        $query = JobApplication::query()
            ->where('job_id', $id)
            ->with(['candidate', 'job']);

        if ($search) {
            $query->whereHas('candidate', function ($query) use ($search) {
                $query->where('first_name', 'like', "%$search%");
            });
        }

        // Paginate the results
        $applicants = $query->paginate(5);
        $jobTitle = $applicants->first()->job->title;

        $count_applicants = $applicants->total();

        return view('pages.dashboard.company.applicant-list', compact('applicants', 'count_applicants', 'search','jobTitle'));
    }

    public function applicantCV($id,$job_id){
        $job_id = $job_id;
        $candidate = Candidate::with('skills', 'experiences', 'educations')->findOrFail($id);
        return view('pages.dashboard.company.applicant-cv', compact('candidate','job_id'));
    }

    public function hireCandidate($candidate_id, $job_id)
    {
        $candidate = Candidate::find($candidate_id);

            ApplicationStatus::create([
                'job_application_id' => $job_id,
                'candidate_id' => $candidate_id,
                'status' => 'hired',
            ]);

        try{

        $candidateEmail = $candidate->email;
        $candidateName = $candidate->first_name;


        Mail::to($candidateEmail)->send(new HiredNotification($candidateName));
        return redirect()->back()->with('success', 'Candidate hired successfully!');

        } catch (Swift_TransportException $exception){
            $errorMessage = $exception->getMessage();
            if (strpos($errorMessage, 'Email does not comply with addr-spec') !== false) {
                return redirect()->back()->with('error', 'The email address is not valid.');
            }

            // Rethrow the exception if it's not the expected one
            throw $exception;
        }


    }
    public function rejectApplication($candidate_id, $job_id)
    {

            ApplicationStatus::create([
                'job_application_id' => $job_id,
                'candidate_id' => $candidate_id,
                'status' => 'rejected',
            ]);

    }

}
