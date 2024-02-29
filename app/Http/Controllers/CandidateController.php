<?php

namespace App\Http\Controllers;

use App\Models\Candidate;
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
}
