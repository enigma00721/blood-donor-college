<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests\BloodGroupStoreRequest;
use App\Http\Requests\BloodGroupUpdateRequest;
use App\Http\Controllers\Controller;
use App\BloodGroup;

class BloodGroupController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $bloodgroups = BloodGroup::all();
        // dd($bloodGroup);
        $bloodgroupCount = BloodGroup::count();

        return view('backend.bloodgroup.index', compact('bloodgroups', 'bloodgroupCount'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        $bloodgroup = new BloodGroup();
        return view('backend.bloodgroup.create', compact('bloodgroup'));
    }


    public function handleRequest($request)
    {

        $data = $request->all();
        return $data;
        
    }    

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(BloodGroupStoreRequest $request)
    {

        $data = $this->handleRequest($request);
        BloodGroup::create($data);

        return redirect('/backend/bloodgroup')->with('message', 'The new blood group is created!');
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
        $bloodgroup = BloodGroup::findOrFail($id);

        return view('backend.bloodgroup.edit', compact('bloodgroup'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(BloodGroupUpdateRequest $request, $id)
    {
        $data = $this->handleRequest($request);
        BloodGroup::findOrFail($id)->update($data);

        return redirect('/backend/bloodgroup')->with('message', 'The bloodgroup was updated!');
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {        
        $bloodgroup = BloodGroup::findOrFail($id);
        $bloodgroup->delete();

        return redirect('/backend/bloodgroup')->with('message', 'The bloodgroup was deleted!');

    }
}
