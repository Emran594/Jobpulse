<?php

namespace App\Http\Controllers;

use App\Models\Companie;
use App\Models\User;
use Faker\Provider\ar_EG\Company;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    function companyProfile(Request $request):View{
//$user_id = $request->header('id');
      //  $info = Companie::where('user_id','=',$user_id)->first();
        return view('pages.dashboard.company.profile-page');
    }

    public function updateCompany(Request $request)
    {
        $user_id = $request->header('id');
        if ($request->hasFile('logo')) {
            $logo = $request->file('logo');

            $t = time();
            $file_name = $logo->getClientOriginalName();
            $logo_name = "{$user_id}-{$t}-{$file_name}";
            $logo_url = "uploads/{$logo_name}";

            // Move the uploaded logo file to the public/uploads directory
            $logo->move(public_path('uploads'), $logo_name);
        } else {
            $logo_url = null; // Set logo URL to null if no file was uploaded
        }

        $request->validate([
            'name' => 'required',
            'description' => 'required',
            'industry_type' => 'required',
            'location' => 'required',
            'employee' => 'required',
            'email' => 'required|email',
            'phone' => 'required',
            'website' => 'nullable|url',
            'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        ]);

        $company = Companie::updateOrCreate(
            ['user_id' => $user_id],
            [
                'name' => $request->input('name'),
                'description' => $request->input('description'),
                'industry_type' => $request->input('industry_type'),
                'location' => $request->input('location'),
                'employee' => $request->input('employee'),
                'email' => $request->input('email'),
                'phone' => $request->input('phone'),
                'website' => $request->input('website'),
                'logo' => $logo_url,
            ]
        );

        if ($company) {
            return response()->json(['success' => 'Company profile updated successfully'], 200);
        } else {
            return response()->json(['error' => 'Failed to update company profile'], 500);
        }
    }


}
