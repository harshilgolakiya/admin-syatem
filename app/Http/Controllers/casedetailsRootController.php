<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\casedetails;//Path of model

class casedetailsRootController extends Controller
{
    //Add method here
    public function casedetailsadd(Request $request)
    {
    	// Only print requested params
    	//save this data to table
    	$post = casedetails::create([
    		"id"=>$request->id,
    		"User_id"=>$request->User_id,
    		"Title"=>$request->title,
    		"Description"=>$request->description,
    		"Lawyer_id"=>$request->Lawyer_id,

    	]);
    	return redirect('/casedetailsshow');
    }
// create show method here
  public function casedetailsshow(Request $request)
  {
  	//get all data form database
  	$posts = casedetails::all();
  	//simple display all data here
  	return view('casedetailsshow')->with('postdata',$posts);
  	//we can you the data in variable postdata in view
  }


  public function casedetailsdelete(Request $request,$id)
  {
    casedetails::where('id',$id)->delete();
    return redirect('/casedetailsshow');
  }

  public function casedetailsupdate(Request $request,$id)
  {
    $post = casedetails::where('id',$id)->first();  
    //
    //dd($post);
    return view('casedetailsupdate')->with('post',$post);
  }
  public function casedetailsUpdatesave(Request $request)
  {
    casedetails::where('id',$request->id)->update([
      'id'=>$request->id,
      'User_id'=>$request->User_id,
      'Title'=>$request->title,
      'Description'=>$request->description,
      'Lawyer_id'=>$request->Lawyer_id

    ]);
    return redirect('/casedetailsshow');
  }
}

