<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Feedback;
use App\BloodGroup;
use App\Donor;
use App\User;

class HomeController extends BackendController
{
    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    	$feedbacks = Feedback::latest()->take(3)->get();
    	
    	$count = [];
    	$count['bloodgroup'] = BloodGroup::count();
    	$count['feedback'] = Feedback::count();
    	$count['donor'] = Donor::count();
    	$count['user'] = User::count();

        return view('backend.home',compact('feedbacks','count'));
    }

   
}
