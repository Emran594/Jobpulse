<?php

namespace App\Http\Controllers;

use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class CompanyController extends Controller
{
    function companyProfile():View{
        return view('pages.dashboard.company.profile-page');
    }
}
