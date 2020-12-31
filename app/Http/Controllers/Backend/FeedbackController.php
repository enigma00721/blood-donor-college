<?php

namespace App\Http\Controllers\Backend;

use Illuminate\Http\Request;
use App\Http\Requests\CategoryStoreRequest;
use App\Http\Requests\CategoryUpdateRequest;
use App\Http\Requests\CategoryDestroyRequest;

use App\Http\Controllers\Controller;
use App\Feedback;

class FeedbackController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $feedbacks = Feedback::where('user_id',1)->get();
        $feedbackCount =  $feedbacks->count();
        return view('backend.feedback.index', compact('feedbacks','feedbackCount'));
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {        
       $row = Feedback::findOrFail($id);
       if($row->delete())
          return redirect('/backend/feedback')->with('message', 'The Feedback was deleted Successfully!');
       else
          return redirect('/backend/feedback')->with('message', 'Error! The Feedback was not deleted!');
    }
}
