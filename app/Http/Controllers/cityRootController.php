<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\City;

class cityRootController extends Controller
{
    //Add method Here
    public function cityadd(Request $request)
    {
    	// only print requested
    	// save this data to table
    	$post = City::create([
    		"City_name"=>$request->City_name
      	]);

    	return redirect('/cityshow');
    }	
    // create show method here
    public function cityshow(Request $request)
    {
    	// get all deta from database
    	$posts = City::all();
    	// simple display all data here
    	return view('cityshow')->with('postdata',$posts);
    	// we can you the data in variable postdata in view
    }



    // add method for delete here
    public function delete(Request $request,$id)
    {
        // delete the row
        City::where('id',$id)->delete();
        return redirect('/cityshow');
    }

    // update post method
    public function cityupdate(Request $request,$id)
    {
        // get the data of this id form db
        $post = City::find($id);

        //dd($post);

        return view('cityupdate')->with('post',$post);
    }


    public function citysaveUpdated(Request $request)
    {
        // update row
        City::where('id',$request->id)->update([

            'City_name'=>$request->City_name
        ]);
        // redirect  to table
        return redirect('/cityshow');
    }
}

