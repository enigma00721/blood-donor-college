<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Http\Requests\StoreDonorPost;

use App\Feedback;
use App\Donor;
use App\User;
use Auth;


class FrontController extends Controller
{
	protected $view_folder = "frontend.";

    public function help()
    {
    	return view($this->view_folder.'help');
    }
    public function whyus()
    {
    	return view($this->view_folder.'whyus');
    }
    public function findBlood()
    {
        $rows = Donor::all();
    	return view($this->view_folder.'find_blood',compact('rows'));
    }

    public function donorRegister()
    {
        $user_email = Auth::user()->email;
    	return view($this->view_folder.'donor_register',compact('user_email'));
    }
   
    public function donorSubmit(StoreDonorPost $request)
    {
        dd($request->all());
        $request->request->add(['email' => Auth::user()->email]); //add request
        $row = Donor::create($request->all());
        if($row->save())
            return redirect()->back()->with('success_message','Donor Created Successfully!');
        else
            return redirect()->back()->with('error_message','Donor Could Not Be Created!');
    }

    public function donorProfile($id)
    {
        $donor = Donor::findOrFail($id);
        $user = User::where('email',$donor->email)->select('id')->first();
        if($user){
            $user_id = $user->id;
            return view($this->view_folder.'single_donor',compact('donor','user_id'));
        }else{
            return redirect()->back()->with('error_message','Donor Could Not Be Found!');
        }
    }

    public function feedbackSubmit(Request $request)
    {
        $row = Feedback::create($request->all());
        if($row)
            return redirect()->back()->with('success_message','Your Feedback Has Been Sent Successfully!');
        else
            return redirect()->back()->with('error_message','Sorry! Your Feedback Count Not Be Sent!');
    }

}
