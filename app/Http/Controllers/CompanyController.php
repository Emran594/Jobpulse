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
    function savePage():View{
        return view('pages.dashboard.company.company-save');
    }
    function updatePage($id):View{
        $id = $id;
        $data = Companie::where('id','=',$id)->first();
        return view('pages.dashboard.company.company-update',compact('data'));
    }

    public function saveCompany(Request $request)
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

       // dd($request->all());

        // $request->validate([
        //     'name' => 'required',
        //     'description' => 'required',
        //     'industry_type' => 'required',
        //     'location' => 'required',
        //     'employee' => 'required',
        //     'email' => 'required|email',
        //     'phone' => 'required',
        //     'website' => 'nullable|url',
        //     'logo' => 'nullable|image|mimes:jpeg,png,jpg,gif|max:2048',
        // ]);

        $company = Companie::create([
            'user_id' => $user_id,
            'name' => $request->input('name'),
            'description' => $request->input('description'),
            'industry_type' => $request->input('industry_type'),
            'location' => $request->input('location'),
            'employee' => $request->input('employee'),
            'email' => $request->input('email'),
            'phone' => $request->input('phone'),
            'website' => $request->input('website'),
            'logo' => $logo_url,
        ]);

        if ($company) {
            return redirect('/company-profile')->with('success', 'Company profile updated successfully');
        } else {
            return response()->json(['error' => 'Failed to update company profile'], 500);
        }
    }

    public function updateCompany(Request $request, $id)
    {
        $company = Companie::findOrFail($id);

        // Process the logo file if it's present in the request
        if ($request->hasFile('logo')) {
            // Delete the previous logo file from the uploads folder
            if ($company->logo) {
                $previousLogoPath = public_path($company->logo);
                if (file_exists($previousLogoPath)) {
                    unlink($previousLogoPath);
                }
            }

            // Upload and move the new logo file to the public/uploads directory
            $logo = $request->file('logo');
            $t = time();
            $file_name = $logo->getClientOriginalName();
            $logo_name = "{$id}-{$t}-{$file_name}";
            $logo_url = "uploads/{$logo_name}";
            $logo->move(public_path('uploads'), $logo_name);

            // Update the company record with the new logo URL
            $company->logo = $logo_url;
        }

        // Update the other fields of the company record with the new data from the request
        $company->name = $request->input('name');
        $company->industry_type = $request->input('industry_type');
        $company->description = $request->input('description');
        $company->employee = $request->input('employee');
        $company->location = $request->input('location');
        $company->email = $request->input('Email');
        $company->phone = $request->input('phone');
        $company->website = $request->input('website');

        // Save the updated company record
        $company->save();
        return redirect('/company-profile')->with('success', 'Company profile updated successfully');
    }


}
