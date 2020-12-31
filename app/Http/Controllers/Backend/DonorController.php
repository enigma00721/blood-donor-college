<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests\DonorPostRequest;
use App\Donor;
use App\BloodGroup;

class DonorController extends BackendController
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {

        $donors = Donor::all();
        // dd($donors);
        return view('backend.donor.index', compact('donors'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $blood_groups = BloodGroup::all();
        return view('backend.donor.create', compact('blood_groups'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(DonorPostRequest $request)
    {
        $row = Donor::create($request->all());
        if($row)
            return redirect()->route('backend.donor.index')->with('message', 'The Donor has been created.');
        else
            return redirect('backend/donor')->with('message', 'The Donor Could Not Be created.');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $donor = Donor::findOrFail($id);
        $blood_groups = BloodGroup::all();
        return view('backend.donor.edit', compact('donor', 'blood_groups'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(DonorPostRequest $request, $id)
    {
        // dd($request->all());
        $donor = Donor::findOrFail($id);
        $row = $donor->update($request->all());

        if($row)
            return redirect('backend/donor')->with('message', 'The Donor Info  has been updated Successfully!');
        else
            return redirect('backend/donor')->with('message', 'The donor info could not be updated.');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $donor = Donor::findOrFail($id);
        if($donor->delete())
            return redirect('backend/donor')->with('message', 'The Donor has been deleted Successfully!');
        else
            return redirect('backend/donor')->with('message', 'The Donor Could Not Be deleted.');
    }

   
}
