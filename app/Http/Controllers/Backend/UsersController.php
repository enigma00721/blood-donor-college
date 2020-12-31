<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests\UserUpdateRequest;
use App\Http\Requests\DonorPostRequest;
use App\Http\Controllers\Controller;
use App\User;
use App\BloodGroup;
use App\Donor;
use App\Feedback;

class UsersController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $user = \Auth::user();

        return view('backend.users.index', compact('user'));
    }

    public function handleRequest($request)
    {

        $data = $request->all();
        $data['password'] = bcrypt($request->password);

        return $data;
        
    }

  

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(UserUpdateRequest $request, $id)
    {

        $data = $this->handleRequest($request);

        User::findOrFail($id)->update($data);

        return redirect('/backend/users')->with('message', 'The user was updated!');
    }


    // simple user/donor methods

    public function profile()
    {
        $blood_groups = BloodGroup::all();
        $user = \Auth::user();
        $donor = Donor::where('email',$user->email)->first();
        // dd($donor);
        if($donor){
            return view('backend.profile.index',compact('donor','blood_groups'));
        }else{
            return redirect('donor/register')->with('message', 'Register As Donor To view Dashboard');
        }
    }

    public function profileUpdate(DonorPostRequest $request, $id)
    {
        // dd($request->all());
        $donor = Donor::findOrFail($id);
        $row = $donor->update($request->all());

        if($row)
            return redirect('backend/profile')->with('message', 'Your Profile has been updated Successfully!');
        else
            return redirect('backend/profile')->with('message', 'Your profile could not be updated.');
    }

    public function messages()
    {
        $user = \Auth::user();
        // dd($user);
        $feedbacks = $user->feedbacks()->paginate(4);
        // dd($feedbacks);
        return view('backend.message.index',compact('feedbacks'));
    }

}
