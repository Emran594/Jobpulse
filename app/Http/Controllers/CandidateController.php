<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
use App\Models\Job;
use App\Models\JobApplication;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CandidateController extends Controller
{
    public function candidateProfile(Request $request):View{
        $user_id = $request->header('id');
        $info = Candidate::where('user_id','=',$user_id)->first();
        return view('pages.dashboard.candidate.profile.profile-page',compact('info'));
    }

    public function candidatePage():View{
        return view('pages.dashboard.candidate.profile.info-page');
    }

    public function updatePage(Request $request,$id){
        $data = Candidate::where('id','=',$id)->first();
        return view('pages.dashboard.candidate.profile.update-page',compact('data'));
    }

    public function saveInfo(Request $request){
        $user_id = $request->header('id');
        if ($request->hasFile('image')) {
            $logo = $request->file('image');

            $t = time();
            $file_name = $logo->getClientOriginalName();
            $logo_name = "{$user_id}-{$t}-{$file_name}";
            $logo_url = "uploads/{$logo_name}";

            // Move the uploaded logo file to the public/uploads directory
            $logo->move(public_path('uploads'), $logo_name);
        } else {
            $logo_url = null; // Set logo URL to null if no file was uploaded
        }
        $candidate = Candidate::create([
            'user_id' => $user_id,
            'first_name' => $request->input('first_name'),
            'last_name' => $request->input('last_name'),
            'address' => $request->input('address'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'image' => $logo_url,
        ]);

        if ($candidate) {
            return redirect('/candidate-profile')->with('success', 'Candidate profile updated successfully');
        } else {
            return response()->json(['error' => 'Failed to update company profile'], 500);
        }


    }

    public function updateCandidate(Request $request, $id)
    {
        $candidate = Candidate::findOrFail($id);

        if ($request->hasFile('image')) {
            if ($candidate->image) {
                $previousImagePath = public_path($candidate->image);
                if (file_exists($previousImagePath)) {
                    unlink($previousImagePath);
                }
            }

            // Upload and move the new logo file to the public/uploads directory
            $image = $request->file('image');
            $t = time();
            $file_name = $image->getClientOriginalName();
            $image_name = "{$id}-{$t}-{$file_name}";
            $image_url = "uploads/{$image_name}";
            $image->move(public_path('uploads'), $image_name);

            // Update the company record with the new logo URL
            $candidate->image = $image_url;
        }

        // Update the other fields of the company record with the new data from the request
        $candidate->first_name = $request->input('first_name');
        $candidate->last_name = $request->input('last_name');
        $candidate->address = $request->input('address');
        $candidate->email = $request->input('email');
        $candidate->phone = $request->input('phone');

        // Save the updated company record
        $candidate->save();
        return redirect('/candidate-profile')->with('success', 'Company profile updated successfully');
    }


    public function jobApplication(Request $request, $id)
    {
        $candidate_id = $request->header('id');
        $job_id = $id;

        $existingApplication = JobApplication::where('job_id', $job_id)
            ->where('candidate_id', $candidate_id)
            ->exists();
        if ($existingApplication) {
            return redirect('/jobs')->with('error', 'You Already Apply this Position');
        }

        $result = JobApplication::create([
            'job_id' => $job_id,
            'candidate_id' => $candidate_id
        ]);

        if($result){
            return redirect('/jobs')->with('success', 'You Successfully Apply this job');
        }


    }

    public function myJobs(Request $request){
        $id = $request->header('id');
        $jobs = JobApplication::where('candidate_id','=',$id)->with('job')->get();
        return view('pages.dashboard.candidate.job-page',compact('jobs'));
    }

}
