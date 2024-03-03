<?php

namespace App\Http\Controllers;

use App\Models\Companie;
use App\Models\Job;
use Illuminate\Contracts\View\View;
use Illuminate\Http\Request;

class FrontendController extends Controller
{
    public function homePage(){

        return view('pages.frontend.home');
    }
    public function aboutPage(){
        return view('pages.frontend.about');
    }
    public function jobPage(){
        $data = Job::with('user')->get();
        return view('pages.frontend.job', compact('data'));
    }
    public function singleJob($id){
        $job = Job::with('user')->find($id);
        return view('pages.frontend.single-job', compact('job'));
    }
    public function blogPage(){
        return view('pages.frontend.blog');
    }
    public function contactPage(){
        return view('pages.frontend.contact');
    }
}
