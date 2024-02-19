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
        $user_id = $request->header('id');
        $info = Companie::where('user_id','=',$user_id)->first();
        return view('pages.dashboard.company.profile-page',compact('info'));
    }

    public function updateCompany(Request $request)
    {
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

        // Get the authenticated user's ID
        $user_id = $request->header('id');

        // Check if the company data exists for the user
        $company = Companie::where('user_id', $user_id)->first();

        // If company data does not exist, create a new company instance
        if (!$company) {
            $company = new Companie();
            $company->user_id = $user_id;
        }

        // Update company data
        $company->name = $request->input('name');
        $company->description = $request->input('description');
        $company->industry_type = $request->input('industry_type');
        $company->location = $request->input('location');
        $company->employee = $request->input('employee');
        $company->email = $request->input('email');
        $company->phone = $request->input('phone');
        $company->website = $request->input('website');

        // Handle logo upload
        if ($request->hasFile('logo')) {
            $logoPath = $request->file('logo')->store('logos', 'public');
            $company->logo = $logoPath;
        }

        $company->save();

        return redirect()->back()->with('success', 'Company profile updated successfully.');
    }


}
